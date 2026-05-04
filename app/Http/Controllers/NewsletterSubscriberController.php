<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterBroadcast;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class NewsletterSubscriberController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'source' => ['nullable', 'string', 'max:100'],
        ]);

        $subscriber = NewsletterSubscriber::firstOrNew([
            'email' => strtolower($data['email']),
        ]);

        $wasSubscribed = $subscriber->exists && $subscriber->status === 'subscribed';

        $subscriber->fill([
            'source' => $data['source'] ?? $subscriber->source,
            'status' => 'subscribed',
            'subscribed_at' => $subscriber->subscribed_at ?: now(),
        ]);

        $subscriber->save();

        return back()->with(
            'newsletter_success',
            $wasSubscribed
                ? 'You are already subscribed to Iloge insights.'
                : 'You are subscribed. Welcome to Iloge insights.'
        );
    }

    public function adminStore(Request $request): RedirectResponse
    {
        NewsletterSubscriber::create($this->validatedAdminData($request));

        return redirect()
            ->route('dashboard.subscribers')
            ->with('success', 'Subscriber created.');
    }

    public function update(Request $request, NewsletterSubscriber $newsletterSubscriber): RedirectResponse
    {
        $data = $this->validatedAdminData($request, $newsletterSubscriber);

        if ($data['status'] === 'subscribed' && ! $newsletterSubscriber->subscribed_at) {
            $data['subscribed_at'] = now();
        }

        $newsletterSubscriber->update($data);

        return redirect()
            ->route('dashboard.subscribers')
            ->with('success', 'Subscriber updated.');
    }

    public function destroy(NewsletterSubscriber $newsletterSubscriber): RedirectResponse
    {
        $newsletterSubscriber->delete();

        return redirect()
            ->route('dashboard.subscribers')
            ->with('success', 'Subscriber deleted.');
    }

    public function send(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'subject' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string', 'max:10000'],
            'audience' => ['required', Rule::in(['subscribed', 'all', 'source'])],
            'source' => ['nullable', 'required_if:audience,source', 'string', 'max:100'],
        ]);

        $query = NewsletterSubscriber::query()
            ->when($data['audience'] === 'subscribed', fn ($query) => $query->where('status', 'subscribed'))
            ->when($data['audience'] === 'source', fn ($query) => $query->where('status', 'subscribed')->where('source', $data['source']));

        $sentCount = 0;

        $query->orderBy('id')->chunk(50, function ($subscribers) use ($data, &$sentCount) {
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterBroadcast(
                    subjectLine: $data['subject'],
                    bodyText: $data['body'],
                ));

                $subscriber->forceFill(['last_emailed_at' => now()])->save();
                $sentCount++;
            }
        });

        return redirect()
            ->route('dashboard.subscribers')
            ->with('success', "Broadcast sent to {$sentCount} subscriber(s).");
    }

    private function validatedAdminData(Request $request, ?NewsletterSubscriber $newsletterSubscriber = null): array
    {
        $data = $request->validate([
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('newsletter_subscribers', 'email')->ignore($newsletterSubscriber),
            ],
            'source' => ['nullable', 'string', 'max:100'],
            'status' => ['required', Rule::in(['subscribed', 'paused', 'unsubscribed'])],
            'notes' => ['nullable', 'string', 'max:2000'],
        ]);

        $data['email'] = strtolower($data['email']);
        $data['subscribed_at'] = $data['status'] === 'subscribed'
            ? ($newsletterSubscriber?->subscribed_at ?: now())
            : $newsletterSubscriber?->subscribed_at;

        return $data;
    }
}

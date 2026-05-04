# ILOGE Website Tutorial Manual

This manual explains how to navigate the ILOGE website from the public landing page through the admin dashboard. It is written for site owners, editors, and administrators who need to understand the full user journey.

## 1. Starting From The Landing Page

Open the website homepage:

```text
/
```

The landing page is the main public entrance to ILOGE. From here, visitors can explore the brand, content, shop, podcast, and contact areas.

The main navigation includes:

- Home
- About
- Press Room
- Diary of Iloge
- Shop
- Contact

On smaller screens, the navigation is available through the mobile menu icon.

## 2. Public Website Navigation

### Home

Route:

```text
/
```

Use this page as the main introduction to ILOGE. Visitors can learn the brand positioning and move into the main sections of the site.

### About Pages

The About menu leads to:

```text
/speaker
/investor
/leader
```

Use these pages to explore the different professional identities and public-facing profiles of ILOGE.

### Press Room

Route:

```text
/pressroom
```

This page is for media positioning, announcements, and press-related presentation.

### Diary of Iloge

The Diary menu includes:

```text
/podcast
/blog
/team
/gallery
/testimonials
```

Use this section for editorial, multimedia, people, and proof-of-impact content.

### Blog

Route:

```text
/blog
```

Visitors can read published blog posts here. Posts created and published from the dashboard automatically appear on this page.

Opening a single blog article uses:

```text
/blog/{blog-slug}
```

At the end of blog pages, visitors can subscribe to the newsletter.

### Podcast

Route:

```text
/podcast
```

Published podcast episodes appear here. Episodes are created from the dashboard using YouTube links. Visitors can open episodes on YouTube from the episode cards.

The podcast newsletter section allows visitors to subscribe for updates.

### Gallery

Route:

```text
/gallery
```

Published gallery assets from the dashboard appear here. Use it for images, visual assets, press visuals, and brand media.

### Shop

Route:

```text
/shop
```

The shop displays published books and materials from the dashboard.

Visitors can:

- Add products to cart
- Mark products as favorites
- View favorites
- Update cart quantities
- Remove cart items
- Checkout by entering name, email, phone, and delivery address

Checkout creates an order and customer record in the system.

### Contact

Route:

```text
/contact
```

Visitors use this page to reach out or review contact details.

## 3. Newsletter Subscription

Newsletter forms are currently available on:

```text
/podcast
/blog
/blog/{blog-slug}
```

When a visitor submits their email:

- The email is validated.
- The subscriber is saved.
- Duplicate subscriptions are handled safely.
- The source page is recorded, such as `podcast`, `blog`, or `blog_article`.

Newsletter subscribers can be managed from the dashboard.

## 4. Accessing The Dashboard

Go to:

```text
/login
```

Enter the administrator email and password.

After login, the app redirects to:

```text
/dashboard
```

The dashboard is protected. Only authenticated and verified users can access dashboard management pages.

## 5. Dashboard Overview

Route:

```text
/dashboard
```

The dashboard overview is the command center. It gives a high-level view of site activity and provides access to management modules through the left sidebar.

The dashboard sidebar includes:

- Overview
- Blog Management
- Gallery Updates
- Podcast Curation
- Shop Management
- Customers
- Subscribers
- Profile

## 6. Blog Management

Route:

```text
/dashboard/blog
```

Use this page to manage blog posts.

Admins can:

- Create blog posts
- Edit blog posts
- Delete blog posts
- Save posts as draft
- Publish posts
- Set category
- Set read time
- Add image URL
- Add excerpt and full content

Published posts appear on:

```text
/blog
```

Draft posts remain hidden from the public blog page.

## 7. Gallery Management

Route:

```text
/dashboard/gallery
```

Use this page to manage gallery and media assets.

Admins can:

- Add gallery assets
- Edit gallery assets
- Delete gallery assets
- Set category
- Set asset type
- Add image URL
- Add description
- Mark assets as featured

Gallery assets appear on:

```text
/gallery
```

## 8. Podcast Curation

Route:

```text
/dashboard/podcast
```

Use this page to manage podcast episodes.

Admins can:

- Create podcast episodes
- Edit podcast episodes
- Delete podcast episodes
- Paste a YouTube URL
- Set title
- Set category
- Set description
- Set episode number
- Set duration
- Add an optional thumbnail override
- Publish or unpublish episodes
- Mark an episode as featured

Supported YouTube URL formats include:

```text
https://www.youtube.com/watch?v=VIDEO_ID
https://youtu.be/VIDEO_ID
https://www.youtube.com/embed/VIDEO_ID
https://www.youtube.com/shorts/VIDEO_ID
https://www.youtube.com/live/VIDEO_ID
```

Published episodes appear on:

```text
/podcast
```

Featured episodes can appear prominently on the public podcast page.

## 9. Shop Management

Route:

```text
/dashboard/shop
```

Use this page to manage books, digital products, and materials.

Admins can:

- Add shop items
- Edit shop items
- Delete shop items
- Set product title
- Set category
- Set SKU
- Set price
- Set stock quantity
- Add image URL
- Add description
- Publish or unpublish products
- Mark products as featured

Published products appear on:

```text
/shop
```

When visitors checkout, product stock is reduced automatically.

## 10. Customer Management

Route:

```text
/dashboard/customers
```

Use this page to manage customers created manually or captured during checkout.

Admins can:

- Add customers
- Edit customers
- Delete customers
- Set name
- Set email
- Set phone
- Set address
- Set status
- Add internal notes

Customer statuses include:

- Active
- VIP
- Watchlist
- Inactive

The customer page also shows order count and total spend when available.

## 11. Subscriber Management

Route:

```text
/dashboard/subscribers
```

Use this page to manage newsletter subscribers and send emails.

Admins can:

- View all subscribers
- Add subscribers manually
- Edit subscriber records
- Delete subscribers
- Set source
- Set status
- Add internal notes
- See subscribed date
- See last emailed date

Subscriber statuses include:

- Subscribed
- Paused
- Unsubscribed

## 12. Sending Newsletter Emails

Go to:

```text
/dashboard/subscribers
```

Use the Send Broadcast form.

Steps:

1. Choose the audience:
   - Active subscribers
   - Active subscribers from a specific source
   - All records
2. Choose a source if using source filtering.
3. Enter the email subject.
4. Write the message body.
5. Click Send Email.

After sending:

- Each recipient receives the broadcast using Laravel Mail.
- The subscriber's `last_emailed_at` timestamp is updated.

Important mail note:

The current local `.env` uses:

```text
MAIL_MAILER=log
```

This means emails are written to Laravel logs locally instead of being delivered to inboxes. To send real emails, configure an actual mail provider such as SMTP, Resend, Mailgun, Postmark, or SES.

## 13. Profile Management

Route:

```text
/profile
```

Use this page to manage the logged-in administrator profile.

Admins can update:

- Name
- Email
- Password

Depending on the authentication setup, email verification may also be required.

## 14. Recommended Admin Workflow

For publishing content:

1. Log in at `/login`.
2. Go to the relevant dashboard section.
3. Create or edit the content.
4. Mark it as published if it should appear publicly.
5. Visit the public page to confirm it displays correctly.

For shop operations:

1. Add products in `/dashboard/shop`.
2. Confirm they appear on `/shop`.
3. Customers checkout from `/shop`.
4. Review customers in `/dashboard/customers`.

For newsletter operations:

1. Let visitors subscribe from public newsletter forms.
2. Review subscribers in `/dashboard/subscribers`.
3. Send broadcast emails from the subscriber dashboard.

## 15. Troubleshooting

If public content does not appear:

- Confirm the item is marked as published.
- Confirm required fields are filled.
- Refresh the public page.

If emails do not arrive:

- Check `.env` mail settings.
- If `MAIL_MAILER=log`, inspect Laravel logs.
- Configure a real mail provider for live delivery.

If dashboard pages are inaccessible:

- Confirm the user is logged in.
- Confirm the account is verified if verification is enabled.
- Visit `/login` again and sign in.

If images or YouTube thumbnails do not display:

- Confirm the URL is publicly reachable.
- Confirm the YouTube link contains a valid video ID.
- For images, use a full `https://...` URL.


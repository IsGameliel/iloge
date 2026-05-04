<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $subjectLine }}</title>
</head>
<body style="margin:0;background:#131313;color:#e5e2e1;font-family:Inter,Arial,sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#131313;padding:32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:680px;background:#1c1b1b;border:1px solid #4d4635;border-radius:12px;overflow:hidden;">
                    <tr>
                        <td style="padding:28px 32px;border-bottom:1px solid #4d4635;">
                            <div style="font-size:22px;font-weight:800;letter-spacing:-0.04em;color:#f1cc19;">ILOGE</div>
                            <div style="margin-top:4px;font-size:10px;letter-spacing:0.2em;text-transform:uppercase;color:#d0c5af;">Sovereign Insights</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;color:#e5e2e1;font-size:16px;line-height:1.7;">
                            {!! nl2br(e($bodyText)) !!}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px 32px;border-top:1px solid #4d4635;color:#99907c;font-size:12px;line-height:1.6;">
                            You are receiving this because you subscribed to Iloge insights.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

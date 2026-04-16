<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f9; font-family:Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" style="background:#ffffff; border-radius:10px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#059669; color:#fff; padding:20px; text-align:center;">
                            <h2 style="margin:0;">Thank You!</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; text-align:center;">
                            <h3 style="margin-bottom:10px;">
                                Hi {{ $data->full_name }},
                            </h3>

                            <p style="color:#555; font-size:15px;">
                                We’ve received your message and our team will get back to you shortly.
                            </p>

                            <div style="margin-top:25px; background:#f1f5f9; padding:15px; border-radius:8px; text-align:left;">
                                <p><strong>Your Message:</strong></p>
                                <p>{{ $data->message }}</p>
                            </div>

                            <p style="margin-top:25px; color:#888; font-size:14px;">
                                If your query is urgent, feel free to reply to this email.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f9fafb; text-align:center; padding:15px; font-size:12px; color:#666;">
                            © {{ date('Y') }} Your Company. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
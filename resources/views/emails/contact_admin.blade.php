<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f9; font-family:Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" style="background:#ffffff; border-radius:10px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#1e40af; color:#fff; padding:20px; text-align:center;">
                            <h2 style="margin:0;">New Contact Message</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px;">
                            <p><strong>Name:</strong> {{ $data->full_name }}</p>
                            <p><strong>Email:</strong> {{ $data->email }}</p>
                            <p><strong>Subject:</strong> {{ $data->subject }}</p>

                            <div style="margin-top:20px;">
                                <p><strong>Message:</strong></p>
                                <div style="background:#f1f5f9; padding:15px; border-radius:8px;">
                                    {{ $data->message }}
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f9fafb; text-align:center; padding:15px; font-size:12px; color:#666;">
                            This message was sent from your website contact form.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
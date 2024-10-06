<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 24px; color: #333333; text-align: center;">New Contact Message from {{ $data['name'] }}</h1>
        <p style="font-size: 16px; color: #555555;"><strong>Email:</strong> {{ $data['email'] }}</p>
        <p style="font-size: 16px; color: #555555;"><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <p style="font-size: 16px; color: #555555;"><strong>Message:</strong></p>
        <p style="font-size: 16px; color: #555555; line-height: 1.5;">{{ $data['message'] }}</p>
        <hr style="border: none; border-top: 1px solid #eeeeee; margin: 20px 0;">
        <p style="font-size: 14px; color: #999999; text-align: center;">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</body>
</html>

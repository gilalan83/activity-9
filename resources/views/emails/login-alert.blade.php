<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background-color: white; padding: 30px; border-radius: 10px; max-width: 600px; margin: auto; }
        .header { background-color: #c0392b; color: white; padding: 20px; border-radius: 8px; text-align: center; }
        .alert { background-color: #ffeeba; border: 1px solid #ffc107; padding: 15px; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔐 Login Alert</h1>
        </div>
        <p>Hi <strong>{{ $user->name }}</strong>,</p>
        <p>A new login was detected on your account.</p>
        <div class="alert">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Time:</strong> {{ now()->format('Y-m-d H:i:s') }}</p>
        </div>
        <p>If this was not you, please change your password immediately.</p>
        <p style="margin-top: 30px; color: #999; font-size: 12px;">This is an automated message, please do not reply.</p>
    </div>
</body>
</html>
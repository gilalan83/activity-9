<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background-color: white; padding: 30px; border-radius: 10px; max-width: 600px; margin: auto; }
        .header { background-color: #1a1a2e; color: white; padding: 20px; border-radius: 8px; text-align: center; }
        .btn { background-color: #4CAF50; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>⚡ Welcome to Activity 9!</h1>
        </div>
        <p>Hi <strong>{{ $user->name }}</strong>,</p>
        <p>Your account has been successfully created. You can now access the dashboard.</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p>Thank you for registering!</p>
        <a href="{{ url('/dashboard') }}" class="btn">Go to Dashboard</a>
        <p style="margin-top: 30px; color: #999; font-size: 12px;">This is an automated message, please do not reply.</p>
    </div>
</body>
</html>
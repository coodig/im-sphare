<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: #4f46e5;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .body {
            padding: 30px;
            text-align: center;
            color: #333333;
        }

        .body h2 {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #4f46e5;
            color: #ffffff !important;
            text-decoration: none;
            font-size: 16px;
            border-radius: 6px;
        }

        .btn:hover {
            background: #4338ca;
        }

        .footer {
            font-size: 13px;
            color: #6b7280;
            padding: 15px;
            text-align: center;
            background: #f9fafb;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Password Reset Request</h1>
        </div>
        <div class="body">
            <img src="{{asset('asset/img/hello.svg')}}" alt="">
            <h2>Hello, {{ ucwords($user->username) ?? 'User' }}</h2>
            <p>You requested to reset your password.</p>
            <p>Please click the button below to reset it:</p>
            <a href="{{ $resetPasswordLink }}" class="btn">Reset Password</a>
            <p>If you didn’t request this, you can safely ignore this email.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} IMSphare. All rights reserved.</p>
        </div>
    </div>
</body>

</html>

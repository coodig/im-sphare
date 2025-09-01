<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f7;
            font-family: Arial, sans-serif;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f4f4f7;
            padding: 20px 0;
        }
        .email-content {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .email-header {
            background: #4f46e5;
            color: #ffffff;
            text-align: center;
            padding: 30px 20px;
        }
        .email-header h1 {
            margin: 0;
            font-size: 26px;
        }
        .email-body {
            padding: 30px 20px;
            text-align: center;
            color: #333333;
        }
        .email-body h2 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #111827;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
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
        .email-footer {
            text-align: center;
            font-size: 14px;
            color: #6b7280;
            padding: 20px;
        }
        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-body h2 {
                font-size: 20px;
            }
            .email-body p {
                font-size: 14px;
            }
            .btn {
                font-size: 14px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-content">
            <div class="email-header">
                <h1>👋 Welcome to Our Platform!</h1>
            </div>
            <div class="email-body">
                <img src="{{asset('asset/img/hello.svg')}}" alt="">
                <h2>Hello, {{ ucwords($user->username) ?? 'User' }}</h2>
                <p>Thank you for registering with us. We’re excited to have you on board!</p>
                <p>Start your journey and explore amazing features right away.</p>
                <a href="https://imsphare.oranbyte.com/" class="btn">Visit IMSPHARE</a>
            </div>
            <div class="email-footer">
                <p>&copy; {{ date('Y') }} IMSphare. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>

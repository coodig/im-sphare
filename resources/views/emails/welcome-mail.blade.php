<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Hello, {{ $user->username ?? ''}} 👋</h1>
    <p>Thank you for registering with us. We’re excited to have you on board!</p>
    <a href="https://leetcode.com/">visit leetcode</a>
</body>
</html>

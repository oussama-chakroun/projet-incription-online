<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPF Inscription Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        span {
            color: #5cb85c;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Dear {{ $recipientName }},</p>
        <p>Your inscription at UPF has been <span>successfully validated</span>. Here are your details:</p>
        <p><strong>Email:</strong> {{ $recipientEmail }}</p>
        <p><strong>Password:</strong> {{ $password }}</p>
        <p>Please keep your password secure and do not share it with others.</p>
        <p>Best regards,</p>
        <p>UPF Administration</p>
    </div>
</body>
</html>

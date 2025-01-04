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
            color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Dear {{ $recipientName }},</p>
        <p>Thank you for your interest in UPF. We regret to inform you that your inscription has <span>not been accepted</span>.</p>
        <p>We appreciate your interest and encourage you to consider future opportunities with us.</p>
        <p>Best wishes,</p>
        <p>UPF Administration</p>
    </div>
</body>
</html>

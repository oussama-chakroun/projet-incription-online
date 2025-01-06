<!-- resources/views/emails/convocation-details.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
        }
        .row {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .value {
            margin-bottom: 15px;
        }
        .badge {
            padding: 5px 10px;
            border-radius: 4px;
            color: #fff;
            font-size: 12px;
        }
        .badge-success {
            background-color: #28a745;
        }
        .badge-danger {
            background-color: #dc3545;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            font-size: 12px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Hello {{ $full_name }} , Your Convocation Details</h2>
        </div>

        <div class="content">
            <div class="row">
                <div class="label">Title:</div>
                <div class="value">{{ $convocation->title }}</div>
            </div>

            <div class="row">
                <div class="label">Date:</div>
                <div class="value">{{ $convocation->convocation_date }}</div>
            </div>

            <div class="row">
                <div class="label">Time:</div>
                <div class="value">
                    {{ $convocation->start_time }}
                    @if($convocation->end_time)
                        - {{ $convocation->end_time }}
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="label">Location:</div>
                <div class="value">{{ $convocation->location }}</div>
            </div>

            <div class="row">
                <div class="label">Description:</div>
                <div class="value">{{ $convocation->description ?? 'No description provided' }}</div>
            </div>

        </div>

        <div class="footer">
            <p>This is an automated email. Please do not reply.</p>
            <p>© {{ date('Y') }} UPF. All rights reserved.</p>
        </div>
    </div>
</body>
</html>

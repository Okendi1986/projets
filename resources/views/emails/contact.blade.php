<!DOCTYPE html>
<html>
<head>
    <title>Message client AutoSaleCompany </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 15px;
            color: #333;
        }
        .message-content {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #ccc;
        }
    </style>
</head>
<body>
    <h2>Message de {{ $data['name'] }}</h2>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Date :</strong> {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</p>
    <p><strong>Message :</strong></p>
    <div class="message-content">
        <p>{{ $data['message'] }}</p>
    </div>
    <p>Cordialement,<br>L'équipe AutoSaleCompany</p>
</body>
</html>

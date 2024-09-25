<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body>
    <h1>Nouveau message de {{ $data['name'] }}</h1>
    <p>Email : {{ $data['email'] }}</p>
    <p>Message :</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>

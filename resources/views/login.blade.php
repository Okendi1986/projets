<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Auto-Sale Company</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <!-- animate.css -->
    <link rel="stylesheet" href="assets/animate/animate.css" />
    <link rel="stylesheet" href="assets/animate/set.css" />

    <!-- gallery -->
    <link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <link rel="stylesheet" href="assets/style.css">

    </head>

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('images/voitures.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Roboto', sans-serif;
        }

        .form-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        form {
            width: 100%;
            max-width: 340px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand1" href="#home">
                        <img src="images/t2.png" alt="logo" height="50" width="50px">
                        <span class="navbar-text">Auto-Sale Company</span>
                    </a>
                </div>
                @include('partiels.slide')
            </div>
        </div>
    </div>
</div>

<div class="form-container">
    @if(session('status'))
        <div class="alert alert-info">{{ session('status') }}</div>
    @endif

    <form action="{{ route('authenticate') }}" method="POST">
    @csrf
    <h1>Connexion</h1>

    <div class="mb-3">
        <label for="email" class="form-label">
            <i class="fas fa-envelope"></i> Adresse Email
        </label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Votre email" required>
        <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre email.</div>
        @if($errors->has('email'))
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
        @endif

    </div>

    <div class="mb-3">
        <label for="password" class="form-label">
            <i class="fas fa-lock"></i> Mot de passe
        </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe" required>
        @if($errors->has('password'))
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
        @endif
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
        <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
    </div>

    <div>
        <p class="mt-3">Pas de compte ? <a href="{{ route('signup') }}">Inscrivez-vous ici</a>.</p>
    </div>

    <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

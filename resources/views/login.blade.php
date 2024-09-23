<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Auto-Sale Company</title>

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/style.css">

    <!-- Custom CSS -->
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

        .navbar-wrapper {
            margin-bottom: 20px;
        }

        .form-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        form {
            width: 100%;
            max-width: 350px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        form:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
            transform: translateY(-5px);
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
        }

        .form-label {
            font-weight: 500;
            color: #333;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #004494;
        }

        .form-check-label {
            font-size: 14px;
        }

        .mt-3 {
            margin-top: 15px !important;
        }

        .mt-3 a {
            color: #0056b3;
            text-decoration: none;
        }

        .mt-3 a:hover {
            text-decoration: underline;
        }

        .navbar-brand1 {
            display: flex;
            align-items: center;
        }

        .navbar-brand1 img {
            margin-right: 10px;
        }

        .navbar-text {
            font-weight: 500;
            color: white;
            font-size: 18px;
        }

    </style>
</head>
<body>

<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand1" href="#home">
                        <img src="images/t2.png" alt="logo" height="50" width="50px">
                        <span class="navbar-text">Auto-Sale Company</span>
                    </a>
                    <!-- #Logo Ends -->

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Nav Starts -->
                @include('partiels.slide')
                <!-- #Nav Ends -->
            </div>
        </div>
    </div>
</div>

<!-- Form Container -->
<div class="form-container">
  <form method="GET">
    @csrf
    <h1>Connexion</h1>
    <div class="mb-3">
        <label for="email" class="form-label"><i class="fas fa-envelope"></i> Adresse Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre email">
        <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre email.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label"><i class="fas fa-lock"></i> Mot de passe</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
    </div>
    <div>
        <p class="mt-3">Pas de compte ? <a href="{{ route('signup') }}">Inscrivez-vous ici</a>.</p>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
  </form>
</div>

<!-- Bootstrap JS (include jQuery if required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

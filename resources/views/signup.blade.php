<!DOCTYPE html>
<html>
<head>
    <title>Insciption - Auto-Sale Company</title>
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

    <!-- Custom styles -->
    <style>
        /* Page Layout */
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
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 36px;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            width: 40%;
        }

        .text-center {
            text-align: center;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .mt-3 {
            text-align: center;
        }

        .mt-3 a {
            color: #007bff;
        }
    </style>
</head>
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
<body>

<!-- Form Container -->
<div class="form-container">
    <form method="POST">
        @csrf
        <h1>Inscrivez-vous !</h1>
        <div class="row">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" required>
            </div>
            <div class="col-md-6">
                <label for="inputPrenom" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" required>
            </div>
            <div class="col-md-6">
                <label for="inputAdresse" class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="adresse" required>
            </div>
            <div class="col-md-6">
                <label for="inputNumero" class="form-label">Numero-Telephone</label>
                <input type="text" name="numero" class="form-control" id="numero" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="col-md-6">
                <label for="inputConfirmePassword" class="form-label">Confirmer mot de passe</label>
                <input type="password" name="confpass" class="form-control" id="confpass" required>
            </div>
            <div class="col-md-6">
                <label for="inputVille" class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" id="ville" required>
            </div>
        </div>
        <div class="mt-3">
            <p>Vous avez un compte ? <a href="{{ route('login') }}">Connectez-vous ici</a>.</p>
        </div>
        <div class="col-12 text-center">
           <button type="submit" class="btn btn-primary">S'inscrire</button>
        </div>

    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

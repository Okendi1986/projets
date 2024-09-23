<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
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
    <style>
        /* Add custom styles here */
        body {
          margin: 0;
          padding: 0;
          display: flex;
          flex-direction: column;
          min-height: 100vh;
          background-image: url('images/voitures.jpg'); /* Lien vers l'image */
          background-size: cover; /* L'image couvre toute la page */
          background-position: center; /* Centrer l'image */
          background-repeat: no-repeat; /* Empêche la répétition de l'image */
        }

        .navbar-wrapper {
            margin-bottom: 20px;
        }
        .form-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Ensure the container is relatively positioned */
            flex-direction: column; /* Aligner les éléments en colonne */
        }
        form {
          width: 100%;
          max-width: 300px;
          padding: 15px;
          background: rgba(255, 255, 255, 0.8);
          border-radius: 8px;
          border: 1px solid #ccc;
          box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
          transition: all 0.3s ease;
          margin-top: 20px; /* Ajouter un espace entre le titre et le formulaire */
        }
        form:hover {
            /* Apply floating effect on hover */
            box-shadow: 0 12px 24px rgba(0, 0, 7, 5.4); /* Enhanced shadow */
            transform: translateY(-10px); /* Moves the form up */
        }
        h1 {
          color: black;
          font-size: 32px;
          margin-bottom: 20px; /* Ajouter un espace sous le titre */
          text-align: center;
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
                        <span class="navbar-text"> Auto-Sale Company</span>
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
  <!-- Titre au-dessus du formulaire -->
  <h1>Connexion à votre compte</h1>
    <form method="GET">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Se souvenir</label>
        </div>
        <div>
            <p class="mt-3">Vous n'avez pas de compte ? <a href="{{ route('signup') }}">Inscrivez-vous ici</a>.</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>




<!-- Bootstrap JS (include jQuery if required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

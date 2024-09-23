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
            width: 200%;
            max-width: 700px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #fff;
            border-radius: 8px;
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
<h1>Inscrivez-vous Maintenant</h1>
  <form class="row g-3" method="POST" >
  @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nom</label>
      <input type="nom" name="nom" class="form-control" id="nom">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Prenom</label>
      <input type="prenom" name="prenom" class="form-control" id="prenom">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Adresse</label>
      <input type="adresse" name="adresse" class="form-control" id="adresse">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Numero-Telephone</label>
      <input type="numero" name="numero" class="form-control" id="numero">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Confirme-password</label>
      <input type="confirme-password" name="confpass" class="form-control" id="confi">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Ville</label>
      <input type="ville" name="ville" class="form-control" id="ville">
    </div>
    <div>
            <p class="mt-3">Vous avez un compte ? <a href="{{ route('login') }}">Connectez-vous ici</a>.</p>
        </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
</div>

<!-- Bootstrap JS (include jQuery if required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

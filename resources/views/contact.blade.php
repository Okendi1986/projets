
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez-Nous</title>
  <link rel="stylesheet" href="assets/style.css">
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
              <a
              class="navbar-brand1" href="#home">
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
</div>
<body>
  <!-- Contact Starts -->
  <div class="container contactform">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>
      <strong>Contactez-
        <span style="color: orange">nous</span></strong><br>
    </h2>

    <form id="contactForm" method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom svp!" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Votre email personnel svp!" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Votre message ici" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-paper-plane"></i> Envoyer
        </button>
    </form>
  </div>
  <!-- Contact Information -->
  <section class="contact-info">
    <div>
      <img src="images/img-09.jpg" alt="Image de contact">
    </div>
    <div>
      <h2>Adresse de l'entreprise</h2>
      <p>Aviation Way 99<br>Los Angeles, USA</p>
      <h2>Email</h2>
      <a href="mailto:contact@sampledomain.com">contact@sampledomain.com</a><br>
      <a href="mailto:office@sampledomain.com">office@sampledomain.com</a>
      <h2>Numéros de Téléphone</h2>
      <p>0800 4521 800 50<br>0450 5896 625 16<br>0798 6546 465</p>
    </div>
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1459734.5702753505!2d16.91089086619977!3d48.577103681657675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1457640551761" allowfullscreen></iframe>
    </div>
  </section>

  <!-- Contact Ends -->

    <!-- Team Section -->
    <section class="team-section bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Rencontrez Notre Équipe</h2>
                <p>Des professionnels dévoués à vous offrir la meilleure expérience d'achat de voiture.</p>
            </div>
            <div class="row">
                <!-- Team Member 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow">
                        <img src="images/partners/user1.jpeg" class="card-img-top" alt="Membre de l'équipe">
                        <div class="card-body text-center">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">Directeur des Ventes</p>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow">
                        <img src="images/partners/user2.jpeg" class="card-img-top" alt="Membre de l'équipe">
                        <div class="card-body text-center">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">Responsable Clientèle</p>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow">
                        <img src="images/partners/user3.jpeg" class="card-img-top" alt="Membre de l'équipe">
                        <div class="card-body text-center">
                            <h5 class="card-title">David Brown</h5>
                            <p class="card-text">Technicien Automobile</p>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

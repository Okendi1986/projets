<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de nous - Vente de Voitures</title>
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

</head>
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

    <!-- About Us Section -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/about-us.jpg" alt="À propos de nous" class="img-fluid rounded animate_animated animate_fadeInLeft">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4">À propos de <span class="text-primary">AutoVente</span></h2>
                    <p>Bienvenue chez AutoVente, votre concessionnaire de confiance pour l'achat de voitures neuves et d'occasion. Nous offrons une large gamme de véhicules adaptés à tous les budgets et besoins.</p>
                    <p>Notre mission est de fournir à nos clients des véhicules de qualité, avec un service clientèle exceptionnel et des offres compétitives. Que vous recherchiez une berline, un SUV, ou une voiture de sport, nous avons ce qu'il vous faut.</p>
                    <p>Notre équipe d'experts est là pour vous aider à trouver la voiture de vos rêves. Venez nous rendre visite et découvrez par vous-même notre engagement envers l'excellence.</p>
                    <a href="#" class="btn btn-primary mt-3">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

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
                        <img src="assets/images/team-member-1.jpg" class="card-img-top" alt="Membre de l'équipe">
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
                        <img src="assets/images/team-member-2.jpg" class="card-img-top" alt="Membre de l'équipe">
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
                        <img src="assets/images/team-member-3.jpg" class="card-img-top" alt="Membre de l'équipe">
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

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 AutoSaleVente. Tous droits réservés.</p>
            <p>Suivez-nous sur :
                <a href="#" class="text-white ml-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white ml-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white ml-2"><i class="fab fa-instagram"></i></a>
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez-Nous</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="body-contact">
  <!-- #Header Starts -->
  <div id="home">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider animated flipInX" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="carousel-item active">
          <img src="images/t3.png" alt="banner">          
          <div class="carousel-caption">
            <div class="caption-wrapper">
              <div class="caption-info">
                <p class="animated bounceInLeft">2024 RAM 1500 TRX</p>
                <h1>
                  Explorez plus de 31 000 nouveaux véhicules en un seul endroit. <br>
                  Avec des nouveautés et vous trouverez ce que vous voulez
                </h1>
              </div>
            </div>
          </div>
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
  </div>
  <!-- #Header Ends -->

  <!-- Contact Form Starts -->
  <div class="container contactform">
    <h2>
      <strong>Contactez-
        <span style="color: orange">nous</span></strong><br>
    </h2>

    <small>Posez toutes vos préoccupations ou questions, nous sommes à votre écoute.</small>
    <form id="contactForm">
      <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" placeholder="Votre nom" required aria-required="true">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Votre email" required aria-required="true">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Votre message" required aria-required="true"></textarea>
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

  <!-- Scripts nécessaires pour Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body-contact>
</html>

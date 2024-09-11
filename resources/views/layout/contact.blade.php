<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez-Nous</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Styles pour le Header et le Carrousel */
    #home {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    .carousel-inner img {
      width: 100%;
      height: auto;
    }

    .carousel-caption {
      bottom: 20%;
      text-align: center;
      color: #fff;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      padding: 2em;
    }

    .caption-wrapper {
      max-width: 80%;
      margin: 0 auto;
    }

    .caption-info p {
      font-size: 1.5em;
      margin: 0;
    }

    .caption-info h1 {
      font-size: 2.5em;
      margin: 0.5em 0;
      font-weight: bold;
    }

    .carousel-control-prev, .carousel-control-next {
      width: 5%;
    }

    /* Conteneur du formulaire */
    .container.contactform {
      max-width: 600px;
      padding: 2.5em 2em;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      margin: 2.5em auto;
      border: 1px solid #ddd;
    }

    .container.contactform h2 {
      text-align: center;
      font-size: 2em;
      color: #333;
      margin-bottom: 0.75em;
      font-weight: 700;
    }

    .container.contactform small {
      display: block;
      margin-top: 0.5em;
      color: #777;
      text-align: center;
      font-style: italic;
    }

    .form-group {
      margin-bottom: 1.25em;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5em;
      font-weight: 600;
      font-size: 1em;
      color: #333;
    }

    .form-group .form-control {
      border-radius: 5px;
      border: 1px solid #ccc;
      padding: 0.75em;
      font-size: 1em;
      width: 100%;
      box-sizing: border-box;
    }

    .btn-primary {
      background-color: #28a745;
      border-color: #28a745;
      color: #fff;
      padding: 0.75em 1.5em;
      border-radius: 5px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s ease, border-color 0.3s ease;
      text-align: center;
      display: inline-block;
      text-decoration: none;
    }

    .btn-primary:hover,
    .btn-primary:focus {
      background-color: #218838;
      border-color: #1e7e34;
    }

    @media (max-width: 767px) {
      .container.contactform {
        padding: 1.5em 1em;
      }

      .container.contactform h2 {
        font-size: 1.5em;
      }

      .form-group label {
        font-size: 0.9em;
      }

      .form-group .form-control {
        font-size: 0.9em;
      }

      .btn-primary {
        font-size: 0.9em;
        padding: 0.6em 1em;
      }
    }

    .contact-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1em;
      background-color: #ffffff;
      padding: 2em;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      margin: 0 1em 2em;
      border-radius: 10px;
    }

    .contact-info img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      object-fit: cover;
    }

    .contact-info h2 {
      font-size: 1.5em;
      color: #333;
      margin-bottom: 0.5em;
    }

    .contact-info p,
    .contact-info a {
      margin: 0.5em 0;
      color: #333;
    }

    .contact-info a {
      color: #007bff;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    .map-container iframe {
      width: 100%;
      height: 300px;
      border: 0;
      border-radius: 8px;
    }
  </style>
</head>
<body>
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
</body>
</html>

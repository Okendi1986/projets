
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouvez une nouvelle Voiture</title>
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

    <!-- Main Content -->
    <div class="container mt-4">
       <!-- <h1 class="mb-4">Nos Voitures Neuves</h1> -->

        <!-- Barre de recherche -->
        <div class="row search-bar">
            <div class="col-md-12">
                <form class="form-inline justify-content-center" method="GET" action="#">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une voiture" aria-label="Search" name="query">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </div>

        <!-- Liste des voitures -->
        <div class="row">
            <!-- Voiture 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/voiture 3.jpg" title="voiture 3" class="card-img-top" alt="Voiture 1">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 1</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/voiture1.jpg" title="voiture 1" class="card-img-top" alt="Voiture 2">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 2</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/voiture4.jpg" title="voiture 4" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Ajoutez plus de voitures ici -->
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/voiture14.jpg" title="voiture 14" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/voiture 44.jpg" title="voiture 44" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Modèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
            <!-- Voiture 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/voiture1.jpg" title="voiture 1" class="card-img-top" alt="Voiture 3">
                    <div class="card-body">
                        <h5 class="card-title">Todèle 3</h5>
                        <a href="#" class="btn btn-primary">Voir les détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 AutoSaleCompany. Tous droits réservés.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

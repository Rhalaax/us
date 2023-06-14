<?php include 'controller/config.php' ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>US.ENSEIGNES TROYES</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
       


        <!-- Nav Bar Start -->
        <?php include 'components/header.php'; ?>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Retrouver nos produits</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Accueil</a>
                        <a href="">Produits</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Ce que nous faisons ?</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-062-pencil"></i>
                            </div>
                            <div class="service-text">
                                <h3>Création de logo de A à Z</h3>
                                <p>Nous mettons notre savoir-faire et notre créativité à votre service pour la création complète de votre logo, de la conception initiale jusqu'à la réalisation finale, afin de donner vie à l'identité visuelle de votre entreprise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon"></i>
                            </div>
                            <div class="service-text">
                                <h3>Une assistance en cas de soucis</h3>
                                <p>Un soutien à votre disposition en cas de problème</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon"></i>
                            </div>
                            <div class="service-text">
                                <h3>Une pose d'enseigne rapide et efficace</h3>
                                <p>Une installation d'enseigne rapide et efficace pour une visibilité immédiate.</p>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- Service End -->

       <!-- Produits -->
       <?php
       // Établissement de la connexion à la base de données
        $conn = new mysqli($host, $username, $password, $dbname);

         // Vérification de la connexion
        if ($conn->connect_error) {
       die("La connexion a échoué: " . $conn->connect_error);
}
?>
<div class="causes">
    <div class="container">
        <div class="section-header text-center">
            <p>Nos produits</p>
            <h2>Découvrez nos produits pour les particuliers et les professionnels</h2>
        </div>
        <div class="owl-carousel causes-carousel">
            <?php
            $sql = "SELECT * FROM products_professionnels";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="causes-item">
                        <div class="causes-img">
                        <img src="img/<?php echo $row['image']; ?>" alt="Image">


                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3><?php echo $row['name']; ?></h3>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">En savoir plus</a>
                            <a class="btn btn-custom">Faire un devis</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- Produits - Fin -->


    

      <!-- Footer Start -->
<?php include "components/footer.php"; ?>
        <!-- Footer End -->
        

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- script Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

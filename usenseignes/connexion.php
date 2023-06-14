<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>US.ENSEIGNES TROYES - Connexion</title>
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
                        <h2>Connectez-vous</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Accueil</a>
                        <a href="">Connectez-vous</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- formulaire de connexion start -->
    <div class="section-header">
        <h2>Connexion</h2>
    </div>
    <div class="form-container">
        <form action="login.php" method="POST">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Se connecter">
        </form>
    </div>
    <div class="section-header">
        <h2>Inscription</h2>
    </div>
    <div class="form-container">
        <form action="register.php" method="POST">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit" value="S'inscrire">
        </form>
    </div>
<!-- Formulaire de connexion end -->

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

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

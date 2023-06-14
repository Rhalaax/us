<?php
include 'controller/config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>US.ENSEIGNES TROYES</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="keywords" content="pose d'enseigne, conception de logo, entreprises, Troyes, Aube">
        <meta name="description" content="Nous sommes spécialisés dans la pose d'enseignes et la conception de logos pour les entreprises à Troyes, Aube. Contactez-nous pour des services de qualité et des solutions créatives.">

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

        
        <!-- Style perso Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/stylenavbar.css" rel="stylesheet">
        <link href="css/stylefooter.css" rel="stylesheet">
    </head>

    <body>
        

        <?php include 'components/header.php'; ?>



        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Bienvenue sur votre page de profil</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Accueil</a>
                        <a href="">Profil</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
<!-- début Section profil -->
<?php


// Vérification de l'authentification de l'utilisateur
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    // Utilisateur non authentifié, redirigez-le vers la page de connexion
    header("Location: connexion.php");
    exit();
}

// Récupération des informations de session
$username = $_SESSION['username'];
$role = $_SESSION['role'];

// Requête pour récupérer les informations du client
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Vous pouvez maintenant utiliser les informations du client pour personnaliser la page
?>
<!-- début Section profil -->
<div class="profile-tabs">
    <ul class="nav nav-tabs" id="myTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Informations personnelles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">Adresse</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false">Mes commandes</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabsContent">
        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
            <h3>Informations personnelles</h3>
            <p>Nom d'utilisateur: <?php echo $user['username']; ?></p>
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Prénom: <?php echo $user['first_name']; ?></p>
            <p>Nom: <?php echo $user['last_name']; ?></p>
            <p>Ville: <?php echo $user['city']; ?></p>
            <p>Date de naissance: <?php echo $user['date_of_birth']; ?></p>
        </div>
        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
            <h3>Adresse</h3>
            <p>Adresse ligne 1: <?php echo $user['address_line1']; ?></p>
            <p>Adresse ligne 2: <?php echo $user['address_line2']; ?></p>
            <p>Code postal: <?php echo $user['postal_code']; ?></p>
            <p>Pays: <?php echo $user['country']; ?></p>
        </div>
        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
            <h3>Mes commandes</h3>
            <!-- Afficher les commandes de l'utilisateur ici -->
        </div>
    </div>
</div>

<?php
} else {
    echo "Utilisateur non trouvé.";
}

$conn->close();
?>


        
      
<?php include "components/footer.php"; ?>
    
        
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

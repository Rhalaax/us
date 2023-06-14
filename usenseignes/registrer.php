<?php include 'controller/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>US.ENSEIGNES TROYES - Inscription</title>
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


       <!-- Nav Bar Start -->
       <?php include 'components/header.php'; ?>
       <!-- Nav Bar End -->

        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Inscrivez-vous</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Accueil</a>
                        <a href="">Inscrivez-vous</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


<div class="section-header">
    <h2>Inscription</h2>
</div>
<div class="form-container" id="registration-form-container">
    <form action="registrer.php" method="POST">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="first_name">Prénom:</label>
        <input type="text" id="first_name" name="first_name"><br><br>
        <label for="last_name">Nom de famille:</label>
        <input type="text" id="last_name" name="last_name"><br><br>
        <label for="city">Ville:</label>
        <input type="text" id="city" name="city"><br><br>
        <label for="date_of_birth">Date de naissance:</label>
        <input type="date" id="date_of_birth" name="date_of_birth"><br><br>
        <input type="submit" value="S'inscrire">
    </form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Le formulaire a été soumis, exécuter la requête d'inscription

    // Établissement de la connexion à la base de données
    $conn = new mysqli($host, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué: " . $conn->connect_error);
    }

    // Récupérer les valeurs soumises par le formulaire
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $dateOfBirth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '';

   // Créer la requête SQL pour insérer les valeurs dans la table "users" et récupérer l'ID généré
$sql = "INSERT INTO users (username, password, email, first_name, last_name, city, date_of_birth)
VALUES ('$username', '$password', '$email', '$firstName', '$lastName', '$city', '$dateOfBirth')";

// Exécuter la requête SQL
if ($conn->query($sql) === TRUE) {
// Récupérer l'ID généré
$clientId = $conn->insert_id;

// Mettre à jour le champ "client_id" avec la valeur de l'ID généré
$updateSql = "UPDATE users SET client_id = $clientId WHERE id = $clientId";
$conn->query($updateSql);

echo "Inscription réussie !";
} else {
echo "Erreur lors de l'inscription : " . $conn->error;
}

    // Fermer la connexion à la base de données
    $conn->close();
}
?>

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

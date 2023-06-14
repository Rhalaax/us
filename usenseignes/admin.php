<?php
include 'controller/config.php';
session_start();
// Vérification du rôle de l'utilisateur
$role = "admin"; // Remplacez cette ligne par la logique pour obtenir le rôle de l'utilisateur

// Vérification si l'utilisateur a le rôle "admin"
if ($role !== "admin") {
    // Redirection vers une autre page ou affichage d'un message d'erreur
    header("Location: index.php"); // Redirection vers la page d'accueil par exemple
    exit(); // Assurez-vous d'ajouter cette ligne pour terminer le script après la redirection
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ADMIN US.ENSEIGNES</title>
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

        <!-- style Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>07 71 68 12 13</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>u.s.enseignes@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">US.ENSEIGNES</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Accueil</a>
                        <a href="about.php" class="nav-item nav-link">Qui sommes nous ?</a>
                        <a href="produits.php" class="nav-item nav-link">Produits</a>
                        <a href="event.php" class="nav-item nav-link">Events</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>

                        <?php
                        if (isset($_SESSION['username'])) {
                            // L'utilisateur est connecté, affichez le bouton de déconnexion
                            echo '<a href="logout.php" class="nav-item nav-link">Déconnexion</a>';
                        } else {
                            // L'utilisateur n'est pas connecté
                            echo '<a href="connexion.php" class="nav-item nav-link active">Connexion</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

               <!-- Page Header Start -->
               <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Page d'administration</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Accueil</a>
                        <a href="">Admin</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        
        <!-- Début des tableaux pour la partie Admin -->
        <h2 class="table-title">Table: devis</h2>
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Description</th>
            <th>Fichier</th>
            <th>Longueur</th>
            <th>Largeur</th>
            <th>Hauteur</th>
            <th>Diamètre</th>
            <th>Date de création</th>
        </tr>
        <?php
        // Création de la connexion
        $conn = new mysqli($host, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
         }

        // Requête pour récupérer les données de la table "devis"
        $sql = "SELECT * FROM devis";
        $result = $conn->query($sql);
       
        // Affichage des données de la table "devis"
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telephone"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["fichier"] . "</td>";
                echo "<td>" . $row["longueur"] . "</td>";
                echo "<td>" . $row["largeur"] . "</td>";
                echo "<td>" . $row["hauteur"] . "</td>";
                echo "<td>" . $row["diametre"] . "</td>";
                echo "<td>" . $row["date_creation"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>Aucune donnée trouvée</td></tr>";
        }
        ?>

    </table>

    <h2 class="table-title">Table: orders</h2>
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Date de commande</th>
            <th>Statut</th>
        </tr>
        <?php
        // Création de la connexion
        $conn = new mysqli($host, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
         }

        // Requête pour récupérer les données de la table "orders"
        $sql = "SELECT * FROM orders";
        $result = $conn->query($sql);
       
        // Affichage des données de la table "orders"
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "<td>" . $row["order_date"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>Aucune donnée trouvée</td></tr>";
        }
        ?>
    </table>

    <h2 class="table-title">Table: products_professionnels</h2>
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Image</th>
            <th>Options d'installation</th>
            <th>Délai de livraison</th>
        </tr>
        <?php
        // Création de la connexion
        $conn = new mysqli($host, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
         }

        // Requête pour récupérer les données de la table "devis"
        $sql = "SELECT * FROM products_professionnels";
        $result = $conn->query($sql);
       
        // Affichage des données de la table "devis"
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["category"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["image"] . "</td>";
                echo "<td>" . $row["installation_options"] . "</td>";
                echo "<td>" . $row["delivery_time"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>Aucune donnée trouvée</td></tr>";
        }
        ?>
    </table>

    <h2 class="table-title">Table: users</h2>
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Nom d'utilisateur</th>
            <th>Mot de passe</th>
            <th>Rôle</th>
            <th>Date de création</th>
            <th>Client ID</th>
            <th>Email</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Ville</th>
            <th>Date de naissance</th>
        </tr>
        <?php
        // Création de la connexion
        $conn = new mysqli($host, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
         }

        // Requête pour récupérer les données de la table "users"
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
       
        // Affichage des données de la table "users"
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>" . $row["role"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td>" . $row["client_id"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "<td>" . $row["date_of_birth"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='12'>Aucune donnée trouvée</td></tr>";
        }
        ?>
    </table>
        <!-- fin des tableau pour la partie admin  -->



 

      

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

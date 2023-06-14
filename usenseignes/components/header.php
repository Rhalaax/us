<?php
// Obtenez le nom de la page actuelle
$current_page = basename($_SERVER['PHP_SELF']);

// Définissez les liens de la barre de navigation avec leur URL et leur nom
$nav_links = array(
    'index.php' => 'Accueil',
    'about.php' => 'Qui sommes nous ?',
    'produits.php' => 'Produits',
    'event.php' => 'Events',
    'contact.php' => 'Contact'
);

// Fonction pour vérifier si un lien est actif
function isLinkActive($current_page, $page_link)
{
    // Comparez le nom de la page actuelle avec le lien de la barre de navigation
    return ($current_page === $page_link) ? 'active' : '';
}
?>
  
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
                                <a href="https://www.facebook.com/usenseignestroyes/"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      

<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">US.ENSEIGNES</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <?php
                // Parcourir les liens de la barre de navigation
                foreach ($nav_links as $url => $name) {
                    // Vérifier si le lien est actif
                    $active_class = isLinkActive($current_page, $url);
                    
                    // Afficher le lien avec la classe active
                    echo '<a href="' . $url . '" class="nav-item nav-link ' . $active_class . '">' . $name . '</a>';
                }

                // Vérification de l'état de connexion de l'utilisateur
                session_start();

                if (isset($_SESSION['username'])) {
                    // L'utilisateur est connecté, affichez le bouton de déconnexion
                    echo '<a href="logout.php" class="nav-item nav-link">Déconnexion</a>';
                    
                    // Vérification du rôle de l'utilisateur
                    if ($_SESSION['role'] === 'admin') {
                        // L'utilisateur a le rôle "admin", affichez le lien vers la page admin.php
                        echo '<a href="admin.php" class="nav-item nav-link">Admin</a>';
                    } else {
                        // L'utilisateur a le rôle "client", affichez le lien vers la page profil.php
                        echo '<a href="client.php" class="nav-item nav-link">Profil</a>';
                    }
                } else {
                    // L'utilisateur n'est pas connecté, affichez le bouton de connexion
                    echo '<a href="connexion.php" class="nav-item nav-link">Connexion</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>


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
     

<!-- Nav Bar Start -->
<?php include 'components/header.php'; ?>
<!-- Nav Bar End -->

        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contactez-nous</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contactez nous si vous avez des questions ! </h2>
                </div>
                <div class="contact-img">
                    <img src="img/Publicites-lumineuses.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Votre nom" required="required" data-validation-required-message="Veuillez entrer votre nom" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Votre Email" required="required" data-validation-required-message="Veuillez entrer votre email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Objet" required="required" data-validation-required-message="Veuillez entrer votre objet" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Veuillez entrer votre message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Envoyez Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


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

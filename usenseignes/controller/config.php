<?php
// Paramètres de connexion à la base de données
$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'test';

// Établissement de la connexion à la base de données
$conn = new mysqli($host, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}
echo "";
?>

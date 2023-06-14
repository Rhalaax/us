<?php
session_start();
include 'controller/config.php';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données: " . $conn->connect_error);
}

// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Requête pour vérifier les informations de connexion
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
    $role = $row['role'];

    // Sauvegarde des informations de session
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    // Vérification de l'état de connexion de l'utilisateur
    if ($role == 'admin') {
        // L'utilisateur est un admin, redirigez-le vers la page d'administration
        header("Location: admin.php");
        exit(); 
    } else {
        // L'utilisateur est un client, redirigez-le vers la page du client
        header("Location: client.php");
        exit(); 
    }
}  else {
    // Identifiants invalides, redirigez vers la page de connexion avec un message d'erreur
    header("Location: connexion.php?error=1");
    exit();
}

$conn->close();
?>

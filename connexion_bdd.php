<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "chat";

// Connexion à la base de données
$conn = mysqli_connect($host, $user, $password, $database);

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}



?>

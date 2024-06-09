<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
 include "connexion_bdd.php";
session_start();


if(isset($_POST["inscription"])){
    
    $email =$_POST["email1"];
    $password = $_POST["password1"];
    $password_2 =$_POST["password_2"];
    if(isset($email) && isset($password) && isset($password_2) && $password != "" && $email != "" && $password_2 != "") {

        if($password == $password_2) {
           
            $req = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email='$email'");
            if(mysqli_num_rows($req)==0){
                $req = mysqli_query($conn, "INSERT INTO utilisateurs VALUES ('3','$email','$password')");
                if($req){
                    $_SESSION['message']="Votre compte a été créé avec succès !";
                    header("location: index.php");
                }else{
                    $erreur4 = "Inscription Echouée !";
                }
            }else{
                $erreur1 = "L'utilisateur existe déjà !!";
            }
          
        } else {
            $erreur2 = "Le mot de passe et sa confirmation ne sont pas compatibles !!";
        }
    } else {
        $erreur3 = "Veuillez entrer l'email et le mot de passe";
    }
}
session_destroy();
?>
   
<form action="inscription.php" method="POST" class="form_connexion_inscription">
    <h1 class="title_form_connexion">INSCRIPTION</h1>
   
    <p class="message_erreur">
        <?php 
        if(isset($erreur1)){
            echo $erreur1;
        } 
        if(isset($erreur2)){
            echo $erreur2;
        }
        if(isset($erreur3)){
            echo $erreur3;
        } 
        if(isset($erreur4)){
            echo $erreur4;
        } 
        if(isset($erreur5)){
            echo $erreur5;
        } 
        ?>
    </p>
    <label>Adresse Email:</label>
    <input type="email" name="email1">
    <label>Mot de passe :</label>
    <input type="password" name="password1" class="password">
    <label>Confirmation Mot de passe :</label>
    <input type="password" name="password_2" class="password_2">
    <input type="submit" name="inscription" value="inscription">
    <p class="link">vous avez un compte ? <a href="index.php" class="btn_creation">Se connecter</a></p>
</form>
<script src="script.js"></script>
</body>
</html>

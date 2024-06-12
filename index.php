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
    session_start();
    if (isset($_POST["log_in"])) {
        include "connexion_bdd.php";
        extract($_POST);
        if (isset($email) && isset($password) && $email != "" && $password != "") {
            $req = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email='$email' AND password='$password'");
            if (mysqli_num_rows($req) > 0) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location:chat.php");
                exit();
            } else {
                $error = "Le mot de passe ou l'email est incorrect !!";
            }
        } else {
            $erreur = "Veuillez entrer l'email et le mot de passe";
        }
    }
    ?>
    
    <form action="" class="form_connexion_inscription" method="POST">
        <h1 class="title_form_connexion">CONNEXION</h1>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p id="message_top">' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']); // Supprimer le message après l'avoir affiché
        }
        ?>
        <p class="message_erreur">
        <?php
        if (isset($erreur)) {
            echo $erreur;
        } 
        if (isset($error)) {
            echo $error;
        } 
        ?> 
        </p>
        <label>Adresse Email:</label>
        <input type="email" name="email">
        <label>Mot de passe :</label>
        <input type="password" name="password" id ="password">
        <input type="submit" name="log_in" value="login">
        <p class="link">Vous n'avez pas un compte ? <a href="inscription.php" class="btn_creation">Créer un compte</a></p>
    </form>
    <script src="script.js"></script>
</body>
</html>

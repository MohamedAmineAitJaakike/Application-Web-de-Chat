<?php 
                session_start();
             include "connexion_bdd.php";
              $email = $_SESSION['email']; 
              session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mohamedamine.aitjaakike@etu.uae.ac.ma | Chat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="chat">
        <div class="button-email">
            <span >
                <?="<strong>$email</strong>"?>
              </span>
             <div class="update">
                <a href="index.php" id="Supprime_message" class="Deconnexion_btn">Supprimer mon compte</a>  
                <a href="index.php" class="Deconnexion_btn">Déconnexion</a>
             </div> 
        </div>
        <div class="message_box">
            <div class="message your_message">
                <span>Vous </span>
                <p>Comment ca vas ?</p>
                <p class="date">Mardi 2 mars 2024 | 12:15:50</p>
            </div>
            <div class="message others_message">
                <span>saad.barhrouj@etu.uae.ac.ma</span>
                <p>Oui ca vas merci</p>
                <p class="date">Mardi 2 mars 2024 | 12:17:50</p>
            </div>
            <div class="message your_message">
                <span>Vous </span>
                <p>Comment ca vas ?</p>
                <p class="date">Mardi 2 mars 2024 | 12:15:50</p>
            </div>
            <div class="message others_message">
                <span>saad.barhrouj@etu.uae.ac.ma</span>
                <p>Oui ca vas merci</p>
                <p class="date">Mardi 2 mars 2024 | 12:17:50</p>
            </div>
            <div class="message your_message">
                <span>Vous </span>
                <p>Comment ca vas ?</p>
                <p class="date">Mardi 2 mars 2024 | 12:15:50</p>
            </div>
            <div class="message others_message">
                <span>saad.barhrouj@etu.uae.ac.ma</span>
                <p>Oui ca vas merci</p>
                <p class="date">Mardi 2 mars 2024 | 12:17:50</p>
            </div>
            <div class="message your_message">
                <span>Vous </span>
                <p>Comment ca vas ?</p>
                <p class="date">Mardi 2 mars 2024 | 12:15:50</p>
            </div>
            <div class="message others_message">
                <span>saad.barhrouj@etu.uae.ac.ma</span>
                <p>Oui ca vas merci</p>
                <p class="date">Mardi 2 mars 2024 | 12:17:50</p>
            </div>
            <div class="message your_message">
                <span>Vous </span>
                <p>Comment ca vas ?</p>
                <p class="date">Mardi 2 mars 2024 | 12:15:50</p>
            </div>
            <div class="message others_message">
                <span>saad.barhrouj@etu.uae.ac.ma</span>
                <p>Oui ca vas merci</p>
                <p class="date">Mardi 2 mars 2024 | 12:17:50</p>
            </div>
           
        </div>
        <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" rows="2" placeholder="Votre message"></textarea>
            <input type="submit" value="Envoyé">
        </form>

    </div>
</body>

</html>
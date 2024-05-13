<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Vision Alarme</title>
    <link rel="stylesheet" href="contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>


    <!--ALERT MESSAGE START-->
    <?php echo $alert; ?>
    <!--ALERT MESSAGE END-->



    <!--CONTACT SECTION STAR-->
    <div class="contact-section">
        
        <div class="contact-info">
            <div><i class="fa-solid fa-location-dot"></i>Adress, Ville, Pays</div>
            <div><i class="fa-solid fa-envelope"></i>contact@hsbs.com</div>
            <div><i class="fa-solid fa-phone"></i>+33 7 83 79 39 63</div>
            <div><i class="fa-solid fa-clock"></i>Du Lundi au Vendredi de 9H à 17h</div>
        </div>
    

        <div class="contact-form">
            <h2>Contactez-Nous</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Votre Nom / Prénom" required>
                <input type="email" name="email" class="text-box" placeholder="Votre Email" required>
                <textarea name="message" rows="5" placeholder="Veuillez saisir votre Message" required></textarea>
                <input type="submit" name="submit" class="send-button" value="Envoyer">
            </form>
        </div>
    </div>
    
    <!--CONTACT SECTION END-->

    <script type="text/javascript">
        if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
    </script>



</body>
</html>
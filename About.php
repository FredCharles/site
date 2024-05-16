<?php include 'sendmail.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos Vision Alarme</title>
    <link rel="stylesheet" href="Style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
</head>

<body>


    <div class="bloc">
        <video autoplay="autoplay" muted="" loop="infinite" src="media/video background.mp4"></video>
        <div class="div-about">
            <h4>À Propos</h4>
            <h2>Vision <span class="animation">Alarme</span></h2>
        </div>
    </div>


    <section id="about">
        <div class="discibe">
            <h3>Notre <span>Identité</span></h3>
            <hr>
            <p>
                Fondée en 2022, Vision <span>Alarme</span> s'est rapidement affirmée comme un leader dans le domaine de la sécurité résidentielle et commerciale.
                Forte de notre expertise dans l'installation d'alarmes intrusion et de systèmes de vidéosurveillance, 
                nous nous engageons à fournir des solutions de sécurité complètes et personnalisées pour protéger vos biens et vos proches. 
                Notre approche globale commence par une évaluation approfondie de vos besoins en sécurité, 
                suivie d'une conception sur mesure et d'une mise en œuvre impeccable de votre système de sécurité. 
                Nous sommes fiers de notre équipe dévouée de professionnels qualifiés, 
                prêts à offrir un support technique exceptionnel à chaque étape de votre projet. Chez Vision <span>Alarme</span>, 
                votre tranquillité d'esprit est notre priorité absolue.
            </p>
        </div>
</section>


<div class="section-about">

    <div class="container-about">
        <div class="content-section">

            <div class="title-about">
                <h3>Notre <span>Objectif</span></h3>
            </div>

                <div class="content-text">
                    <p>
                        Dès le début, notre objectif a été de combiner une expertise technique de pointe avec un service client exceptionnel.
                        Nous avons continuellement investi dans les meilleures technologies de sécurité, 
                        notamment les systèmes d'alarme intrusion et les solutions de vidéosurveillance, pour répondre aux besoins diversifiés de nos clients.
                    </p>
                </div>
        </div>
                <div class="image-about">
                    <img src="images/home.gif" alt="">
                </div>
    </div>
</div>

<section id="about">
    <div class="discribe">
        <h3>Évolution <span>Continue</span></h3>
        <hr>
        <p>
            Notre parcours est marqué par une croissance constante et une adaptation continue aux évolutions du marché de la sécurité. 
            En collaborant étroitement avec des fournisseurs de premier plan comme Truevision, Hikvision, Dahua, Advisor Advanced, et Vanderbilt, 
            nous avons pu offrir des produits de haute qualité et des installations personnalisées. <br><br>
            Vision <span>Alarme</span> est plus qu'un simple fournisseur de solutions de sécurité ; 
            nous sommes un partenaire de confiance dédié à la protection de vos biens et de vos proches. 
            Notre histoire est celle d'une entreprise dynamique qui met un point d'honneur à offrir des services 
            fiables et à maintenir des standards élevés de satisfaction client.
        </p>
    </div>
</section>

<div class="section-about">

    <div class="container-about">
        <div class="content-section">

            <div class="title-about">
                <h3>Partenariats et  <span>Sous-Traitance</span></h3>
            </div>

                <div class="content-text">
                    <p>
                        Vision <span>Alarme</span> s'engage à répondre aux besoins de diverses entreprises
                        en établissant des partenariats stratégiques et des contrats de sous-traitance.
                        Grâce à notre expertise et à nos solutions de sécurité avancées, 
                        nous travaillons en association avec d'autres entreprises pour offrir des services de sécurité sur mesure. 
                        Que ce soit pour des projets spécifiques ou des contrats de long terme, 
                        notre approche flexible et notre capacité à adapter nos services aux exigences de nos partenaires
                        font de nous un allié précieux dans la protection de leurs biens et de leurs collaborateurs.
                    </p>
                </div>
        </div>
                <div class="image-about">
                    <img src="images/home.gif" alt="">
                </div>
    </div>
</div>


    <!--CONTACT SECTION STAR-->

    <!--ALERT MESSAGE START-->
    <?php echo $alert; ?>
    <!--ALERT MESSAGE END-->

    <div id="Contact">
        <div class="Contact-Section">
            
            <div class="Contact-Title">
                <h2>Prenez Contact pour une Sécurité Optimale</h2>
                <hr>
                <h6>Obtenez des Informations ou un Devis Gratuit</h6>
            </div>
    
            <div class="Contact-Content">
                <div class="Contact-Info">
                    <div><i class="fa-solid fa-location-dot"></i> Adress, Ville, Pays</div>
                    <div><i class="fa-solid fa-envelope"></i> contact@hsbs.com</div>
                    <div><i class="fa-solid fa-phone"></i> +33 7 83 79 39 63</div>
                    <div><i class="fa-solid fa-clock"></i> Du Lundi au Vendredi de 9H à 17h</div>
                </div>
    
                <div class="Contact-Form">
                    <form class="contact" action="" method="post">
                        <input type="text" name="name" class="text-box" placeholder="Votre Nom / Prénom" required>
                        <input type="email" name="email" class="text-box" placeholder="Votre Email" required>
                        <textarea name="message" rows="5" placeholder="Veuillez saisir votre Message" required></textarea>
                        <input type="submit" name="submit" class="send-button" value="Envoyer">
                    </form>

                    <div id="confirmationMessage" style="display: none; color: green; margin-top: 10px;">
                        Merci pour votre message. Nous vous contacterons bientôt.
                    </div>

                </div>
            </div>
    
        </div>
    </div>


    <!-- FOOTER START-->
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Vision<span> Alarme</span></h3>

            <p class="footer-links">
                <a href="VisionAlarme.html">Accueil</a>
                |
                <a href="#">À Propos</a>
                |
                <a href="contact.php">Contact</a>
                |
            </p>

            <p class="footer-company-name">Copyright © 2024 <strong>Vision Alarme</strong> Tous droits réservés</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>France</span>Paris</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+33 7 83 79 39 63</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:gmail.com">contact@VisionAlarme.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>À Propos Vision Alarme</span>
                <strong>Vision Alarme</strong>, fondée en 2022, est une entreprise spécialisée dans la fourniture de solutions de sécurité fiables et innovantes, assurant la protection des biens pour une tranquillité d'esprit absolue.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
        <!-- FOOTER END-->


        <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi réel du formulaire

            // Affiche le message de confirmation
            document.getElementById('confirmationMessage').style.display = 'block';

            // Réinitialise le formulaire
            document.getElementById('contactForm').reset();
        });
    </script>


</body>
</html>

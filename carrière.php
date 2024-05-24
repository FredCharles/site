<?php include 'sendmail.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrière</title>
    <link rel="stylesheet" href="carrière.css" />
    <link rel="stylesheet" href="Style.css">

            <!-- BOOTSTRAP CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    

    <script>
        function disableSubmitButton() {
            const submitButton = document.querySelector('.send-button');
            submitButton.disabled = true;
            submitButton.value = 'Envoi en cours...';
        }

        document.addEventListener("DOMContentLoaded", function() {
            const confirmationMessage = document.querySelector('.confirmation-message');
            if (confirmationMessage) {
                setTimeout(() => {
                    confirmationMessage.style.display = 'none';
                }, 5000); // Hide after 5 seconds
            }
        });
    </script>

</head>
<body>
    
            <!-- MENU NAVBAR START -->
            <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand me-auto" href="#">Logo</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="VisionAlarme.html">Accueil</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="VisionAlarme.html#services-1">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="VisionAlarme.html#service">Nos maîtrises</a>
                                </li>

                            <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="About.php">À Propos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="carrière.php">Carrière</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="About.php#Contact">Contactez-Nous</a>
                            </li>

                        </ul>
                    </div>
            </div>
            <a href="About.php#Contact" class="devis-button">Demander un dévis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
        <!-- MENU NAVBAR END -->


    <section id="carrière">
        <div class="row-job">
            <h1>Nos Offres d'emploi</h1>
        </div>
            <div class="job-listing">
                    <div class="job">
                        <div class="job-image img-1"></div>
                        <h2>Technicien d'Installation</h2>
                        <a href="#" class="btn-1">VOIR PLUS</a>
                    </div>

                    <div class="job">
                        <div class="job-image img-2"></div>
                        <h2>Responsable de la Sécurité</h2>
                        <a href="#" class="btn-1">VOIR PLUS DE DéTAILS</a>
                    </div>

                    <div class="job">
                        <div class="job-image img-3"></div>
                        <h2>Commercial B2B</h2>
                        <a href="#" class="btn-1">VOIR PLUS</a>
                    </div>

                    <div class="job">
                        <div class="job-image img-4"></div>
                        <h2>Secrétariat</h2>
                        <a href="#" class="btn-1">VOIR PLUS</a>
                    </div>
            </div>
    </section>





    <div class="container">

    <div class="apply_box">
        <h1>Postuler Maintenant</span>
        </h1>
        <form class="contact" action="" method="post" enctype="multipart/form-data">
            <div class="form_container">

                <div class="form_control">
                    <label for="name"> Nom </label>
                    <input type="text" name="name" class="text-box" placeholder="Garnier" required>
                </div>

                <div class="form_control">
                    <label for="last_name"> Prénom </label>
                    <input type="text" name="last_name" class="text-box" placeholder="Christophe" required>
                </div>

                <div class="form_control">
                    <label for="email"> Email </label>
                    <input type="email" name="email" class="text-box" placeholder="Votre Email" required>
                </div>

                <div class="form_control" >
                    <label for="job_role">Poste Souhaité</label>
                    <select id="job_role" name="job_role" required>
                        <option value="">Selectionnez le poste</option>
                        <option value="Technicien">Technicien d'Installation</option>
                        <option value="Responsable de la sécurité">Responsable de la Sécurité</option>
                        <option value="Commercial">Commercial B2B</option>
                        <option value="Secrétariat">Secrétariat</option>
                    </select>
                </div>
                
                <div class="textarea_control">
                    <label for="message">Message</label>
                    <textarea name="message" rows="5" placeholder="Je vous adresse ma candidature pour le poste de Technicien/Commercial au sein de votre entreprise..." required></textarea>
                </div>


                <div class="form_control_resume">
                    <label for="upload">Téléchargez Votre CV <br>format Words, PDF, HTML</label>
                    <input type="file" id="upload" name="upload" required/>
                </div>
                
            </div>
                <div class="button_container">
                <input type="submit" name="submit" class="send-button" value="Envoyer">
                </div>
        </form>

    <!-- Message de confirmation -->
    <?php if (isset($_SESSION['confirmation'])): ?>
        <div class="confirmation-message">
            <p><?php echo $_SESSION['confirmation']; ?></p>
        </div>
        <?php unset($_SESSION['confirmation']); ?>
    <?php endif; ?>

    <!-- Message d'erreur -->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="error-message">
            <p><?php echo $_SESSION['error']; ?></p>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    </div>
    </div>
    


</body>
</html>
<?php include 'sendmail.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application Form</title>
    <link rel="stylesheet" href="carrière.css" />
</head>
<body>

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
        <form action="">
            <div class="form_container">

                <div class="form_control">
                    <label for="first_name"> Nom </label>
                    <input id="first_name" name="first_name" placeholder="Garnier" required/>
                </div>

                <div class="form_control">
                    <label for="last_name"> Prénom </label>
                    <input id="last_name" name="last_name" placeholder="Christophe" required/>
                </div>

                <div class="form_control">
                    <label for="email"> Email </label>
                    <input type="email" id="email name="email" placeholder="Veuillez Saisir Votre Email..." required/>
                </div>

                <div class="form_control" >
                    <label for="job_role">Poste Souhaité</label>
                    <select id="job_role" name="job_role" required>
                        <option value="">Selectionnez le poste</option>
                        <option value="Technicien">Technicien d'Installation</option>
                        <option value="Responsable">Responsable de la Sécurité</option>
                        <option value="Commercial">Commercial B2B</option>
                        <option value="Secrétariat">Secrétariat</option>
                    </select>
                </div>
                
                <div class="textarea_control">
                    <label for="text">Message</label>
                    <textarea id="text" name="message" row="4" cols="50" required placeholder="Je vous adresse ma candidature pour le poste de Technicien/Commercial au sein de votre entreprise..."></textarea>
                </div>


                <div class="form_control_resume">
                    <label for="upload">Téléchargez Votre CV <br>format Words, PDF, HTML</label>
                    <input type="file" id="upload" name="upload" required/>
                </div>
                
            </div>
                <div class="button_container">
                    <button type="submit">Envoyer</button>
                </div>
        </form>
    </div>
    </div>
</body>
</html>
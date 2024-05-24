<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer (true);

$alert = '';

if (isset ($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $last_name = $_POST['last_name'];
    $job_role = $_POST['job_role'];

    $upload = $_FILES['upload']['tmp_name'];
    $uploadName = $_FILES['upload']['name'];
    
    
    

    try 
    { 
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact.wilford@gmail.com';
        $mail->Password = 'sfrjypypnfwyzjqe';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('contact.wilford@gmail.com');
        $mail->addAddress('contact.wilford@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = "<h3>Name : $name <br>last_name : $last_name <br>Email : $email <br>Message : $message : <br>job_role : $job_role <br>upload : $upload</h3>";

        if (is_uploaded_file($upload)) {
            $mail->addAttachment($upload, $uploadName);
        }


        $mail->send();

         // Set confirmation message in session
        $_SESSION['confirmation'] = 'Votre CV a bien été envoyé. Merci de Postulé à notre offre.';

        $alert = '<div class="alert-success">
                    <span>Message envoyé! Merci de nous contacter.</span>
                    </div>';
    } 
    catch (Exception $e)
    {
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                    </div>';
    }
}
?>
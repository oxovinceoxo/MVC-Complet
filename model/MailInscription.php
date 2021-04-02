<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once "../vendor/autoload.php";
require_once "ClassDatabase.php";


class MailInscription extends ClassDatabase

{
    public function envoyerEmail (){

        $nom_inscrition=$_POST['nom_inscrition'];
        $email_inscription=$_POST['email_inscription'];
        $password_inscription=$_POST['password_inscription'];

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '754bcbdddf46fa';                     //SMTP username
            $mail->Password   = '43f5df2046fcf2';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 2525;
            $mail->CharSet = 'UTF-8';//TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('gite@vincrent.com', 'Mailer');
            $mail->addAddress('locagite@gite.com', 'Administrateur Annonces Games.com');
            $mail->addReplyTo('locagite@gite.com', 'Annonces Administration');



            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'inscription aux petites annonces';
            $url = "http://localhost/AnnonceMVC2/validationInscription&name=". $nom_inscrition."&email=". $email_inscription."&password=".$password_inscription."";
                $mail->Body = '

   <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="Content-Type" content="text/html">
                        <title>Inscription des petites annonce</title>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    </head>
                    <body style="background-color: #1D2326; color: #F0F1F2;">
                    <div style="background-color: #F0F1F2; color: #1D2326; padding: 20px;">
                        
                        <h3 style="color: #1D2326">Les petites annonces</h3>
                        <p>Merci pour votre inscription</p>
                        <form method="post" action="http://localhost/Projet_6_FakeLBC/validationInscription.php"
                            <input type="hidden" name="nom_inscrition">'.$nom_inscrition.'</input>
                            <input type="hidden" name="email_inscription">'.$email_inscription.'</input>
                            <input type="hidden" name="password_utilisateur">'.$password_inscription.'</input>
                            <p>Votre nom: '.$nom_inscrition.'</p>
                            <p>Votre email '.$email_inscription.':</p>
                            <p>Votre password '.$password_inscription.' :</p>
                            <a type="submit" href="' . $url . '" style="background-color: darkred; color: #F0F1F2; padding: 10px;margin: 2px; text-decoration: none;">Confimer votre inscription</a><br />
                        </form>
                        
                        <br />
                        <p>Merci d\'utiliser notre site web</p> 
                    </div>
                    </body>
                    </html>
    ';

            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}
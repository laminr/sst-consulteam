<?php
require './email/class.phpmailer.php';
require 'emailMessage.class.php';

class emailTools {

    private function getRealIp() {
       if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
         $ip=$_SERVER['HTTP_CLIENT_IP'];
       } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
         $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
       } else {
         $ip=$_SERVER['REMOTE_ADDR'];
       }
       return $ip;
    }

    private function writeLog($where) {
    
        $ip = $this->getRealIp(); // Get the IP from superglobal
        $host = gethostbyaddr($ip);    // Try to locate the host of the attack
        $date = date("d M Y");
        
        // create a logging message with php heredoc syntax
        $logging = <<<LOG
            \n
            << Start of Message >>
            There was a hacking attempt on your form. \n 
            Date of Attack: {$date}
            IP-Adress: {$ip} \n
            Host of Attacker: {$host}
            Point of Attack: {$where}
            << End of Message >>
LOG;
// Awkward but LOG must be flush left
    
            // open log file
            if($handle = fopen('hacklog.log', 'a')) {
            
                fputs($handle, $logging);  // write the Data to file
                fclose($handle);           // close the file
                
            } else {  // if first method is not working, for example because of wrong file permissions, email the data
            
                $to = 'tdelambilly@gmail.com';  
                $subject = 'HACK ATTEMPT';
                $header = 'From: laminr@gmail.com';
                if (mail($to, $subject, $logging, $header)) {
                    echo "Sent notice to admin.";
                }
    
            }
    }

    private function verifyFormToken($form) {
        // check if a session is started and a token is transmitted, if not return an error
        if(!isset($_SESSION[$form.'_token'])) {
            return false;
        }
        
        // check if the form is sent with token in it
        if(!isset($_POST['token'])) {
            return false;
        }
        
        // compare the tokens against each other if they are still the same
        if ($_SESSION[$form.'_token'] !== $_POST['token']) {
            return false;
        }
        
        return true;
    }
    
    public function processEmail ($emailform) {
        $success = false;

        // VERIFY LEGITIMACY OF TOKEN 
        if ($this->verifyFormToken($emailform)) {
           
            // CHECK TO SEE IF THIS IS A MAIL POST
            if (isset($_POST['URL-main'])) {
            
                // Building a whitelist array with keys which will send through the form, no others would be accepted later on
                $whitelist = array('token', 'type','firstname', 'lastname', 'sender-email', 'sender-phone', 'message', 'code', 'code_entre', 'URL-main');
                
                // Building an array with the $_POST-superglobal 
                foreach ($_POST as $key=>$item) {
                        
                        // Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
                        if (!in_array($key, $whitelist)) {
                            
                            $this->writeLog('Unknown form fields');
                            echo 'Unknown > '.$key;
                            die("Hack-Attempt detected. Please use only the fields in the form");
                            
                        }
                }
                
                // Lets check the URL whether it's a real URL or not. if not, stop the script
                if(!filter_var($_POST['URL-main'],FILTER_VALIDATE_URL)) {
                        $this->writeLog('URL Validation');
                        die('Hack-Attempt detected. Please insert a valid URL');
                }

                // PREPARE THE BODY OF THE MESSAGE
                $curText = htmlentities($_POST['message']);
                $senderPhone = strip_tags($_POST['sender-phone']);
                $cleanedEmail = '';
                //  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT           
                $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
                if (preg_match($pattern, trim(strip_tags($_POST['sender-email'])))) { 
                    $cleanedEmail = trim(strip_tags($_POST['sender-email'])); 
                } else { 
                    return "The email address you entered was invalid. Please try again!"; 
                } 

                $message = '';
                $subject = '';
                $firstname = strip_tags($_POST['firstname']);
                $lastname = strip_tags($_POST['lastname']);

                if ($type = 'contact') {
                    
                    $subject = 'Demande de contact - FCST';
                    $message = EmailMessage::getContactMessage($firstname, $lastname, $cleanedEmail, $senderPhone, $curText);
                
                } elseif ($type = 'formation') {

                    $subject = 'Demande de formation - FCST';
                    
                    $nbrPersonne    = $_POST['nbr-person'];
                    $date           = $_POST['training-date'];
                    $formation      = $_POST['training'];

                    $message = EmailMessage::getFormationMessage(
                                            $firstname, 
                                            $lastname, 
                                            $cleanedEmail, 
                                            $senderPhone, 
                                            $formation, 
                                            isset($date) ? $date : 'Sans date', 
                                            isset($nbrPersonne) ? $nbrPersonne : 0, 
                                            $curText
                                );
                }

                // SENDING EMAIL
                $success = $this->sendEmail($subject, $message);
                
                // DON'T BOTHER CONTINUING TO THE HTML...
                //die();
            
            }
        } else {
            
            if (!isset($_SESSION[$emailform.'_token'])) {
            
            } else {
                echo "Hack-Attempt detected. Got ya!.";
                $this->writeLog('Formtoken');
            }
       
        }

        return $success;
    }

    private function sendEmail($subject, $message) {

        $isSend = false;

        $mail = new PHPMailer;

        $mail->SMTPDebug = 0;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.gandi.net';  // Specify main and backup server smtp.gmail.com
        $mail->Port = 465;
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'contact@consulteam.fr';                            // SMTP username
        $mail->Password = 'L0l0f0rm@irways';                         // SMTP password
        $mail->SMTPSecure = 'ssl';                         // Enable encryption, 'ssl' also accepted

        $mail->From = 'no-reply@consulteam.fr';
        $mail->FromName = 'Consulteam request';
        $mail->addAddress('tdelambilly@gmail.com', 'Consulteam Admin');  // Add a recipient
        $mail->addAddress('loloform@yahoo.fr');               // Name is optional
        //$mail->addReplyTo($to, $name);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $message;
        //$mail->AltBody = 'Demande de contact de $name : $to';

        if(!$mail->send()) {
           echo 'Le message n\'a pas pu etre envoy&eacute;e';
           echo 'Mailer Error: ' . $mail->ErrorInfo;
           //echo ' vous pouvez nous contacter directement au: 06 80 15 20 50';
        } else {
            $isSend = true;
        }
        return $isSend;
    }
}
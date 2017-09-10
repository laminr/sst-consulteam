<?php
class emailMessage {

	public static function getContactMessage($firstname, $lastname, $email, $phone, $txtmessage) {
        $now = new DateTime('NOW');

		$message ='<html><body> <table rules="all" style="border-color: #666; border: 1px solid #000" cellpadding="10">';
        $message .='<tr><td style="background: #eee;"><strong>Heure d\'envoie</strong></td><td>'.$now->format(DateTime::COOKIE).'</td></tr> ';
        $message .='<tr><td style="background: #eee;"><strong>Pr&eacute;nom:</strong></td><td>'.$firstname.'</td></tr> ';
        $message .='<tr><td style="background: #eee;"><strong>Nom de famille:</strong></td><td>'.$lastname.'</td></tr> ';       
        $message .='<tr><td style="background: #eee;"><strong>Email:</strong></td><td>'.$email.'</td></tr>';
        $message .='<tr><td style="background: #eee;"><strong>Telephone:</strong></td><td>'.$phone.'</td></tr>';
        if ($txtmessage != '') {
            $message .='<tr><td style="background: #eee;"><strong>Message :</strong></td><td>'.$txtmessage.'</td></tr>';
        } else {
            $message .='<tr><td style="background: #eee;"><strong>Message :</strong></td><td>PAS DE MESSAGE ???</td></tr>';                    
        }
        $message .='</table></body></html>';
        return $message;
	}

	public static function getFormationMessage($firstname, $lastname, $email, $phone, $formation, $date, $nbrPersonne, $txtmessage) {
        $now = new DateTime('NOW');
        
		$message ='<html><body> <table rules="all" style="border-color: #666; border: 1px solid #000" cellpadding="10">';
        $message .='<tr><td style="background: #eee;"><strong>Heure d\'envoie</strong></td><td>'.$now->format(DateTime::COOKIE).'</td></tr> ';
        $message .='<tr><td style="background: #eee;"><strong>Pr&eacute;nom:</strong></td><td>'.$firstname.'</td></tr> ';
        $message .='<tr><td style="background: #eee;"><strong>Nom de famille:</strong></td><td>'.$lastname.'</td></tr> ';       
        $message .='<tr><td style="background: #eee;"><strong>Email:</strong></td><td>'.$email.'</td></tr>';
        $message .='<tr><td style="background: #eee;"><strong>Telephone:</strong></td><td>'.$phone.'</td></tr>';
       	$message .='<tr><td style="background: #eee;"><strong>Telephone:</strong></td><td>'.$formation.'</td></tr>';
       	$message .='<tr><td style="background: #eee;"><strong>Telephone:</strong></td><td>'.$date.'</td></tr>';
       	$message .='<tr><td style="background: #eee;"><strong>Telephone:</strong></td><td>'.$nbrPersonne.'</td></tr>';
        if ($txtmessage != '') {
            $message .='<tr><td style="background: #eee;"><strong>Message :</strong></td><td>'.$txtmessage.'</td></tr>';
        } else {
            $message .='<tr><td style="background: #eee;"><strong>Message :</strong></td><td>PAS DE MESSAGE ???</td></tr>';                    
        }       	
        $message .='</table></body></html>';
        return $message;
	}

}
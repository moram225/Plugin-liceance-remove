<?php
/*****************************************
 * start outright_send_email
 *      @description  : Sent Email 
 *      @Author       : Outright 
 *      Date          : 
 *      @param   string    ---> $to   : Recipient Email 
 *      @param   string    ---> $email_subject : Subject of the email 
 *      @param   string    ---> $email_body    : Message of the email 
 *      @since 1.0.0
 *          
 * ***************************************/
 
function outright_send_email($to,$email_subject,$email_body){	
    require_once('include/SugarPHPMailer.php');
	$emailObj = new Email(); 
	$defaults = $emailObj->getSystemDefaultEmail();
    $mail = new SugarPHPMailer(); 
	$mail->setMailerForSystem(); 
	$mail->From     = $defaults['email']; 
	$mail->FromName = $defaults['name']; 
	$mail->isHTML(true);
	$mail->Subject  = $email_subject; 
	$mail->Body     = $email_body;
	$mail->prepForOutbound(); 
	$mail->AddAddress($to);
	$mail->Send();
	$return = array();
	if(!$mail->Send()) {
		ob_clean();
		$return['status'] = false;
		$return['errorMessage'] =  $mail->ErrorInfo;
		return $return;
	} // if
	$return['status'] = true;
	return $return;
}/**End outright_send_email**/

function outright_send_notification( $email_subject , $email_body , $to_email=false ){

	if( $email_subject && $email_body ){
			require_once('include/SugarPHPMailer.php');
			$emailObj = new Email(); 
			$defaults = $emailObj->getSystemDefaultEmail();

			$mail = new SugarPHPMailer(); 
			$mail->setMailerForSystem(); 
			$mail->From = $defaults['email']; 
			$mail->FromName = $defaults['name']; 
			$mail->SMTPDebug = 0;
			$mail->isHTML(true);
			$mail->Subject = $email_subject; 
			$mail->Body = $email_body;
			$mail->prepForOutbound(); 
			if(!$to_email){
				$to_email = $defaults['email'];
			}
					$to_email =$mail->AddAddress($to_email);
				
		
			if(!$mail->Send()){
				
			}
		}
}

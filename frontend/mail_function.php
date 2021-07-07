<?php

function sendotp($email,$otp)
{
	require('PHPmailer/class.phpmailer.php');
	//require('');

	$mess_body="OTP for Password Reset is : <br/><br/>".$otp;
	$mail=new PHPMailer();
	$mail->SetFrom('monshreya123@gmail.com');
	$mail->AddAddress($email);
	$mail->Subject="OTP to reset password";
	$mail->MsgHTML($mess_body);
	$result=$mail->Send();
	 if(!$result){
	 	echo "Mailer Error : ". $mail->ErrorInfo;
	 }
	 else{
	 	return $result;
	 }
}















?>
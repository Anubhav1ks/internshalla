<?php
include('smtp/PHPMailerAutoload.php');
//$html='Msg';
//echo smtp_mailer('project1.check@gmail.com','subject',$html);
function smtp_mailer($email,$subject,$msg){
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "Project9.check@gmail.com";
	$mail->Password = "12project@90";
	$mail->SetFrom("Project9.check@gmail.com");
	$mail->Subject = $subject;
    $mail->Body =$msg;
	$mail->AddAddress($email);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
    $result=$mail->Send();
    if(!$result){
        echo "Mailer error: ".$mail->ErrorInfo;
    }else{
        return $result;
    }
}
?>
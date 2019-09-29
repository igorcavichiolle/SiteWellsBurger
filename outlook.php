<?
$account="contatowellsburger@hotmail.com";
$password="igor2009";
$to="contatowellsburger@hotmail.com";
$from="igorgabrielcavichiolle@hotmail.com";
$from_name="Venha para o Well's Burger";
$msg="<strong>Venha para o Well's Burger</strong>"; // HTML message
$subject="HTML message";
/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.live.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'tls';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "E-Mail foi enviado";
}
?>

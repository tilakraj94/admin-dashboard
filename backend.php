<?php
require '../PHPMailer/PHPMailerAutoload.php'; // provide phpmailer autoload path here,It can downloaded from google

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '	smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'example@xyz.com';                 // SMTP username
$mail->Password = 'jozlmzydfsf';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Admin');
               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Admin';



if(isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email']) && isset($_POST['selected']) && !empty($_POST['selected'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$color=$_POST['color'];
	$selected=$_POST['selected'];
	$mess=$_POST['mess'];
	$name='<b>'.ucwords($name).'</b>';

	if($selected=='crying'){
		$message="
		<div style='background:$color'>
		Hello $name,<br>
		Sorry for the inconvience caused by our service.We have fixed the bugs that caused it to deduct more money that it was shown on the website.This type of inconvience won't happen in the future.
		<br>
		$mess
		<br>
		Thank you for being patient with us.
		<br>
		Regards,
		Tesla
		</div>
		";

	}else if($selected=='leaving'){
			$message="
		<div style='background:$color'>
		Hello $name,<br>
		Hurry flat 50% discount on all items , specially for you.Use coupon <strong>ASDASD</strong>.
		<br>
		$mess
		<br>
		Thank you for being patient with us.<br>
		Regards,
		Tesla
		</div>
		";
	}else if($selected=='unsatisfied'){
			$message="
		<div style='background:$color'>
		Hello $name,<br>
		We have registered your complaint regarding the defective product.We will revert back to you in 3-4 days.<br>
		$mess<br>
		Thank you for being patient with us.<br>
		Regards,
		Tesla
		</div>
		";

	}else if($selected=='regular'){
		$message="
		<div style='background:$color'>
		Hello $name,<br>
		Thank you for being patient with us for such a long time.We have extended your subscription for two months.Now enjoy all the channels you want for free.<br>
		$mess<br>
		
		Regards,
		Tesla
		</div>
		";
	}else if($selected=='random'){
			$message="
		<div style='background:$color'>
		Hello $name,<br>
		Hurry flat 50% discount on all items , specially for you.Use coupon <strong>ASDASD</strong>.<br>
		$mess<br>
		Thank you for being patient with us.<br>
		Regards,
		Tesla
		</div>
		";
	}
	$mail->Body    = $message;

	$mail->addAddress($email);
	if(!$mail->send()) {
    die(json_encode(array('status'=>'error')));
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    die(json_encode(array('status'=>'success')));
}
}else die(json_encode(array('status'=>'error')));

?>

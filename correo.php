<?php

	$to = 'carobayona@outlook.com';
	$nombre = $_POST['name'];
	$mail = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$headers  = 'From: "Contacto SK" <contacto@suministroskraft.com>' . "\r\n" .
				'Cc: ' . $mail . "\r\n" .
    			'Reply-To: "Cliente" <' . $mail . ">\r\n" .
    			'X-Mailer: PHP/' . phpversion();

    $message .= "\n\n" . 'Atentamente ' . $nombre . "\n\n" . 'Contacto: ' . $mail; 

	mail($to, $subject, $message, $headers);

	echo "<script> alert('Correo enviado con exito.')</script>";
	
	echo "<script> setTimeout(\"location.href='index.html'\", 200)</script>";

?>
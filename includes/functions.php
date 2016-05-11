<?php

function sendMail($tyyppi, $tilaaja, $osoite, $posti_nro, $kaupunki, $email, $puhelin){

$to      = 'toimitus@kf-lehti.com';
$subject = 'KF Tilaus';
$message =  "Tyyppi: " . $tyyppi ."\n". 
			"Tilaaja: " . $tilaaja . "\n" . 
			"Osoite: " . $osoite . "\n" . 
			"Postinumero ja paikka: " . $posti_nro . " " . $kaupunki . "\n" .
			"Email: " . $email . "\n" .
			"Puhelin: " . $puhelin . "\n"
			;


mail($to, $subject, $message);

}

?>
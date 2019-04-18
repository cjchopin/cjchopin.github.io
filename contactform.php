<? php

if (isset($_Post['submit'])) {
	$name = $_Post['name'];
	$subject = $_Post['subject'];
	$mailFrom = $_Post['mail'];
	$message = $_Post['message'];

	$mailTo = "c.juschin2@web.de";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an E-Mail from ".$name.".\n\n".$message;

	mail ($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>Contact Us</title>
	<meta name="keywords" content=""/>
	<meta name="description" content="Result page for the Contact Us page." />
	<!--Includes the meta information ( general stylesheets, icons, other constant information basically)-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/metadata.html";?>
</head>
<body>
	<!--Includes the navbar file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/header.html";?>

	<div id="content">
		<?php
			//note: this will not work unless we setup an SMTP server in php.ini.
			$recipient = "eamonncarson@gmail.com";
			$name = cleanInput($_POST["name"]);
			$email = cleanInput($_POST["email"]);
			$subject = cleanInput($_POST["subject"]);
			$message = cleanInput($_POST["message"]);
			$messageBody = "From: $name \n Their Email: $email \n Subject: $subject \n $message";
			$htmlMessageBody = "From: $name <br> Their Email: $email <br> Subject: $subject <br> $message";
			$wasMailed = mail($recipient, $subject, $messageBody);

			if($wasMailed){
				echo "<h2>Thank you for the Message</h2>";
				echo "<p>your message was sent successfully. This is how it would look:</p>";
				echo "<p><div class=\"form\">$htmlMessageBody</div></p>";
			}
			else{
				echo "<h2>Your message did not make it through.../h2>";
				echo "<p>Sorry about that, there was an error in processing your message. Try emailing us at TODO or you can try again later.</p>";
			}

			function cleanInput($var){
				$var = trim($var);
				$var = stripslashes($var);
				$var = htmlspecialchars($var);
				return $var;
			}
		?>
		<br><p>If you'd like to send another message, or try again if yours did not send correctly, <a href="contact-us.php">click here</a>.</p>
	</div>

	<!--Includes the footer file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/footer.html";?>

</body>
</html>
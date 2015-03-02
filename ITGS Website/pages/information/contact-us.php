<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>Contact Us</title>
	<meta name="keywords" content="Carson Lineage, Shinnyo En, Buddhism, Karen Carson, Carson" />
	<meta name="description" content="General information about the Carson Lineage Website, and links to commonly visited places around the website." />
	<!--Includes the meta information ( general stylesheets, icons, other constant information basically)-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/metadata.html";?>
</head>
<body>
	<!--Includes the navbar file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/header.html";?>

	<div id="content">
		<h2>Contact Us</h2>
		<p>You can use the following form to leave us a message, or you can email us at <a>TODO</a>.</p>
		<div class="form">
			<form method="post" action="contact-us-action.php">
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Subject:</td>
						<td><input type="text" name="subject"></td>
					</tr>
				</table>
				Message:<br><textarea name="message" rows="10" style="width:40%";></textarea></br>
				<input type="submit">
			</form>
		</div>
	</div>

	<!--Includes the footer file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/footer.html";?>

</body>
</html>
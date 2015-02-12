<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>Carson Lineage Testimonials</title>
	<meta name="author" content="Eamonn Carson">
	<meta name="keywords" content="Carson Lineage, Shinnyo En, Buddhism, Karen Carson, Carson, Testimonials, Followers, Members" />
	<meta name="description" content="Contains testimonials written by members of the Carson Lineage describing their experiences with Shinnyo En and Buddhism." />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/desktopStylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/midsizeStylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/mobileStylesheet.css" />
	<link rel="stylesheet" type="text/css" href="./css/tableStyle.css" />
</head>
<body>
	<!--Includes the navbar file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/header.html";?>

	<div id="content">
		<h2>Testimonials</h2>
			<p>This page contains links to testimonials by followers of Shinnyo En within the Carson Lineage. Testimonials can be poems, speeches, or narratives; however, all of them display the effect of Shinnyo Buddhism on follower's lives.</p>
			<p>Select the testimonial you would like to read from the table below</p>
			<p>If you do not speak english, <a href="TODO">(click here to read in Japanese)</a> or <a href="TODO">(click here to read in Mandarin)</a></p>
		
		<br>
		<table>
			<tr>
				<th>Author</th>
				<th>Testimonial</th>
			</tr>
			<?php
				#Auto Generates table from file
				$tableFile = fopen("testimonialList.csv", "r");
				while(!feof($tableFile)){
					$line = fgets($tableFile);
					
					$authorFirst = strtok($line, ",");
					$authorLast = strtok(",");
					$title = strtok(",");
					$link = strtok(",");

					echo "\n<tr>";
					echo "<td>$authorFirst $authorLast</td>";
					echo "<td><a href=\"$link\">$title</a></td>";
					echo "</tr>";
				}
			?>

		</table>
	</div>

	<!--Includes the footer file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/footer.html";?>

</body>
</html>
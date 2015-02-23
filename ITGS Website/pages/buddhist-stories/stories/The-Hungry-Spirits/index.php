<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>Carson Lineage</title>
	<meta name="author" content="Eamonn Carson">
	<meta name="keywords" content="Carson Lineage, Shinnyo En, Buddhism, Karen Carson, Carson" />
	<meta name="description" content="General information about the Carson Lineage Website, and links to commonly visited places around the website." />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/desktopStylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/midsizeStylesheet.css" />
	<link rel="stylesheet" type="text/css" href="/css/mobileStylesheet.css" />
	<style>
		#content div.page {
			display: none;
			/*
			min-height: 50em;
			width: 40em;
			max-width: 100%;*/
			padding: 5%;
			width: 80%;
			min-height: 50em;
			margin: 0 auto;
			border: 2px solid #555555;
			box-shadow: 10px 10px 6px #222222;
			background-color: white;
		}
		#content #num1{
			display: block;
		}
		#content > #reader {
			width: 50em;
			padding: 2em 0 3em 0;
			margin: 0 auto;
			background-color: #333333;
		}
		#reader h2 {
			text-align: center;
			font-size: 1.5em;
			color: white;
		}
		#reader table{
			color: white;
			margin: 1em auto;
			text-align: center;
		}
		#reader #readernavcontrols {
			width: 70%;
		}
		#reader #readerviewcontrols {
			width: 50%;
			font-size: .7em;
		}
		#reader td {
			width: 33%;
			padding: .5em 0;
		}
		#reader .button {
			background-color: #444444;

		}
	</style>
</head>
<body>
	<!--Includes the navbar file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/header.html";?>

	<div id="content">
		<div id="reader">
			<h2>The Hungry Spirits That Moggallana Encountered</h2>
			<?php
				for($i=1; $i<=10; $i++){
					echo "\n<div class=\"page\" id=\"num$i\">\n";
					require "$i.html";
					echo "\n</div>";
				} 
			?>
			<table id="readernavcontrols">
					<td class="button" id="prevbutton">Previous</td>
					<td id="pagenumber">Page 1</td>
					<td class="button" id="nextbutton">Next </td>
				</tr>
			</table>
			<table id="readerviewcontrols">
				<tr>
					<td class="button" id="pageviewbutton">Page View</td>
					<td class="button" id="articleviewbutton">Article View</td>
					<td class="button" id="printbutton">Print</td>
				</tr>
			</table>
		</div>
	</div>

	<!--Includes the footer file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/footer.html";?>

</body>
</html>
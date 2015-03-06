<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>The Hungry Spirits That Moggallana Encountered</title>
	<meta name="keywords" content="Carson Lineage, Shinnyo En, Buddhism, Karen Carson, Carson" />
	<meta name="description" content="General information about the Carson Lineage Website, and links to commonly visited places around the website." />
	<!--Includes the meta information ( general stylesheets, icons, other constant information basically)-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/metadata.html";?>
	<link rel="stylesheet" type="text/css" href="/css/readerStyle.css" />

</head>
<body>
	<!--Includes the navbar file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/header.html";?>

	<div id="breadcrumbs">
		<ul class="float-clearing">
			<li><a href="/">Home</a></li>
			<li><a href="/pages/buddhist-stories/">Buddhist Stories</a></li>
			<li class="current"><a href="#reader">Reader</a></li>
		</ul>
	</div>

	<div id="content">
		<div id="reader">
			<h2>The Hungry Spirits That Moggallana Encountered</h2>
			<table id="readernavcontrols">
				<tr>
					<td class="button" id="topprevbutton">Previous</td>
					<td id="toppagenumber">Page 1</td>
					<td class="button" id="topnextbutton">Next </td>
				</tr>
			</table>
			<?php
				$fileNames = glob("./*.html");
				if($fileNames){
					$numPages = count($fileNames);
					for($i=1; $i<=$numPages; $i++){
						echo "\n<div class=\"page\" id=\"num$i\">\n";
						require "$i.html";
						echo "\n</div>";
					} 
					echo "<script>lastPage = $numPages;</script>";
				}
				else {
					echo "<script>lastPage = 1;</script>";
					echo "<div class=\"page\" id=\"1\">\n";
					echo "<p>We're sorry, this content could not be loaded.</p>";
					echo "\n</div>";
					exit("Could not count or could not access filesystem.");
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
	<script src="/js/readerScript.js"></script>

</body>
</html>
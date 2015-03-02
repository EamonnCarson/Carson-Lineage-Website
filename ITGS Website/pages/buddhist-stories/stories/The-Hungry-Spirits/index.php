<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>The Hungry Spirits That Moggallana Encountered</title>
	<meta name="keywords" content="Carson Lineage, Shinnyo En, Buddhism, Karen Carson, Carson" />
	<meta name="description" content="General information about the Carson Lineage Website, and links to commonly visited places around the website." />
	<!--Includes the meta information ( general stylesheets, icons, other constant information basically)-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/metadata.html";?>
	<style>
		body {
			background-color: #333333;
		}
		#content div.page {
			padding: 5%;
			width: 80%;
			min-height: 50em;
			margin: 0 auto;
			border: 2px solid #555555;
			box-shadow: 10px 10px 6px #222222;
			background-color: white;
		}
		#content > #reader {
			width: 50em;
			max-width: 100%;
			padding: 2em 0 3em 0;
			margin: 0 auto;
			background-color: #333333;
			font-size: 1.5em;
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
			-webkit-touch-callout: none;
		    -webkit-user-select: none;
		    -khtml-user-select: none;
		    -moz-user-select: none;
		    -ms-user-select: none;
		    user-select: none;
		}
		#reader .button:hover {
			background-color: #545454;
		}
		#reader .button:active {
			background-color: #292929;
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

	<script>
		var currentPage = 1;
		var lastPage = 10;
		var viewState = "article";

		function prevPage(){
			if(currentPage <= 1){
				currentPage = 1;
			}
			else{
				document.getElementById('num'+currentPage).style.display = "none";
				currentPage--;
				document.getElementById('num'+currentPage).style.display = "block";
				document.getElementById('pagenumber').innerHTML = "Page "+currentPage;
				window.open("#reader","_self");
			}
		}

		function nextPage(){
			if(currentPage >= lastPage){
				currentPage = lastPage;
			}
			else{
				document.getElementById('num'+currentPage).style.display = "none";
				currentPage++;
				document.getElementById('num'+currentPage).style.display = "block";
				document.getElementById('pagenumber').innerHTML = "Page "+currentPage;
				window.open("#reader","_self");
			}
		}

		function pageView(){
			if(viewState != "page"){
				currentPage = 1;
				for(var i = 2; i <= lastPage; i++){
					document.getElementById('num'+i).style.display = "none";
				}
			}
			viewState = "page";
		}

		function articleView(){
			if(viewState != "article"){
				currentPage = 1;
				for(var i = 2; i <= lastPage; i++){
					document.getElementById('num'+i).style.display = "block";
				}
			}
			viewState = "article";
		}

		window.onload = function() {

			pageView();

			var prevButton = document.getElementById('prevbutton');
			prevButton.onclick = function(){prevPage();}

			var nextButton = document.getElementById('nextbutton');
			nextButton.onclick = function() {nextPage();}

			var pageViewButton = document.getElementById('pageviewbutton');
			pageViewButton.onclick = function() {pageView();}

			var articleViewButton = document.getElementById('articleviewbutton');
			articleViewButton.onclick = function() {articleView();}
			
		}
	</script>

</body>
</html>
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

	<div id="content">
		<div id="reader">
			<h2>The Hungry Spirits That Moggallana Encountered</h2>
			<?php
				$numPages = 10;
				for($i=1; $i<=$numPages; $i++){
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
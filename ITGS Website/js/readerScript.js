var currentPage = 1;
var viewState = "article";
//the variable "lastPage" should be declared within the document itself

var prevButton = document.getElementById('prevbutton');
var nextButton = document.getElementById('nextbutton');
var topPrevButton = document.getElementById('topprevbutton');
var topNextButton = document.getElementById('topnextbutton');
var pageViewButton = document.getElementById('pageviewbutton');
var articleViewButton = document.getElementById('articleviewbutton');
var printButton = document.getElementById('printbutton');
var searchButton = document.getElementById('searchbutton');

var pageNumber = document.getElementById('pagenumber');
var topPageNumber = document.getElementById('toppagenumber');

function prevPage(){
	if(viewState == "page"){
		if(currentPage <= 1){
			currentPage = 1;
		}
		else{
			document.getElementById('num'+currentPage).style.display = "none";
			currentPage--;
			document.getElementById('num'+currentPage).style.display = "block";
			pageNumber.innerHTML = "Page "+currentPage;
			topPageNumber.innerHTML = "Page "+currentPage;
			window.open("#reader","_self");
		}
	}
}

function nextPage(){
	if(viewState == "page"){
		if(currentPage >= lastPage){
			currentPage = lastPage;
		}
		else{
			document.getElementById('num'+currentPage).style.display = "none";
			currentPage++;
			document.getElementById('num'+currentPage).style.display = "block";
			pageNumber.innerHTML = "Page "+currentPage;
			topPageNumber.innerHTML = "Page "+currentPage;
			window.open("#reader","_self");
		}
	}
}

function pageView(){
	if(viewState != "page"){
		currentPage = 1;
		for(var i = 1; i <= lastPage; i++){
			if(i != currentPage) document.getElementById('num'+i).style.display = "none";
		}
	}
	prevButton.style.display = "table-cell";
	topPrevButton.style.display = "table-cell";
	nextButton.style.display = "table-cell";
	topNextButton.style.display = "table-cell";
	pageNumber.style.display = "table-cell";
	topPageNumber.style.display = "table-cell";
	viewState = "page";
}

function articleView(){
	if(viewState != "article"){
		currentPage = 1;
		for(var i = 2; i <= lastPage; i++){
			document.getElementById('num'+i).style.display = "block";
		}
	}
	prevButton.style.display = "none";
	topPrevButton.style.display = "none";
	nextButton.style.display = "none";
	topNextButton.style.display = "none";
	pageNumber.style.display = "none";
	topPageNumber.style.display = "none";
	viewState = "article";
}

function toggleSearchBar(){
	var searchBar = document.getElementById('searchbar');
	if(searchbar.style.display == "none"){
		searchbar.style.display = "block";
	}
	else{
		searchbar.style.display = "none";
	}
}

function printPage(){
	articleView();
	window.print();
}

window.onload = function() {

	pageView();
	printButton.style.display = "table-cell";

	prevButton.onclick = function(){prevPage();};
	nextButton.onclick = function() {nextPage();};
	topPrevButton.onclick = function(){prevPage();};
	topNextButton.onclick = function() {nextPage();};
	pageViewButton.onclick = function() {pageView();};
	articleViewButton.onclick = function() {articleView();};
	searchButton.onclick = function() {toggleSearchBar();};
	printButton.onclick = function() {printPage();};
	
}
window.onload = function() {

	var searchButton = document.getElementById('searchbutton');
	searchButton.onclick = function() {
		var searchBar = document.getElementById('searchbar');
		if(searchbar.style.display == "none"){
			searchbar.style.display = "block";
		}
		else{
			searchbar.style.display = "none";
		}
	}
}
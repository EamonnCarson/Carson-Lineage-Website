<!DOCTYPE HTML5>
<html lang="en-US">
<head>
	<title>Testimonials</title>
	<meta name="keywords" content="Carson Lineage, Shinnyo En, Buddhism, Karen Carson, Carson, Testimonials, Followers, Members, Proof" />
	<meta name="description" content="Contains testimonials written by members of the Carson Lineage describing their experiences with Shinnyo En and Buddhism." />
	<!--Includes the meta information ( general stylesheets, icons, other constant information basically)-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/metadata.html";?>
	<link rel="stylesheet" type="text/css" href="./css/tableStyle.css" />
</head>
<body>
	<!--Includes the navbar file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/header.html";?>

	<div id="content">
		<h1>The Search Sanitization must be fixed</h1>
		<h2>Testimonials</h2>
			<p>This page contains links to testimonials by followers of Shinnyo En within the Carson Lineage. Testimonials can be poems, speeches, or narratives; however, all of them display the effect of Shinnyo Buddhism on follower's lives.</p>
			<p>Select the testimonial you would like to read from the table below</p>
			<p>If you do not speak english, <a href="./index.php?searchTerm=&language=Japanese">(click here to read in Japanese)</a> or <a href="./index.php?searchTerm=&language=Mandarin">(click here to read in Mandarin)</a></p>
		
		<!--htmlspecialchars protects against XSS by modifying PHP_SELF-->
		<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
			Search for Name: <input type="text" name="searchTerm"><br>
			Language: <input type="radio" name="language" value="English" 
				<?php if(cleanInput($_GET["language"]) == "English"){ echo "checked";} ?>>English
			<input type="radio" name="language" value="Japanese"
				<?php if(cleanInput($_GET["language"]) == "Japanese"){ echo "checked";} ?>>日本語
			<input type="radio" name="language" value="Mandarin"
				<?php if(cleanInput($_GET["language"]) == "Mandarin"){ echo "checked";} ?>>普通话
			<br><input type="submit" value="Search"><br>
		</form>

		<?php
			//connect to database
			$servername = "localhost";
			$username = "root";
			$password = "erc-1997";
			$database = "test";
			$conn = new mysqli($servername, $username, $password, $database);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			//issue commands
			if(!empty($_GET)){
				$search = cleanInput($_GET["searchTerm"]);
				$language = getLanguage();
				$sql = 	"SELECT * FROM testimonials  WHERE (
				LOWER(firstName) LIKE LOWER('$search%') OR 
				LOWER(lastName) LIKE LOWER('$search%'))
				AND $language IS NOT NULL";
			}

			else{
				$sql = "SELECT * FROM testimonials";
			}
			$result = mysqli_query($conn, $sql);
			
			//renders the table
			if($result->num_rows > 0){
				echo "<table><tr><td>Name</td><td>Title</td></tr>";
				//this iterates through each row
				while($row = $result->fetch_assoc()){
					echo "<tr><td>".$row["firstName"]." ".$row["lastName"]."</td>";

					echo "<td><a href=\"./content/".$row[getLanguage()]."\">".$row["title"]."</a></td></tr>"; 
				}
				echo "</table>";
			}
			else{
				echo "<p>We couldn't find anything that matched the search...</p>";
			}

			function cleanInput($var){
				$var = trim($var);
				$var = stripslashes($var);
				$var = htmlspecialchars($var);
				return $var;
			}

			function getLanguage(){
				$language = cleanInput($_GET["language"]);
				if($language == Japanese)
					return "japaneseLink";
				if($language == Mandarin)
					return "chineseLink";
				return "englishLink";
			}
		?>
	</div>

	<!--Includes the footer file-->
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/footer.html";?>

</body>
</html>
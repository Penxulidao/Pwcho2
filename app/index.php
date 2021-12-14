<?php
	$db = new mysqli($_ENV["MYSQL_HOST"], $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DB"]);

	if (isset($_POST['msgContent'])) {
		$db->query("INSERT INTO messages VALUES(null, '{$_POST['msgContent']}')");
		echo $db->error;
	}

	echo "<style>";
	echo ".rounded-input {";
	echo "border-radius:10px;";
	echo "width:300px";
	echo "}";
	
	echo "	
		button {
		  font-weight: 700;
		  color: white;
		  text-decoration: none;
		  padding: .8em 1em calc(.8em + 3px);
		  border-radius: 3px;
		  background: rgb(64,199,129);
		  box-shadow: 0 -3px rgb(53,167,110) inset;
		  transition: 0.2s;
		  }	   
		button:hover { background: rgb(53, 167, 110); }
		button:active {
		  background: rgb(33,147,90);
		  box-shadow: 0 3px rgb(33,147,90) inset;
		}
	";
	echo "</style>";

	echo "<form method='POST'>";
	echo "<input class='rounded-input' name='msgContent'></input></br>";
	echo "<hr>";
	echo "<button type='submit'>Dodaj</button>";
	echo "</form>";

	$messages = $db->query("SELECT * FROM messages");
	while ($message = $messages->fetch_assoc()) {
		echo "<div>{$message['message']}</div>";
	}

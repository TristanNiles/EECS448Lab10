<?php
$author_id = $_POST["author"];
$content = $_POST["post"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "t070m625", "Ceech4ee", "t070m625");

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "INSERT INTO Posts (content, author_id)
VALUES ('" . $content . "', '" . $author_id . "');";

/*$query = "INSERT INTO Users (user_id)
VALUES ('" . $user_id . "')";*/

if ($content != "" AND $result = $mysqli->query($query)) {
	echo "Stored successfully";
} else {
	echo "Not stored successfully";
}

$mysqli->close();
?>

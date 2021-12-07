<?php
$author_id = $_POST["users"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "t070m625", "Ceech4ee", "t070m625");

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "SELECT content FROM Posts WHERE author_id = '". $author_id . "';";


echo "<table>";
echo "<tr><th>Posts</th></tr>";
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["content"] . "</td></tr>";
	}
 	//free result set
	$result->free();
}
echo "</table>";

$mysqli->close();

?>

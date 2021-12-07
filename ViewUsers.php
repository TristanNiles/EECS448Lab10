<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t070m625", "Ceech4ee", "t070m625");

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "SELECT * FROM Users";


echo "<table>";
echo "<tr><th>User_ID</th></tr>";
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["user_id"] . "</td></tr>";
	}
 	//free result set
	$result->free();
}
echo "</table>";

$mysqli->close();

?>

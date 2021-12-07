<?php
$post_ids = $_POST["del"];
$query = array();

for ($i = 0; $i < count($post_ids); $i++) {
	$query[$i] = "DELETE FROM Posts WHERE post_id = '" . $post_ids[$i] . "';";
}

$mysqli = new mysqli("mysql.eecs.ku.edu", "t070m625", "Ceech4ee", "t070m625");

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

for ($i = 0; $i < count($query); $i++) {

	if ($result = $mysqli->query($query[$i])) {
		echo "Deleted post " . $post_ids[$i] . " successfully.<br>";
	} else {
		echo "Failed to delete post" . $post_ids[$i] . ".<br>";
	}


}

$mysqli->close();

?>

<?php
session_start();

$sessionusername = $_SESSION['username'];

$servername = "localhost";
$username = "root";
$password = "2005eren07";
$dbname = "giftlist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$linkid = $_POST['linkid'];

// sql to delete a record
$sql = "DELETE FROM links WHERE link_id='$linkid'";

	if ($conn->query($sql) === TRUE) {
	  echo "Record deleted successfully";
	} else {
	  echo "Error deleting record: " . $conn->error;
	}

$conn->close();

header("location:profile.php?username=$sessionusername");
?>
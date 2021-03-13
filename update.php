<?php
session_start();

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

$sessionusername = $_SESSION['username'];

$updatename = $_POST['updatename'];
$updateusername = $_POST['updateusername'];
$updatebirthday = $_POST['updatebirthday'];
$updatebgimg = $_POST['updatebgimg'];
$updatedescription = $_POST['updatedescription'];


$sql = "UPDATE users SET name='$updatename', username='$updateusername', bgimg='$updatebgimg', description='$updatedescription' WHERE username='$sessionusername'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

header("location:profile.php?username=$sessionusername");
?>
<!DOCTYPE html>
<html>
<head>
<title>GiftList - Registration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php
//Creating a new account
session_start();
$sessionusername = $_SESSION['username'];

header("location:profile.php?username=$sessionusername");

$con = mysqli_connect('localhost','root','2005eren07');

mysqli_select_db($con, 'giftlist');

$registername = $_POST['registername'];
$registerusername = $_POST['registerusername'];
$registeremail = $_POST['registeremail'];
$registerpassword = $_POST['registerpassword'];
$registerbirthday = $_POST['registerbirthday'];

$s = "SELECT * FROM users WHERE username = '$registerusername'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1) {
	echo "Username is already taken!";
} else {
	$reg = "INSERT INTO users (name, username, email, password, birthday)
	 VALUES ('$registername','$registerusername','$registeremail','$registerpassword', '$registerbirthday')";
	 mysqli_query($con, $reg);
	 echo "Registration successful!";
	 $_SESSION['username'] = $registerusername;
}


?>


<?php
/*
//Logging a user in
session_start();
 
if (isset($_POST['login'])) {
 
    $loginusername = $_POST['loginusername'];
	$loginpassword = $_POST['loginpassword'];
	
	$conn = new PDO("mysql:host=localhost;dbname=expressview", "root", "2005eren07");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $query = $conn->prepare("SELECT * FROM users WHERE user_username=:loginusername");
    $query->bindParam("user_username", $loginusername, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($loginpassword, $result['user_password'])) {
            $_SESSION['user_id'] = $result['user_id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

*/
?>


</body>
</html>
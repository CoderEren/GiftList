<!DOCTYPE html>
<html lang="en">
<title>GiftList</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">GiftList</a>
	<a href="#login" class="w3-bar-item w3-button w3-padding-large w3-red w3-hide-small">Login</a>
	<a href="#register" class="w3-bar-item w3-button w3-padding-large w3-red w3-hide-small">Register</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#login" class="w3-bar-item w3-button w3-padding-large">Login</a>
	<a href="#register" class="w3-bar-item w3-button w3-padding-large">Register</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">GiftList</h1>
  <p class="w3-xlarge">Create a profile. Add your social media accounts. Add your links or gifts. View your friends' links and social media profiles.<br>You must be logged in to view someone's profile.</p>
  <a href="#register"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button></a>
</header>

<!-- First Grid -->
<div id="login" class="w3-row-padding w3-padding-32 w3-container">
  <div class="w3-content">
    <div class="w3-half">
      <h1>Log In</h1>
      <form action="validation.php" method="POST">
	  
	  <div style="margin:7px;">
	  <label style="float:left;">Username</label>
		<input style="width:100%;" type="text" placeholder="Enter your username..." name="loginusername" required><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Password</label>
		<input style="width:100%;"type="password" placeholder="Enter your password..." name="loginpassword" required><br>
		</div>
		
		<input style="margin:7px;width:100%;"class="w3-blue w3-btn" type="submit" value="Login" name="login">
	</form>
    </div>

    <div class="w3-half w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div id="register" class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-half w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-half">
      <h1>Create A Free Account</h1>
      <form action="registration.php" method="POST">
		<div id="registrationform" style="">
			<div style="margin:7px;">
			<label style="float:left;">Full Name</label><br>
			<input type="text" style="width:100%;" name="registername" placeholder="Enter your full name..." required>
			</div>
			
			<div style="margin:7px;">
			<label style="float:left;">Username</label><br>
			<input type="text" style="width:100%;" name="registerusername" placeholder="Enter your username..." required>
			</div>
			
			<div style="margin:7px;">
			<label style="float:left;">Email Address</label><br>
			<input type="email" style="width:100%;" name="registeremail" placeholder="Enter your email..." required>
			</div>
			
			<div style="margin:7px;">
			<label style="float:left;">Password</label><br>
			<input type="password" style="width:100%;" name="registerpassword" placeholder="Enter your password..." required>
			</div>
			
			<p>By clicking "Create Account", you agree to our <a href="privacy-policy.html">Privacy Policy</a>.</p>
			<p><button class="w3-btn w3-blue" style="width:100%;" type="submit" name="register">Create Account</button></p>
		</div>
	  </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xxlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>

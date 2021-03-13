<!DOCTYPE html>
<html>
<title>GiftList - Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>

<?php 
		 
		 $db = new PDO("mysql:host=localhost;dbname=giftlist","root","2005eren07");

	$opinionsor = $db->prepare("SELECT * FROM users WHERE username=:username");
	$opinionsor->execute(array(
		'username' => $_GET['username']
	));
	$opinioncek=$opinionsor->fetch(PDO::FETCH_ASSOC); ?>

<body class="w3-theme-l5" style="background-image:url('<?php echo $opinioncek['bgimg'] ?>');">

<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('location:index.php');
}
?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="<?php echo "profile.php?username=".$_SESSION['username']; ?>" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home"></i> GiftList</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-user"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="friends.php" class="w3-bar-item w3-button">My Friends</a>
	  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <hr>
		 
         <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> <?php echo $opinioncek['username'] ?></p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $opinioncek['name'] ?></p>
		 <p><?php echo $opinioncek['description'] ?></p>

<!--
 <a rel='nofollow' target='_blank' href='<?php echo 'https://facebook.com/'.$opinioncek['facebook'] ?>'><button class='w3-btn w3-margin-bottom' style='background-color:#4267B2;color:#fff;width:100%;'><i class='fa fa-facebook-official'></i> Follow me on Facebook</button></a>
<a rel='nofollow' target='_blank' href='<?php echo 'https://youtube.com/'.$opinioncek['youtube'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#FF0000;color:#282828;width:100%;"><i class="fa fa-youtube"></i> Subscribe to my YouTube channel</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://instagram.com/'.$opinioncek['instagram'] ?>'><button class="w3-btn w3-margin-bottom" style="background:linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);color:#fff;width:100%;"><i class="fa fa-instagram"></i> Follow me on Instagram</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://snapchat.com/'.$opinioncek['snapchat'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#FFFC00;color:#000;width:100%;"><i class="fa fa-snapchat"></i> Follow me on Snapchat</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://pinterest.com/'.$opinioncek['pinterest'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#BD081C;color:#fff;width:100%;"><i class="fa fa-pinterest"></i> Follow me on Pinterest</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://twitter.com/'.$opinioncek['twitter'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#1DA1F2;color:#fff;width:100%;"><i class="fa fa-twitter"></i> Follow me on Twitter</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://linkedin.com/'.$opinioncek['linkedin'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#2867B2;color:#fff;width:100%;"><i class="fa fa-linkedin"></i> Follow me on Linkedin</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://tiktok.com/'.$opinioncek['tiktok'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#010101;color:#69C9D0;width:100%;"><i class="fa fa-tiktok"></i> Follow me on Tiktok</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://twitch.com/'.$opinioncek['twitch'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#6441A4;color:#fff;width:100%;"><i class="fa fa-twitch"></i> Follow me on Twitch</button></a>
 <a rel='nofollow' target='_blank' href='<?php echo 'https://soundcloud.com/'.$opinioncek['soundcloud'] ?>'><button class="w3-btn w3-margin-bottom" style="background-color:#FE5000;color:#fff;width:100%;"><i class="fa fa-soundcloud"></i> Follow me on Soundcloud</button></a>
 -->
 
 <script>
		function myFunction2() {
			document.getElementById('id01').style.display='block';
		}
</script>
		<div class='w3-padding'>
		<?php 
			if($_SESSION['username'] == $_GET['username']) {
				echo "<button onclick='myFunction2()' style='width:100%;' class='w3-blue w3-btn'>Update Account Info</button>";
			}
		?>
		</div>
		
		
		
		<div class='w3-padding'>
		<?php 
			if($_SESSION['username'] != $_GET['username']) {
				echo "<button onclick='myFunction2()' style='width:100%;' class='w3-blue w3-btn'>Add Friend</button>";
			}
		?>
		</div>
		
		
		</div>
      </div>
      <br>
	  
	  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        
		<form action="update.php" method="POST">
	  
	  <div style="margin:7px;">
	  <label style="float:left;">Name</label>
		<input style="width:100%;" value="<?php echo $opinioncek['name'] ?>" type="text" name="updatename"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['username'] ?>" type="text" name="updateusername"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Description (Bio)</label>
		<input style="width:100%;" value="<?php echo $opinioncek['description'] ?>" type="text" name="updatedescription"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Background Image URL</label>
		<input style="width:100%;" value="<?php echo $opinioncek['bgimg'] ?>" type="text" name="updatebgimg"><br>
		</div>
		<!--
		<div style="margin:7px;">
		<label style="float:left;">Facebook Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['facebook'] ?>" type="text" name="updatefacebook"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">YouTube Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['youtube'] ?>" type="text" name="updateyoutube"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Instagram Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['instagram'] ?>" type="text" name="updateinstagram"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Snapchat Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['snapchat'] ?>" type="text" name="updatesnapchat"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Pinterest Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['pinterest'] ?>" type="text" name="updatepinterest"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Twitter Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['twitter'] ?>" type="text" name="updatetwitter"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Linkedin Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['linkedin'] ?>" type="text" name="updatelinkedin"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Tiktok Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['tiktok'] ?>" type="text" name="updatetiktok"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Twitch Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['twitch'] ?>" type="text" name="updatetwitch"><br>
		</div>
		
		<div style="margin:7px;">
		<label style="float:left;">Soundcloud Username</label>
		<input style="width:100%;" value="<?php echo $opinioncek['soundcloud'] ?>" type="text" name="updatesoundcloud"><br>
		</div>
		-->
		<input style="margin:7px;width:100%;" class="w3-button w3-theme" type="submit" value="Update" name="updatesubmit">
	</form>
		
      </div>
    </div>
  </div>
	  
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      
          
		  
		  
		  <?php 
			
			$con = mysqli_connect('localhost','root','2005eren07');
			mysqli_select_db($con, 'giftlist');
			
			$usernamefromget = $_GET['username'];
			$s = "SELECT * FROM links WHERE link_owner_username = '$usernamefromget'";
			$result = mysqli_query($con, $s);
			$num = mysqli_num_rows($result);
		  
			if($num == 0) {
					echo "
						<div class='w3-row-padding w3-margin-bottom'>
        <div class='w3-col m12'>
		  <div class='w3-card w3-round w3-white'>
            <div class='w3-container w3-padding'>
              <h6>There are currently no links posted by this user!</h6>
            </div>
          </div>
		  </div>
      </div>
					";
				}
		  
			if($_SESSION['username'] == $_GET['username']) {
				
				echo "
				<div class='w3-row-padding'>
        <div class='w3-col m12'>
		  <div class='w3-card w3-round w3-white'>
            <div class='w3-container w3-padding'>
              <h6 class='w3-opacity'>Post A Link</h6>
              <form action='adding-link.php' method='POST'>
	  
	  <div style='margin:7px;'>
	  <label style='float:left;'>Name of The Link</label>
		<input style='width:100%;' type='text' name='linkname' required><br>
		</div>
		
		<div style='margin:7px;'>
		<label style='float:left;'>The URL (Link)</label>
		<input style='width:100%;' type='url' name='link' required><br>
		</div>
		
		<input style='margin:7px;width:100%;' class='w3-button w3-theme' type='submit' value='Post' name='linkpost'>
	</form>
            </div>
          </div>
		  </div>
      </div>
		  ";
		}
		?>
		  
		  
		  
		  
        
      
	  <?php 
		 
		 $dbb = new PDO("mysql:host=localhost;dbname=giftlist","root","2005eren07");

	$linksor = $dbb->prepare("SELECT * FROM links WHERE link_owner_username=:username");
	$linksor->execute(array(
		'username' => $_GET['username']
	));  

		while($linkcek=$linksor->fetch(PDO::FETCH_ASSOC)) {
		?>
		  
			  <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
			  
			  <!--
			  <form action="deletelink.php" method="POST">
				  <input type="hidden" name="linkid" value="">

				<button type='submit' name='deletelink' class='w3-button'>&times;</button>
				  
			  </form>-->
			  
				<a rel="nofollow" target="_blank" href="<?php echo $linkcek['link_url'] ?>"><h3 style="margin-top:0px;" class="w3-hover-opacity w3-padding"><?php echo $linkcek['link_name'] ?></h3></a>
				</div>
		  
		  
		  <?php } ?>
	  
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GiftList Sidebar Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5747013921515016"
     data-ad-slot="3908708897"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
      <br>
	  
	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GiftList Sidebar Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5747013921515016"
     data-ad-slot="3908708897"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
      <br>
	  
	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GiftList Sidebar Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5747013921515016"
     data-ad-slot="3908708897"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
      <br>
	  
	  <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GiftList Sidebar Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5747013921515016"
     data-ad-slot="3908708897"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
      <br>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Made by Eren Geridonmez</h5>
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
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

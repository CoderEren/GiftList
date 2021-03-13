<!DOCTYPE html>
<html>
<head>
<title>GiftList - Logout</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php
session_start();
session_destroy();

header('location:index.php');
?>

</body>
</html>
<?php
session_start();

if (isset($_SESSION['firstname']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['firsname']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php
}else{
     header("Location: signin.php");
     exit();
}
 ?>

?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>FarmerEyes</title>
</head>
<body>
<?PHP
session_start();
	// remove all session variables
//session_unset(); 

// destroy the session 
session_destroy(); 
	//$_SESSION["login"]="notok";
	header('location:index.php');

?>
</body>
</html>
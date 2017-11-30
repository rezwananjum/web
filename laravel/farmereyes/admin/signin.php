<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?PHP

$con=mysqli_connect("localhost", "root", "", "soil");

$val1 = $_GET['email'];
$val2 = $_GET['pass'];
$sql = "SELECT pass FROM user_details WHERE email='$val1'" ;
$result = $con->query($sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        if ($row["pass"]==$val2){
        	//echo 'correct';
        	$_SESSION["login"]="ok";
            $_SESSION["username"]=$val1;
        	header('Location: home.php');
        }else {
        	//echo "Incorrect1";
        	header('Location: login.php');
        }
    }
} else {
    //echo "Incorrect2";
    header('Location: login.php');
}
mysqli_close($con);


?>
</body>
</html>
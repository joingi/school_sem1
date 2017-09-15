<?php
session_start(); // STARTING SESSION
ob_start();

$error=''; // Variable to store Error Massage
if (isset($_POST['submit'])) {
if (empty($_POST['myusername']) || empty($_POST['mypassword'])) {
		$error = "myusername or mypassword is invaild";
}
else {
	//Deffine $myusername and $mypassword
	$myusername=$_POST['myusername'];
	$mypassword=$_POST['mypassword'];
	//Establishing Conection with Server by passing server_name, user_id and mypassword as a parameter
$conn = mysqli_connect('localhost', 'jingi_sijohnson', 'joey1007', 'jingi_newsletter');
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
//To protect MySQL injection for Security purpose
$usernsme = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

//SQL querry to fetch information of registerd users and finds usher match.
$query = "SELECT * FROM members WHERE username= '$myusername' AND password='$mypassword'";
$result = mysqli_query($conn, $query);

$rows = mysqli_result($query);

if ($rows == 1) {
$_SESSION['myusername']=$myusername; // Initializing Session
$_SESSION['mypassword'] = $mypassword; 
header("location:profile.php"); //Redirrecting to Other Page	
} else {
	$error = "myusername or mypassword is invalid";
}
mysql_close($conn); //Closing connection
}
}
ob_end_flush();
?>
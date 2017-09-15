<?php 
//Establishing Connection with Server by passing server_name, usher_id and password as a parameter

$conn = mysqli_connect('localhost', 'jingi_sijohnson', 'joey1007', 'jingi_newsletter');
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
//Storing session
$_SESSION['myusername'];
//SQL query To Fetch Complete Information Of User
$query = "SELECT * FROM members WHERE username= '$myusername'";
$result = mysqli_query($conn, $query);

$row = mysql_fetch_assoc($conn, $query);
$myusername =$row['username'];

if(!isset($myusername)){
	mysql_close($conn); //Closing Connection
	header('Location: index.php'); //Redirecting to Home page
}
?>
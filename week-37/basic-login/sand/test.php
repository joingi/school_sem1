<?php
	session_start();
	echo "testing the page, what do I have in the session";
	echo $_SESSION['sUserLastName'];
?>
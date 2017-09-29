<?php

// $sUserName = $_POST["inputUserName"];
// $sUserEmail = $_POST["inputUserEmail"];

// User image
// Add uniqId to users image  - Read: https://www.w3schools.com/php/func_filesystem_pathinfo.asp
$sImageExtension = pathinfo($_FILES['fileUserImage']['name'], PATHINFO_EXTENSION);
$sImageFolder = 'images/';
// $sUserImage = $_FILES['fileUserImage']['name'];
$sUserImage = 'user_image-'.uniqid().'.'.$sImageExtension;
$sImageSaveTo = $sImageFolder.$sUserImage;
// Move image file to images folder
move_uploaded_file( $_FILES['fileUserImage']['tmp_name'], $sImageSaveTo);
// echo $sImageSaveTo. "and " .$sUserName.$sUserEmail. "Sould be daved to data.txt";

// make string of new users - convert to string
$sjNewUser = '{
"id": "'.uniqid().'",
"user_name": "'.$_POST["inputUserName"].'",
"user_email": "'.$_POST["inputUserEmail"].'",
"user_image": "'.$sImageFolder.$sUserImage.'"
}';
// decode stringArray into object
$aNewUser = json_decode($sjNewUser);

// Get all users and load into array
$sOldUsers = file_get_contents('data.txt');
$sjOldUsers = json_decode($sOldUsers);

// add new users to oldUser array
array_push($sjOldUsers, $aNewUser);

// encode users array and save back to data.txt
$sNewUsers = json_encode($sjOldUsers);
file_put_contents('data.txt', $sNewUsers);

// echo $sNewUsers;

echo "New user sucessfully saved, .$sNewUsers."; // Reply to the client via AJAX


?>
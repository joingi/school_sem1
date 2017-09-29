<?php
// Image
$sourcePath = $_FILES['fileImage']['tmp_name'];
$targetPath = "images/".$_FILES['fileImage']['name'];
// Move uploaded image to targetPath
move_uploaded_file($sourcePath, $targetPath);


$user = json_decode('{ }');
$user->name = $_POST['txtName'];
$user->image = $sourcePath.$targetPath;

$sOldUser = file_get_contents('data.txt');
$aOldUser = json_decode($sOldUser);

array_push($aOldUser, $user);

$sUser = json_encode($aOldUser);
file_put_contents('data.txt', $sUser);
echo $sUser;


// Storing source path of the file in a variable
//  $sourcePath = $_FILES['file']['tmp_name'];
// Target path where file is to be stored
//  $targetPath = "upload/".$_FILES['file']['name'];
// Moving Uploaded file
// move_uploaded_file($sourcePath,$targetPath);
?>
<?php
// get file txtData
$sjUsersData = file_get_contents('data.txt');
// echo $$sjUsersData;
// convert UserData to object
$ajUsersData = json_decode($sjUsersData);

// loop array to remove information i dont want to display
for ($i=0; $i < count($ajUsersData) ; $i++) {
     unset($ajUsersData[$i]->user_email);
     unset($ajUsersData[$i]->user_image);
}
// convert back to string and print out
$sjUsersData = json_encode($ajUsersData);



?>

<?php echo $sjUsersData; ?>


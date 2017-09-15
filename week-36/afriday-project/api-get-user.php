<?php
$sUserId = $_GET['id'];
// get file txtData
$sjUsersData = file_get_contents('data.txt');
// echo $$sjUsersData;
// convert UserData to object
$ajUsersData = json_decode($sjUsersData);

// loop array and match pageId to userId
for ($i=0; $i < count($ajUsersData) ; $i++) {
    if ($ajUsersData[$i]->id == $sUserId) {
        echo json_encode($ajUsersData[$i]);
        return;
    }

}

?>
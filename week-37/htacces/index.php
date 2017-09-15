<?php

$sWebSite = file_get_contents("http://kea.dk/da");
/* find - replace - object */
str_replace("Om KEA", "GET NEW MAC", $sWebSite);
echo $sWebSite;

?>
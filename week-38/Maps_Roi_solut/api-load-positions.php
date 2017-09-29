<?php
$fileName = 'positions.txt';
$sPositions = file_get_contents($fileName);
echo $sPositions;
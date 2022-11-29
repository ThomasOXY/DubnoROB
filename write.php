<?php

$x1 = $_POST['x1'];
$y1 = $_POST['y1'];
$x2 = $_POST['x2'];
$y2 = $_POST['y2'];


$myfile = fopen("cords.txt", "w") or die("Unable to open file!");
$txt = $x2;
fwrite($myfile, $txt);
$txt = $y2;
fwrite($myfile, $txt);
fclose($myfile);
?>

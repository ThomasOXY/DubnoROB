<?php
$myfile = fopen("cords.txt", "w") or die("Unable to open file!");
$Xcord = "LiborX\n";
fwrite($myfile, $Xcord);
$Ycord = "LOk\n";
fwrite($myfile, $Ycord);
fclose($myfile);
?>
hello
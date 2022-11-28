<?php
$myfile = fopen("cords.txt", "w") or die("Unable to open file!");
$Xcord = "LiborX\n";
fwrite($myfile, $Xcord);
$Ycord = "LOketY\n";
fwrite($myfile, $Ycord);
fclose($myfile);
?>
hello
<?php
$myfile = fopen("/home/pi/LINKS.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/home/pi/LINKS.txt"));
fclose($myfile);
?>


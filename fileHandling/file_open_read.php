<?php

$myfile = fopen("myfile.txt", "r") or die("Unable to open file!");

echo fread($myfile,10);

fclose($myfile);

?>
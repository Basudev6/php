<?php

$myfile = fopen("myfile.txt", "r") 
or die("Unable to open file!");

echo fgets($myfile);

fclose($myfile); // read a line


?>
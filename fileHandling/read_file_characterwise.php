<?php

$myfile = fopen("myfile.txt","r") or die("Unable to open file!");

// Output one line until end-of-file

while(!feof($myfile))
{
    echo fgetc($myfile) . "<br>";
}
fclose($myfile);

?>
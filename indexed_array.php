<?php

$data=array("Ram","shyam","sita","hari",1,2);
echo $data[1] ."<br>";

echo "display all array item using for loop<br>";
for($i=0;$i<count($data);$i++)
{
    echo $data[$i] ."<br>";
}

// echo "fpr developer debugging<br>";
// print_r($data);
?>
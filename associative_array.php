<?php


// associative array (Key=>Value)

$record=array("Name"=>"shyam","Address"=>"Bharatpur","Age"=>12,"Email"=>"abc@gmail.com");

echo $record["Name"] ."<br>";

// print_r($record);


// in associative array we use foreach loop to show all array item.

foreach($record as $key=>$value)
{
    echo "$key is $value<br>";
}

?>
<?php

if(file_exists("myfile11.txt")){
    unlink("myfile11.txt");
    echo "file deleted";
}
else{
    echo "file not deleted";
}

?>
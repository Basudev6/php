<?php

if(file_exists("myfile.txt")){
    rename("myfile.txt", "myfile11.txt");
    echo "file renamed";
}
else{
    echo "file not exists";
}

?>
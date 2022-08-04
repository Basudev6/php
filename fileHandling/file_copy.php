<?php

if(file_exists("myfilecopy.txt")){

    echo "file already exist";
}
else{
    copy("myfile.txt", "myfilecopy.txt");
    echo "copied";
}

?>
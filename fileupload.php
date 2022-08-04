<?php

if(isset($_POST["btnUpload"]))
{
    if(move_uploaded_file($_FILES["upfile"]["tmp_name"],"uploads\\".time().$_FILES["upfile"]["name"]))
    {
        echo "File uploaded";

    }
    else{
        echo "File upload fail";
    }
}

?>

<html>
    <head>
        <title>File upload in php</title>
    </head>
    <body>
        <form action="fileupload.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Select your file</td>
                    <td><input type="file" name="upfile"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Upload" name="btnUpload"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
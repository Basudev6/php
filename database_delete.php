<?php

$id="";
if(isset($_GET["btnDelete"]))
{
    $id=$_GET['id']; 
    
    $conn= mysqli_connect("localhost","root","","indrenibcadb");

    if(!$conn){
        die("Error occured!");
    }

    $sql="delete from tblstudent where id=$id";
    $result=mysqli_query($conn,$sql);
     
    if($result){
        echo "Data has been deleted successfully";
    }
    else{
        echo "Data not deleted"; 
    }


}


?>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action="database_delete.php" method="get">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id"></td>   
                </tr>
                <tr>
                    <td><input type="submit" name="btnDelete" value="Delete"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php

$id=$name=$address=$phone=$email=$gendar=$class=$fees="";

if(isset($_POST["btnsubmit"]))
{
    $name=$_POST["txtname"];
    $address=$_POST["txtaddress"];
    $phone=$_POST["txtphone"];
    $email=$_POST["txtemail"];
    $gendar =$_POST["txtgendar"];
    $class=$_POST["txtclass"];
    $fees=$_POST["txtfees"];

    // database connection

    $conn= mysqli_connect("localhost","root","","indrenibcadb");

    if(!$conn){
        die("Error occured!");
    }

    $sql="insert into tblstudent(id,name,address,phone,email,gendar,class,fees) values(Null,'$name','$address','$phone','$email','$gendar','$class','$fees')";
    $result=mysqli_query($conn,$sql);
     
    if($result){
        echo "Data has been inserted successfully";
    }
    else{
        echo "Data not inserted"; 
    }

}

?>
<html>
    <head>
        <title>Database connection in php</title>
    </head>
    <body>
    <form action="database_connect.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtname" value="<?php echo $name ;?>"required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="txtaddress" value="<?php echo $address ;?>" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="txtphone" value="<?php echo $phone ;?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="txtemail" value="<?php echo $email ;?>" required></td>
            </tr>
            <tr>
                <td>Gendar</td>
                <td><input type="text" name="txtgendar" value="<?php echo $gendar ;?>" required></td>
            </tr>
            <tr>
                <td>Class</td>
                <td><input type="text" name="txtclass" value="<?php echo $class ;?>" required></td>
            </tr>
            <tr>
                <td>Fees</td>
                <td><input type="text" name="txtfees" value="<?php echo $fees ;?>" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnsubmit"></td>
            </tr>
        </table>
    </form>
    </body>
</html>
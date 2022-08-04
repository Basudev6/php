<?php
session_start();
$user="";
$pass="";

if(isset($_POST["btnsubmit"]))
{
    $user=$_POST["txtuser"];
    $pass=$_POST["txtpass"];
    if($user=="admin" && $pass=="admin")
    {
        $_SESSION["valid"]=true;
        header("location:welcome.php");
    }
    else{
        echo "Incorrect username and password";
    }
}

?>


<html>
    <head>
        <title>Session in php</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="txtuser"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txtpass"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnsubmit" value="login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
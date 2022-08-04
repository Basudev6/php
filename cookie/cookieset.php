<?php

if(isset($_POST['btnsubmit']))
{
    setcookie("name",$_POST['txtname'],time()+60,"/");
    header("location:cookieread.php");
}

?>


<html>
    <head>
        <title>Setting cookie in php</title>
    </head>
    <body>
        <form action="cookieset.php" method="post">
            <table>
                <tr>
                    <td>Enter your name</td>
                    <td><input type="text" name="txtname" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnsubmit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
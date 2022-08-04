<?php
session_start();
if(!isset($_SESSION["valid"]))
{
   header("location:login.php");
}
if(isset($_POST["btnout"]))
{
    session_destroy();
    header("location:login.php");
}

?>


<html>
    <head>
        <title>Session in php</title>
    </head>
    <body>
        <form action="welcome.php" method="post">
            <h1>Welcome to dashboard</h1>
            <input type="submit" name="btnout" value="log out">
        </form>
    </body>
</html>
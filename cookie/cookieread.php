<?php

$name="";
if(isset($_COOKIE['name']))
{
    $name=$_COOKIE['name'];
}
else{
    $name="Guest";
}

?>





<html>
    <head>
        <title>Reading cookie in php</title>
    </head>
    <body>
        <form action="cookieread.php" method="post">
           Your name is <?php echo $name ; ?>;
        </form>
    </body>
</html>
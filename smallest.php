<?php

$f="";
$s="";
$r="";

if(isset($_GET["btnCalcu"]))
{
    $f=$_GET["txtfirst"];
    $s=$_GET["txtsecond"];
    $r=$f>$s?$s:$f;
}

?>


<html>
    <head>
        <title>Smallest Number</title>
    </head>
    <body>
        <form action="smallest.php" method="get">
            <table>
                <tr>
                    <td>Enter first number</td>
                    <td><input type="text" name="txtfirst" value="<?php echo $f; ?>"></td>
                </tr>
                <tr>
                    <td>Enter second number</td>
                    <td><input type="text" name="txtsecond" value="<?php echo $s; ?>"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="btnCalcu" value="Calculate"></td>
                </tr>
                <tr>
                    <td>Smallest Number</td>
                    <td><input type="text" name="txtResult" value="<?php echo $r; ?>"></td>
                </tr>
            </table>

        </form>
    </body>
</html>
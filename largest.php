<?php

$f="";
$s="";
$t="";
$r="";

if(isset($_GET["btnCalcu"]))
{
    $f=$_GET["txtfirst"];
    $s=$_GET["txtsecond"];
    $t=$_GET["txtthird"];
    if($f>$s && $f>$t)
        $r=$f;
    elseif($s>$f && $s>$t)
        $r=$s;
    else
        $r=$t;
       
}

?>

<html>
    <head>
        <title>Largest Number</title>
    </head>
    <body>
        <form action="largest.php" method="get">
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
                    <td>Enter third number</td>
                    <td><input type="text" name="txtthird" value="<?php echo $t; ?>"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="btnCalcu" value="Calculate"></td>
                </tr>
                <tr>
                    <td>Largest Number</td>
                    <td><input type="text" name="txtResult" value="<?php echo $r; ?>"></td>
                </tr>
            </table>

        </form>
    </body>
</html>
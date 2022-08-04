<?php

$n="";
$f="";

if(isset($_GET["btnSubmit"]))
{
    $n=$_GET["txtNum"];
    $fac=1;
    for($i=1;$i<=$n;$i++)
    {
        $fac=$fac*$i;
    }
    $f=$fac;
}


?>





<html>
    <head>
        <title>Factotial</title>
    </head>
    <body>
        <form action="factorial.php" method="get">
            <table>
                <tr>
                    <td>Enter number</td>
                    <td><input type="text" name="txtNum" value="<?php echo $n; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnSubmit" value="Calculate"></td>
                </tr>
                <tr>
                    <td>Factorial</td>
                    <td><input type="text" name="txtFact" value="<?php echo $f; ?>"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
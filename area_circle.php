<?php

$r="";
$a="";

if(isset($_GET["btnCalculate"]))
{
    $r=$_GET["txtRadius"];
    $a=3.14*$r*$r;
}

?>


<html>
    <head>
        <title>Area of circle</title>
    </head>
    <body>
        <form action="area_circle.php" method="get">
            <table>
                <tr>
                    <td>Enter radius</td>
                    <td><input type="text" name="txtRadius" value="<?php echo $r; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnCalculate" value="Calculate"></td>
                </tr>
                <tr>
                    <td>Area</td>
                    <td><input type="text" name="txtArea" value="<?php echo $a; ?>"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
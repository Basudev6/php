<?php

$n="";
$r="";

if(isset($_GET["btnSubmit"]))
{
    $n=$_GET["txtNum"];
    $temp=$n;
    $rev=0;
    while($temp>0)
    {
        $rem=$temp%10;
        $rev=$rev*10+$rem;
        $temp=floor($temp/10);

    }
    $r=$rev;
}


?>


<html>
    <head>
        <title>Reverse</title>
    </head>
    <body>
        <form action="reverse.php" method="get">
            <table>
                <tr>
                    <td>Enter number</td>
                    <td><input type="text" name="txtNum" value="<?php echo $n; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnSubmit" value="Calculate"></td>
                </tr>
                <tr>
                    <td>Reverse of digits</td>
                    <td><input type="text" name="txtReverse" value="<?php echo $r; ?>"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
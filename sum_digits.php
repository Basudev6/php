<?php

$n="";
$s="";

if(isset($_GET["btnSubmit"]))
{
    $n=$_GET["txtNum"];
    $temp=$n;
    $sum=0;
    while($temp>0)
    {
        $rem=$temp%10;
        $sum=$sum+$rem;
        $temp=floor($temp/10);

    }
    $s=$sum;
}


?>



<html>
    <head>
        <title>Sum Of Digits</title>
    </head>
    <body>
        <form action="sum_digits.php" method="get">
            <table>
                <tr>
                    <td>Enter number</td>
                    <td><input type="text" name="txtNum" value="<?php echo $n; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnSubmit" value="Calculate"></td>
                </tr>
                <tr>
                    <td>Sum of digits</td>
                    <td><input type="text" name="txtSum" value="<?php echo $s; ?>"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
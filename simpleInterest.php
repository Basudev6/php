<?php
$v1="";
$v2="";
$v3="";
$r="";
if(isset($_GET["btnCalcu"]))
{
    $v1=$_GET["txtv1"];
    $v2=$_GET["txtv2"];
    $v3=$_GET["txtv3"];
    $r=($v1*$v2*$v3)/100;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="simpleInterest.php" method="get">
        <table>
            <tr>
                <td>Principal Amount</td>
                <td>
                    <input type="text" name="txtv1" value="<?php echo $v1;?>">
                </td>
            </tr>
            <tr>
                <td>Rate</td>
                <td>
                    <input type="text" name="txtv2" value="<?php echo $v2;?>">
                </td>
            </tr>
            <tr>
                <td>Time</td>
                <td>
                    <input type="text" name="txtv3" value="<?php echo $v3;?>">
                </td>
            </tr>
            <tr>
                <input type="submit" name="btnCalcu" value="Calculate">
            </tr>
            <tr>
                <td>Simple Interest</td>
                <td>
                    <input type="text" name="txtResult" value="<?php echo $r;?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
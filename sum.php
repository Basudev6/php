<?php
$v1="";
$v2="";
$r="";
if(isset($_GET["btnAdd"]))
{
    $v1=$_GET["txtv1"];
    $v2=$_GET["txtv2"];
    $r=$v1+$v2;
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
    <form action="sum.php" method="get">
        <table>
            <tr>
                <td>value 1</td>
                <td>
                    <input type="text" name="txtv1" value="<?php echo $v1;?>">
                </td>
            </tr>
            <tr>
                <td>value 2</td>
                <td>
                    <input type="text" name="txtv2" value="<?php echo $v2;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnAdd" value="Add">
                </td>
            </tr>
            <tr>
                <td>Result</td>
                <td>
                    <input type="text" name="txtResult" value="<?php echo $r;?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
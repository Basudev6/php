<?php

$n="";
$d="";

if(isset($_GET["btnShow"]))
{
    $n=$_GET["txtNum"];
    switch ($n) {
        case '1':
            $d="Sunday";
            break;
        case '2':
            $d="Monday";
            break;
        case '3':
            $d="Tuesday";
            break;
        case '4':
            $d="Wednesday";
            break;
        case '5':
            $d="Thursday";
            break;
        case '6':
            $d="Friday";
            break;
        case '7':
            $d="Saturday";
            break;
        default:
            $d="Invalid Input";
            
    }
}
?>

<html>
    <head>
        <title>Switch in php</title>
    </head>
    <body>
        <form action="switch.php" method="get">
            <table>
                <tr>
                    <td>Enter day number</td>
                    <td><input type="text" name="txtNum" value="<?php echo $n; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnShow" value="Show"></td>
                </tr>
                <tr>
                    <td>Week day name</td>
                    <td><input type="text" name="txtName" value="<?php echo $d; ?>"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
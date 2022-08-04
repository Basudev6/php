<?php

$n="";
$p="";

if(isset($_GET["btnSubmit"]))
{
    $n=$_GET["txtNum"];
    $c=0;
    for($i=2;$i<$n;$i++)
    {
        if($n%$i==0)
        {
            $c=++$c;
            break;
        }
    }
    if($c==1)
        $p="Composite Number";
    else
        $p="Prime Number";
}

?>





<html>
    <head>
        <title>Factotial</title>
    </head>
    <body>
        <form action="prime.php" method="get">
            <table>
                <tr>
                    <td>Enter number</td>
                    <td><input type="text" name="txtNum" value="<?php echo $n; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnSubmit" value="Check"></td>
                </tr>
                <tr>
                    <td>Prime Or Composite</td>
                    <td><input type="text" name="txtPrime" value="<?php echo $p; ?>"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
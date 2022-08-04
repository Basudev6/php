<?php

$to="";
$sub="";
$msz="";


if(isset($_POST["btnSend"]))
{
    $to=$_POST["to"];
    $sub=$_POST["sub"];
    $msz=$_POST["msz"];
    $status=mail($to,$sub,$msz,"from:basu@gmail.com");
    if($status){
        echo "mail send successfully";
    }
    else{
        echo "mail send fail";
    }
}
?>

<html>

<head>
    <title>Send email in php</title>
</head>

<body>
    <h2>Basu co. LTD</h2>
    <form action="email.php" method="post">
    <table>
        <tr>
            <td>To</td>
            <td><input type="email" name="to" value="<?php echo $to; ?>"></td>
        </tr>
        <tr>
            <td>Subject</td>
            <td><input type="text" name="sub" value="<?php echo $sub; ?>"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea name="msz" cols="30" rows="10" value="<?php echo $msz; ?>"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="btnSend" value="Send Email"></td>
        </tr>
    </table>
    </form>
</body>

</html>
<?php
$t="";
$conn=mysqli_connect("localhost","root","","indrenibcadb");
if(!$conn)
{
    die("Error occured");
}

$query="select * from tblstudent";
$result= mysqli_query($conn,$query);

$t= "<table border=1>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Gendar</td>
            <td>Class</td>
            <td>Fees</td>
        </tr>";
        
 while($row= mysqli_fetch_assoc($result))
    {
         $t=$t."<tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[address]</td>
                    <td>$row[phone]</td>
                    <td>$row[email]</td>
                    <td>$row[gendar]</td>
                    <td>$row[class]</td>
                    <td>$row[fees]</td>
                </tr>"; 
    }
    $t=$t."</table>";

?>

<html>
    <head>
        <title>Show All Database Items</title>
    </head>
    <body>
        <form action="database_showall.php" method="post">
            <h1>Student Record</h1>
            <?php echo $t; ?>
        </form>
    </body>
</html>
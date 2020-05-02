<?php
$con = mysqli_connect('localhost','root','','bus') or die('error at connection');
$from=$_POST['FROM'];
$to=$_POST['TO'];
$mor=$_POST['MORNING TIME'];
$eve=$_POST['EVENING TIME'];

$sql = "SELECT * FROM bustime WHERE FROM='$from' AND TO ='$to';
$result = mysqli_query($con,$sql) or die('error at execution');
$i=mysqli_fetch_row($result);
if ($i[0]==$from&&$i[1]==$to) {
        echo "<br> from: ". $row["FROM"]. "  to: ". $row["TO"]. "morning time: " . $row["MORNING TIME"] ."evening time: " . $row["EVENING TIME"] "<br>";
    }
} else {
    echo "invalid results";
}
mysql_close($connection); 
?>

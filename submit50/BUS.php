<html>
<style>
body
{
background-image: url(road.jpg);
width: 100%;
height: 100%;
background-repeat: no-repeat;
background-size: cover;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
text-align: center;
}
</style>
<body>
<center>
<?php
$con=mysqli_connect('localhost','root','','bus')or die('error at connection');
$query="select * from bustime where SRC='".$_GET['from']."' AND DST='".$_GET['to']."'";
$result =mysqli_query($con, $query);
if ($result->num_rows > 0) 
{
echo "<table><tr><th>SRC</th><th>DST</th>
<th>MORNING TIME</th><th>EVENING TIME</th></tr>";
while($row= $result->fetch_assoc())
 {
  echo "<tr><td>". $row["SRC"]."</td>
                   <td>". $row["DST"]."</td>
                   <td> " . $row["MORNING TIME"]. "</td>
 <td> " . $row["EVENING TIME"]. "</td>
          </tr><br>";
}
  echo "</table>";

}
else 
{
    echo "not yet registered";
}
?>
</center>
</body>
</html>
<?php
include('../script/connect.php');
$a=explode(".",$_SERVER['HTTP_HOST']);
print_r($a);

$query=mysqli_query($connection,"SELECT * FROM state WHERE state_name = '$a[0]'");
if($query)
{
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
print_r($row);
}
}
$query1=mysqli_query($connection,"SELECT * FROM city WHERE city_name = '$a[0]'");
if($query1)
{
while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
print_r($row1);
}
}
?>
<?php
include('connect.php');
$sql = "SELECT * FROM category WHERE category_name LIKE '%$_POST[keyword]%' ORDER BY category_id ASC LIMIT 0, 10";
$query = mysqli_query($connection,$sql);
while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	$category_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['category_name']);
    echo '<li onclick="set_item(\''.$rs['category_name'].'\')">'.$category_name.'</li>';
}
?>
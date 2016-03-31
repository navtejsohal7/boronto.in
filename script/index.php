<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-control" content="public">
    <meta name="description" content="Boronto is the best e-classified website.Post Your Ads Free.Sell Your Things By Posting Advertisement On Boronto.">
    <meta name="keywords" content="Boronto,Free Ads,Free,Ads,Advertisement">
    <meta name="author" content="Boronto">
    <title>Boronto | Free e-classifieds</title>
	<?php
	$a=$_SERVER['HTTP_USER_AGENT'];
	if(strpos($a,'MSIE') == true)
	{
	echo '<link rel="stylesheet" href="css/ie.css" >';
	}
	else
	{
	echo '    <link rel="stylesheet" href="css/style.css" >';
	}
	?>
	
</head>
<body>
<?php
include('header.php');
?>
	
<div id='content'>
	
	<div class='main'>
		<h3><span class='category-heading'>Categories</span></h3>
		<div class='col-sm-4'>
		<?php
		include('connect.php');
		$a=mysqli_query($connection,"SELECT * FROM category LIMIT 0,5");
		while($row=mysqli_fetch_array($a,MYSQLI_ASSOC))
		{
		echo '<div class="box">';
		echo '<p><span class="'.str_replace(" ","-",$row['category_name']).'"></span><a class="category" href="'.str_replace(" ","-",$row['category_name']).'"><span class="category-name">'.ucwords($row['category_name']).'</span></a></p>';
		$query=mysqli_query($connection,"SELECT * FROM subcategory WHERE category_id='$row[category_id]'");
		while($row1=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo '<p><a class="subcategory" href="'.str_replace(" ","-",$row['category_name']).'/'.str_replace(" ","-",$row1['subcategory_name']).'"><span class="subcategory-name">'.ucwords($row1['subcategory_name']).'</span></a></p>';
		}
		echo '</div>';
		}
		?>
		</div>
		<div class='col-sm-4'>
		<?php
		$a=mysqli_query($connection,"SELECT * FROM category LIMIT 6,4");
		while($row=mysqli_fetch_array($a,MYSQLI_ASSOC))
		{
		echo '<div class="box">';
		echo '<p><span class="'.str_replace(" ","-",$row['category_name']).'"></span><a class="category" href="'.str_replace(" ","-",$row['category_name']).'"><span class="category-name">'.ucwords($row['category_name']).'</span></a></p>';
		$query=mysqli_query($connection,"SELECT * FROM subcategory WHERE category_id='$row[category_id]'");
		while($row1=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo '<p><a class="subcategory" href="'.str_replace(" ","-",$row['category_name']).'/'.str_replace(" ","-",$row1['subcategory_name']).'"><span class="subcategory-name">'.ucwords($row1['subcategory_name']).'</span></a></p>';
		}
		echo '</div>';
		}
		?>
		</div>
		<div class='col-sm-4'>
		<?php
		$a=mysqli_query($connection,"SELECT * FROM category LIMIT 10,5");
		while($row=mysqli_fetch_array($a,MYSQLI_ASSOC))
		{
		echo '<div class="box">';
		echo '<p><span class="'.str_replace(" ","-",$row['category_name']).'"></span><a class="category" href="'.str_replace(" ","-",$row['category_name']).'"><span class="category-name">'.ucwords($row['category_name']).'</span></a></p>';
		$query=mysqli_query($connection,"SELECT * FROM subcategory WHERE category_id='$row[category_id]'");
		while($row1=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo '<p><a class="subcategory" href="'.str_replace(" ","-",$row['category_name']).'/'.str_replace(" ","-",$row1['subcategory_name']).'"><span class="subcategory-name">'.ucwords($row1['subcategory_name']).'</span></a></p>';
		}
		echo '</div>';
		}
		?>
		</div>
	</div>
	<div class='right-sidebar'>
		<a href='post.php'><div class='col-full'>
			<p>Submit AD</p>
			
		</div></a>
		<div class='col-full-1'>
			<p>Popular cities</p>
			
		</div>
		<div class='col-full-1'>
			<p>Popular Categories</p>
			
		</div>
		
	</div>
</div>
<?php
include('footer.php');
?>
</body>
<script  type="text/javascript" src="js/jquery.min.23.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script  type="text/javascript" src="js/script.23.js"></script>

<script  type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" >
$(document).ready(function()
{
$(".account").click(function()
{
var X=$(this).attr('id');

if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0');	
}
else
{

$(".submenu").show();
$(this).attr('id', '1');
}
	
});

//Mouseup textarea false
$(".submenu").mouseup(function()
{
return false
});
$(".account").mouseup(function()
{
return false
});


//Textarea without editing.
$(document).mouseup(function()
{
$(".submenu").hide();
$(".account").attr('id', '');
});
	
});
	
	</script>
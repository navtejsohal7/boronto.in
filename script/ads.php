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
	<link rel="stylesheet" href="//boronto.in/script/css/style.css">
	<link rel="stylesheet" href="//boronto.in/script/css/dropdown.css">
	
	
</head>
<body>
<?php
include('header.php');
?>   
<div class='drop-down'>
<label for="show-menu" class="show-menu">India<span class="whitedrop"></span></label>
	<input type="checkbox" id="show-menu" role="button">
		
		<ul id="menu">
<?php
include('connect.php');

$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name";
$query = mysqli_query($connection,$sql);
while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
	{ 
	echo '<li><a href="#">'.$rs["state_name"].'</a></li>';
	} 
?>
	</ul>
</div>
<div class='col-xm-100'>
	<div class='col-xm-10'>
		<div class='sidebar'>
			<label for="show-side" class="show-side"><?php
									$a=ucwords(str_replace("-"," ",$_GET['category']));echo $a;?><span class="drop"></span></label>
				<input type="checkbox" id="show-side" role="button">
					
					<ul id="side">
								<?php
									if(!empty($_GET['category']) && empty($_GET['subcategory']))
									{
									
									$a=str_replace("-"," ",$_GET['category']);
									echo '<li ><a href="//boronto.in/script/" style="font-weight:bold;font-size:16px;background-color:#575757;color:#FFF;margin-bottom:2px;"><span class="hand"></span><span >All Categories</span></a></li>';
									echo '<li ><a href="" style="font-weight:bold;font-size:16px;background-color:#575757;color:#FFF;"><span >'.ucwords($a).'</span></a></li>';
									$query=mysqli_query($connection,"SELECT category.category_id, subcategory.subcategory_name FROM category INNER JOIN subcategory ON category.category_id=subcategory.category_id WHERE category.category_name = '$a'");
									while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
									{
									
									echo '<li><a href="'.$_GET['category'].'/'.str_replace(" ","-",$row['subcategory_name']).'/">'.ucwords($row['subcategory_name']).'</a></li>';
																			$_SESSION['category_id']=$row['category_id'];
											

									}
									}
									elseif(!empty($_GET['subcategory']))
									{
									$a=str_replace("-"," ",$_GET['subcategory']);
									echo '<li ><a href="//boronto.in/script/" style="font-weight:bold;font-size:16px;background-color:#575757;color:#FFF;margin-bottom:2px;"><span class="hand"></span><span >All Categories</span></a></li>';
									$query=mysqli_query($connection,"SELECT category.category_id, category.category_name, subcategory.subcategory_id, subcategory.subcategory_name FROM category INNER JOIN subcategory ON category.category_id=subcategory.category_id WHERE subcategory.subcategory_name='$a' ");
									while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
									{
										echo '<li><a href="//boronto.in/script/'.str_replace(" ","-",$row['category_name']).'" style="font-weight:bold;font-size:16px;background-color:#575757;color:#FFF;"><span class="hand"></span><span>'.ucwords($row['category_name']).'</span></a></li>';
										echo '<li><a href="'.str_replace(" ","-",$row['subcategory_name']).'">'.ucwords($a).'</a></li>';
															$_SESSION['subcategory_id']=$row['subcategory_id'];

									}
									}
									?>
				</ul>
		</div>
		<div class='ads-bar'>
		<?
			if(!empty($_GET['category']) && empty($_GET['subcategory']))
			{
			echo '<h4>Ads Of '.ucwords(str_replace("-"," ",$_GET['category'])).'</h4>';
			}
			elseif(!empty($_GET['subcategory']))
			{
			echo '<h4>Ads Of '.ucwords(str_replace("-"," ",$_GET['subcategory'])).'</h4>'; 
			}
		?>
			<?php
		if(!empty($_GET['category']) && empty($_GET['subcategory']))
		{
		$sql="SELECT user_uploads.image_name, user_uploads.created, category'$_SESSION[category_id]'_ads.category_id, category'$_SESSION[category_id]'_ads.subcategory_id, category'$_SESSION[category_id]'_ads.title, category'$_SESSION[category_id]'_ads.message, category'$_SESSION[category_id]'_ads.phonenumber, category'$_SESSION[category_id]'_ads.email FROM user_uploads INNER JOIN category'$_SESSION[category_id]'_ads ON user_uploads.user_id_fk=category'$_SESSION[category_id]'_ads.session_id GROUP BY session_id";
		$query=mysqli_query($connection,$sql);
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
			echo "<a href=''>
				<div class='ad'>
					<div class='productinfo text-center' style='border:1px solid #c0c0c0;'>
															
															<img src='../../../../".$row['image_name']."' alt='' width='10%'>

															<h2>$56</h2>
															<p>".$row['title']."</p>
				</div>
			</a>";
		}
		elseif(!empty($_GET['subcategory']))
		{
		$sql="SELECT user_uploads.image_name, user_uploads.created, category".$_SESSION['category_id']."_ads.category_id, category".$_SESSION['category_id']."_ads.subcategory_id, category".$_SESSION['category_id']."_ads.title, category".$_SESSION['category_id']."_ads.message, category".$_SESSION['category_id']."_ads.phonenumber, category".$_SESSION['category_id']."_ads.email FROM user_uploads INNER JOIN category".$_SESSION['category_id']."_ads ON user_uploads.user_id_fk=category".$_SESSION['category_id']."_ads.session_id GROUP BY session_id";
		$query=mysqli_query($connection,$sql);
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
			echo "<a href=''>
				<div class='ad'>
					<div class='productinfo text-center' style='border:1px solid #c0c0c0;'>
															
															<img src='../../../../".$row['image_name']."' alt='' width='10%'>

															<h2>$56</h2>
															<p>".$row['title']."</p>
				</div>
			</a>";
		}
		?>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>

</body>
<script  type="text/javascript" src="//boronto.in/script/js/jquery.min.23.js"></script>
<script type="text/javascript" src="//boronto.in/script/js/script.js"></script>
<script  type="text/javascript" src="//boronto.in/script/js/script.23.js"></script>

<script  type="text/javascript" src="//boronto.in/script/js/jquery.min.js"></script>
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
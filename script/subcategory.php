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
							
									if(!empty($_GET['subcategory']))
									{
									$a=str_replace("-"," ",$_GET['subcategory']);
									echo '<li ><a href="//www.boronto.in/script/" style="font-weight:bold;font-size:16px;background-color:#575757;color:#FFF;margin-bottom:2px;"><span class="hand"></span><span >All Categories</span></a></li>';
									$query=mysqli_query($connection,"SELECT category.category_id, category.category_name, subcategory.subcategory_id, subcategory.subcategory_name FROM category INNER JOIN subcategory ON category.category_id=subcategory.category_id WHERE subcategory.subcategory_name='$a' ");
									while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
									{
										echo '<li><a href="//www.boronto.in/script/'.str_replace(" ","-",$row['category_name']).'" style="font-weight:bold;font-size:16px;background-color:#575757;color:#FFF;"><span class="hand"></span><span>'.ucwords($row['category_name']).'</span></a></li>';
										echo '<li><a href="'.str_replace(" ","-",$row['subcategory_name']).'">'.ucwords($a).'</a></li>';
															$_SESSION['subcategory_id']=$row['subcategory_id'];
															$_SESSION['category_id']=$row['category_id']
															;

									}
									}
									?>
				</ul>
		</div>
		<div class='ads-bar'>
		<?
			if(!empty($_GET['subcategory']))
			{
			echo '<h4>Ads Of '.ucwords(str_replace("-"," ",$_GET['subcategory'])).'</h4>'; 
			}
		?>
			<?php
		if($_SESSION['category_id'] == 1)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category1_ads.subcategory_id, category1_ads.adtitle, category1_ads.ad_description, category1_ads.phonenumber, category1_ads.price, category1_ads.email,category1_ads.session_id FROM user_uploads INNER JOIN category1_ads ON user_uploads.user_id_fk=category1_ads.session_id  WHERE category1_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category1_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 2)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, user_uploads.created, category2_ads.subcategory_id, category2_ads.adtitle, category2_ads.ad_description, category2_ads.phone_number, category2_ads.price, category2_ads.email,category2_ads.session_id FROM user_uploads INNER JOIN category2_ads ON user_uploads.user_id_fk=category2_ads.session_id WHERE category2_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category2_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 3)
		{
		
		$query1=mysqli_query($connection,"SELECT user_uploads.image_name, category3_ads.session_id, category3_ads.subcategory_id, category3_ads.adtitle, category3_ads.ad_description, category3_ads.phone_number, category3_ads.price, category3_ads.email FROM user_uploads INNER JOIN category3_ads ON user_uploads.user_id_fk=category3_ads.session_id WHERE category3_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category3_ads.session_id");
		$count1=mysqli_num_rows($query1);
		if($count1<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row1['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row1['adtitle']."
					</p>
					<p class='price'>Rs.".$row1['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 4)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category4_ads.session_id, category4_ads.subcategory_id, category4_ads.adtitle, category4_ads.ad_description, category4_ads.phone_number, category4_ads.address, category4_ads.email FROM user_uploads INNER JOIN category4_ads ON user_uploads.user_id_fk=category4_ads.session_id WHERE category4_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category4_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='address'>Rs.".$row['address']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 5)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category5_ads.session_id, category5_ads.subcategory_id, category5_ads.adtitle, category5_ads.ad_description, category5_ads.phone_number, category5_ads.url, category5_ads.email FROM user_uploads INNER JOIN category5_ads ON user_uploads.user_id_fk=category5_ads.session_id WHERE category5_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category5_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='//www.boronto.in/script/".$_GET['category']."/".$_GET['subcategory']."/".$row['adtitle']."-".$row['session_id']."' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>".$row['url']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 6)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category6_ads.session_id, category6_ads.subcategory_id, category6_ads.adtitle, category6_ads.ad_description, category6_ads.phone_number, category6_ads.email FROM user_uploads INNER JOIN category6_ads ON user_uploads.user_id_fk=category6_ads.session_id  WHERE category6_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category6_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 7)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category7_ads.session_id, category7_ads.subcategory_id, category7_ads.adtitle, category7_ads.ad_description, category7_ads.phone_number, category7_ads.price, category7_ads.email FROM user_uploads INNER JOIN category7_ads ON user_uploads.user_id_fk=category7_ads.session_id WHERE category7_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category7_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 8)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category8_ads.session_id, category8_ads.subcategory_id, category8_ads.adtitle, category8_ads.ad_description, category8_ads.phone_number, category8_ads.price, category8_ads.email FROM user_uploads INNER JOIN category8_ads ON user_uploads.user_id_fk=category8_ads.session_id WHERE category8_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category8_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 9)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category9_ads.session_id, category9_ads.subcategory_id, category9_ads.adtitle, category9_ads.ad_description, category9_ads.phone_number, category9_ads.price, category9_ads.email FROM user_uploads INNER JOIN category9_ads ON user_uploads.user_id_fk=category9_ads.session_id WHERE category9_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category9_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 10)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category10_ads.session_id, category10_ads.subcategory_id, category10_ads.adtitle, category10_ads.ad_description, category10_ads.phone_number, category10_ads.price, category10_ads.email FROM user_uploads INNER JOIN category10_ads ON user_uploads.user_id_fk=category10_ads.session_id WHERE category10_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category10_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 11)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category11_ads.session_id, category11_ads.subcategory_id, category11_ads.adtitle, category11_ads.ad_description, category11_ads.phone_number, category11_ads.price, category11_ads.email FROM user_uploads INNER JOIN category11_ads ON user_uploads.user_id_fk=category11_ads.session_id WHERE category11_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category11_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 12)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category12_ads.session_id, category12_ads.subcategory_id, category12_ads.adtitle, category12_ads.ad_description, category12_ads.phone_number, category12_ads.price, category12_ads.email FROM user_uploads INNER JOIN category12_ads ON user_uploads.user_id_fk=category12_ads.session_id WHERE category12_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category12_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 13)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category13_ads.session_id, category13_ads.subcategory_id, category13_ads.adtitle, category13_ads.ad_description, category13_ads.phone_number, category13_ads.price, category13_ads.email FROM user_uploads INNER JOIN category13_ads ON user_uploads.user_id_fk=category13_ads.session_id  WHERE category13_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category13_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['price']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 14)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category14_ads.session_id, category14_ads.subcategory_id, category14_ads.adtitle, category14_ads.ad_description, category14_ads.phone_number, category14_ads.salary, category14_ads.email FROM user_uploads INNER JOIN category14_ads ON user_uploads.user_id_fk=category1_ads.session_id WHERE category14_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category14_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['salary']."
					</p>
				</div>
			</a>";
		}
		}
		}
		elseif($_SESSION['category_id'] == 15)
		{
		
		$query=mysqli_query($connection,"SELECT user_uploads.image_name, category15_ads.session_id, category1_ads.subcategory_id, category15_ads.adtitle, category15_ads.ad_description, category15_ads.phone_number, category15_ads.age, category15_ads.email FROM user_uploads INNER JOIN category15_ads ON user_uploads.user_id_fk=category15_ads.session_id WHERE category15_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY category15_ads.session_id");
		$count=mysqli_num_rows($query);
		if($count<1)
		{
		echo "
			<div class='advertise'>
				<p>No ad posted related to this category.</p>
				<a href='//www.boronto.in/script/post.php'>POST FREE AD</a>
			</div>";
		}
		else
		{
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			echo "
			<a href='' class='ad-show'>
				<div class='left'>
					<img src='//boronto.in/script/".$row['image_name']."'>
				</div>
				<div class='right'>
					<p class='adtitle'>".$row['adtitle']."
					</p>
					<p class='price'>Rs.".$row['age']."
					</p>
				</div>
			</a>";
		}
		}
		}
		
		?>
		</div>
	</div>
	</div>
<?php
include('footer.php');
?>

</body>
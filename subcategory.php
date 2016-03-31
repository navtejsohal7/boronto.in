<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<link rel="stylesheet" href="../../rmm-css/responsivemobilemenu.css" type="text/css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="../../rmm-js/responsivemobilemenu.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="description" content="">
	<meta http-equiv="Cache-control" content="public">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php
require('connect.php');
print_r($_GET);
$query=mysqli_query($connection,"SELECT category.category_id, subcategory.subcategory_id FROM category INNER JOIN subcategory ON category.category_id=subcategory.category_id WHERE subcategory.subcategory_name = '$_GET[subcategory]'");
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
print_r($row);
}

	?>
	<header id="header">
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6" >
						<div class="social-icons pull-left" >
							<ul class="nav navbar-nav" >
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					
						
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="logo pull-left">
							<a href="index.php"><img src="../../images/home/logo.png" alt="" /><img src="../../images/country/12.png" width='50px' style='margin:9px;' alt="" /></a><span class='alert'>Select Your City&#10148;  </span>
						</div>
						<div class="btn-group pull-left">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									India
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Select Your City</a></li>
								</ul>
							</div>
						</div>
				<a href='adpost.php'><img src='../../images/home/post.jpg' style='float:right;border:4px solid #FFAD41;;' class='post' ></a>

					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class='cities'>
						<h3>Select Your City</h3>
						<div class="rmm">
						<ul>
							<ul>
							<?php

									$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name LIMIT 1,9";
									$query = mysqli_query($connection,$sql);
									?>
										
										  <?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<li><a value=".$rs["state_id"].">".$rs["state_name"]."</a></li>";
										  
											} ?>
							
						</ul>
						<ul>
							<?php

									$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name LIMIT 10,9";
									$query = mysqli_query($connection,$sql);
									?>
										
										  <?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<li><a value=".$rs["state_id"].">".$rs["state_name"]."</a></li>";
										  
											} ?>
						</ul>
						<ul>
							<?php

									$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name LIMIT 20,9";
									$query = mysqli_query($connection,$sql);
									?>
										
										  <?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<li><a value=".$rs["state_id"].">".$rs["state_name"]."</a></li>";
										  
											} ?>
						</ul>
							<ul>
							<?php

									$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name LIMIT 30,9";
									$query = mysqli_query($connection,$sql);
									?>
										
										  <?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<li><a value=".$rs["state_id"].">".$rs["state_name"]."</a></li>";
										  
											} ?>
							
						</ul>
						
						 
						</ul>
						
						</div>
						
						
						
					</div>
				</div>
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="brands_products"><!--brands_products-->
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Gr�ne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(12)</span>R�sch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
					
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php

										$sql="SELECT user_uploads.image_name, user_uploads.created, category1_ads.title, category1_ads.message, category1_ads.phonenumber, category1_ads.email FROM user_uploads INNER JOIN category1_ads ON user_uploads.user_id_fk=category1_ads.session_id GROUP BY session_id";
										$query=mysqli_query($connection,$sql);
										while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
										{
										echo '<div class="col-sm-12" >
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center" style="border:1px solid #c0c0c0;">
															
															<img src="'.$row['image_name'].'" alt="" width="10%">

															<h2>$56</h2>
															<p>'.$row['title'].'</p>
														</div>
														
													</div>
													
												</div>
											</div>';
										}
										?>
						
						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<?php
	include('footer.php');
	?>
	

  
    <script src="../../js/jquery.js"></script>
	<script src="../../js/price-range.js"></script>
    <script src="../../js/jquery.scrollUp.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
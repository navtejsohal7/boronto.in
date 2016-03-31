<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	   <link rel="stylesheet" href="../../../../styles12.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../../../../script12.js"></script>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta http-equiv="Cache-control" content="public">
    <meta name="author" content="">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta http-equiv="Cache-control" content="public">
    <meta name="author" content="">
    <title><?php
									$a=str_replace("-"," ",$_GET['category']);
									echo ucwords($a);
									
										?> | Boronto | E-classified</title>
    <link href="../../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../../../css/animate.css" rel="stylesheet">
	<link href="../../../../css/main.css" rel="stylesheet">
	<link href="../../../../css/responsive.css" rel="stylesheet">
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
require('connect.php');	?>
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
							<a href="../../../../"><img src="../../../../images/home/logo.png" alt="" /><img src="../../../../images/country/12.png" width='20px' style='margin:9px;' alt="" /></a><span class='alert'>Select Your City&#10148;  </span>
						</div>
						<div class="btn-group pull-left">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									INDIA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../../../../city.php">Select Your City</a></li>
								</ul>
							</div>
						</div>
				<a href='../../../../adpost.php'><img src='../../../../images/home/post.jpg' style='float:right;border:4px solid #FFAD41;;' class='post' ></a>

					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<?php
									
									
									$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name";
									$query = mysqli_query($connection,$sql);
									?>
					<div class='cities'>
						<h3>Select Your City</h3>
						<div id='cssmenu'>
							<ul>
							
										
										  <?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											  
												   echo '<li><a href="http://'.strtolower(str_replace(" ","-",$rs["state_name"])).'.boronto.in">'.$rs["state_name"].'</a></li>
								';
												   
												   
										  
											} ?>
											</ul>
											</div>
						
						
						
						
					</div>
											
							  
							  		
							
				</div>
				
				<?php
				echo '.';
				if(isset($_GET['adtitle']) == true && !empty($_GET['adtitle']))
				{
			
				$sql="SELECT DISTINCT * FROM category1_ads WHERE category1_ads.id = '$_GET[adtitle]'";
				$query=mysqli_query($connection,$sql);
				$count=mysqli_num_rows($query);
		
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
				{
				echo '
				<div class="product-details"><!--product-details-->
						<div class="col-sm-7">
							<div class="view-product">';
					$sql1="SELECT * FROM user_uploads WHERE user_id_fk = '$row[session_id]'";
				$query1=mysqli_query($connection,$sql1);
				while($row1=mysqli_fetch_array($query1))
				{
					echo '<img src=../../../../'.$row1['image_name'].' />';	
}					
								 

							echo '</div>
								<div class="product-information"><!--/product-information-->
								
								<p>'.$row['message'].'</p>
								<p>When you call, dont forget to mention that you found this ad on BORONTO.in
									I do not wish to be contacted by telemarketers or representatives of any other website. </p>
								
								</div>

						</div>
						<div class="col-sm-5">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>'.$row['title'].'</h2>
								<p>Web ID:'.$row['session_id'].'</p>
								
								<p><b>Location:</b> '. $row['city_id'].'</p>
								<p><b>Phone Number:</b> '.$row['phonenumber'].'</p>
								<p><b>Email:</b>'.$row['email'].'</p>
								<p>
									US $59
									
									
									
								</p>
								
							</div>
						</div>
					</div>';
					}
					
					}
				?>
				<div class="col-sm-3">
					<div class="left-sidebar">
					<?php
					if(!empty($_GET['adtitle']))
					{
					}
					else
					{
						echo '<h2>Category</h2>';
					}
					?>
						<div class="brands_products"><!--brands_products-->
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php
									if(!empty($_GET['category']) && empty($_GET['subcategory']) && isset($_GET['adtitle']) == false)
									{
									$a=str_replace("-"," ",$_GET['category']);
									echo '<li><a href=""><span class="pull-right">(50)</span><span style="font-weight:bold;font-size:16px;">'.$a.'</span></a></li>';
									$query=mysqli_query($connection,"SELECT category.category_id, subcategory.subcategory_name FROM category INNER JOIN subcategory ON category.category_id=subcategory.category_id WHERE category.category_name = '$a'");
									while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
									{
									
									echo '<li><a href="'.str_replace(" ","-",$row['subcategory_name']).'/"> <span class="pull-right">(50)</span>'.$row['subcategory_name'].'</a></li>';
																			$_SESSION['category_id']=$row['category_id'];
											

									}
									}
									
									elseif(!empty($_GET['subcategory']) && isset($_GET['adtitle']) == false)
									{
									
									$a=str_replace("-"," ",$_GET['subcategory']);
									$query=mysqli_query($connection,"SELECT category.category_id, category.category_name, subcategory.subcategory_id, subcategory.subcategory_name FROM category INNER JOIN subcategory ON category.category_id=subcategory.category_id WHERE subcategory.subcategory_name='$a' ");
									while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
									{
										echo '<li><a href=""><span class="pull-right">(50)</span> <span style="font-weight:bold;font-size:16px;">'.$row['category_name'].'</span></a></li>';
										
										echo '<li><a href="'.str_replace(" ","-",$row['subcategory_name']).'"> <span class="pull-right">(50)</span>'.$a.'</a></li>
							';
										$_SESSION['subcategory_id']=$row['subcategory_id'];
									}
									}
									elseif(!empty($_GET['subcategory']) && empty($_GET['adtitle']) && isset($_GET['adtitle']) == true)
									{
									
									$a=str_replace("-"," ",$_GET['subcategory']);
									$query=mysqli_query($connection,"SELECT category.category_id, category.category_name, subcategory.subcategory_id, subcategory.subcategory_name FROM category INNER JOIN subcategory ON category.category_id=subcategory.category_id WHERE subcategory.subcategory_name='$a' ");
									while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
									{
										echo '<li><a href="../"><span class="pull-right">(50)</span> <span style="font-weight:bold;font-size:16px;">'.$row['category_name'].'</span></a></li>';
										
										echo '<li><a href="../'.str_replace(" ","-",$row['subcategory_name']).'/"> <span class="pull-right">(50)</span>'.$a.'</a></li>
							';
										$_SESSION['subcategory_id']=$row['subcategory_id'];
									}
									}
									
									
									
									?>
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
					<?php
					if(!empty($_GET['adtitle']))
					{
					}
					else
					{
						echo '<h2 class="title text-center">Features Items</h2>';
					}
					?>
						
						<?php
								if(!empty($_GET['category']) && empty($_GET['subcategory']) && isset($_GET['subcategory']) == false && isset($_GET['adtitle']) == false)
									{
									$sql="SELECT user_uploads.image_name, user_uploads.created, category1_ads.id, category1_ads.category_id, category1_ads.subcategory_id, category1_ads.title, category1_ads.message, category1_ads.phonenumber, category1_ads.email FROM user_uploads INNER JOIN category1_ads ON user_uploads.user_id_fk=category1_ads.session_id WHERE category1_ads.category_id = '$_SESSION[category_id]' GROUP BY session_id";
										$query=mysqli_query($connection,$sql);
										$count=mysqli_num_rows($query);
										if($count<1)
										{
											echo '<div class="col-sm-12" >
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center" style="border:1px solid #c0c0c0;padding:5%;">
															<img src="../../../../images/noclassi.jpg" alt="no classified available" style="border:1px solid #c0c0c0;" >
															<a href="../../../../adpost.php"><h2>Post Free Ads</h2></a>
															<p>No Ads Related to this post.</p>
														</div>
														
													</div>
													
												</div>
											</div>';	
										}
										else
										{
										while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
										{
										$sql1="SELECT * from subcategory WHERE subcategory_id='$row[subcategory_id]'";
										$query1=mysqli_query($connection,$sql1);
										while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC))
										{
										echo '<div class="col-sm-12" >
												<div class="product-image-wrapper">
													<div class="single-products">
														<a href="'.str_replace(" ","-",$row1['subcategory_name']).'/'.str_replace(" ","-",$row['id']).'/"><div class="productinfo text-center" style="border:1px solid #c0c0c0;">
															
															<img src="../../../../../../../../'.$row['image_name'].'" alt="" width="10%">

															<h2>$56</h2>
															<p>'.$row['title'].'</p>
														</div>
														</a>
														
													</div>
													
												</div>
											</div>';
											}		
										}
										}
										}
										elseif(!empty($_GET['category']) && empty($_GET['subcategory']) && isset($_GET['adtitle']) == false)
									{
									$sql="SELECT user_uploads.image_name, user_uploads.created, category1_ads.category_id, category1_ads.subcategory_id, category1_ads.title, category1_ads.message, category1_ads.phonenumber, category1_ads.email FROM user_uploads INNER JOIN category1_ads ON user_uploads.user_id_fk=category1_ads.session_id WHERE category1_ads.category_id = '$_SESSION[category_id]' GROUP BY session_id";
										$query=mysqli_query($connection,$sql);
										$count=mysqli_num_rows($query);
										if($count<1)
										{
											echo '<div class="col-sm-12" >
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center" style="border:1px solid #c0c0c0;padding:5%;">
															<img src="../../../../images/noclassi.jpg" alt="no classified available" style="border:1px solid #c0c0c0;" >
															<a href="../../../../adpost.php"><h2>Post Free Ads</h2></a>
															<p>No Ads Related to this post.</p>
														</div>
														
													</div>
													
												</div>
											</div>';	
										}
										else
										{
										while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
										{
										$sql1="SELECT * from subcategory WHERE subcategory_id='$row[subcategory_id]'";
										$query1=mysqli_query($connection,$sql1);
										while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC))
										{
										echo '<div class="col-sm-12" >
												<div class="product-image-wrapper">
													<div class="single-products">
														<a href="'.str_replace(" ","-",$row1['subcategory_name']).'/'.str_replace(" ","-",$row['id']).'"><div class="productinfo text-center" style="border:1px solid #c0c0c0;">
															
															<img src="../../../../'.$row['image_name'].'" alt="" width="10%">

															<h2>$56</h2>
															<p>'.$row['title'].'</p>
														</div>
														</a>
														
													</div>
													
												</div>
											</div>';
											}		
										}
										}
										}
										elseif(!empty($_GET['category']) && !empty($_GET['subcategory']) && isset($_GET['adtitle']) == true && empty($_GET['adtitle']))
										
										{
										
									$sql="SELECT user_uploads.image_name, user_uploads.created, category1_ads.category_id, category1_ads.id, category1_ads.subcategory_id, category1_ads.title, category1_ads.message, category1_ads.phonenumber, category1_ads.email FROM user_uploads INNER JOIN category1_ads ON user_uploads.user_id_fk=category1_ads.session_id WHERE category1_ads.subcategory_id = '$_SESSION[subcategory_id]' GROUP BY session_id";
										$query=mysqli_query($connection,$sql);
										$count=mysqli_num_rows($query);
										if($count<1)
										{
											echo '<div class="col-sm-12" >
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center" style="border:1px solid #c0c0c0;padding:5%;">
															<img src="../../../../images/noclassi.jpg" alt="no classified available" style="border:1px solid #c0c0c0;" >
															<a href="../../../../adpost.php"><h2>Post Free Ads</h2></a>
															<p>No Ads Related to this post.</p>
														</div>
														
													</div>
													
												</div>
											</div>';	
										}
										else
										{
										while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
										{
										$sql1="SELECT * from subcategory WHERE subcategory_id='$row[subcategory_id]'";
										$query1=mysqli_query($connection,$sql1);
										while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC))
										{
										echo '<div class="col-sm-12" >
												<div class="product-image-wrapper">
													<div class="single-products">
														<a href="'.str_replace(" ","-",$row['id']).'/"><div class="productinfo text-center" style="border:1px solid #c0c0c0;">
															
															<img src="../../../../'.$row['image_name'].'" alt="" width="10%">

															<h2>$56</h2>
															<p>'.$row['title'].'</p>
														</div>
														</a>
														
													</div>
													
												</div>
											</div>';
											}		
										}
										}
										
										echo '<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>';
										}
										elseif(!empty($_GET['category']) && !empty($_GET['subcategory']) && isset($_GET['adtitle']) == true && !empty($_GET['adtitle']))
										
										{
										
									
										}
										
										?>
						
						
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<?php
	include('footer.php');
	?>
</body>
    <script src="../../../../js/jquery.js"></script>
	<script src="../../../../js/price-range.js"></script>
    <script src="../../../../js/jquery.scrollUp.min.js"></script>
	<script src="../../../../js/bootstrap.min.js"></script>
    <script src="../../../../js/jquery.prettyPhoto.js"></script>
    <script src="../../../../js/main.js"></script>

</html>

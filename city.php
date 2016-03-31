<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-control" content="public">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Boronto | Free E-classifieds</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

     
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	
	<?php
	include('header.php');
	
	?>

	<section>
		<div class="container">
			<div class="row">
			<div class="col-sm-12">
						<div class='bar' style='width:100%;background-color:#eee;float:left'>
							<input type='text' class='searchbar' placeholder="Search (eg. mobile,car,.....)" >
							<input type='submit' value='Search' class='search-top'>

						</div>
					</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items">
						
							<h2 class="title text-center">Select State</h2>
				 		<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center"><span class="mobile"></span>
											<h4>
												<a href="category/mobile-and-tablets">
												</a>
												</h4>
												<ul>
												<?php									require('connect.php');


									$sql = "SELECT * FROM state WHERE country_id = '105'";
									$query = mysqli_query($connection,$sql);
									
										
										 while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<li><a href=http://".strtolower(str_replace(" ","-",$rs["state_name"])).".boronto.in>".$rs["state_name"]."</a></li>";
										  
											} ?>
													
												</ul>
										</div>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php		
											require('footer.php');?>
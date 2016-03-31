<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<style>
/*Some CSS*/


* {
  margin: 0;
  padding: 0;
}

body { font-family: Arial, Helvetica, sans-serif; }

h1 {
  text-align: center;
  letter-spacing: -1px;
  line-height: 30px;
  padding-top: 50px;
  padding-bottom: 10px;
}

p {
  text-align: center;
  padding-bottom: 10px;
}

/*Lmagnifying glass*/



.magnify {
  margin: 0px auto;
  position: relative;
}

/*Lets create the magnifying glass*/

.large {
  width: 250px;
  height:250px;
  position: absolute;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  /*Multiple box shadows to achieve the glass effect*/
  -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85),  0 0 7px 7px rgba(0, 0, 0, 0.25),  inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85),  0 0 7px 7px rgba(0, 0, 0, 0.25),  inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
  box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85),  0 0 7px 7px rgba(0, 0, 0, 0.25),  inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
  /*Lets load up the large image first*/
	
	
	/*hide the glass by default*/
  display: none;
}

/*To solve overlap bug at the edges during magnification*/

.small { display: block; }
</style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

</head><!--/head-->

<body>

	<?php include('header.php');?>
	<?php 
	$query1=mysqli_query($connection,"INSERT INTO category1_ads(subcategory_id,title,message,fname,phonenumber,email,session_id,state_id,city_id,category_id) VALUES('$_POST[subcategory]','$_POST[title]','$_POST[message]','$_POST[fname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[category]')");
	
	?>
	
		<div class="row" >
			<div class="col-sm-9" style='margin-left:12.5%;margin-right:12.5%;'>
					<div class="step-one">
				<h2 class="heading">Post Free Ad Here</h2>
			</div>

					<div class="product-details"><!--product-details-->
						<div class="col-sm-7">
							<div class="view-product">
								<?php
if (isset($_POST['submit'])) {
    $j = 0; //Variable for indexing uploaded image 
    
	$target_path = "upload/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable
        
		$target_path = $target_path . $_FILES['file']['name'][$i] . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
        $j = $j + 1;//increment the number of uploaded images according to the files in array       
      
	  if (($_FILES["file"]["size"][$i] < 1000000) //Approx. 100kb files can be uploaded.
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {//if file moved to uploads folder
                echo '<img src='.$target_path.' />';
														

				$time=time();
				$query=mysqli_query($connection,"INSERT INTO user_uploads(image_name,user_id_fk,created,category_id,subcategory_id) VALUES('$target_path','$_SESSION[unique]','$time','$_POST[category]','$_POST[subcategory]')");
				if(!$query)
				{
				echo 'nooo';
				}

            } else {//if file was not moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {//if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
	
}
?>
								 

							</div>
								<div class="product-information"><!--/product-information-->
								
								<p><?php echo $_POST['message'];?></p>
								<p>When you call, don't forget to mention that you found this ad on BORONTO.in
									I do not wish to be contacted by telemarketers or representatives of any other website. </p>
								
								</div>

						</div>
						<div class="col-sm-5">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $_POST['title'];?></h2>
								<p>Web ID:<?php echo $_SESSION['unique'];?></p>
								
								<p><b>Location:</b> <?php echo $_POST['city'];?></p>
								<p><b>Phone Number:</b> <?php echo $_POST['phonenumber'];?></p>
								<p><b>Email:</b> <?php echo $_POST['email'];?></p>
								<p>
									Rs. <?php echo $_POST['price'];?>
									
									
									
								</p>
							
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
				</div><!--/product-details-->
			</div>
	<?php include('footer.php');?>
	

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/magnify.js" type="text/javascript"></script>

    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

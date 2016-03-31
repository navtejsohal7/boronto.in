<?php 
session_start();
$_SESSION['unique']= mt_rand(); //$session id
?>
<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="js/k.js"></script>
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<link rel='stylesheet' href='image.css'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<script src="js/jquery.wallform.js"></script>
<script>
 $(document).ready(function() { 
		
            $('#photoimg').die('click').live('change', function()			{ 
			           //$("#preview").html('');
			    
				$("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					console.log('ttest');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
				    console.log('test');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
					console.log('xtest');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
					
		
			});
        }); 
		function showState(sel) {
								var country_id = sel.options[sel.selectedIndex].value;  
								$("#output1").html( "" );
								$("#output2").html( "" );
								if (country_id.length > 0 ) { 
									
								 $.ajax({
										type: "POST",
										url: "fetch_state.php",
										data: "country_id="+country_id,
										cache: false,
										beforeSend: function () { 
											$('#output1').html('<img src="loader.gif" alt="" width="24" height="24">');
										},
										success: function(html) {    
											$("#output1").html( html );
										}
									});
								} 
							}

							function showCategory(sel) {
								var category_id = sel.options[sel.selectedIndex].value;  
								if (category_id.length > 0 ) { 
								 $.ajax({
										type: "POST",
										url: "fetch_sub.php",
										data: "category_id="+category_id,
										cache: false,
										beforeSend: function () { 
											$('#output3').html('<img src="loader.gif" alt="" width="24" height="24">');
										},
										success: function(html) {    
											$("#output3").html( html );
										}
									});
								} else {
									$("#output3").html( "" );
								}
							}
							
							function showCity(sel) {
								var state_id = sel.options[sel.selectedIndex].value;  
								if (state_id.length > 0 ) { 
								 $.ajax({
										type: "POST",
										url: "fetch_city.php",
										data: "state_id="+state_id,
										cache: false,
										beforeSend: function () { 
											$('#output2').html('<img src="loader.gif" alt="" width="24" height="24">');
										},
										success: function(html) {    
											$("#output2").html( html );
										}
									});
								} else {
									$("#output2").html( "" );
								}
							}
</script>


<style>

body
{
font-family:arial;
}

#preview
{
float:left;
color:#cc0000;
font-size:12px
}
.imgList 
{
max-width:100px;
max-height:100px;
margin-left:5px;
border:1px solid #dedede;
padding:4px;	
float:left;	
}

</style>
<body>
<?php
require('connect.php');
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
							<a href="index.php"><img src="images/home/logo.png" alt="" /><img src="images/country/12.png" width='20px' style='margin:9px;' alt="" /></a><span class='alert'>Select Your City&#10148;  </span>
						</div>
						<div class="btn-group pull-left">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									India
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="city.php">Select Your City</a></li>
								</ul>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	<section id="cart_items">
		<div class="container">
			<div class="step-one">
				<h2 class="heading">Post Free Ad Here</h2>
			</div>
			

			<div class="shopper-informations">
				<div class="row">

						<div class="col-sm-9">
							<div class="form-one">
						
 <form enctype="multipart/form-data" action="posted.php" method="POST">
                    <div id="filediv"><input name="file[]" type="file" id="file" accept="image/" /></div><br/>
                    <input type="button" id="add_more" class="upload" value="Add More Files"/>
                <br/>
                <br/>
									<p>Category</p>
									<?php

									$sql = "SELECT * FROM category";
									$query = mysqli_query($connection,$sql);
									?>
										<select name="category" onChange="showCategory(this);"  id="state">
										  <option value="">Select Category</option>
										  <?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<option value=".$rs["category_id"].">".$rs["category_name"]."</option>";
											} ?>
										</select>
									<div id="output3"></div> 
									<p>Title</p><input type="text" class='form_search' placeholder="Title" name='title' />
									<p>Decribe Your Product:</p><textarea name="message"  placeholder="Description of your Product which make your product unique" rows="16"></textarea>
									<p>Price: *</p><input type="text" class='form_search' name='price'>

									</script>
										<div class="step-one">
											<h2 class="heading">Personal Information *</h2>
										</div>
									<p>Full Name:</p><input type="text" placeholder="First Name *" name='fname' class='form_search'>
									<p>Phone Number:</p><input type="text" placeholder="Phone Number*" name='phonenumber' class='form_search'>
									<p>Email:</p><input type="text" placeholder="Email*" name='email' class='form_search'>
									<p>State</p>
									<?php

									$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name";
									$query = mysqli_query($connection,$sql);
									?>
										
										<select name="state" onChange="showCity(this);"  id="state">
										  <option value="">Please Select</option>
										  <?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<option value=".$rs["state_id"].">".$rs["state_name"]."</option>";
										  
											} ?>
										</select>
									<div id="output2"></div> 
									<input type="submit" value="Upload File" name="submit" id="upload" class="btn btn-primary"/>
									
							</form>
							</div>
					</div>
</div>
</div>
</div>
</section>
	<?php include('footer.php');?>

</body>
</html>
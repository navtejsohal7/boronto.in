
<?php 
$_SESSION['unique']= mt_rand(); //$session id
$time=time();
print_r($_POST);
?>

<?php
require('connect.php');
// include ImageManipulator class
require_once('ImageManipulator.php');
if ($_FILES['image']['error'] > 0) {
    echo "Error: " . $_FILES['image']['error'] . "<br />";
} else {
    // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    // get extension of the uploaded file
    $fileExtension = strrchr($_FILES['image']['name'], ".");
    // check if file Extension is on the list of allowed ones
    if (in_array($fileExtension, $validExtensions)) {
        $newNamePrefix = time() . '_';
        $manipulator = new ImageManipulator($_FILES['image']['tmp_name']);
        // resizing to 200x200
        $newImage = $manipulator->resample(300, 300);
        // saving file to uploads folder
        $manipulator->save('uploads/' . $newNamePrefix . $_FILES['image']['name']);
    } else {
        echo 'You must upload an image...';
    }
}
 
?>
	<meta name=viewport content="width=device-width, initial-scale=1">

<link rel='stylesheet' href='//boronto.in/script/css/style.css'>
	<?php 
	if($_POST['category'] == 1)
	{
	$query1=mysqli_query($connection,"INSERT INTO category1_ads(subcategory_id,adtitle,ad_description,fullname,phonenumber,email,session_id,state_id,city_id,price,brand) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[price]','$_POST[brand]')");
	}
	elseif($_POST['category'] == 2)
	{
	$query1=mysqli_query($connection,"INSERT INTO category2_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,price,brand,year_of_manufacture,kms_driven) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[price]','$_POST[brand]','$_POST[year]','$_POST[kmdriven]')");
	}
	elseif($_POST['category'] == 3)
	{
	$query1=mysqli_query($connection,"INSERT INTO category3_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,price) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[price]')");
	}
	elseif($_POST['category'] == 4)
	{
	$query1=mysqli_query($connection,"INSERT INTO category4_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,address,nearest_place,far_from_nearest,discount) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[address]','$_POST[place]','$_POST[distance]','$_POST[discount]')");
	}
	elseif($_POST['category'] == 5)
	{
	$query1=mysqli_query($connection,"INSERT INTO category5_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,url) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[url]')");
	}
	elseif($_POST['category'] == 6)
	{
	$query1=mysqli_query($connection,"INSERT INTO category6_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]')");
	}
	elseif($_POST['category'] == 7)
	{
	$query1=mysqli_query($connection,"INSERT INTO category7_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,price,brand) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[price]','$_POST[brand]')");
	}
	elseif($_POST['category'] == 8)
	{
	$query1=mysqli_query($connection,"INSERT INTO category8_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,price) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[price]')");
	}
	elseif($_POST['category'] == 9)
	{
	$query1=mysqli_query($connection,"INSERT INTO category9_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,ad_type,price) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[Type]','$_POST[price]')");
	}
	elseif($_POST['category'] == 10)
	{
	$query1=mysqli_query($connection,"INSERT INTO category10_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,price) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[price]')");
	}
	elseif($_POST['category'] == 11)
	{
	$query1=mysqli_query($connection,"INSERT INTO category11_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,price,furnished,bedroom,bathroom,pets,broker,square_meter) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[price]','$_POST[furnished]','$_POST[bedroom]','$_POST[bathroom]','$_POST[pets]','$_POST[broker]','$_POST[squaremeter]')");
	}
	elseif($_POST['category'] == 12)
	{
	$query1=mysqli_query($connection,"INSERT INTO category12_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,ad_type,price) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[Type]','$_POST[price]')");
	}
	elseif($_POST['category'] == 13)
	{
	$query1=mysqli_query($connection,"INSERT INTO category13_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,ad_type,price) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[Type]','$_POST[price]')");
	}
	elseif($_POST['category'] == 14)
	{
	$query1=mysqli_query($connection,"INSERT INTO category14_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,position_type,experience,salary,expected_salary,profession) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[positiontype]','$_POST[experience]','$_POST[salary]','$_POST[expectedsalary]','$_POST[profession]')");
	}
	elseif($_POST['category'] == 15)
	{
	$query1=mysqli_query($connection,"INSERT INTO category15_ads(subcategory_id,adtitle,ad_description,full_name,phone_number,email,session_id,state_id,city_id,age,height,marital_status,religion,mother_tongue,qualification,occupation) VALUES ('$_POST[subcategory]','$_POST[adtitle]','$_POST[description]','$_POST[fullname]','$_POST[phonenumber]','$_POST[email]','$_SESSION[unique]','$_POST[state]','$_POST[city]','$_POST[age]','$_POST[height]','$_POST[maritalstatus]','$_POST[religion]','$_POST[mothertongue]','$_POST[qualification]','$_POST[occupation]')");
	}
	
	?>

<?php
include('header.php');
?>
<div id='content'>
	
	<div class='main'>
		<h3><span class='category-heading'>Ad of <? echo $_POST['adtitle'];?></span></h3>
		<?echo "<div class='col-sm-4'>
			<img src='uploads/". $newNamePrefix . $_FILES['image']['name']."' style='width:230px;float:left;margin-left:10px;margin-bottom:10px;'></div>";
			$target_path='uploads/'. $newNamePrefix . $_FILES['image']['name'];
			$query=mysqli_query($connection,"INSERT INTO user_uploads(image_name,user_id_fk,created,category_id,subcategory_id) VALUES('$target_path','$_SESSION[unique]','$time','$_POST[category]','$_POST[subcategory]')");
		if(!$query)
		{
			echo 'nooo';
		}
?>
		 <?
		 for($i=1;$i<=4;$i++)
{
if(isset($_FILES['image'.$i]['name']) == true && !empty($_FILES['image'.$i]['name']))
{
if ($_FILES['image'.$i]['error'] > 0) {
    echo "Error: " . $_FILES['image'.$i]['error'] . "<br />";
} else {
    // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    // get extension of the uploaded file
    $fileExtension = strrchr($_FILES['image'.$i]['name'], ".");
    // check if file Extension is on the list of allowed ones
    if (in_array($fileExtension, $validExtensions)) {
        $newNamePrefix = time() . '_';
        $manipulator = new ImageManipulator($_FILES['image'.$i]['tmp_name']);
        // resizing to 200x200
        $newImage = $manipulator->resample(300, 300);
        // saving file to uploads folder
        $manipulator->save('uploads/' . $newNamePrefix . $_FILES['image'.$i]['name']);
		$target_path='uploads/' . $newNamePrefix . $_FILES['image'.$i]['name'];
        $query=mysqli_query($connection,"INSERT INTO user_uploads(image_name,user_id_fk,created,category_id,subcategory_id) VALUES('$target_path','$_SESSION[unique]','$time','$_POST[category]','$_POST[subcategory]')");
		if(!$query)
		{
			echo 'nooo';
		}
			echo "<div class='col-sm-4'>
			<img src='uploads/". $newNamePrefix . $_FILES['image'.$i]['name']."' style='width:230px;float:left;margin-left:10px;margin-bottom:10px;'>
			</div>
			
		";
    } else {
        echo 'You must upload an image...';
    }
}
}
}
		?>
		<p class='descrip'><? echo $_POST['description'];?></p>
		<p class='descrip'>When you call, dont forget to mention that you found this ad on BORONTO.in
									I do not wish to be contacted by telemarketers or representatives of any other website. </p>
	</div>
	<div class='right-sidebar'>
		<div class='col-full'>
			<p><? echo $_POST['phonenumber'];?></p>
			
		</div>
		<div class='col-full-1'>
			<p style='wifth:100%;float:left;'><? echo $_POST['email'];?></p>
			
		</div>
		<div class='col-full-1'>
			<p><? echo $_POST['price'];?></p>
			
		</div>
		
	</div>
</div>
<?
include('footer.php');
?>
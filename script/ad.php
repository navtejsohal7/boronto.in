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
<link rel='stylesheet' href='//boronto.in/script/css/style.css'>
</head>
<body>
<?php
include('header.php');
?>
<div id='content'>
	
	<div class='main'>
		<h3><span class='category-heading'>Ad of </span></h3>
		<?echo "<div class='col-sm-4'>
			<img src='uploads/". $newNamePrefix . $_FILES['image']['name']."' style='width:230px;float:left;margin-left:10px;margin-bottom:10px;'></div>";?>
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
		
	</div>
	<div class='right-sidebar'>
		<div class='col-full'>
			<p>Submit AD</p>
			
		</div>
		<div class='col-full-1'>
			<p>Popular cities</p>
			
		</div>
		<div class='col-full-1'>
			<p>Popular Categories</p>
			
		</div>
		
	</div>
</div>
<?
include('footer.php');

?>
</body>

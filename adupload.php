<?php
echo'<pre>';
print_r($_POST);
print_r($_FILES);


error_reporting(0);
session_start();
require('db.php');

define ("MAX_SIZE","90000"); 
function getExtension($str)
{
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
}


$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") 
{
	
    $uploaddir = "uploads/"; //a directory inside
    foreach ($_FILES['image1']['name'] as $name => $value)
    {
	
        $filename = stripslashes($_FILES['image1']['name'][$name]);
        $size=filesize($_FILES['image1']['tmp_name'][$name]);
        //get the extension of the file in a lower case format
          $ext = getExtension($filename);
          $ext = strtolower($ext);
     	
         if(in_array($ext,$valid_formats))
         {
	       if ($size < (MAX_SIZE*1024))
	       {
		   $image_name=time().$filename;
		   echo "<img src='".$uploaddir.$image_name."' class='imgList'>";
		   $newname=$uploaddir.$image_name;
           
           if (move_uploaded_file($_FILES['image1']['tmp_name'][$name], $newname)) 
           {
	       $time=time();
	       mysql_query("INSERT INTO user_uploads(image_name,user_id_fk,created) VALUES('$image_name','$_SESSION[unique]','$time')");
	       }
	       else
	       {
	        echo '<span class="imgList">You have exceeded the size limit! so moving unsuccessful! </span>';
            }

	       }
		   else
		   {
			echo '<span class="imgList">You have exceeded the size limit!</span>';
          
	       }
       
          }
          else
         { 
	     	echo '<span class="imgList">Unknown extension!</span>';
           
	     }
           
     }
}

?>
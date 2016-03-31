  <head>
  	<meta name=viewport content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel='stylesheet' href='css/style.css'>
	<link rel='stylesheet' href='css/dropdown.css'>
	<link href="style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">

$(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
$(function() {
    $("#uploadFile2").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview2").css("background-image", "url("+this.result+")");
            }
        }
    });
});
$(function() {
    $("#uploadFile1").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview1").css("background-image", "url("+this.result+")");
            }
        }
    });
});
$(function() {
    $("#uploadFile3").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview3").css("background-image", "url("+this.result+")");
            }
        }
    });
});
$(function() {
    $("#uploadFile4").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview4").css("background-image", "url("+this.result+")");
            }
        }
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
$(document).ready(function() {
	$( "#frmLogin" ).validate({
submitHandler: function( form ) {
alert( "Call Login Action" );
}
});
    $("#submit_btn").click(function() { 
       
	    var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields		
		$("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
			$(this).css('border-color',''); 
			if(!$.trim($(this).val())){ //if this field is empty 
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag				
			}	
		});
       
      
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});

</script>
<style> 
body
{
font-family:"Roboto",sans-serif;
}
#imagePreview {
    width: 140px;
    height: 122px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
	top:0px;
	left:0px;
	border:1px dotted #C0C0C0;
}
#imagePreview1 {
    width: 55px;
    height: 55px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
		border:1px dotted #C0C0C0;

}
#imagePreview2 {
    width: 55px;
    height: 55px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
		border:1px dotted #C0C0C0;

}
#imagePreview3 {
    width: 55px;
    height:55px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
		border:1px dotted #C0C0C0;

}
#imagePreview4 {
    width: 55px;
    height: 55px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
		border:1px dotted #C0C0C0;

}
label.error {
color: red;
font-size: 16px;
font-weight: normal;
line-height: 1.4;
margin-top: 0.5em;
width: 100%;
float: none;
}
 
@media screen and (orientation: portrait){
label.error { margin-left: 0; display: block; }
}
 
@media screen and (orientation: landscape){
label.error { display: inline-block; margin-left: 22%; }
}
 
em { color: red; font-weight: bold; padding-right: .25em; }
</style>
<?php
include('header.php');
require('connect.php');
?>

<div class='uploader'>
	<h4>Post Ad Free</h4>
	<div id='form'>
		<h4>Product Information</h4>
		<form enctype="multipart/form-data" method="post" action="upload.php" class='adform' id='frmLogin'>
		<div class='image-portion'>
			<h4>Upload images max upto 4</h4>
			<p>Ad with images seen 10 more times than ad without image</p>
			<p>Donot Upload any image if Jobs category is selected</p>
			
			<div class='preview'>
				<div id="imagePreview"></div>
				<div id="imagePreview1"></div>
				<div id="imagePreview2"></div>
				<div id="imagePreview3"></div>
				<div id="imagePreview4"></div>
				
			</div>
			<div class='console'>
				<div class='row'>
				<label class="fileContainer">
					<img src='icons/camera.gif'>
					<input id="uploadFile" type="file" name="image" class="img" />
				</label>
				</div>
				<div class='row1'>

				<label class="fileContainer">
					<img src='icons/plus.gif'>
					<input id="uploadFile1" type="file" name="image1" class="img" />
				</label>
				</div>

				<div class='row1'>

				<label class="fileContainer">
					<img src='icons/plus.gif'>
					<input id="uploadFile2" type="file" name="image2" class="img" />
				</label>
				</div>
				<div class='row1'>

				<label class="fileContainer">
					<img src='icons/plus.gif'>
					<input id="uploadFile3" type="file" name="image3" class="img" />
				</label>
				</div>

				<div class='row1'>

				<label class="fileContainer">
					<img src='icons/plus.gif'>
					<input id="uploadFile4" type="file" name="image4" class="img" />
				</label>
				</div>
			</div>
		</div>
		<div class='texttab'>
			 <?php
		$sql = "SELECT * FROM category ORDER BY category_name";
		$query = mysqli_query($connection, $sql);
		?>
            <label><span class='textheading'>Category:</span>
            <select name="category" id = "drop1" class='text' required="true">
              <option value="">Please Select</option>
              <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC )) { ?>
              <option value="<?php echo $rs["category_id"]; ?>"><?php echo ucwords($rs["category_name"]); ?></option>
              <?php } ?>
            </select>
            </label>
          </div>

        <div class="cascade" id="state"></div> 

			
			<span class='textheading'>Title: *</span><input type='text' name='adtitle' class='text' required="true">
						<div id="city" class="cascade"></div>

			<span class='textheading'>Describe Your Ad: *</span><textarea type='text' name='description' rows='12' class='textarea' required="true"></textarea>
			<h4>Personal Information</h4>
			<span class='textheading'>Full Name: *</span><input type='text' name='fullname' required="true" class='text'>
			<span class='textheading'>Phone Number: *</span><input type='text' name='phonenumber'  class='text'>
			<span class='textheading'>Email: *</span><input type='email' name='email' class='text' required="true">
			<?php

			$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_name";
			$query = mysqli_query($connection,$sql);
			?>
			<span class='textheading'>State: *</span><select name="state" onChange="showCity(this);"  id="state" class='text' required="true">
			<option value="">Please Select</option>
			<?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
				{ 
				echo	"<option value=".$rs["state_id"].">".$rs["state_name"]."</option>";
				} ?>
			</select>
			<div id="output2"></div>
					<input type='submit' id='submit_btn' class='submit' value='POST AD'>

		</div>

		</form>
	</div>
</div>
<?php
include('footer.php');
?>
<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("select#drop1").change(function(){

	var category_id =  $("select#drop1 option:selected").attr('value'); 
// alert(country_id);	
	$("#state").html( "" );
	$("#city").html( "" );
	if (category_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "fetch_sub.php",
			data: "category_id="+category_id,
			cache: false,
			beforeSend: function () { 
				$('#state').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#state").html( html );
			}
		});
	} 
});
});
</script>
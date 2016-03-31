<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Cascaded dropdown with jQuery Ajax and PHP - InfoTuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<div id="container">
  <div id="body">
    <div class="mhead"><h2>Cascaded dropdown with jQuery Ajax and PHP - InfoTuts</h2></div>
	<div id="dropdowns">
       <div id="center" class="cascade">
          <?php
		$sql = "SELECT * FROM category ORDER BY category_name";
		$query = mysqli_query($connection, $sql);
		?>
            <label>Country:
            <select name="country" id = "drop1">
              <option value="">Please Select</option>
              <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC )) { ?>
              <option value="<?php echo $rs["category_id"]; ?>"><?php echo $rs["category_name"]; ?></option>
              <?php } ?>
            </select>
            </label>
          </div>

        <div class="cascade" id="state"></div> 

          <div id="city" class="cascade"></div> 
        </div>
    </div>
  </div>
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
			url: "fetch_state.php",
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
</body>
</html>

<?php
session_start();
$_SESSION['category_id'] = $_POST["category_id"];
include("connect.php");
$country_id = trim(mysql_escape_string($_POST["category_id"]));

$sql = "SELECT * FROM subcategory WHERE category_id = ".$country_id ." ORDER BY subcategory_name";
$count = mysqli_num_rows( mysqli_query($connection, $sql) );
if ($count > 0 ) {
$query = mysqli_query($connection, $sql);
?>
<label><span class='textheading'>Subcategory: </span>
<select name="subcategory" id="drop2" class='text'>
	<option value="">Please Select</option>
	<?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>
	<option value="<?php echo $rs["subcategory_id"]; ?>"><?php echo ucwords($rs["subcategory_name"]); ?></option>
	<?php } ?>
</select>
</label>
<?php 
	}

?>

<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){


$("select#drop2").change(function(){

	var subcategory_id = $("select#drop2 option:selected").attr('value');
   // alert(state_id);
	if (subcategory_id.length > 0 ) { 
	 $.ajax({
			type: "POST",
			url: "fetch_form.php",
			data: "subcategory_id="+subcategory_id,
			cache: false,
			beforeSend: function () { 
				$('#city').html('<img src="loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#city").html( html );
			}
		});
	} else {
		$("#city").html( "" );
	}
});

});
</script>
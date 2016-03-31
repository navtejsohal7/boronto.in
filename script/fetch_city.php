<?php

require("configure.php");
$state_id = ($_REQUEST["state_id"] <> "") ? trim( addslashes($_REQUEST["state_id"])) : "";
if ($state_id <> "" ) { 
$sql = "SELECT * FROM city WHERE state_id = ".$state_id ." ORDER BY city_name";
$count = mysqli_num_rows( mysqli_query($con,$sql) );
if ($count > 0 ) {
$query = mysqli_query($con,$sql);
?>
<span class='textheading'>City:</span>
	<div id='formcategory'>
		
		<select name="city" name="box" id="state1" class='text'>
			<option value="">Please Select</option>
			<?php while ($rs = mysqli_fetch_array($query,MYSQL_ASSOC)) { ?>
			<option value="<?php echo $rs["city_id"]; ?>"><?php echo $rs["city_name"]; ?></option>
			<?php } ?>
		</select>
</div>
</div>
<?php 
	}
}
?>
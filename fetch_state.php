<?php

require("configure.php");
$country_id = ($_REQUEST["country_id"] <> "") ? trim( addslashes($_REQUEST["country_id"])) : "";
if ($country_id <> "" ) { 
$sql = "SELECT * FROM state WHERE country_id = '$country_id' ORDER BY state_name";
$count = mysqli_num_rows( mysqli_query($con,$sql) );
if ($count > 0 ) {
$query = mysqli_query($con,$sql);
?>
<label>State: 
<select name="state" onchange="showCity(this);">
	<option value="">Please Select</option>
	<?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
	<option value="<?php echo $rs["state_id"]; ?>"><?php echo $rs["state_name"]; ?></option>
	<?php } ?>
</select>
</label><div id="output2"></div>
<?php 
	}
}
?>
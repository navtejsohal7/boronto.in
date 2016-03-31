<?php

require("configure.php");
$category_id = ($_REQUEST["category_id"] <> "") ? trim( addslashes($_REQUEST["category_id"])) : "";
if ($category_id <> "" ) { 
$sql = "SELECT * FROM subcategory WHERE category_id = ".$category_id ." ORDER BY subcategory_name";
$count = mysqli_num_rows( mysqli_query($con,$sql) );
if ($count > 0 ) {
$query = mysqli_query($con,$sql);
?>
<h4 class='subcat'>Subcategory:</h4>
	<div id='formcategory'>
		<select name="subcategory" name="box" id="state1" onchange = "showForm()">
			<option value="0">Please Select</option>
			<?php while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
			<option value="<?php echo $rs["subcategory_id"]; ?>"><?php echo $rs["subcategory_name"]; ?></option>
			<?php } ?>
		</select>
		
</div>
</div>
<?php 
	}
}
?>
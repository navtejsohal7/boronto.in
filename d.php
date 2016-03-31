
	<?php									require('connect.php');


									$sql = "SELECT state_name FROM state WHERE country_id = '105'";
									$query = mysqli_query($connection,$sql);
									
										
										 while ($rs = mysqli_fetch_array($query,MYSQLI_ASSOC ))
											{ 
											echo	"<li><a href=ads/".strtolower(str_replace("-"," ",$rs["state_name"]))."/>".$rs["state_name"]."</a></li>";
										  
											} ?>
													
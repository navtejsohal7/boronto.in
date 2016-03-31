<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>

div.dropdown {
color: #555;
margin: 33px 0px 0 30px;
width: 143px;
float:left;
height: 17px;
text-align:left;
}
div.submenu
{
background: #fff;
position: absolute;
z-index: 100;
width: 220px;
display: none;
margin-left: -25px;
margin-top: -10px;

padding: 40px 0 5px;
border-radius: 6px;
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.45);
}

.dropdown  li a {
   
    color: #555555;
    display: block;
    font-family: arial;
    font-weight: bold;
    padding: 6px 15px;
  cursor: pointer;
text-decoration:none;
}

.dropdown li a:hover{
    background:#155FB0;
    color: #FFFFFF;
    text-decoration: none;
    
}
a.account {
font-size: 11px;
line-height: 16px;
color: #555;
position: absolute;
z-index: 110;
display: block;
width: 140px;
font-size:16px;
font-weight:bold;
text-decoration: none;
background: url(//boronto.in/script/icons/arrow.png) 131px 7px no-repeat;
cursor:pointer;
}
.root
{
list-style:none;
margin:0px;
padding:0px;
font-size: 16px;
padding: 11px 0 0 0px;
border-top:1px solid #dedede;
	
	
}
.root li
{
padding:5px 2px 0px 2px;
}

</style>
</head>
<header>
	<div id='header'>
	<div class='header-top'>
	</div>
	<div class='header'>
		<div class='col-sm-5'>
			<a href='//www.boronto.in/script/'><img src='//boronto.in/script/images/logo.png' alt='Logo_of_Boronto' class='full-logo'><span class='country'>India</span></a>
			<div class="dropdown">
				<a class="account" >
				<span>Select Your City</span>
				</a>
				<div class="submenu" style="display: none; ">
				  <ul class="root">
				  <?php
					include('connect.php');
					$sql = "SELECT * FROM state WHERE country_id = '105' ORDER BY state_id ";
					$query = mysqli_query($connection,$sql);
					while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC))
					{
						echo '<li >'.$rs['state_name'].'</li>';
					}
					?>
				  </ul>
				</div>
			</div>
			
		</div>
		<div class='search-bar'>
							<form>
								<div class="input_container">
									<input type="text" id="country_id" name='keyword' onkeyup="autocomplet()" class='bar'>
									<ul id="country_list_id"></ul>
								</div>
							</form>
				<input type='submit' class='button' value='Search'>
			</div>
	</div>
	</div>
</header>
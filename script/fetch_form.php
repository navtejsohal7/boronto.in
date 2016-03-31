<?php
session_start();
$category=$_SESSION['category_id'];
$subcategory=$_POST['subcategory_id'];

if($category == 1 || $category == 7)
{
echo "<span class='textheading'>Brand: *</span><input type='text' name='brand' class='text' >
	  <span class='textheading'>Price: *</span><input type='text' name='price' class='text'>";
}
elseif($category == 5 )
{
echo "<span class='textheading'>URL: *</span><input type='text' name='url' class='text'>
	 ";
}
elseif($category == 8 || $category == 3 || $category == 10)
{
echo "<span class='textheading'>Price: *</span><input type='text' name='price' class='text'>";
}

elseif($category == 4 )
{
echo "<span class='textheading'>Address: *</span><input type='text' name='address' class='text'>
		<span class='textheading'>Nearest Place: *</span><input type='text' name='place' class='text'>
		<span class='textheading'>Far from nearest place: *</span><input type='text' name='distance' class='text'>
		<span class='textheading'>Discount On Every Item: *</span><input type='text' name='discount' class='text'>";
}
elseif($category == 11 )
{
echo "<span class='textheading'>Furnished: *</span><select name='furnished' class='text'><option>Yes</option><option>No</option></select>
	  <span class='textheading'>Bedroom: *</span><select name='bedroom' class='text'><option>1</option><option>2</option>
																					 <option>3</option><option>4</option>
																					 <option>5</option><option>6</option>
																					 <option>7</option><option>8</option>
																					 <option>9</option><option>10</option>
																					 </select>
	  <span class='textheading'>Bathroom: *</span><select name='bathroom' class='text'><option>1</option><option>2</option>
																					 <option>3</option><option>4</option>
																					 <option>5</option><option>6</option>
																					 <option>7</option><option>8</option>
																					 <option>9</option><option>10</option>
																					 </select>
	  	<span class='textheading'>Pets: *</span><select name='pets' class='text'><option>Yes</option><option>No</option></select>	
		<span class='textheading'>Broker: *</span><select name='broker' class='text'><option>Yes</option><option>No</option></select>	
		
		<span class='textheading'>Square meter: *</span><input type='text' name='squaremeter' class='text'>
		<span class='textheading'>Price/Rent: *</span><input type='text' name='price' class='text'>";
}

elseif($category == 9 && $subcategory == 53)
{
echo "<span class='textheading'>Type: *</span><input type='text' name='Type' class='text' placeholder='Eg:Cat,Dog,horse....'>
	  <span class='textheading'>Price: *</span><input type='text' name='price' class='text'>";
}
elseif($category == 13 && $subcategory == 73)
{
echo "<span class='textheading'>Type: *</span><input type='text' name='Type' class='text' placeholder='Eg:Cat,Dog,horse....'>
	  <span class='textheading'>Price: *</span><input type='text' name='price' class='text'>";
}

elseif($category == 12)
{
echo "<span class='textheading'>Type: *</span><input type='text' name='Type' class='text' placeholder='Eg:Fridge,AC.....'>
	  <span class='textheading'>Price: *</span><input type='text' name='price' class='text'>";
}
elseif($category == 14 && $subcategory == 79)
{
echo "<span class='textheading'>Position Type: *</span><input type='text' name='positiontype' class='text' placeholder='Eg:Manager,assistant,programmer,.....'>
	  <span class='textheading'>Experience: *</span><input type='text' name='experience' class='text'>
	  <span class='textheading'>Expected Salary: *</span><input type='text' name='expectedsalary' class='text'>
<span class='textheading'>Type Of Profession: *</span><input type='text' name='profession' class='text' placeholder='Eg:IT,Teacher.....'>
	  
	  ";
}
elseif($category == 14 && $subcategory == 76)
{
echo "<span class='textheading'>Position Type: *</span><input type='text' name='positiontype' class='text' placeholder='Eg:Manager,assistant,programmer,.....'>
	  <span class='textheading'>Experience: *</span><input type='text' name='experience' class='text'>
	 <span class='textheading'>Salary: *</span><input type='text' name='salary' class='text'>
<span class='textheading'>Type Of Profession: *</span><input type='text' name='profession' class='text' placeholder='Eg:IT,Teacher.....'>
	  
	  ";
}


elseif($category == 2 && $subcategory == 4 || $subcategory == 5|| $subcategory == 7|| $subcategory == 9)
{
echo "<span class='textheading'>Brand Name: *</span><input type='text' name='brand' class='text' placeholder='Eg:Audi,Maruti,Hayundai'>
	  <span class='textheading'>Price: *</span><input type='text' name='price' class='text'>
	  <span class='textheading'>Year Of Manufacture: *</span><select name='year' class='text'>
												<option>2014</option>
												<option>2013</option>
												<option>2012</option>
												<option>2011</option>
												<option>2010</option>
												<option>2009</option>
												<option>2008</option>
												<option>2007</option>
												<option>2006</option>
												<option>2005</option>
												<option>2004</option>
												<option>2003</option>
												<option>2002</option>
												<option>2001</option>
												<option>2000</option>
												<option>1999</option>
												<option>1998</option>
												<option>1997</option>
												<option>1996</option>
												<option>1995</option>
												<option>1994</option>
												<option>1993</option>
												<option>1992</option>
												<option>1991</option>
												<option>1990</option>
												<option>1989</option>
												<option>1988</option>
												<option>1987</option>
											</select>
		<span class='textheading'>Kms Driven:</span><input type='text' name='kmdriven' class='text'>										
												
	  ";
}
elseif($category == 2 && $subcategory == 6 || $subcategory == 8)
{
echo "
	  <span class='textheading'>Price: *</span><input type='text' name='price' class='text'>";

}
elseif($category == 15 && $subcategory == 80 || $subcategory == 81)
{
echo "
	  <span class='textheading'>Age: *</span><input type='text' name='age' class='text'>
	  <span class='textheading'>Height: *</span><input type='text' name='height' class='text'>
	  <span class='textheading'>Marital Status: *</span><input type='text' name='maritalstatus' class='text'>
	  <span class='textheading'>Religion: *</span><input type='text' name='religion' class='text'>
	  <span class='textheading'>Mother Tongue: *</span><input type='text' name='mothertongue' class='text'>
	  <span class='textheading'>Qualification: *</span><input type='text' name='qualification' class='text'>
	  <span class='textheading'>Occupation: *</span><input type='text' name='occupation' class='text'>
	  ";

}
?>
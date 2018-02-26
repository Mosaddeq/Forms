<html>
<title>Registration</title>
<head>
<h1 align="center">Registration Form</h1>


</head>
<body>
<div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']); 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>




<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">   <!$_SERVER["PHP_SELF"]Returns the filename of the currently executing script> 

	Name: <br>
	<input type="text" name="name" value="" placeholder="Full Name"/>
	
	<br>
	<br>


	
	
	Email: <br>
		
		<input type="text" name="" value="" placeholder="********@****.com" />
		<br>
		<br>
	Gender:<br>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<br><br>
	
	Password:<br>

		<input type="text" name="" value="" placeholder="*********"/>
		<br>
		<br>
	
	Confirm Password:<br>
		<input type="text" name="" value="" placeholder="*********"/>
		<br>
		<br>
	
	User Type:
		<select value="combo">
		<option value="option1">Instructor</option>
		<option value="option2">Student</option>
		
		</select>
		<br>
		<br>
	
	Contact Info:<br>
	
		<textarea cols="48" rows="5" placeholder="NOT MENDATORY"></textarea>
		
		<br>
		<br>
		<input type="radio" name="" value="" placeholder="" />Yes,I've read the terms and conditions and i agree.
		<br>
		<br>
		
		
		<input type="submit" name="" value="Sign Up"/>
		
	
	

	
	
		
		

	
	
	
	


</form>
</div>
</body>

</html>

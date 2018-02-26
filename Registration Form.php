<!DOCTYPE HTML> 
<html>
<title>Registration</title>
<head>
<h1 align="center">Registration Form</h1>


</head>
<body>
<div>
<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']); 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}*/
$name = $email = $gender = $password = $confirm = $uType = $cInfo = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$gender = test_input($_POST["gender"]);
	$password = test_input($_POST["password"]);
	$confirm = test_input($_POST["confirm"]);
	$uType = test_input($_POST["uType"]);
	$cInfo = test_input($_POST["cInfo"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   <!$_SERVER["PHP_SELF"]Returns the filename of the currently executing script> 

	Name: <br>
	<input type="text" name="name" value="" placeholder="Full Name"/>
	
	<br>
	<br>


	
	
	Email: <br>
		
		<input type="text" name="email" value="" placeholder="********@****.com" />
		<br>
		<br>
	Gender:<br>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<br><br>
	
	Password:<br>

		<input type="text" name="password" value="" placeholder="*********"/>
		<br>
		<br>
	
	Confirm Password:<br>
		<input type="text" name="confirm" value="" placeholder="*********"/>
		<br>
		<br>
	
	User Type:
		<select value="combo" name="uType" >
		<option value="Instructor">Instructor</option>
		<option value="Student">Student</option>
		
		</select>
		<br>
		<br>
	
	Contact Info:<br>
	
		<textarea cols="48" rows="5" name="cInfo" placeholder="NOT MENDATORY"></textarea>
		
		<br>
		<br>
		<input type="radio" name="" value="" placeholder="" />Yes,I've read the terms and conditions and i agree.
		<br>
		<br>
		
		
		<input type="submit" name="" value="Sign Up"/>
		
		
<?php
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $password;
		echo "<br>";
		echo $confirm;
		echo "<br>";
		echo $uType;
		echo "<br>";
		echo $cInfo;
?>
		
	
	

	
	
		
		

	
	
	
	


</form>
</div>
</body>

</html>

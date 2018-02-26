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
}*/ $nameErr = $emailErr = $genderErr = $passErr = $confirmErr = $checkErr = ""; //setting empty vars to hold err msgs



	$name = $email = $gender = $password = $confirm = $uType = $cInfo = $check ="";
	if($_SERVER["REQUEST_METHOD"] == "POST")    /*check whether the form has been submitted using $_SERVER["REQUEST_METHOD"].If the REQUEST_METHOD is POST, then the form has been submitted  
												- and it should be validated. If it has not been submitted,skip the validation and display a blank form*/ 
												
{	if(empty ($_POST["name"])){
	$nameErr = "Field required";
}	else
	{
	$name = test_input($_POST["name"]);
												// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }

	}
	if(empty ($_POST["email"])){
	$emailErr = "Field required";
	}
	else
	{
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // PHP's filter_var() function lets us check whether an email address is well-formed 
	{
      $emailErr = "Invalid email format"; 
    }
	}
	if(empty ($_POST["gender"])){
	$genderErr = "Field required";
	}
	else
	{
	$gender = test_input($_POST["gender"]);
	}
	if(empty ($_POST["password"])){
	$passErr = "Field required";
	}
	else
	{
	$password = test_input($_POST["password"]);
	}
	if(empty ($_POST["confirm"])){
	$confirmErr = "Field required";
	}
	else
	{
	$confirm = test_input($_POST["confirm"]);
	if($_POST["confirm"] != $_POST ["password"]) //whether password matches or not
	{
		$confirmErr = "pass doesn't match";
	}
	}
	if(empty ($_POST["check"])){
	$emailErr = "Field required";
	}
	else
	{
	$check = test_input($_POST["check"]);
	}
	
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
	<span class="error">* <?php echo $nameErr;?></span>								<! display errors on html page>
	
	<br>
	<br>
	
	Email: <br>
		
		<input type="text" name="email" value="" placeholder="********@****.com" />
		<span class="error">* <?php echo $emailErr;?></span>	
		<br>
		<br>
	Gender: <br>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<span class="error">* <?php echo $genderErr;?></span>	
		<br><br>
	
	Password:<br>

		<input type="text" name="password" value="" placeholder="*********"/>
		<span class="error">* <?php echo $passErr;?></span>	
		<br>
		<br>
	
	Confirm Password:<br>
		<input type="text" name="confirm" value="" placeholder="*********"/>
		<span class="error">* <?php echo $confirmErr;?></span>	
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
		<input type="radio" name="check" value="" placeholder="" />Yes,I've read the terms and conditions and i agree.
		<span class="error">* <?php echo $checkErr;?></span>	
		<br>
		<br>
		
		
		<input type="submit" name="" value="Sign Up"/>
		
		
<?php
		echo "<h2>Your Information:</h2>";
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

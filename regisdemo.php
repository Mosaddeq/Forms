<?php
$passErr = "";

if($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'wrbtec';
	
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	if(!$conn)
	{
		echo "not connected";
	}
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$passC = $_POST['passC'];
	$type = $_POST['type'];
	
	
	
	$is_err = 0;
	
	if($pass != $passC)
	{
		$passErr = "password did not match";
		$is_err = 1;
	}
	
	$sql = "insert into users values(".$id.",'".$name."','".$pass."','".$type."')";
	
	
	if($is_err==0)
	{
		mysqli_query($conn,$sql);
	}
	
	
	
	
}





 ?>





<center>
<form action="registration.php" method="POST">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input name="id" type="text"><br/>
					Password<br/><input name="pass" type="password"><br/>
					Confirm Password<br/><input name="passC" type="password"><br/>
					<?php echo $passErr ?>
					Name<br/><input name="name" type="text"><br/>
					User Type>
					<input name="type" value="user" type="radio" />User
					<input name="type" value="admin" type="radio" />Admin
					<hr/>
					<input type="submit" value="Sign Up">
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
		

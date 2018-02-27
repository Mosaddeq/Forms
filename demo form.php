<?php
if(isset($_POST['submit'])){
	$id 	=trim($_POST['id']);
	$name 	=trim($_POST['name']);
	$pass 	=trim($_POST['pass']);
	$repass =trim($_POST['repass']);
	$type	=trim($_POST['type']);
	
	/*$c = mysqli_connect ('localhost','root','webtec');
	$sql = "insert into user values (".id."','"name."','".pass."','".type."')";
	mysqli_query($con,$sql);
	mysqli_close($con);
	*/
	
	$data = "ID:" .$id."\r\n";
	$data = "NAME:".$name."\r\n";
	$data = "PASS:".$pass."\r\n";
	$data = "TYPE:".$type."\r\n";
	
	$f = fopen("user.txt","w");
	fwrite($f,$data);
	fclose($f);
	
	$f=fopen("user.txt","r");
	$file=fgets($f,$data);
	$myarray = explode(':',$file);
	fclose($f);
	
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id"><br/>
						
					Password<br/><input type="text" value="" name="pass" ><br/>
					
					Confirm Password<br/><input type="password" name="repass" ><br/>
					Name<br/><input type="text"><br/>
					User Type<hr/>
					<input type="radio" name="type" value="user" />User
					<input type="radio" name="type" value="admin" />Admin
					<hr/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr> 
			<?
	echo $id;
	?>
	</table>
	
</form>
</center>

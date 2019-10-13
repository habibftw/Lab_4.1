<?php

print "*handler page*"."<br>"."<br>";

$gender = $_POST['gender'];

print "Gender: ";
echo $gender;

?>

<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="post" action="gender.php">
		<fieldset>
			<legend><b>Gender</b></legend>
			<table border="0" >
				<tr> 
					<tr>
					<input type="radio" name="gender" value="Male"/> Male
						<input type="radio" name="gender" value="Female"/>Female 
						<input type="radio" name="gender" value="Other"/>Other
						<br>
						<br>
						
						<?php echo $gender ?>
						
					<p>____________________________</p>
					</td>
				</tr>
				
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
			
			</table>
		</fieldset>
	</form>
</body>
</html>
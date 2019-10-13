<?php

print "*handler page*"."<br>"."<br>";

$date = $_POST['dob'];

print "Date of birth: ";
echo $date;

?>

<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="post" action="dob.php">
		<fieldset>
			<legend><b>Date Of Birth</b></legend>
			<table border="0" >
				<tr> 
					<input type="date" name="dob" value= <?php echo $date;?> />
					<?php
					echo $date;
					?>

					<p>____________________________</p>
					
				</tr>
				
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
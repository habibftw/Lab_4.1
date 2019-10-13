<?php

print "*handler page*"."<br>"."<br>";

$name = $_POST['name'];

print "Name: ";
echo $name;

?>

<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="post" action="name.php">
		<fieldset>
			<legend><b>Name</b></legend>
			<table border="0" >
				<tr> 
					<input type="text" name="name" value= <?php echo $name;?> />
					<?php
					echo $name;
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
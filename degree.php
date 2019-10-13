<?php


	if(!empty($_POST['option']))
	{
		foreach($_POST['option'] as $option)
		{
			echo " ".$option;
		}
	}


?>

<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="post" action="degree.php">
		<fieldset>
			<legend><b>Degree</b></legend>
			<table border="0" >
					<tr>
					
					<td>
						<input type="checkbox" name="option[]" value="SSC">SSC
						<input type="checkbox" name="option[]" value="HSC">HSC
						<input type="checkbox" name="option[]" value="BSc">BSc
						<input type="checkbox" name="option[]" value="MSc">MSc
					</td>
					<br>
					<td>      </td>
					<td>
					<?php


	if(!empty($_POST['option']))
	{
		foreach($_POST['option'] as $option)
		{
			echo " ".$option;
		}
	}


?>
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
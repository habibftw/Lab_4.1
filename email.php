<?php

print "*handler page*"."<br>"."<br>";

$email = $_POST['email'];

if ( $email == "" )
 {
	 echo "Enter email";
}
 else
   { print "Email: ";
   echo $email;}



?>

<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="post" action="email.php">
		<fieldset>
			<legend><b>Email</b></legend>
			<table border="0" >
				<tr> 
					<input type="text" name="email" value= <?=$email;?> />
					<?=$email;?>

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
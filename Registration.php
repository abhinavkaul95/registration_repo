<?php include('insert.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> Student Registration </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<div class="headers">
		<h1>Student Registration</h1>
	</div>

		<form action="Registration.php" method="post">
			<!-- display validation errors here-->
			<?php include('errors.php');?>

			<div class="input-group">
				<label>Name: </label>
				<input type="text" name="name" vlue="<?php echo $name ?>"><span>*</span>
			</div>
			<div class="input-group">	
				<label>Email:</label>
				<input type="text" name="email" vlue="<?php echo $email ?>"><span>*</span>
			</div>
			<div class="input-group">	
				<label>Address:</label>
				<input type="text" name="address" vlue="<?php echo $address ?>">
			</div>
			<div class="input-group">	
				<label>Mobile No.:</label>
				<input type="text" name="phone" vlue="<?php echo $phone ?>"><span>*</span>
			</div>
			<div class="input-group">	
				<label>DOB:</label>
				<input type="date" name="dob" vlue="<?php echo $DOB ?>">
			</div>	
			<div class="input-group">
				<label>Registration No.:</label>
				<input type="text" name="regnumber">
			</div>
			<div class="input-group">	
				<label>Gender:</label>
				<input id="radiobt" type="radio" name="gender" value="Male">Male 
				<input id="radiobt" type="radio" name="gender" value="Female">Female
				<input id="radiobt" type="radio" name="gender" value="Other">Other
			</div>
			<div class="input-group">	
				<button type="Submit" name="Submit">Register</button><br>	
				<p> Already Registered?    <a href="details.php">Check</a> </p>
			</div>
			</form>


			

</body>
</html>
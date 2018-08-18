<?php
	$name = "";
	$email = "";
	$phone = "";
	$errors = array();

	$db = mysqli_connect("localhost", "root", "", "registration");
	

	if (isset($_POST['Submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$dob = $_POST['dob'];
		$regnumber = $_POST['regnumber'];
		$gender = $_POST['gender'];

	/*if ($name!="" && $email!="" && $phone!="")*/
		if (empty($name))
			{
				array_push($errors, "Name is Required");
			}	
		if (empty($email))
			{
				array_push($errors, "Email is Required");
			}
		if (empty($phone))
			{
				array_push($errors, "Mobile no. is Required");
			} 
			
		if (count($errors) == 0) 	
			{	
				$insrt = "INSERT INTO `registration`
							  VALUES('$name', '$email', '$address', '$phone', '$dob', '$regnumber', '$gender')";
				$data = mysqli_query($db, $insrt);

					if ($data)
						{ 
							echo "User Registered";							
						}
			}
	}									

?>
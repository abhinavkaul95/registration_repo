<?php 
	$name = "";
	$email = "";
	$phone = "";
	$errors = array();


	//connect to the database
	$db = mysqli_connect("localhost", "root", "", "students");
		

	//if the register button is clicked
	if(isset($_POST['Submit']))
	{
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$dob = mysqli_real_escape_string($db, $_POST['dob']);
		$regnumber = mysqli_real_escape_string($db, $_POST['regnumber']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);

		
	//ensure that feilds are not empty
		if (empty($name)) {
				array_push($errors, "Name is Required");
			}	
		if (empty($email)) {
				array_push($errors, "Email is Required");
			}
		if (empty($phone)) {
				array_push($errors, "Mobile no. is Required");
			}
		
				
		//if there are no errors, save user to dattabase
		
		if (count($errors) == 0)
			{
				$qry = "INSERT INTO 'info' VALUES('$name', '$email', '$address', '$phone', '$dob', '$regnumber', '$gender')";
				$entry = mysqli_query($db, $qry);
				if ($entry)
				{
					echo "Entry Done!";
				}
				
			}		
	}
?>
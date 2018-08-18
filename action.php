<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'registration');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["name"]);
$email = mysqli_real_escape_string($connect, $input["email"]);
$address = mysqli_real_escape_string($connect, $input["address"]);
$phone = mysqli_real_escape_string($connect, $input["phone"]);
$DOB = mysqli_real_escape_string($connect, $input["DOB"]);
$regnumber = mysqli_real_escape_string($connect, $input["regnumber"]);
$gender = mysqli_real_escape_string($connect, $input["gender"]);

if($input["action"] === 'edit')
{
 $query = "UPDATE 'registration' 
		 	SET name = '".$name."', 
		 	email = '".$email."',
		 	address = '".$address."',
		 	phone = '".$phone."',
		 	DOB = '".$DOB."',
		 	gender = '".$gender."'
		 	WHERE regnumber = '".$input["regnumber"]."' ";

 mysqli_query($connect, $query);
}

if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM registration 
 WHERE regnumber = '".$input["regnumber"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

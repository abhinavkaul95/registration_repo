<?php
	error_reporting(0);
	//$db = mysqli_connect("localhost", "root", "", "registration") or die("could not connect");

	//mysql_select_db("students registration") or die("database not found");
	$output = "";
	//collect
	if(isset($_POST['submit']))
	{
		$db = mysqli_connect("localhost", "root", "", "registration") or die("could not connect");
		$searchq = $_POST['searchs'];
		$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
		$find = "SELECT * FROM registration WHERE name LIKE '%$searchq%' or regnumber LIKE '%$searchq%'";
		$querys = mysqli_query($db, $find);
		$count = mysqli_num_rows($querys);
		if ($count == 0)
			{
				$output = 'There were no entries!';
			}
		else
			{
				
				
			}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery.tabledit.min.js"></script>
</head>
<body>
	<h1>Check Details</h1>
	<div>	
		<form class="heads" action="details.php" method="post">
			<label>Enter Name or Reistration No.</label>
			<input type="text" name="searchs" placeholder="Search....."/>
			<button type="submit" name="submit"></button> <br> <br>
			<p>Not Registered?<a href="Registration.php">Register Here</a> </p>
		</form> <br>

		<div class="container">
			<table id="editable_table" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Mobile No.</th>
					<th>DOB</th>
					<th>Registration No.</th>
					<th>Gender</th>
				</tr>
				</thead>			
				<tbody>
						<?php
					    while($row = mysqli_fetch_array($querys))
					    {
					      echo '
							      <tr>
							       <td>'.$row["name"].'</td>
							       <td>'.$row["email"].'</td>
							       <td>'.$row["address"].'</td>
							       <td>'.$row["phone"].'</td>
							       <td>'.$row["DOB"].'</td>
							       <td>'.$row["regnumber"].'</td>
							       <td>'.$row["gender"].'</td>
							      </tr>
							     ';
					    }
					    ?>
     
				</tbody>
			</table>	
		</div>	
	</div>	
	
		
</body>
</html>
<script>  
	$(document).ready(function(){  
	     $('#editable_table').Tabledit({
	      url:'action.php',
	      columns:{
	       identifier:[5, "regnumber"],
	       editable:[[0, 'name'], [1, 'email'], [2, 'address'], [3, 'phone'], [4, 'DOB'], [6, 'gender']]
	      },
	      restoreButton:false,
	      onSuccess:function(data, textStatus, jqXHR)
	      {
	       if(data.action == 'delete')
	       {
	        $('#'+data.id).remove();
	       }
	      }
	     }); 
		});  
</script>
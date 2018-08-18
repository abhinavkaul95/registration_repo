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
			
			/*while ($row = mysqli_fetch_array($querys))
				{
					$sn = $row['name'];
					$em = $row['email'];
					$ad = $row['address'];
					$ph = $row['phone'];
					$dob = $row['dob'];
					$rn = $row['regnumber'];
					$gn = $row['gender'];
					

					$output .= '<div> '.$sn.' '.$em.' '.$ad.' '.$ph.' '.$dob.' '.$rn.' '.$gn.'</div>';
				}*/
		}
}

?>
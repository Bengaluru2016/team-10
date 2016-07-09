<!DOCTYPE html>
<html>
	<head>
		<title>Mentor Registration</title>
	</head>
	<body>
		<h2>Mentor Registration Form</h2> <br><br>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			Name <br>
			<input type="text" name="name"> <br><br>
			Password <br>
			<input type="password" name="pwd"> <br><br>
			Email<br>
			<input type="email" name="email"> <br><br>
			Contact Number <br>
			<input type="text" name="contact"> <br><br>
			Expertise <br>
			<!-- <input type="text" name="expertise"> --> 
			<input type="radio" name="exp" value="Agriculture">Agriculture
			<input type="radio" name="exp" value="Education" >Education
			<input type="radio" name="exp" value="Healthcare">Healthcare
			<input type="radio" name="exp" value="Energy">Energy
			<br><br>
			<input type="submit" name="register">
		</form>
		<br><br><br>
		<!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			Search <br>
			<input type="text" name="search_reg" placeholder="Registration Number"><br><br>
			<input type="submit" name="search">
		</form> -->
	</body>
</html>	

<?php

	$host = 'localhost:3306';
	$user = 'root';
	$pwd = '';
	$db = 'villgro';

	$conn = mysql_connect($host,$user,$pwd);
	if(!$conn)
		die("Failed to connect".mysql_error());

	if(!mysql_select_db($db,$conn))
		die(mysql_error());

	if(isset($_POST['register']))
	{
		$name =  $_POST['name'];
		$pwd = $_POST['pwd'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$expertise = $_POST['exp'];

		$insert = "INSERT INTO registration VALUES('$name','$pwd','$email','$contact','$expertise')";

		$run_query = mysql_query($insert,$conn);

		if(!$run_query)
			echo "Failed to insert values\n";
	}

	// else if(isset($_POST['search']))
	// {
	// 	$reg_num = $_POST['search_reg'];
	// 	$search_query = "SELECT * FROM car WHERE reg_num='$reg_num'";
	// 	$run_query = mysql_query($search_query,$conn);
	// 	$res = mysql_fetch_assoc($run_query);
	// 	$num_rows = mysql_num_rows($run_query);
	// 	if($num_rows)
	// 	{
	// 		echo "\nRegistration Number : ".$res['reg_num'];
	// 		echo "\nModel : ".$res['model'];
	// 		echo "\nColor : ".$res['color'];
	// 		echo "\nYear of Manufacture: ".$res['year'];
	// 		echo "\nMileage : ".$res['mileage'];
	// 	}
	// 	else
	// 	{
	// 		echo "No records found !\n";
	// 	}
	// }
?>

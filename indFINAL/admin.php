<!DOCTYPE html>
<html>
	<head>
		<title>Mentor Registration</title>
	</head>
	<body>
		<h2>Admin</h2> <br><br>
		<!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			Name <br>
			<input type="text" name="name"> <br><br>
			Password <br>
			<input type="password" name="pwd"> <br><br>
			Email<br>
			<input type="number" name="email"> <br><br>
			Contact Number <br>
			<input type="text" name="contact"> <br><br>
			Expertise <br>
			<input type="number" name="expertise"> <br><br>
			<input type="submit" name="register">
		</form>
		<br><br><br> -->
		Mentor List <br>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			List <br>
			<input type="submit" name="List" value="List">
		</form>

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

	/*if(isset($_POST['register']))
	{
		$name =  $_POST['name'];
		$pwd = $_POST['pwd'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$expertise = $_POST['expertise'];

		$insert = "INSERT INTO registration VALUES('$name','$pwd','$email','$contact','$expertise')";

		$run_query = mysql_query($insert,$conn);

		if(!$run_query)
			echo "Failed to insert values\n";
	}*/
/*	if (isset($_POST['List'])) {
		# code...
	
		$search_query1 = "SELECT * FROM registration";
		$run_query1 = mysql_query($search_query1,$conn);
		$res1 = mysql_fetch_assoc($run_query1);
		$num_rows1 = mysql_num_rows($run_query1);
		i($num_rows1)
		{
			echo "\nName ".$res1['Name'];
			echo "\nEmail : ".$res1['Email'];
			echo "\nContact No. : ".$res1['Contact Number'];
			echo "\nExpertise: ".$res1['Expertise'];
		}


*/

 if(isset($_POST['List']))
    {
        $query = "SELECT * FROM registration";
        $run_query1 = mysql_query($query);
        while($row =  mysql_fetch_row($run_query1))
        {
            echo $row[0]."<br>";
        }
    }

    ?>
    <html>
    <body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			Search <br>
			<input type="text" name="name" placeholder="name"><br><br>
			<input type="submit" name="search">
		</form>
	</body>
	</html> 

    <?php

	if(isset($_POST['search']))
	{
		$name = $_POST['name'];
		$search_query = "SELECT * FROM registration WHERE name='$name'";
		$run_query = mysql_query($search_query,$conn);
		$res = mysql_fetch_assoc($run_query);
		$num_rows = mysql_num_rows($run_query);
		if($num_rows)
		{
			echo "\nName ".$res['Name'];
			echo "\nEmail : ".$res['Email'];
			echo "\nContact No. : ".$res['Contact Number'];
			echo "\nExpertise: ".$res['Expertise'];
		}
		else
		{
			echo "No records found !\n";
		}
	}
?>

<html>
<body>
<h2>Car Registration Form</h2> <br><br>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
			Regisration Number <br>
			<input type="text" name="note"> <br><br>
		
			<input type="submit" name="register">
		</form>
</body>
</html>
<?php
if(isset($_POST['register']))
	{
		$note =  $_POST['note'];
		


		$insert = "INSERT INTO registration(note) VALUES('$note')";

		$run_query = mysql_query($insert,$conn);

		if(!$run_query)
			echo "Failed to insert values\n";
	}
?>
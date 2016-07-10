<!DOCTYPE html>
<html>
	<head>
		<title>Mentor Registration</title>
		<style>
		@import url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700");

body {
    font-family: Open Sans;
    font-size: 14px;
    line-height: 1.42857;
    background: #333333;
    height: 350px;
    padding: 0;
    margin: 0;
}
.container-login {
    min-height: 0;
    width: 480px;
    color: #333333;
    margin-top: 40px;
    padding: 0;
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.container-login > section {
    margin-left: 0;
    margin-right: 0;
    padding-bottom: 10px;
}
#top-bar {
    display: inherit;
}
.nav-tabs.nav-justified {
    border-bottom: 0 none;
    width: 100%;
}
.nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
    float: none;
}
.container-login .nav-tabs.nav-justified > li > a,
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #ea533f;
    border: medium none;
    color: #ffffff;
    margin-bottom: 0;
    margin-right: 0;
    border-radius: 0;
}
.container-login .nav-tabs.nav-justified > .active > a,
.container-login .nav-tabs.nav-justified > .active > a:hover,
.container-login .nav-tabs.nav-justified > .active > a:focus {
    background: #ffffff;
    color: #333333;
}
.container-login .nav-tabs.nav-justified > li > a:hover,
.container-login .nav-tabs.nav-justified > li > a:focus {
    background: #de2f18;
}
.tabs-login {
    background: #ffffff;
    border: medium none;
    margin-top: -1px;
    padding: 10px 30px;
}
.container-login h2 {
    color: #ea533f;
}
.form-control {
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #999999;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #333333;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.container-login .checkbox {
    margin-top: -15px;
}
.container-login button {
    background-color: #ea533f;
    border-color: #e73e28;
    color: #ffffff;
    border-radius: 0;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
    width: 100%;
}
.container-login button:hover,
.container-login button:focus {
    background: #de2f18;
    border-color: #be2815;
}
</style>

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

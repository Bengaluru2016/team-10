<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
		<style>
		@import url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700");
		*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;

background: #333333;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: black;
  background-color: red;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: red;
  color: black;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
</style>
    </head>
    <body background-color="#333333">

      <form action="login.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          
          <label>Role:</label>
          <input type="radio" id="Staff" value="Staff" name="Role"><label for="Staff" class="light">Staff</label><br>
          <input type="radio" id="Mentor" value="Mentor" name="Role"><label for="Mentor" class="light">Mentor</label>
        </fieldset>
        
        <label>Contact Number:</label>
		<input type="text" name="number">
        
        <button type="submit" name="register">Sign Up</button>
      </form>
      
    </body>
</html>
<?php
$host = 'localhost';
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
		$name =  $_POST['user_name'];
		$pwd = $_POST['user_password'];
		$email = $_POST['user_email'];
		$role = $_POST['Role'];
		$contact = $_POST['number'];

		$insert = "INSERT INTO registration VALUES('$name','$pwd','$email','$contact','$role')";

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

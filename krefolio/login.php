<html>

<head>
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
<script>
    function validateForm() {
        var un = document.loginform.user.value;
        var pw = document.loginform.password.value;
        alert(un);
        if ((un == "admin") && (pw == "admin")) {
			alert("for admin");
            window.location.assign("http://www.w3schools.com");
        }
        else {
            window.location="http://localhost/second.html";
        }
  }
</script>

</head>
<body>
<div class="login-body">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li class="active"><a href="#login-access"></a></li>
				
			</ul>
			<br><br><br>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> Login</h2>						
					<form name="loginform"  method = 'post' accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal"><br>
					
						<div class="form-group ">
							<label for="login" class="sr-only">Username </label>
								<input type="text" class="form-control" name="user" id="user" 
									placeholder="Username" tabindex="1" value="" />
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Password" value="" tabindex="2" />
						</div>
						<div>
						<br>
						<a href="registration.php" style="color:black;">New User? Register here!</a>
						</div>
						<!-- <div class="checkbox">
								<label class="control-label" for="remember_me">
									<input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" /> Remember Me
								</label>
						</div> -->
						<br/>
						<div class="form-group ">				
								<button type="submit" onClick="validateForm()" name="log-me-in" value='a' id="submit" tabindex="5" class="btn btn-lg btn-primary">Enter</button>
						</div>
					</form>			
				</div>
			</div>
		</section>
	</article>
	</div>
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
		echo"$name";
		echo"$pwd";
		if($name == "admin" && $pwd=="admin")
		{
			
		//header('Location: admin.php'); 
		}
	}
?>


<!-- <meta http-equiv="refresh" content="0; url="admin.php" /> -->


<?php	 	
	/* 	} */

		//$insert = "INSERT INTO registration VALUES('$name','$pwd','$email','$contact','$role')";

		//$run_query = mysql_query($insert,$conn);

		//if(!$run_query)
			//echo "Failed to insert values\n";

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
</body>
</html>
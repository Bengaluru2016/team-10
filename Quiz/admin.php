<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<body>
<table width="90%" border="0" align="center">
  <tr>
    <td height="90" class="sitename">
    	<div class="name">WELCOME ADMIN..!!!</div>
    </td>
  </tr>

  <div>
  	<h3>SELECT A USER NAME TO TRACK STATUS</h3>
  	<form action="admin.php" method="post" id="login_form">

  	<input type="text" name="uname"/ >
  	
  		<input type="submit" name="submit" value="submit" />
  	</form>
  	<?php

$host = 'localhost';
			$user = 'root';
			$pwd = '';
			$db = 'learningms';

	$conn = mysql_connect($host,$user,$pwd);
	if(!$conn)
		die("Failed to connect".mysql_error());
	echo "connected";

	if(!mysql_select_db($db,$conn))
		die(mysql_error());


if(isset($_POST['submit']))
{
  	$res = mysql_query("select * from admin ");
  	$uname = $_POST['uname'];
  	while($ro = mysql_fetch_array($res))
  	{
  		if($ro.name==$uname){
  			echo "$ro.name";
  			echo "$ro.score";
  		}

  	}
  	?>

  	<form action="admin.php" method="post" id="notification">
  	<input type="text" name="note" > </input>
  	<input type="submit" name="notify" value="notify"></input>
  	</form>
  	<?php

  	if(isset($_POST['notify']))

  	?>
</div>
</table>
</body>
</head>
</html>
  	</form>
  	</h3>
  	</div>

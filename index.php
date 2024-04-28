<?php  


require 'dbconfig/config.php';

?>


<style type="text/css">
body{
	background-image:url('pic/hey.jpg');
	background-repeat:no-repeat;
	background-size: cover;
}
	
</style>
<html>
<head>
<h1 align="center">ORGAN DONATION</h1>
<title> LOGIN PAGE </title>
<link rel="stylesheet" href="st.css">
</head>
<body>
<div id="main-wrapper">
<center> 
<h1> LOGIN PORTAL</h1> 
<class="org"/>
</center>

<form class="myform" action="index.php" id="form"  method="POST"> 
<center>
<b> USERNAME<br>
<input name="username" type="text" class="inputvalues" placeholder="Enter your Username" required/><br>
<b>PASSWORD<br>
<input name="password" type="password" class="inputvalues" placeholder="Enter your Password" required/><br>
<br><input name="login" type="submit" id="login_button" value="LOGIN"/><br>
</form>
<br><a href="register.php"><input type="button" id="register_button" value="REGISTER"/></a>
</center>
<?php
if(isset($_POST['login']))
{   
    $username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select * from user WHERE username='$username' AND password='$password'";
	
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run )>0)
	{
		//valid
		$_SESSION['username']=$username;
		header('location:home.php');
	}
	else
	{
		//invalid
			 echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
	}
}
?>
</div>
</body>
</html>
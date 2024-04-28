<?php  


require 'dbconfig/config.php';

?>




<html>
<head>
<h1 align="center">ORGAN DONATION</h1>
<title> REGISTRATION PAGE </title>
<link rel="stylesheet" href="st.css">
</head>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        `                                                               
<style type="text/css">
body{
	background-image:url('pic/hey.jpg');
	background-repeat:no-repeat;
	background-size: cover;
}
	
</style>
<body>
<div id="main-wrapper">
<center> 
<h1> REGISTRATION FORM</h1> 
<class="org"/>
</center>

<form class="myform" action="register.php" id="form"  method="POST"> 
<center>
<b> USERNAME<br>
<input name="username" type="text" class="inputvalues" placeholder="Enter your Username" required/><br>
<b>PASSWORD<br>
<input name="password" type="password" class="inputvalues" placeholder="Enter your Password" required/><br>
RE-Enter PASSWORD<br><input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
<br><input name="submit_btn" type="submit" id="signup_button" value="SIGNUP"/><br>
</form>
<a href ="index.php" <br><input type="button" id="back_button" value="<<BACK"/></a>
</center>
<?php
 if(isset($_POST['submit_btn']))
 { 
   //echo'<script type="text/javascript"> alert("Sign up button clicked")</script>';
   $username=$_POST['username'];
   $password=$_POST['password'];
   $cpassword=$_POST['cpassword'];
 echo $password;

 if($password==$cpassword)
 {
	 
	 $query="select * from user WHERE username='$username'";
	  echo $query;
	 $query_run=mysqli_query($con,$query);
	  echo $password;
	 if(mysqli_num_rows($query_run)>0)
		{
		 //theres a already a user with the  same username
			echo '<script type="text/javascript"> alert("User already exist.. try another usernme")</script>';
		}
	else
		{
		  $query="insert into user(username,password)values('$username','$password')";
mysqli_query($con,$query);
		
	 if($query_run)
	 {
		 echo '<script type="text/javascript"> alert("User Registered .. Go to loginpage to login")</script>';
	 }
	 else{
		 echo '<script type="text/javascript"> alert("Error")</script>';
	 }
 }
 }
 else
 { echo '<script type="text/javascript"> alert("Passwords doesnt match")</script>';
 }
 }
 ?>
</div>
</body>
</html>
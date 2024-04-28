<?php

require 'dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>


</head>
<style type="text/css">
body{
	background-image:url('pic/patient.png');
	background-repeat:no-repeat;
	background-size: cover;
}
	
</style>
<div id="main-wrapper">
<center> <h1> RECIPIENT REGISTRATION</h1>
<h2> Fill the form</h2> 
</center>

<form class="myform" action="patient.php" method="POST"> 
<center>
<br><b> Name:</b> <input name="name" type="text" class="inputvalues" placeholder="Enter your Name" required/></br>
<br><b> Dob: </b><input name="d_dob" type="date" class="inputvalues" placeholder="Enter your DateOfBirth" required/></br>
<br><b>Gender:</b> <input name="gender" type="text" class="inputvalues" placeholder="Whats ur gender?" required/></br>
<br><b> Age:</b> <input name="age" type="text" class="inputvalues" placeholder="Enter your age" required/></br>
<br><b>Blood group:</b> <input name="blood" type="text" class="inputvalues" placeholder="A(+)/B(+)/AB(+)/O/..." required/></br>
<br><b>Which organ would you want to recieve? </b><input name="org" type="text" class="inputvalues" placeholder="Eyes,kidney,heart,lungs.." required/></br>
<br><b> Contat no: </b> <input name="c_no" type="text" class="inputvalues" placeholder="Enter your phone number" required/></br>
<br><a href="#a"><input name="card" type="button" id="signup_button" value="submit"/></br>
<br><a href="login.php"><input type="button" id="back_button" value="BACK"/></br></a>
</center>

</form>
</div>
</body>
</html>

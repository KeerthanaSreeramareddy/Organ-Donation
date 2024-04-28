<?php  


require 'dbconfig/config.php';

?>



<!DOCTYPE html>
<html>
<head>


</head>
<style type="text/css">
body{
	background-image:url('pic/he.png');
	background-repeat:no-repeat;
	background-size: cover;
}
	
</style>
<div id="main-wrapper">
<center> <h1> DONOR REGISTRATION</h1>
<h2> Fill the form</h2> 
</center>

<form class="form" action="card.php" method="POST"> 
<center>
<br><b> Donor name </b>   <input name="d_name" type="text" class="inputvalues" placeholder="Enter your Name" required/></br>
<br><b> Date of birth</b><input name="d_dob" type="date" class="inputvalues" placeholder="Enter your DateOfBirth" required/></br>
<br><b> Gender            </b> <input name="gender" type="text" class="inputvalues" placeholder="Whats ur gender?" required/></br>
<br><b> AGE              </b> <input name="age" type="text" class="inputvalues" placeholder="Enter your age" required/></br>
<br><b> Weight           </b><input name="weight" type="text" class="inputvalues" placeholder="Enter your weight" required/></br>
<br><b>   Blood group       </b> <input name="blood" type="text" class="inputvalues" placeholder="Enter your Blood group" required/></br>
<br><b> Donate organs     </b><input name="org" type="text" class="inputvalues" placeholder="Eyes,kidney,heart,lungs.." required/></br>
<br><b> Phone number   </b> <input name="c_phoneno" type="number" class="inputvalues" placeholder="Enter your phone number" required/></br>
<br><b> Address          </b> <input name="d_address" type="text" class="inputvalues" placeholder="Enter your address" required/></br>
<br><b> Medical condition</b> <input name="hinfo" type="text" class="inputvalues" placeholder="Any allergies and reactions" required/></br>
<br><input name="card" type="submit" id="signup_button" value="Apply for donor card"/></br>
<br><a href="login.php"><input type="button" id="back_button" value="BACK"/></br></a>
</center>

</form>
<?php
if (isset($_POST["card"])) 
{
		$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,"log");

$query_run=$mysqli_query($con,"insert into  dreg values('','$_POST[d_name]','$_POST[d_dob]','$_POST[gender]','$_POST[age]','$_POST[weight]','$_POST[blood]','$_POST[org]','$_POST[c_phoneno]','$_POST[d_address]','$_POST[hinfo]')");

	                   if($query_run)
				{		
					echo '<script type="text/javascript"> alert("You are now registered!") </script>';
				
				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR!") </script>';
				}
}
		          
?>
</div>
</body>
</html>

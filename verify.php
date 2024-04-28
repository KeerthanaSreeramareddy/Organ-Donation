<?php
require 'dbConfig/config.php';
?>
<?PHP
if (isset($_POST['card'])) 
{
	$d_name=$_POST['d_name'];
    $d_dob=$_POST['d_dob'];	
    $gender=$_POST['gender'];
	$age=$_POST['age'];
	$weight=$_POST['weight'];
	$blood=$_POST['blood'];
	$org=$_POST['org'];
	$c_phoneno=$_POST['c_phoneno'];
	$d_address=$_POST['d_address'];
    $hinfo=$_POST['hinfo'];
		
			$query="SELECT * FROM `d_reg`";
			$query_run=mysqli_query($con,$query);
			$somevar=mysqli_fetch_array($query_run);
			$query="insert into d_reg(d_name,d_dob,gender,age,weight,blood,org,c_phoneno,d_address,hinfo)values('$d_name','$d_dob','$gender','$age','$weight','$blood','$org','$c_phoneno','$d_address','$hinfo')";
				$query_run=mysqli_query($con,$query);

			
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("user registered!");document.location.href="login.html"; </script>';
					
				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR!") </script>';
				}				
}
				
?>
	<?PHP			
		    
		
			header('location:card.php');
		
?>
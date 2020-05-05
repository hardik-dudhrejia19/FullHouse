	<?php
	$con=mysqli_connect("localhost","root","","test");
	$name=$_POST['fname'];
	$mail=$_POST['mail'];
	$dob=$_POST['dob'];
	$pass=$_POST['passwd'];
	$cpass=$_POST['cpasswd'];
	$mob=$_POST['phn'];
	$country=$_POST['Country'];
	$city=$_POST['city'];
	if(strcmp($pass,$cpass)==0)
	{
		$res=mysqli_query($con,"select * from register where Mobile='$mob'");
		$x=mysqli_num_rows($res);
		if($x==0)
		{
		$querry="INSERT INTO register(Name,Email,Dob,Password,Mobile,Country,City) values('$name','$mail','$dob','$pass','$mob','$country','$city')";
		mysqli_query($con,$querry);
		header('Location:BMS_HOME.html');
		}
		else{
			echo "<script type='text/javascript'>alert('username already exsits');</script>";
			header('Location:BMS_REGISTER.php');
		}
	}
	else{
		echo "passwords don't match";
		header('Location:BMS_REGISTER.php');
	}


?>
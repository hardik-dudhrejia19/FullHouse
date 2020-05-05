<?php
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$con=mysqli_connect("localhost","root","","test");
	$querry="select * from register where Mobile='$mob' AND Email='$email'";
	$res=mysqli_query($con,$querry);
	$x=mysqli_num_rows($res);
	if($x==1)
	{
		while($row=mysqli_fetch_array($res))
		{
			$pass=$row['Password'];
			$name=$row['Name'];
		}
		$subject="Password Recovery";
		$msg="Hi '$name'. We are extremely sorry for your trouble. Your password is '$pass'. Stay Secure!";
		require 'PHPMailer-master/PHPMailerAutoload.php';
		$mail=new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug=0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure= "ssl";
		$mail->Host= "smtp.gmail.com";
		$mail->Port= 465;
		$mail->IsHTML(true);
		$mail->Username= "bookmyshowhad@gmail.com";
		$mail->Password= "sweetqwerty789";
		$mail->SetFrom("bookmyshowhad@gmail.com","bookmyshowhad:Localhost");
		$mail->Subject=$subject;
		$mail->Body=$msg;
		$mail->AddAddress($email);
		if(!$mail->Send())
		echo "Message not sent";
		else
		header('Location:BMS_LOGIN.html');
		//echo " Message to your ".$email. " has been sent.";
	}
	else{
		header('Location:BMS_FORGET_PASSWORD.html');
	}


?>
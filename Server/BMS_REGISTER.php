<html>
<head>
<title>Registration</title>
<script type="text/javascript">
	function fun()
	{
		var pass=document.getElementById("pp");
		var cpass=document.getElementById("cp");
		if(pass.value.length<6 || pass.value.length>15)
		{
		alert("Password should be more than 6 and less than 15 characters.");
		}
		if(pass.value!=cpass.value)
		{
		alert("Password mismatch");
		}
	}
</script>
<style type="text/css">
h1{
	font-size:35px;
	text-align:center;
	font-family:Arial;
}
div{
	display:inline;
}
font.outer{
	margin-left:15px;
	margin-top:35px;
	float:left;
	text-decoration:none;
	color:white;
}
input.ser{
	border-radius: 25px;
    border: 2px solid white;
    padding: 20px; 
    width: 200px;
    height: 15px;    
}
input.but{
	height:55px;
	width:120px;
}
div.home{
	background-color:#2F4F4F;
}
input.sign{
	height:55px;
	width:80px;
	background-color:deepskyblue;
	color:white;
}
form.f{
	background-color:#2F4F4F;
	height:110px;
}
body{
	margin:0px;
	background-image:url(wall2.jpg);
}
td{
	font-size:25px;
	color:#000066;
}
input{
	width:180px;
	height:30px;
}
input.but{
	 border-radius: 25px;
    border: 2px solid white;
    padding: 20px; 
}
input.but1{
	border-radius:10px;
	width:100px;
	height:50px;
}

</style>
</head>
<body>
<form class="f" action="search.php" method="GET">
<div class="home">
	<a href="BMS_HOME.html"><font size="40px" class="outer">Full<font color="aqua">House</font></font></a> <br/> <br/>  &nbsp &nbsp &nbsp
	<input class="ser" type="text" style="height:58px;width:600px;"placeholder="   Search for movie, event or sports"/> &nbsp
	<input  class="but" type="submit" value="Search" />
	</div>
</form>

<form action="BMS_REGISTER_DB.php" method="POST" >
<table align="center" cellspacing="5" cellpadding="5" border="8px">
<tr>
	<th colspan="2"><h1>Sign Up</h1></th>
</tr>
<tr>
	<td><b>Name</b></td>
	<td><input type="text" name="fname" placeholder="Your Name"/></td>
</tr>

<tr>
	<td><b>Email</b></td>
	<td><input type="email" name="mail" placeholder="Your Email Address"/></td>
</tr>
<tr>
	<td><b>Date of Birth</b></td>
	<td><input type="date" name="dob"/></td>
</tr>
<tr>
	<td><b>Password</b></td>
	<td><input type="password" name="passwd" id="pp" placeholder="Password"/></td>
</tr>
<tr>
	<td><b>Confirm Password</b></td>
	<td><input type="password" name="cpasswd" id="cp" placeholder="Re-type Password"/></td>
</tr>
<tr>
	<td><b>Mobile Number</b></td>
	<td><input type="number" name="phn" placeholder="Mobile Number"/></td>
</tr>
<tr>
	<td><b>Country</b></td>
	<td><select name="Country" >
	<option value="America">America</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Canada">Canada</option>
	<option value="India">India</option>
</select>
	</td>
</tr>
<tr>
	<td><b>City</b></td>
	<td><input list="city" placeholder="City" name="city" />
	<datalist id="city">
	<option value="Anand">
	<option value="Rajkot">
	<option value="Baroda">
	<option value="Ahmedabad">
	</datalist></td>
</tr>
<tr>
	<td> <b>I accept the terms of license </b></td>
	<td><input type="checkbox" name="cb" required/></td>
	
</tr>
<tr>
	<td><input class="but1" type="submit" value="Sign Up" onclick="fun()"></td>
	<td><input class="but1" type="reset" value="Clear"></td>
</tr>
</form>
</body>
</html>
<html>
<head><title>HOME PAGE</title>
<style type="text/css">
div{
	display:inline;
}
div.txt a{
	font-size:25px;
	font-family:Verdana;
	margin-left:20px;
	text-decoration:none;
	color:white;

}
input.ser,input.but,input.sign{
	 
    border-radius: 25px;
    border: 2px solid white;
    padding: 20px; 
    width: 200px;
    height: 15px;    
}
font.outer{
	margin-left:15px;
	margin-top:35px;
	float:left;
	text-decoration:none;
	color:white;
}
img.baaghi,img.inf,img.black,img.dp,img.robot,img.nt
{	
	border-radius: 20px;
	padding:10px;
	margin-left:25px;
	margin-top:0px;
	width:400px;
	height:250px;
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
form{
	background-color:#2F4F4F;
	
}
body{
	margin:0px;
	background-color:#FFE4C4;
	background-image:url(wall2.jpg);
}
form ul li {
	display:inline;
	padding-left:20px;
	font-size:20px;
	color:white;
	text-decoration:none;
}
form ul li a:hover{
	color:#FF4500;
}
form ul li.first{
	margin-left:175px;
}
form ul li a{
	text-decoration:none;
	color:white;
}
div.wc{
	font-size:20px;
	color:white;
}
</style>
</head>
<body>
<?php 
	session_start();
	$name=$_SESSION['name'];
	if($_SESSION['name']==false)
	header('Location:BMS_HOME.html');
	
?>
	<form action="#" method="GET">
<div class="home">
	<a href="NEW_BMS_HOME.php"><font size="40px" class="outer">Full<font color="aqua">House</font></font></a> <br/> <br/>  &nbsp &nbsp &nbsp
	<input class="ser" type="text" style="height:58px;width:600px;"placeholder="   Search for movie, event or sports"/> &nbsp
	<input  class="but" type="submit" value="Search" /> &nbsp &nbsp 
	&nbsp <div class="wc"> Welcome <font color="aqua"><?php echo $name;?></font></div>
	&nbsp &nbsp <a href="BMS_LOGOUT.php"><input class="sign" type="button" value="Logout" /></a>
	<ul>
	<li class="first"><a href="#">Movies</a></li>
	<li><a href="#">Sports</a></li>
	<li><a href="#">Events<a></li>
	</ul>
</form>	
</div><br/>
<div>
<img class="baaghi" src="simba.jpg" alt="img"/>
<img class="inf" src="endgame.jpg" alt="img"/>
<img class="black" src="black.jpg" alt="img"/><br/>
<div class="txt">
	<a href="Baaghi2.html">Simmba</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<a href="infinitywar.html">Avengers: ENDGAME</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<a href="blackmale.html">BlackMail</a><br/> <br/>&nbsp &nbsp &nbsp &nbsp &nbsp 
	<font color="white">28 Dec 2018</font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<font color="white">Coming Soon</font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<font color="white">02 Apr 2018</font> <br/> <br/>
	</div>
<hr/><br/>
<img class="dp" src="deadpool.jpg" alt="img"/>	
<img class="robot" src="robot.jpg" alt="img"/>
<img class="nt" src="102nt.jpg" alt="img"/>
<div class="txt"> 
    <a href="deadpool2.html">&nbsp Deadpool 2</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<a href="robot2.0.html">Robot 2.0</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<a href="nt102.html">102 Not Out</a><br/> <br/>&nbsp &nbsp &nbsp &nbsp &nbsp 
	<font color="white">Coming soon</font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<font color="white">Coming soon</font> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<font color="white">Coming soon</font>
</div>
</div>
<hr/>
</body>
</html>
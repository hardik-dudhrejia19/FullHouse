<html>
<head><title>BMS</title>
<script type="text/javascript">
	var p=0,sum=0,seats=" ",name,flag=0,booked="",max=0,maxallow=0;
	/*function maxticket()
	{
		maxallow=document.getElementById("max").value;
	}*/
	function fun(str,price)
	{
		var theatre="";
		theatre=document.getElementById("cinema").value
		if(theatre=="-----Select-----")
		{
		alert("Please select a cinema");
		document.getElementById("cinema").focus();
		return;
		}
		/*if(maxallow==0)
		alert("Please enter number of ticekts");
		if(max<maxallow )
		{
		max++;*/
		var temp=seats.split(" ");
		for(i=0;i<temp.length;i++)
		{
		if(str==temp[i])
		flag=1;
		}
		if(flag==0)
		{
		sum=sum+price;
		seats+="  "+str;
		document.getElementById(str).style.backgroundColor="lime";
		}
		flag=0;
		}
		//}
	function fun1(str,price)
	{
		var del_flag=0;
		for(i=0;i<booked.length;i++)
		{
		if(str==booked[i])
		del_flag=1;
		}
		if(del_flag==0)
		{
		sum=sum-price;
		var temp=seats.split(" ");
		seats=" ";
		for(i=0;i<temp.length;i++)
		{			
			if(str==temp[i])
			{
				continue;
			}
			else
			{
				seats+=" "+temp[i];
			}
		}
		document.getElementById(str).style.backgroundColor="#d9d9d9";
		}
		del_flag=0;
		//max=max-1;
	}
	function fin()
	{
		var com=""; 
		booked=seats.split(" ");
		/*for(i=0;i<booked.length;i++)
		{
		if(booked[i]!=com)
		{
		finall[p]=booked[i];
		p++;
		}
		}*/
		for(i=0;i<booked.length;i++)
		{
		//document.write(i+" "+booked[i]+"hi<br/>");
		if(com.localeCompare(booked[i])!=0)
		document.getElementById(booked[i]).style.backgroundColor="#3333ff";
		}
		//document.write("Com is"+com+"hi");
		/*for(i=3;i<=booked.length;i=i+2)
		document.getElementById(booked[i]).style.backgroundColor="blue";*/
		
		document.getElementById("second").innerHTML=seats;	
		document.getElementById("third").innerHTML=sum+"$";
		var cinema=document.getElementById("cinema").value;
		document.getElementById("movie").innerHTML=cinema;
		document.getElementById("target").style.display="block";
	}
</script>
<style type="text/css">
input.but{
	 border-radius: 25px;
    border: 2px solid white;
    padding: 20px; 
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
	height:110px;
}
body{
	margin:0px;
	background-color:#F0FFFF;
}


div.titl{
	font-size:40px;
	margin-left:0px;
	margin-top:5px;
	background-color:black;
	color:red;
}
div.row{
	font-size:20px;
}
table{
	width:100%;
	height:60%;	
}
input{
	width:70px;
	height:45px;
	border-radius:5px;
	background-color:#d9d9d9;
}
input.ser{
	background-color:white;
}
input.but{background-color:lightgrey;}
div.titl:hover{
	padding:10px;
}
th,td{
	font-size:30px;
}
pre{
	font-size:30px;
	font-weight:bold;
}
a{
	text-decoration:none;
	font-size:25px;
	color:#ff1a1a;
}
input.ser{
	border-radius: 25px;
    border: 2px solid white;
    padding: 20px; 
    width: 200px;
    height: 15px;    
}
input.not{
	height:30px;
	width:40px;
}
select{
	height:50px;
	width:120px;
	border-radius:20px;
}
input.num{
	width:30px;
	height:35px;
	background-color:white;
}
</style>
<?php
	session_start();
	if(isset($_SESSION['name']))
	$name=$_SESSION['name'];
	else
	header('Location:BMS_LOGIN.html');
?>
</head>

<body>

	<form action="search.php" method="GET">
<div class="home">
	<a href="NEW_BMS_HOME.php"><font size="40px" class="outer">Full<font color="aqua">House</font></font></a> <br/> <br/>  &nbsp &nbsp &nbsp
	<input class="ser" type="text" style="height:58px;width:600px;"placeholder="   Search for movie, event or sports"/> &nbsp
	<input  class="but" type="submit" value="Search" /> &nbsp &nbsp
	<select id="cinema">
	<option>-----Select-----</option>
	<option value="Gold Cinema">Gold Cinema</option>
	<option value="Inox">Inox</option>
	<option value="Time Cinema">Time Cinema</option>
	</select> &nbsp
	
	<!--<font color="white" style="font-size:15px;">Number of seats</font> &nbsp <input type="text" id="max" class="num"/> &nbsp 
	<input type="button" value="Enter" onclick="maxticket()"/>-->
	</div>
</form>
	<hr/>
	<div class="row">
	<table> 
				<tr>
					<th></th>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
					<th>6</th>
					<th>7</th>
				</tr>
												<!-- ROW A-->
				<tr align="center"><td>A</td>
				<td><input type="button"  id="a1" onclick="fun('a1',110)" ondblclick="fun1('a1',110)"/></td>
				<td><input type="button"  id="a2" onclick="fun('a2',110)" ondblclick="fun1('a2',110)"/></td>
				<td><input type="button"  id="a3" onclick="fun('a3',110)" ondblclick="fun1('a3',110)"/></td>
				<td><input type="button"  id="a4" onclick="fun('a4',110)" ondblclick="fun1('a4',110)"/></td>
				<td><input type="button"  id="a5" onclick="fun('a5',110)" ondblclick="fun1('a5',110)"/></td>
				<td><input type="button"  id="a6" onclick="fun('a6',110)" ondblclick="fun1('a6',110)"/></td>
				<td><input type="button"  id="a7" onclick="fun('a7',110)" ondblclick="fun1('a7',110)"/></td>
				</tr>
				
				<tr><td colspan="8" align="center">Platinum 110$</tr>	
				<tr><td colspan="8"><hr/></td></tr>							
												
												<!-- ROW B-->	
				<tr align="center"><td>B</td>
				<td><input type="button"  id="b1" onclick="fun('b1',90)" ondblclick="fun1('b1',90)"/></td>
				<td><input type="button"  id="b2" onclick="fun('b2',90)" ondblclick="fun1('b2',90)"/></td>
				<td><input type="button"  id="b3" onclick="fun('b3',90)" ondblclick="fun1('b3',90)"/></td>
				<td><input type="button"  id="b4" onclick="fun('b4',90)" ondblclick="fun1('b4',90)"/></td>
				<td><input type="button"  id="b5" onclick="fun('b5',90)" ondblclick="fun1('b5',90)"/></td>
				<td><input type="button"  id="b6" onclick="fun('b6',90)" ondblclick="fun1('b6',90)"/></td>
				<td><input type="button"  id="b7" onclick="fun('b7',90)" ondblclick="fun1('b7',90)"/></td>
				</tr>
				
											<!-- ROW C-->
				<tr align="center"><td>C</td>
				<td><input type="button"  id="c1" onclick="fun('c1',90)" ondblclick="fun1('c1',90)"/></td>
				<td><input type="button"  id="c2" onclick="fun('c2',90)"  ondblclick="fun1('c2',90)"/></td>
				<td><input type="button"  id="c3" onclick="fun('c3',90)" ondblclick="fun1('c3',90)"/></td>
				<td></td>
				<td><input type="button"  id="c5" onclick="fun('c5',90)" ondblclick="fun1('c5',90)"/></td>
				<td><input type="button"  id="c6" onclick="fun('c6',90)" ondblclick="fun1('c6',90)"/></td>
				<td><input type="button"  id="c7" onclick="fun('c7',90)" ondblclick="fun1('c7',90)"/></td>
				</tr>
				
				<tr><td colspan="8" align="center">Gold 90$</tr>	
				<tr><td colspan="8"><hr/></td></tr>		
											<!-- ROW D-->
				<tr align="center"><td>D</td>
				<td><input type="button"  id="d1" onclick="fun('d1',70)" ondblclick="fun1('d1',70)"/></td>
				<td><input type="button"  id="d2" onclick="fun('d2',70)" ondblclick="fun1('d2',70)"/></td>
				<td><input type="button"  id="d3" onclick="fun('d3',70)" ondblclick="fun1('d3',70)"/></td>
				<td></td>
				<td><input type="button"  id="d5" onclick="fun('d5',70)" ondblclick="fun1('d5',70)"/></td>
				<td><input type="button"  id="d6" onclick="fun('d6',70)" ondblclick="fun1('d6',70)"/></td>
				<td><input type="button"  id="d7" onclick="fun('d7',70)" ondblclick="fun1('d7',70)"/></td>
				</tr>
				
											<!-- ROW E-->
				<tr align="center"><td>E</td>
				<td><input type="button"  id="e1" onclick="fun('e1',70)" ondblclick="fun1('e1',70)"/></td>
				<td><input type="button"  id="e2" onclick="fun('e2',70)" ondblclick="fun1('e2',70)"/></td>
				<td><input type="button"  id="e3" onclick="fun('e3',70)" ondblclick="fun1('e3',70)"/></td>
				<td><input type="button"  id="e4" onclick="fun('e4',70)" ondblclick="fun1('e4',70)"/></td>
				<td><input type="button"  id="e5" onclick="fun('e5',70)" ondblclick="fun1('e5',70)"/></td>
				<td><input type="button"  id="e6" onclick="fun('e6',70)" ondblclick="fun1('e6',70)"/></td>
				<td><input type="button"  id="e7" onclick="fun('e7',70)" ondblclick="fun1('e7',70)"/></td>
				</tr>
				
				<tr><td colspan="8" align="center">Silver 70$</tr>	
				<tr><td colspan="8"><hr/></td></tr>		
											<!-- ROW G-->
				<tr align="center"><td></td>
				<td colspan="6" align="center" style="font-size:20px;"><pre>  All   eyes   this   way   please !</pre></td>
				<td><input type="button" value="PROCEED" style="width:100px;background-color:aqua" onclick="fin()"></td>
				
				</tr>
	</table>
	</div>
			<input type="button" class="not" style="background-color:lime;margin-left:450px;"> <b>Selected Seats</b> &nbsp &nbsp <input type="button" class="not"style="background-color:#3333ff"> <b>Reserved Seats</b> &nbsp &nbsp <input type="button" class="not" style="background-color:#d9d9d9"> <b>Empty Seats<b/>
	<br/><br/>
	<table id="target" cellpadding="5" cellspacing="2" border="3">
		<tr  align="center">
			<th width="200px">Name</th>
			<th width="200px">Cinema</th>
			<th width="300px"> Seats</th>
			<th width="300px">Price</th>
		</tr>
		<tr  align="center">
			<td id="first" width="200px"><?php echo $name; ?></td>
			<td id="movie" width="200px"></td>
			<td id="second" width="300px"></td>
			<td id="third" width="300px"></td>
		</tr>
	
	</table>
	<script type="text/javascript">
		document.getElementById("target").style.display="none";
	</script>
</body>
</html>
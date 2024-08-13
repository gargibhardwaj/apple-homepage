<!DOCTYPE html>

<html>
	<head>
		<link href="Projects.css" type="text/css" rel="Stylesheet"> 
		<script>
			function func()
			{
				if(document.getElementById("model").value=="Iphone8" || document.getElementById("model").value=="Iphone8plus")
				{
					colorg.disabled=false;
					colors.disabled=false;
					colorb.disabled=false;
				}
				if(colorg.checked || colors.checked || colorb.checked )
				{
					memory.disabled=false;
				}
				if(memory.value=="64gb" || memory.value=="256gb")
				{
					btn.disabled=false;
					btn.style.background="#6262ff";
					price();
				}
				
			}
			function price()
			{
				if(model.value=="Iphone8" )
				{
					if(memory.value=="64gb")
					{
						
						pr.innerHTML="$599.00";
						pri.value=599.00;
					}
					else if(memory.value=="256gb")
					{
						pr.innerHTML="$749.00";
						pri.value=749.00;
					}
				}
				else if(model.value=="Iphone8plus")
				{
					if(memory.value=="64gb")
					{
						pr.innerHTML="$699.00";
						pri.value=699.00;
					}
					else if(memory.value=="256gb")
					{
						pr.innerHTML="$849.00";
						pri.value=849.00;
					}
				}
			}
		</script>
		
	</head>
	<body style="font-family:  Helvetica, Arial, sans-serif;">
		<div width="100%">
			<label style="margin-left:2%;margin-top:100px;font-size:30px;font-weight:bold" id="n">iPhone 8</label>
		</div>
		<div style="background-color:black;height:1px"></div>
		<div style="float:left;width:35%;margin-top:30px;margin-left:30px;">
			<img src="iphone8.jpg" alt="no pic" width="100%" height="600px">
		</div>
		<div style="float:right;width:50%;margin-top:50px;margin-right:30px">
			<h1 style="font-size:40px;font-weight:bold;margin-bottom:0px">Buy iPhone 8</h1>
			<h2>From $16.99/mo.$16.99 per month or $399 with trade-in*</h2><br><br>
			<form action="check.php" method="get">
			<h3>Choose your model.</h3>
			<select  style="font-size:20px" id="model" onchange="func()" name="model" >
				<option>Model--</option>
				<option value="Iphone8"  >iPhone8 (4.5-inch display ) From $599*</option>
				<option value="Iphone8plus" >iPhone8 Plus (5.5-inch display ) From $699*</option>
			</select>
			<br><br>
			<h3  >Choose your finish.</h3>
				<input type="radio" id="colorg" value="gold" onchange="func()" name="color" disabled><img src="g.jpg" alt="no image"><br>
				<input type="radio" id="colors" value="silver" onchange="func()" name="color" disabled><img src="s.jpg" alt="no image"><br>
				<input type="radio" id="colorb" value="black" onchange="func()" name="color" disabled><img src="b.jpg" alt="no image"><br>
			<br><br>
			<h3 disabled>Choose your capacity.</h3>
			<select  style="font-size:20px" id="memory" onchange="func()" name="capacity" disabled >
				<option>Memory--</option>
				<option value="64gb">64GB</option>
				<option value="256gb">256GB</option>
			</select>
			<br><br>
			<input type="hidden" value="2" name="PID" >
			<input type="hidden" id="pri" value="" name="price">
			<div style="background-color:black;height:1px;width:70%"></div><br><br>
			<span id="pr" name="price" style="color:#6262ff;font-size:40px;margin-top:5px;margin-bottom:5px;font-weight:bold"></span><br><br>
			<input type="submit"  value ="Continue" id="btn" disabled  style="text-align:right;background-color:gray;color:white;border:0px;border-radius: 5px;padding:7px;font-size:25px;width:60%;text-align:center ">
		</form>
		</div>
		<img src="iphone8b.jpg" width="100%" height="900px" style="margin-top:50px"  >
		<h1 style="text-align:center;color:white;font-size:45px;position:relative;top:-450px">The darker it gets the more it shines</h1>
		<div style="background-color:b#f2f2f2;color:white">
		<div style="position:relative;
margin-top:110px;
border-top: 1px solid gray;
padding-left:32px;
padding-top:24px;
background-color:white;
">
<p style="font-size: 17px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    color: gray;font-weight:bold"/>Need more help? Call 1-800-MY-APPLE.</p>
</div>
<div style="position:relative;
margin-top:0px;
padding-left:32px;
padding-top:11px;
background-color: #f2f2f2;
">
<p style="font-size: 11px;
    line-height: 1.36364;
    font-weight: 400;
	color: #888;
    letter-spacing: -.008em;
    font-family: SF Pro Text,Myriad Set Pro,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;"/>
    The Apple Online Store uses industry-standard encryption to protect the confidentiality of the information you submit. 
	Learn more about our Security Policy.</p>
	<div style="position:relative;
width:1020px;
margin-top:15px;
border-top:1px solid gray;
padding-left:15px;
padding-top:11px;
padding-bottom:25px;
background-color: #f2f2f2;
">
	<p style="font-size: 11px;
    line-height: 1.36364;
    font-weight: 400;
	color: #888;
    letter-spacing: -.008em;
    font-family: SF Pro Text,Myriad Set Pro,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;"/>
	More ways to shop: Visit an Apple Store, call 1-800-MY-APPLE, or find a reseller.<br><br>
	Copyright© 2019 Apple Inc.  All rights reserved.          Privacy Policy  |  Terms of use
	</p>
	</div>
</div>
<div>
	</body>
	
</html>
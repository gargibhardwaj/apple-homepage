
<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<title>Mac Apple</title>
<style type="text/css">
* 
{ 
margin:0; 
padding:0; 
}

.maindivone
{
position: relative;
background-color:#353333;
height:43px;
}
.minone
{
position: relative;
left:400px;
top:10px;
width:50px;
}
.mintwo
{
position: relative;
background-color:#353333;
font-family:Calibri;
left:600px;
top:-20px;
width:50px;
}
.minthree
{
position: relative;
background-color:#353333;
font-family:Calibri;
left:700px;
top:-38px;
width:50px;
}
.minfour
{
position: relative;
background-color:#353333;
font-family:Calibri;
left:800px;
top:-58px;
width:50px;
}
.minfive
{
position: relative;
left:900px;
top:-83px;
width:50px;
}
.maindivtwo
{
margin-bottom:60px;
}
.heading
{
font-size: 40px;
    line-height: 1.1;
    letter-spacing: 0;
    font-family: SF Pro Display,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    font-weight: 600;
    display: block;
    margin-top: 65px;
    margin-bottom: 52px;
	margin-left:140px;
}
.form
{
position: relative;
width:308px;
margin-left: 144px;
    margin-top: -12px;
}
.picture
{
position: relative;
width:308px;
margin-left: 175px;
    margin-top: 75px;
}
.needhelp
{
position:relative;
margin-top:67px;
border-top: 1px solid #d6d6d6;
border-bottom:1px solid #d6d6d6;
padding-left:100px;
padding-top:24px;
padding-bottom:18px;

}
a:link{text-decoration: none;}

</style>
</head>
<body style="font-family:  Helvetica, Arial, sans-serif;">
<div  style="background-color:black;padding:15px;
	text-align:center;
	width:100%;
	height:30px;">
			<center><table  style="text-align:center;">
				<tr>
					<td width="20%" style="padding-right:20px"><a href="mainpage.html"><img src="images/appleicon.jpg" alt="no image" width="12%" /></a></td>
					<td ><a href="page1.html" style="color:white;font-size:17px">Mac</td>
					<td  ><a href="Project.html" style="color:white;font-size:17px">iPhone</td>
					<td ><a href="http://localhost/viewcart.php" style="color:white;font-size:17px">Bag</a></td>
					<td><a href="http://localhost/WebProject.html" style="color:white;font-size:17px">Order</a></td>

				</tr>
			</table></center>
		</div>
<div class="maindivtwo">
<h1 class="heading">Your Order id is <?php echo $_SESSION["ord"] ?>.<br>Thanking you for shopping.</h1>
</div>
<div class="form">
<form action="mainpage.html" method="get">
<button style="font-size: 17px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
   background-color: #e3e3e3;
    background: linear-gradient(white,#e3e3e3);
    border-color: #d6d6d6;
    color: #0070c9;
    border-width: 1px;
    border-style: solid;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
    min-width: 30px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 4px;
    padding-bottom: 4px;
    text-align: center;
    white-space: nowrap;
	width: 100%;
    box-sizing: border-box;
    padding: .76471rem .88235rem .82353rem;
    padding-top: 0.76471rem;
    padding-right: 0.88235rem;
    padding-bottom: 0.82353rem;
    padding-left: 0.88235rem;" type="submit" >Back to Menu</button><br>
</form>
</div>
<div class="picture">
<img src="images/ss.jpg" />
</div>
<div class="needhelp">
<p style="font-size: 17px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    color: #333;"/>Need more help? Call 1-800-MY-APPLE.</p>
</div>
</body>
</html>
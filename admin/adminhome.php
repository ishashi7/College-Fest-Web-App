<?php
    session_start();
 
    if(isset($_SESSION['username']))
    {
	
    }
    else
    {
        header("location:index.php");
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Borealis 2K19/Admin Panel</title>
<style>
*{
margin:0px auto;
}
body{
background-color:#2c3e50;
}
header{
height:100px;
width:100%;
background-color:black;
}
header img{
height:100px;
width:450px;
float:left;
}
header h3{
color:white;
}
nav ul{
color:white;
list-style:none;
float:right;
}
nav ul a{
float:left;
line-height:100px;
width:100px;
text-decoration:none;
text-align:center;
color:white;
}
nav ul a:hover{
background-color:#CAD3C8;
color:#009432;
}
article{
height:460px;
background-color:#CAD3C8;
padding-top:28px;
padding-bottom:28px;
}
section{
height:auto;
width:auto;
margin-left:25px;
background-color:#CAD3C8;
}
section h2{
color:#009432;
padding:10px;
}
section .abox1{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox1 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox1 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
section .abox2{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox2 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox2 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
section .abox3{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox3 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox3 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
section .abox4{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox4 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox4 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
section .abox5{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox5 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox5 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
section .abox6{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox6 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox6 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
section .abox7{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox7 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox7 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
section .abox8{
height:215px;
width:200px;
background-color:#f5f6fa;
box-shadow: 0 7px 7px -7px black;
float:left;
margin:10px;
}
.abox8 img{
height:150px;
width:160px;
margin-top:7px;
margin-bottom:5px;
}
.abox8 h3{
color:#4cd137;
}
h3:hover{
color:#e84118;
}
footer{
height:40px;
width:100%;
background-color:black;
}
footer p{
text-align:center;
color:white;
line-height:40px;
}
</style>
</head>
<body>
<header>
<img src="images/ac1.jpg" alt="icon"/>

<nav>
<ul>
<a href="adminhome.php"><li>HOME</li></a>
<a href="logout.php?logout"><li>LOGOUT</li></a>
<a href="#"><li></li></a>
</ul>
</header>
<article>
<section>
            <a href="overall.php">
			<div class="abox1">
			<center>
			<img src="images/reg1.png" alt="all registrations"/>
			<h3>Registrations</h3>
			</center>
			</div>
			</a>
			
			
			<a href="inbox.php">
			<div class="abox6">
			<center>
			<img src="images/reg6.png" alt="all registrations"/>
			<h3>Inbox</h3>
			</center>
			</div>
			</a>
			
			
			<a href="ainbox.php">
			<div class="abox7">
			<center>
			<img src="images/reg7.png" alt="all registrations"/>
			<h3>Anonymous Inbox</h3>
			</center>
			</div>
			</a>
			
			
			<a href="epassorders.php">
			<div class="abox8">
			<center>
			<img src="images/reg9.png" alt="all registrations"/>
			<h3>Event Pass Orders</h3>
			</center>
			</div>
			</a>
			
			
			<a href="postupdates.php">
			<div class="abox8">
			<center>
			<img src="images/reg10.png" alt="all registrations"/>
			<h3>Post Updates</h3>
			</center>
			</div>
			</a>
			
			
			<a href="https://www.facebook.com/shashimark7">
			<div class="abox8">
			<center>
			<img src="images/reg8.png" alt="all registrations"/>
			<h3>Contact Developer</h3>
			</center>
			</div>
			</a>
</section>
</article>
<footer>
<p>Copyright © 2019 All rights reserved. ATRI Department of I.T Designed & Developed by Shashi</p>
</footer>
</body>
</html>
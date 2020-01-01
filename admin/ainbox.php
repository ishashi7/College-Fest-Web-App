<?php
require_once('connection.php');
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
height:auto;
width:auto;
background-color:#CAD3C8;
padding-top:28px;
padding-bottom:28px;
}
input[type="text"]{
height:30px;
width:250px;
}
input[type="submit"]{
height:30px;
width:150px;
border:none;
cursor:pointer;
font-size:16px;
}
button{
height:30px;
width:150px;
background-color:#f5f6fa;
border:none;
cursor:pointer;
font-size:16px;
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

<form action="ainbox.php" method="post">
<fieldset>
<legend><strong>Anonymous Inbox</strong></legend>
<center>
<br>
<input type="submit" name="ainbox" value="Show Messages" style="background-color:#0abde3;" /> 
</label>
<br><br>
</form>
<?php
if(isset($_POST['ainbox']))
{
$query="SELECT * FROM `ainbox`"; 
$query_run=mysqli_query($con,$query);	
if(mysqli_num_rows($query_run)>0){
$result = mysqli_query($con,"SELECT * FROM ainbox");	
echo "<table border='1' cellpadding='10'>
<tr>
<th>Message</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['amessage'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
}
?>
</fieldset>
<br><br>
<center>
&nbsp &nbsp
<button onclick="myFunction()">PRINT</button>
</center>
<script>
function myFunction() {
    window.print();
}

</script>
</article>
<footer>
<p>Copyright © 2019 All rights reserved. ATRI Department of I.T Designed & Developed by Shashi</p>
</footer>
</body>
</html>
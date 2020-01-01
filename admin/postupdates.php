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
<script src="js/sweetalert.min.js" type="text/javascript"></script>
<style>
body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}

table
{
    border-collapse: separate;
}

tr td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content:  counter(Serial); /* Display the counter */
}
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
select{
	height:25px;
	width:200px;
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
textarea {
  width: 50%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
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
<form action="postupdates.php" method="post">
<fieldset>
<legend><strong>Post an Update for Borealis 2K19</strong></legend>
<center>
<br>
<label>Enter Information that you want to Post </label><br><br>
<textarea name="postmessage"></textarea>
<br><br>
<input type="submit" name="postup" value="POST" style="background-color:#2ecc71;" /> 
<br><br>
</form>
<br><br>
<?php
		  if(isset($_POST['postup']))
		  {
			$postmessage=$_POST['postmessage'];
			$query="insert into updates values('$postmessage')";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{
			echo '<script language="javascript">swal("Thank You for Posting an update for Borealis 2K19..!!", "Your post is Posted on Timeline..!!", "success");</script>';
			}
			else
			{
			echo '<script language="javascript">swal("Sorry!", "Unable to process Try again later..!!", "error");</script>';
			}
		  }		  
		  ?>

</fieldset>
<br><br>
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
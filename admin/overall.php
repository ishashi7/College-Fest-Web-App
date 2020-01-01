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
<form action="overall.php" method="post">
<fieldset>
<legend><strong>Overall Registrations of Borealis 2K19</strong></legend>
<center>
<br>
<label>Enter Roll Number </label>
<input type="text" name="rollnum" placeholder="Roll Number"/>
<br><br>
<input type="submit" name="overreg" value="SHOW ALL" style="background-color:#2ecc71;" /> 
<input type="submit" name="sear" value="SEARCH" style="background-color:#00a8ff;" />
<input type="submit" name="dele" value="DELETE" style="background-color:#eb2f06;" />
<br><br>
<h4>OR</h4>
<label>Select Event Category to Search Registrations Separately</label>
<select name="eventcategory" required>
<option>Select Event Category</option>
<option value="Technical">Technical</option>
<option value="Cultural">Cultural</option>
<option value="Literary">Literary</option>
<option value="Special">Special</option>
</select>	<br><br>
<input type="submit" name="ecat" value="FIND" style="background-color:#f39c12;" />
</form>
<br><br>
<?php
if(isset($_POST['overreg']))
{
$query="SELECT * FROM `registrations`"; 
$query_run=mysqli_query($con,$query);	
if(mysqli_num_rows($query_run)>0){
$result = mysqli_query($con,"SELECT * FROM registrations");	
echo "<table border='1' cellpadding='8'>
<tr>
<th>Sl.No</th>
<th>Name</th>
<th>Roll Number</th>
<th>Email</th>
<th>Phone</th>
<th>College</th>
<th>Branch</th>
<th>Event Category</th>
<th>Event Type</th>
<th>Single/Group</th>
<th>Group Members</th>
<th>Payment Type</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td></td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['rollnum'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['eventcategory'] . "</td>";
echo "<td>" . $row['eventtype'] . "</td>";
echo "<td>" . $row['parttype'] . "</td>";
echo "<td>" . $row['group'] . "</td>";
echo "<td>" . $row['paytype'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
}
?>

<?php
if(isset($_POST['sear']))
{
$rollnum=$_POST['rollnum'];	
$query="SELECT * FROM `registrations` WHERE rollnum='$rollnum'"; 
$query_run=mysqli_query($con,$query);	
if(mysqli_num_rows($query_run)>0)
{
$result = mysqli_query($con,"SELECT * FROM `registrations` WHERE rollnum='$rollnum'");	
echo "<table border='1' cellpadding='8'>
<tr>
<th>Sl.No</th>
<th>Name</th>
<th>Roll Number</th>
<th>Email</th>
<th>Phone</th>
<th>College</th>
<th>Branch</th>
<th>Event Category</th>
<th>Event Type</th>
<th>Single/Group</th>
<th>Group Members</th>
<th>Payment Type</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td></td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['rollnum'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['eventcategory'] . "</td>";
echo "<td>" . $row['eventtype'] . "</td>";
echo "<td>" . $row['parttype'] . "</td>";
echo "<td>" . $row['group'] . "</td>";
echo "<td>" . $row['paytype'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo '<script language="javascript">swal("Sorry!", "Unable to process Try again later..!!", "error");</script>';
}
}
?>
<?php
if(isset($_POST['dele']))
{
$rollnum=$_POST['rollnum'];	
$query="DELETE FROM `registrations` WHERE rollnum='$rollnum'"; 
$query_run=mysqli_query($con,$query);
if($rollnum!=NULL)
{	
if($query_run)
{
echo '<script language="javascript">swal("Deleted!", "Requested Roll Number Registration has been Deleted Sucessfully..!!", "success");</script>';	
}
}
else
{
echo '<script language="javascript">swal("Sorry!", "Unable to process Try again later..!!", "error");</script>';
}
}
?>

<?php
if(isset($_POST['ecat']))
{
$eventcategory=$_POST['eventcategory'];	
$query="SELECT * FROM `registrations` WHERE eventcategory='$eventcategory'"; 
$query_run=mysqli_query($con,$query);	
if(mysqli_num_rows($query_run)>0)
{
$result = mysqli_query($con,"SELECT * FROM `registrations` WHERE eventcategory='$eventcategory'");	
echo "<table border='1' cellpadding='8'>
<tr>
<th>Sl.No</th>
<th>Name</th>
<th>Roll Number</th>
<th>Email</th>
<th>Phone</th>
<th>College</th>
<th>Branch</th>
<th>Event Category</th>
<th>Event Type</th>
<th>Single/Group</th>
<th>Group Members</th>
<th>Payment Type</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td></td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['rollnum'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['eventcategory'] . "</td>";
echo "<td>" . $row['eventtype'] . "</td>";
echo "<td>" . $row['parttype'] . "</td>";
echo "<td>" . $row['group'] . "</td>";
echo "<td>" . $row['paytype'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo '<script language="javascript">swal("Sorry!", "No Registrations Found for Selected Category..!!", "error");</script>';
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
<?php
require_once('admin/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/scroll.css">
<link rel="stylesheet" href="css/registercss.css">
<script src="js/sweetalert.min.js" type="text/javascript"></script>
<title>Borealis 2K19/Atris's National Level Fest</title>
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
    box-sizing: border-box;
	font-family: 'Crimson Text', serif;
	
}
  .header {
  overflow: hidden;
  position:relative;
}

.header a {
  float: right;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 17px;
  line-height: 25px;
}
.header a.logo {

}

.header a:hover {
  color: #fff;
}

.header-right {
  float: left;
  margin-right:10px;
  background:rgba(0,0,0,0.7);
  margin-top:20px;
  border:3px solid white;
}
.header-right a{
margin-top:0px;
float:left;
}
.header-right a:hover{
background-color:white;
color:#e74c3c;
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: center;
  }
  .header-right {
    float: none;
	margin-right:0px;
	background-color:;
	}
}
textarea{
	height:250px !important;
}
.upd{
	background-color:white;
	height:auto;
}
td{
	font-size:18px;
}
</style>
</head>
<body>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner">
<div class="header">
  <a href="#default" class="logo"><img style="height:85px;"src="images/log.png"/></a>
  <div class="header-right">
    <a href="index.php" id="home"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
    <a href="index.php#evet" id="eva"><i class="fa fa-calendar-o" aria-hidden="true"></i> EVENTS</a>
	<a href="index.php#efeet" id="efee"><i class="fa fa-star" aria-hidden="true"></i> SPECIAL</a>
	<a href="register.php#evet" id="rev"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> REGISTER & PAY</a>
	<a href="index.php#conta"id="con"><i class="fa fa-address-card" aria-hidden="true"></i> CONTACT</a>
	<a href="updates.php"><i class="fa fa-info" aria-hidden="true"></i> UPDATES</a>
	<a href="admin/index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> LOGIN</a>
  </div>
</div>
<br>
</div>

<!--Start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed"id="evet">
<p>Updates of Borealis 2k19</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 upd" >
<center>
		<?php
		$selectdata = "SELECT * FROM updates";
		$query = mysqli_query($con,$selectdata);
		echo "<br><table width='70%' border='1' cellpadding='10'>
		<tr>
		<th><center><h4>SL.NO<center><h4></th>
		<th><center><h4>UPDATES<center><h4></th>
		</tr>";
		while($row = mysqli_fetch_array($query))
		{
		echo "<tr>";
		echo "<td></td>";
		echo "<td><center>&nbsp" . $row['postmessage'] . "</center></td>";
		echo "</tr>";
		}
		echo "</table><br>";
		?>
</center>		
</div>
<!--End-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foot">
<p class="paraa">Copyright © 2019 All rights reserved. ATRI Department of I.T Designed & Developed by Shashi</p>
</div>



<a id="back2Top" title="Back to top" href="#"><i class="fas fa-angle-up"></i></a>
<script>
/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 50) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>

</body>
</html>

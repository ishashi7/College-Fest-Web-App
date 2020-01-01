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
<p>Borealis 2K19 Buy Event Pass </p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 even" >
    <div class="row">
        <div  class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <div class="regis1">
		  <form action="booknow.php" method="post">
		         <br>
                <label>Name:</label><br>
                <input type="text" name="name" placeholder="Enter your Name" required/>
                <br>
				<label>Roll Number:</label><br>
                <input type="text" name="rollnum" placeholder="Enter your Roll Number" required/>
				<br>
                <label>Email Address:</label><br>
                <input type="email" name="email"placeholder="Enter your Email" required/>
                <br>
                <label>Phone:</label><br>
                <input type="phone" name="phone" placeholder="Enter your Phone Number" required/>
                <br>
                <label>College Name:</label><br>
                <input type="text" name="college" placeholder="Entet College Name" required/>
                <br>
				<label>Branch:</label><br>
                <input type="text" name="branch" placeholder="Entet Branch Name" required/>
				<br>
				<label>Pass Type:</label><br>
				<select name="passtype" required>
					<option>Select Pass Type</option>
					<option value="Fest Regular Pass">Fest Regular Pass (Rs.300/-)</option>
					<option value="Nightathon Pass ">Nightathon Pass (Rs.600/-)</option>
				</select>	
				<br>
				<label>Payment Type:</label><br>
				<select name="paytype" required>
					<option>Select Payment Type</option>
					<option value="Offline">Offline (Coordinators/Volunteers/SAC Committe)</option>
					<option value="Online">Online (Paytm/Phone Pe/G-Pay/Debit & Credit Card)</option>
				</select>
                <br><br>
                <input type="submit"  name="epassbook" value="BOOK NOW"/>
               </form>
			   
		<?php
		  if(isset($_POST['epassbook']))
		  {
			$name=$_POST['name'];
			$rollnum=$_POST['rollnum'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$college=$_POST['college'];
			$branch=$_POST['branch'];
			$passtype=$_POST['passtype'];
			$paytype=$_POST['paytype'];
			$query="insert into epassorders values('$name','$rollnum','$email','$phone','$college','$branch','$passtype','$paytype')";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{
			echo '<script language="javascript">swal("Thank You for Booking Event Pass for Borealis 2K19..!!", "Have a Nice Day..!!", "success");</script>';
			}
			else
			{
			echo '<script language="javascript">swal("Sorry!", "Unable to process Try again later..!!", "error");</script>';
			}
		  }
		  
		  ?>
		  </div>
        </div>
		<center>
		<div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="regis2">
			<h4>Paytm</h4>
			<center>
			<img src="images/paytm.jpeg" alt="Payment"/>
			<br><br>
			<a href="images/paytm.jpeg" download>DOWNLOAD QR CODE</a>
			</center>
			<br>
			</div>
        </div>
		<div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="regis3">
			<h4>Phone Pe</h4>
			<center>
			<img src="images/qr1.jpg" alt="Payment"/>
			<br><br>
			<a href="images/qr1.jpg" download>DOWNLOAD QR CODE</a>
			</center>
			<br>
			</div>
        </div>
		<div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="regis4">
			<h4>Google Pay</h4>
			<center>
			<img src="images/gpay.jpeg" alt="Payment"/>
			<br><br>
			<a href="images/gpay.jpeg" download>DOWNLOAD QR CODE</a>
			</center>
			<br>
			</div>
        </div>
		<div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="regis5">
			<h4>Pay Using Debit/Credit Card /Internet Banking/UPI</h4>
			<br>
			<center>
			<a href="#"><button>PAY NOW</button></a>
			</center>
			<br>
			</div>
        </div>
	</div>
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

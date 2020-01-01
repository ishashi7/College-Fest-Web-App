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
<script>
    $(document).ready(function (){
        $("#rev").click(function (){
            $('html, body').animate({
                scrollTop: $("#evet").offset().top
            }, 1000);
        });
    });
</script>
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
<p>Borealis 2K19 Registration & Payment</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 even" >
    <div class="row">
        <div  class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <div class="regis1">
		  <form action="register.php" method="post">
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
				<label>Event Category:</label><br>
				<select required name="eventcategory" >
					<option value="">Select Event Category</option>
					<option value="Technical">Technical</option>
					<option value="Cultural">Cultural</option>
					<option value="Literary">Literary</option>
					<option value="Special">Special/Non-Technical</option>
				</select>	
				<br>
				<label>Event Type:</label><br>
				<select required name="eventtype" >
					<option value="">Select Event Type</option>
					<optgroup label="TECHNICAL EVENTS">
					<option value="Paper Presentation">Paper Presentation</option>
					<option value="Poster Presentation">Poster Presentation</option>	
					<option value="X-Coding">X-Coding</option>
					<option value="Code Junkie">Code Junkie</option>
					<option value="Inspect the Gadget">Inspect the Gadget</option>
					<option value="Block Coding">Block Coding</option>
					<option value="Visual Buzz">Visual Buzz</option>
					<option value="Crypt your Mind">Crypt your Mind</option>
					<option value="Circuit fixer">Circuit Fixer</option>
					<option value="Puzzle Tronics">Puzzle Tronics</option>
					<option value="Circuit Tricks">Circuit Tricks</option>
					<option value="Robotics">Robotics</option>
					<option value="3D-Designing">3D-Designing</option>
					<option value="Model Presentation">Model Presentation</option>
					<option value="Engine Console">Engine Console</option>
					<option value="Bridge Building">Bridge Building</option>
					<option value="Tech Quiz">Tech Quiz</option>
					</optgroup>
	
					<optgroup label="LITERARY EVENTS">
					<option value="A Minute to Win it">A Minute to Win it</option>
					<option value="Creative Writing">Creative Writing</option>
					<option value="Poetry">Poetry</option>
					<option value="Painting">Painting</option>
					<option value="Best out of Waste">Best out of Waste</option>
					<option value="Stand up">Stand up</option>
					<option value="Tweet a Tale">Tweet a Tale</option>
					<option value="Pop Culture Quiz">Pop Culture Quiz</option>
					<option value="Pun Intended">Pun Intended</option>
					<option value="Human Library">Human Library</option>
					<option value="Debate">Debate</option>
					<option value="Art Gallery">Art Gallery</option>
					</optgroup>
	
					<optgroup label="CULTURAL EVENTS">
					<option value="Natya(Solo, Duet, Group)">Natya(Solo, Duet, Group)</option>
					<option value="Swara Madhuri(Solo, Duet, Group)">Swara Madhuri(Solo, Duet, Group)</option>
					<option value="Foot Loose">Foot Loose</option>
					<option value="Battle of Bands">Battle of Bands</option>
					<option value="Mehandi">Mehandi</option>
					<option value="Nail Art">Nail Art</option>
					<option value="Rangoli">Rangoli</option>
					<option value="Drama">Drama</option>
					<option value="short Film">Short Film</option>
					<option value="Photography">Photography</option>
					</optgroup>
	
					<optgroup label="SPECIAL EVENTS/NON-TECHNICAL">
					<option value="Treasure Hunt">Treasure Hunt</option>
					<option value="Sudoko">Sudoko</option>
					<option value="Pictionary">Pictionary</option>
					<option value="Electro Cerite">Electro Cerite</option>
					<option value="Picture Puzzle">Picture Puzzle</option>
					<option value="Jenga Shot">Jenga Shot</option>
					<option value="Find a Bluf">Find a Bluf</option>
					<option value="Know Your Partner">Know Your Partner</option>
					<option value="Ludo">Ludo</option>
					<option value="Disko Dance">Disko Dance</option>
					<option value="Nerds United">Nerds United</option>
					<option value="Car Maze">Car Maze</option>
					<option value="Sports Quiz">Sports Quiz</option>
					<optgroup>
					</select>		
				<br>
				<label>Participation Type:</label><br>
				<select required name="parttype" >
					<option value="">Select Participation Type</option>
					<option value="Solo">Solo</option>
					<option value="Group">Group</option>
				</select>	
				<br>
                <label>Group Members (Incase if Group Do Mention theri Names):</label><br>
                <textarea name="group"></textarea>
				<br>
				<label>Payment Type:</label><br>
				<select name="paytype" required>
					<option value="">Select Payment Type</option>
					<option value="Offline">Offline (Coordinators/Volunteers/SAC Committe)</option>
					<option value="Online">Online (Paytm/Phone Pe/G-Pay/Debit & Credit Card)</option>
				</select>
                <br><br>
                <input type="submit"  name="eregister" value="REGISTER"/>
               </form>
			   
		<?php
		  if(isset($_POST['eregister']))
		  {
			$name=$_POST['name'];
			$rollnum=$_POST['rollnum'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$college=$_POST['college'];
			$branch=$_POST['branch'];
			$eventcategory=$_POST['eventcategory'];
			$eventtype=$_POST['eventtype'];
			$parttype=$_POST['parttype'];
			$group=$_POST['group'];
			$paytype=$_POST['paytype'];
			$query="insert into registrations values('$name','$rollnum','$email','$phone','$college','$branch','$eventcategory','$eventtype','$parttype','$group','$paytype')";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{
			echo '<script language="javascript">swal("Thank You for Registering for Borealis 2K19..!!", "All the Best..!!", "success");</script>';
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

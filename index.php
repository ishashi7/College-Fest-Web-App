<?php
require_once('admin/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Borealis 2k19 is National level Techno Cultural Literary Fest organised by Aurora's Technological and Research Institute on 3rd and 4th April 2019 in their campus which is located in hyderabad.">
<meta name="keywords" content="borealis,aurora,atri,fest2k19,borealis2k19,april,event,cultural,technical,literary,events,nightathon,price,moments,party,science,technology,books,education,show,book,passes,national,international,events,promotions,enjoyment,djnight,hyderabad,telangana,uppal,parvathapur,bestcollege,engineering,innovation,ideas,hub,startup">
<meta name="author" content="shashi">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/scroll.css">
<script src="js/sweetalert.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/hmain.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/carousel.css" rel="stylesheet"/>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="css/contactcss.css" rel="stylesheet"/>
<title>Borealis 2K19/Atris's National Level Fest</title>

</head>
<script>
    $(document).ready(function (){
        $("#eva").click(function (){
            $('html, body').animate({
                scrollTop: $("#evet").offset().top
            }, 1000);
        });
    });
	  $(document).ready(function (){
        $("#efee").click(function (){
            $('html, body').animate({
                scrollTop: $("#efeet").offset().top
            }, 1000);
        });
    });
    $(document).ready(function (){
        $("#tea").click(function (){
            $('html, body').animate({
                scrollTop: $("#team").offset().top
            }, 1000);
        });
    });
    $(document).ready(function (){
        $("#con").click(function (){
            $('html, body').animate({
                scrollTop: $("#conta").offset().top
            }, 1000);
        });
    });
</script>

<body>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner">
<div class="header">
  <a href="#default" class="logo"><img style="height:85px;"src="images/log.png"/></a>
  <div class="header-right">
    <a href="#home" id="home"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
    <a href="#evet" id="eva"><i class="fa fa-calendar-o" aria-hidden="true"></i> EVENTS</a>
	<a href="#efeet" id="efee"><i class="fa fa-star" aria-hidden="true"></i> SPECIAL</a>
	<a href="register.php#evet" id="rev"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> REGISTER & PAY</a>
	<a href="#conta"id="con"><i class="fa fa-address-card" aria-hidden="true"></i> CONTACT</a>
	<a href="updates.php"><i class="fa fa-info" aria-hidden="true"></i> UPDATES</a>
	<a href="admin/index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> LOGIN</a>
  </div>
</div>

<br>
<!--Banner Coursel Start-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
	    <!--<img class="mySlides" src="images/0ban.gif" alt="Poster" style="width:100%; height:540px; border:4px solid white;">-->
		<img class="mySlides" src="images/0.jpg" alt="Poster" style="width:100%; border:4px solid white;">
        <img class="mySlides" src="images/0-3.jpg" alt="Poster" style="width:100%; border:4px solid white;">
	    <img class="mySlides" src="images/0-2.jpg" alt="Poster" style="width:100%; border:4px solid white;">
	  </div>
    </div>
  </div>
<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 6000); // Change image every 6 seconds
}
</script>
<!--Banner Coursel End-->
</div>

<!--about start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed">
<p>About us</p>
</div>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 abtus" >
		<div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ab1" >
		</div>
		</div>
		
		
		<div  class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ab2" >
		<h3>Welcome to Borealis 2K19</h3>
		<p>
		BOREALIS is the ATRI’s National Level Techno Cultural & Literary Fest that is organized on a grand scale.
		This provides an occasion for the students to showcase their talents, knowledge and innovations in the 
		various fields. On this occasion various technical events like paper presentation, quiz, 
		elocution, LAN gaming etc are organized. Technical experts are invited, who apart from judging
		the best talent in all the activities enrich the students with their valuable inputs for the 
		budding engineers to excel in their academic and professional lives and serve the nation.
		</p>
		<br>
		<center>
		<a href="http://atri.edu.in/"><button>READ MORE</button></a>
		</center>
		</div>
		</div>


</div>
<!--about end-->



<!--Time Line Start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed"id="evet">
<p>Events</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 even" >


    <a href="techevents.php">
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy1" >
		<img src="images/techev.jpg" alt="Technical Events"/>
		<br><br>
		<h4>TECHNICAL EVENTS</h4>
		<br>
		</div>
	</div>
	</a>
	
	
	<a href="litevents.php">
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy2" >
		<img src="images/literev.jpg" alt="Literary Events"/>
		<br><br>
		<h4>LITERARY EVENTS</h4>
		<br>
		</div>
	</div>
	</a>
	
	<a href="cultevents.php">
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy3" >
		<img src="images/cultev.jpg" alt="Cultural Events"/>
		<br><br>
		<h4>CULTURAL EVENTS</h4>
		<br>
		</div>
	</div>
	</a>

	<a href="gameevents.php">
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy4" >
		<img src="images/gamiev.jpg" alt="Gaming Events"/>
		<br><br>
		<h4>NON-TECHNICAL EVENTS</h4>
		<br>
		</div>
	</div>	
	</a>		
 </div>
<!--Time Line End-->





<!--fee start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed" id="efeet">
<p>Special Events</p>
</div>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 efee" >

		<div  class="col-lg-4 col-md-4 col-sm-4col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ef1" >
		<center><h2><br>
		<span style="background-color:white;color:green;font-weight:bold;">&nbsp Grand Finale Pass: 300/- &nbsp  <br><br> &nbsp Nightathon Pass: 600/- &nbsp  </span>
		</h2></center>
		<br>
		<a href="booknow.php"><button><i class="fa fa-ticket" aria-hidden="true"></i>
 BOOK NOW</button></a>
	    <br><br>
		<a href="anonymous.php"><button><i class="fa fa-gift" aria-hidden="true"></i>
 ANONYMOUS BOX</button></a>
		</div>
		</div>
		<div  class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div  class="ef2" >
		<img src="images/ngt.jpg" alt="nightathon"/>
		</div>
		</div>
</div>
<!--Fee End-->



<!--Team start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed" id="team">
<p>Team</p>
</div>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 team" >

<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Vamshri Hari</p>
		   <p>SAC</p>
		   <p>8328003494</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Manikrupa</p>
		   <p>SAC</p>
		   <p>9848632918</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Shashank</p>
		   <p>SAC</p>
		   <p>8978105681</p>
		   </div>
		</div>


		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Ajay Kumar</p>
		   <p>H & AS</p>
		   <p>Convenor</p>
		   </div>
		</div>
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Kranthi Kumar</p>
		   <p>Civil</p>
		   <p>Co-Convenor</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Girija Rani</p>
		   <p>CSE & IT</p>
		   <p>Co-Convenor</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Thrisandhya</p>
		   <p>ECE</p>
		   <p>Co-Convenor</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Vishnu</p>
		   <p>EEE</p>
		   <p>Co-Convenor</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Sonu Kumar</p>
		   <p>MECH</p>
		   <p>Co-Convenor</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Poonam Minocha</p>
		   <p>H & AS</p>
		   <p>Co-Convenor</p>
		   </div>
		</div>
		
		
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Name</p>
		   <p>Department</p>
		   <p>Contact No</p>
		   </div>
		</div>
		
		
		<div  class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
		   <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 teamm">
		   <i class="fa fa-user-circle" aria-hidden="true"></i>
		   <p>Shashi IT-4</p>
		   <p>Designer/Developer</p>
		   <p>8686864770</p>
		   </div>
		</div>
		
</div>
<!--Team End-->



<!--Clubs & Sponsers start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed">
<p>Academic Partners & Clubs</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sapc" >
<div class="row">
			<section class="customer-logos slider">
			    <div class="slide"><img src="images/a1.jpg"></div>
				<div class="slide"><img src="images/aa.jpg"></div>
				<div class="slide"><img src="images/ab.jpg"></div>
				<div class="slide"><img src="images/ac.jpg"></div>
				<div class="slide"><img src="images/ad.jpg"></div>
				<div class="slide"><img src="images/ae.jpg"></div>
				<div class="slide"><img src="images/af.jpg"></div>
				<div class="slide"><img src="images/ag.jpg"></div>
				<div class="slide"><img src="images/ah.jpg"></div>
				<div class="slide"><img src="images/ai.jpg"></div>
				<div class="slide"><img src="images/aj.jpg"></div>
				<div class="slide"><img src="images/ak.jpg"></div>
				<div class="slide"><img src="images/al.jpg"></div>
				<div class="slide"><img src="images/am.jpg"></div>
				<div class="slide"><img src="images/an.jpg"></div>
				<div class="slide"><img src="images/ao.jpg"></div>
				<div class="slide"><img src="images/ap.jpg"></div>
				<div class="slide"><img src="images/aq.jpg"></div>
				<div class="slide"><img src="images/ar.jpg"></div>
				<div class="slide"><img src="images/as.jpg"></div>
				<div class="slide"><img src="images/at.jpg"></div>
				<div class="slide"><img src="images/au.jpg"></div>
				<div class="slide"><img src="images/av.jpg"></div>
				<div class="slide"><img src="images/aw.jpg"></div>
				<div class="slide"><img src="images/ax.jpg"></div>
				<div class="slide"><img src="images/ay.jpg"></div>
				<div class="slide"><img src="images/az.jpg"></div>
			</section>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 4,
				autoplay: true,
				autoplaySpeed: 1200,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>
<!--Clubs & Sponsers End-->


<!--Moments of Borealis 2K18-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed">
<p>Moments of Borealis 2K18</p>
</div>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mome" >
	<div class="row">
			
			<div  class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="momep">
				     <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc1.jpg"/>
						</div>
					 </div>
					 <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc2.jpg"/>
						</div>
					 </div>
					 <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc3.jpg"/>
						</div>
					 </div>
					 <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc4.jpg"/>
						</div>
					 </div>
					 <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc5.jpg"/>
						</div>
					 </div>
					 <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc6.jpg"/>
						</div>
					 </div>
					 <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc7.jpg"/>
						</div>
					 </div>
					 <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ithumb">
						<img src="images/borc8.jpg"/>
						</div>
					 </div>
				</div>
			</div>
		
		
			<div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12 momev">
				<iframe width="100%" height="300px" src="https://www.youtube.com/embed/ESzcrXriDyw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			
	</div>	
	
</div>
<!--End of Moments-->





<!--contact start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed" id="conta">
<p>Contact us</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 conta" >
    <div class="row">

        <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="gitc1">
              <h4><i class="fa fa-inbox"></i>&nbsp GET IN TOUCH</h4>
               <form action="index.php" method="post">
                <label>Name:</label>
                <br>
                <input type="text" name="name" placeholder="Enter your Name" required/>
                <br>
                <label>Email Address:</label><br>
                <input type="email" name="email"placeholder="Enter your Email" required/>
                <br>
                <label>Phone:</label><br>
                <input type="phone" name="phone" placeholder="Enter your Phone Number" required/>
                <br>
                <label>Message:</label><br>
                <textarea name="message"></textarea>
                <br>
                <input type="submit"  name="getintouch" value="SUBMIT"/>
               </form>
          </div>
        </div>
          <?php
		  if(isset($_POST['getintouch']))
		  {
			$name=$_POST['name'];	
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$message=$_POST['message'];
			$query="insert into inbox values('$name','$email','$phone','$message')";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{
			echo '<script language="javascript">swal("Thank You for Contacting us..!!", "we will get back You soon..!!", "success");</script>';
			}
			else
			{
			echo '<script language="javascript">swal("Sorry!", "Unable to process Try again later..!!", "error");</script>';
			}
		  }
		  
		  ?>


<div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
              <div class="gitc2a">
                  <h4><i class="fa fa-building"></i>&nbsp Venue</h4>
                      <p>Aurora's Technological and Research Institute<br>
                         Parvathapur, Uppal, Hyderabad,<br>
                         Telangana, 500098.</p>
              </div>

              <div class="gitc2b">
                <h4><i class="fa fa-envelope"></i>&nbsp E-mail</h4>
                <p>admin@atri.edu.in</p>
              </div>

              <div class="gitc2c">
                <h4><i class="fas fa-mobile-alt"></i>&nbsp Call us</h4>
                <p>040-20050999, +91 9100000909</p>	
              </div>
			  <center>
			  <h4 style="color:white;">Follow & Like us on</h4>
				<a href="https://www.facebook.com/borealis2k19/" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-youtube"></a>
				<a href="https://www.instagram.com/borealis2k19/" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
			 </center>	
			 <br>
            </div>
		</div>
		
		
 </div>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed">
  <p>Location</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 locmap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3807.547865040307!2d78.603771!3d17.38547613854375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b259ae251a6a65f!2sAurora%E2%80%99s+Technological+%26+Research+Institute!5e0!3m2!1sen!2sus!4v1482660382209" 
  width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
  </iframe>
  
</div>
<!--conatct End-->


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

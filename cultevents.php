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
<link rel="stylesheet" href="css/scroll.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  .banner{
background: url(images/2.jpg) no-repeat 0px 0px;
background-size: cover;
  }

.even{
width:100%;
height:auto;
background: url(images/3.jpg) no-repeat 0px 0px;
background-size: cover;
}
.ehed{
background-color:#000000;
}

.ehed p{
text-align:center;
color:white;
font-size:26px;
margin-top:5px;
}
.eventy{
height:auto;
background:rgba(47,54,64,0.90);
margin-top:20px;
margin-bottom:20px;
}
.eventy img{
width:100%;
height:200px;
margin-top:15px;
border:4px solid white;
}
.eventy h4{
letter-spacing:1px;
font-weight:bold;
color:white;
text-align:center;
}

input[type="submit"]{
  border: none;
  height: 40px;
  color: white;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  margin-bottom:10px;
  background-color:#B33771;
}

.foot{
background-color:#000000;
}
.foot .paraa{
font-size:18px;
padding-top:10px;
color:white;
text-align:center;
}
a:hover{
	text-decoration:none;
}
</style>
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

<!--Time Line Start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ehed"id="evet">
<p>Cultural Events</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 even" >


    
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult1.jpg" alt="Technical Events"/>
		<br>
		<h4>Battle of Bands</h4>
		<a href="#" data-toggle="modal" data-target="#cultb1">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
<!--Modal Box-1 Start-->
<div class="modal fade" id="cultb1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Ladies and gentlemen, boys and girls, we are back with the most exciting edition of fun.. presenting you Battle of Bands at Borealis2k19.
		This year it’s going to be bigger & better with more rock and more roll, more head banging and obviously with more you!
		<br>JUDGES:<br>
		To Be Announced<br>
		Prizes upto ___ to be won! <br>
		<u>Co-Ordinators</u><br>
		Chandana - IT - 7729005027<br>
		Date:4th april<br>
		Venue: ATRI<br>
		Entry Fees: Solo Rs.100/- Group Rs.300/- </p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-1 end-->
         


	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult2.jpg" alt="Technical Events"/>
		<br>
		<h4>Swara Madhuri (Solo/Group)</h4>
		<a href="#" data-toggle="modal" data-target="#cultsm1">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	
<!--Modal Box-2 Start-->
<div class="modal fade" id="cultsm1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>"Without Music, life would be a mistake." - Friedrich Nietzsche <br>
	Swara madhuri, a Carnatic and Hindustani Classical Music Competition, commemorates musicians' contribution to the world of music. <br>
	The competition consists of 3 categories:<br>
	* Vocal <br>
	* Instrumental Music <br>
	* Percussion Instruments <br>
	<u>Co-Ordinators</u><br>
		Chandana - IT - 7729005027<br>
	Venue : Atri<br>
	Entry fee solo: Rs.100/-<br>
	Entry fee duet: Rs.150/-<br>
	Entry fee group: Rs.300/-</p>
	<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-2 end-->

	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult3.jpg" alt="Technical Events"/>
		<br>
		<h4>Natya (Solo/Group)</h4>
		<a href="#" data-toggle="modal" data-target="#cultn3">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-3 Start-->
<div class="modal fade" id="cultn3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Who says dance isn't magical? It's time to live your 
		own La La Land. Listen to that long-forgotten whisper and 
		feel the rise and the fall of your breath.Break those shackles. 
		Grab the moment and cast that entrancing spell on us! Opportunity 
		dances with those already on the dance floor.Come, grab it. Come, 
		dance to live, to breathe, to be free, to be YOU.<br>
		Forms:<br>
		Classical <br>  
		Semi - classical<br>   
		Folk     Western<br>
		Rules <br>
		Time limit - 3-4 mins max<br>
		Selection of song & dress should be finalized at the audition<br>
		Solo Dance<br>
		DUET DANCE<br>
		<u>Co-Ordinators</u><br>
		Chandana - IT - 7729005027<br>
		Auditions - 4th april 2019<br>
		Venue: ATRI<br>
		Entry fee solo: Rs.100/-<br>
		Entry fee duet: Rs.150/-<br>
		Entry fee group: Rs.300/-</p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-3 end-->
	
	

    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult4.jpg" alt="Technical Events"/>
		<br>
		<h4>Photography/Shortfilm</h4>
		<a href="#" data-toggle="modal" data-target="#cultpg">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
<!--Modal Box-4 Start-->
<div class="modal fade" id="cultpg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> Following two categories are available for participants :<br>
		(1)  DSLR/DigitalPhotography<br>         
		(2) Mobile Photograph<br>
		Evaluation will be done separately for both DSLR/Digital Camera and Mobile Category.<br>
		->participant can participate only in one category. If any candidate registered themselves in both the categories, their registration will be treated as cancelled.<br>
		Participants can submit their best maximum 03 photographs for competition.<br> 
		Submitted photos must be taken during events of “Borealis 2k19” dated 3rd April to 4th april 2019.<br>
		Photographs should be submitted in RAW format ; Edited images will not be accepted.<br>
		Final submission of photographs will be on 4-4-2019 by 4:00 PM. <br>
		After the stipulated time and date no entries will be entertained.<br>
		Participants must submit their photographs on Email ID – _________&_&&&@gmail.com.<br> 
		In Email participants must mention their registration number compulsorily in subject line.<br>
		Final result will be announced on 4th April in the grand finale , 2019.<br>
		Decision of judges will be final.<br>
		<u>Co-Ordinators</u><br>
		Chandana - IT - 7729005027<br>
		All submitted photographs will be solely property of borealis and will not be used outside.<br>
		Entry fee(Photography): Rs.200/- Per/Head<br>
		Entry fee(Shortfilm): Rs.200/- Per/Team<br>
		</p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-4 end-->

	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult5.jpg" alt="Technical Events"/>
		<br>
		<h4>Footloose</h4>
		<a href="#" data-toggle="modal" data-target="#cultfl">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-5 Start-->
<div class="modal fade" id="cultfl" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The main motto of footloose involves promotion of hip-hop culture and street dance scenes in the city of a rich cultural background. 
The second volume of footloose will be bigger, better and more extravagant.
The battle will be judged based on musicality, technicality, creativity and execution by the judges.<br>
JUDGES:<br>
To Be Announced<br>
DJ:<br>
To Be Announced<br>
Prizes upto ___to be won.<br> 
<u>Co-Ordinators</u><br>
		Chandana - IT - 7729005027<br>
Date: 4th March <br>
Venue:ATRI<br>
Entry Fee:Solo: Rs.100/- Duet: Rs.150/- Group: Rs.300/-</p>
<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-5 end-->


	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult6.jpg" alt="Technical Events"/>
		<br>
		<h4>Drama/Parody</h4>
		<a href="#" data-toggle="modal" data-target="#cultf6">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-6 Start-->
<div class="modal fade" id="cultf6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
JUDGES:<br>
To Be Announced<br>
Prizes upto ___to be won.<br> 
<u>Co-Ordinators</u><br>
		Chandana - IT - 7729005027<br>
Date: 4th March <br>
Venue:ATRI<br>
Entry Fee:Rs.100per/head</p>
<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-6 end-->
	

	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult7.jpg" alt="Technical Events"/>
		<br>
		<h4>Role Play</h4>
		<a href="#" data-toggle="modal" data-target="#exampleModalCenter1">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	
	
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cult8.jpg" alt="Technical Events"/>
		<br>
		<h4>Fine Arts</h4>
		<a href="#" data-toggle="modal" data-target="#exampleModalCenter1">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	

	
	
	
 </div>
<!--Tech events End-->




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

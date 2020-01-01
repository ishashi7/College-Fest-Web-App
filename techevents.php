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
background:rgba(0,151,230,0.90);
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
  background-color:#2f3640;
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
<p>Technical Events</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 even" >


    
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/paper.png" alt="Technical Events"/>
		<br>
		<h4>PAPER PRESENTATION</h4>
		<a href="#" data-toggle="modal" data-target="#techev1">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
<!--Modal Box-1 Start-->
<div class="modal fade" id="techev1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Our Work Is the Presentation Of Our CapabilitiesBorealis2k19, presents the best way to express your knowledge through PAPER PRESENTATION.
		All the research oriented contributors can present their papers and express their opinions on their area of interest. Judges go through all the papers and come to a conclusion of appreciating one such research enthusiast on his work. 
		Certain rules are to be followed for paper presentation.<br>
		<u>Co-Ordinators</u><br>
		******** - CSE & IT - 9*******<br>
		Siri Pallavi - ECE - 9949404307<br>
		Akshaya - EEE - 8309923155<br>
		Chaitanya/Kameshwar Rao - MECH - 9*********<br>
		Sai Kumar/Priyanka - CIV - 9705842683/9515504454<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Team(2)/Individual<br>
		Entry fee: Rs.100/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-1 end-->
         


	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/ppt.jpg" alt="Technical Events"/>
		<br>
		<h4>POSTER PRESENTATION</h4>
		<a href="#" data-toggle="modal" data-target="#techev2">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-2 Start-->
<div class="modal fade" id="techev2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Topic:Your own Ideas<br>
		Define the Purpose<br>
		Sell Your Work in Ten Seconds<br>
		The Title Is Important<br>
		Poster Acceptance Means Nothing<br>
		Many of the Rules for Writing a Good Paper Apply to Posters, Too<br>
		Good Posters Have Unique Features Not Pertinent to Papers<br>
		Layout and Format Are Critical<br>
		Content Is Important, but Keep It Concise<br>
		Posters Should Have Your Personality<br>
		The Impact of a Poster Happens Both During and After the Poster Session<br>
		<u>Co-Ordinators</u><br>
		Varshitha - CSE & IT - 9*******<br>
		Vandana - ECE - 7702260984<br>
		Akshaya - EEE - 8309923155<br>
		Dilip Maha - MECH - 9*********<br>
		Nanda Gopal/Prathyusha - CIV - 96667880462/8499876493<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Team(2)/Individual<br>
		Entry fee: Rs.100/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-2 end-->
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/tech.jpg" alt="Technical Events"/>
		<br>
		<h4>X-CODING</h4>
		<a href="#" data-toggle="modal" data-target="#techev3">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-3 Start-->
<div class="modal fade" id="techev3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>X-Coding is a platform to test your programming skills in any programming language<br>
	   <br>Participants can choose their own programming language for coding<br>
	   Round-1: Simple Problem Statement Can be given with some test cases. You need to 
	   write code and execute those programs with appropriate results which matches test cases given.<br>
	   Only Qualified Students from Round-1 are eligible for Round-2.<br>
	   Round-2: Complex Problem Statement Can be given with some test cases. You need to 
	   write code and execute those programs with appropriate results which matches test cases given.<br>
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Snehal - CSE - 9246843643<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-3 end-->

	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/itg.png" alt="Technical Events"/>
		<br>
		<h4>INSPECT THE GADGET</h4>
		<a href="#" data-toggle="modal" data-target="#techev13">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-13 Start-->
<div class="modal fade" id="techev13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Archana - CSE - 9*********<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-13 end-->
	
	
		<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/bc.jpg" alt="Technical Events"/>
		<br>
		<h4>BLOCK CODING</h4>
		<a href="#" data-toggle="modal" data-target="#techev14">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-14 Start-->
<div class="modal fade" id="techev14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>There are 2 rounds<br>
		Round 1: There are 4 to 5 simple c codes one after other. 
		We will give a paper which contain single code. 
		After 2 min that paper will be taken back and they have 
		to type the code without seeing the code candidate should filter 
		according to their error for next round<br>
        Round 2: There are 2 to 3 simple nested C code one after other. 
		The process is same as round 1, but the time limit for each code 
		is 3 minutes.<br> 
		Spot registration are available<br>
		All the participants will get participation certificates and winner will get merit certificate <br>
		<u>Co-Ordinators</u><br>
		Naga Vaishnavi - CSE - 9440404453<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-14 end-->
	
	
		<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/vb.jpg" alt="Technical Events"/>
		<br>
		<h4>VISUAL BUZZ</h4>
		<a href="#" data-toggle="modal" data-target="#techev15">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-15 Start-->
<div class="modal fade" id="techev15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Aravind - CSE - 9515876031<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-15 end-->
	
	
			<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cym.jpg" alt="Technical Events"/>
		<br>
		<h4>CRYPT YOUR MIND</h4>
		<a href="#" data-toggle="modal" data-target="#techev16">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-16 Start-->
<div class="modal fade" id="techev16" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Srilekha - CSE - 8247278746<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-16 end-->
	
	
	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/mind.jpg" alt="Technical Events"/>
		<br>
		<h4>CODE JUNKIE</h4>
		<a href="#" data-toggle="modal" data-target="#techev4">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-4 Start-->
<div class="modal fade" id="techev4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Code Junkie is an event where you can test your programming skills & logical thinking power.<br>
	    Round-1: A program is given which is shuffled and you need to re write the code in such a way that
		it should get executed with desired given output<br>
		People Qualified in Round-1 are eligible for Round-2<br>
		Round-2: A Program is given which is shuffled as well as some part of the code will be ommited
		from it. you need to sort the code and write the ommited code such the program executes correctly
		with desired outputs<br>
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Alekhya - CSE - 9133536373<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Student Co-Ordinators:<br> 
		Ch.Alekhya-9133536373<br>
		Varsha-7702118506<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-4 end-->
	
	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/mobb.jpg" alt="Technical Events"/>
		<br>
		<h4>CIRCUIT FIXER</h4>
		<a href="#" data-toggle="modal" data-target="#techev5">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
		<!--Modal Box-5 Start-->
<div class="modal fade" id="techev5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Written Test<br>
	   Identification of Components<br>
	   Simple Circuit Connections<br>
	   Complex Circuit Connections<br>
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Harini - ECE - 6300742763<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-5 end-->
	

	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cir.jpg" alt="Technical Events"/>
		<br>
		<h4>PUZZLE TRONICS</h4>
		<a href="#" data-toggle="modal" data-target="#techev6">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
		<!--Modal Box-6 Start-->
<div class="modal fade" id="techev6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p>Written test<br>
		Puzzle with electronic words<br>
		Circuit mixing<br>
		Diode mixing<br>
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Nikhil Reddy - ECE - 8686048925<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.100/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-6 end-->
	
	
	
	
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/robo.jpg" alt="Technical Events"/>
		<br>
		<h4>ROBOTICS</h4>
		<a href="#" data-toggle="modal" data-target="#techev7">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
	<!--Modal Box-7 Start-->
<div class="modal fade" id="techev7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p>Design needed:<br>
<p>By switch control, the participants can control his robot till peak point without touching any obstacle. 
He /she should use more than 2 motors, without any sensor or software program installed. After reaching the peak point manually, 
time is calculated by the organizer and he starts only the forward button then the mortar should move automatically
forward by touching the rare end and should move in reverse manner such a way that the front part of robot should touch the peak point first,
and again the race is started till starting point.<br> 
Essay:<br>
Every team is given a essay of about any electrical component and a special prize is given to the team which wins. 
The essay question is announced on the first day and the results are announced on second day of the fest.<br>
Note:Contestants should get their own Robos<br> 
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Vishnu Sir - EEE - 9100000987<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team<br>
		Entry fee: Rs.100/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-7 end-->

	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/mat.jpg" alt="Technical Events"/>
		<br>
		<h4>3D-DESIGNING</h4>
		<a href="#" data-toggle="modal" data-target="#techev8">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
			<!--Modal Box-8 Start-->
<div class="modal fade" id="techev8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p>Presentation of model or prototype of a structure or frame (Ex: Building, Bridge Frame, Dams,
		Thermal Power Plants, Famous Structures). Different types of frames or Islands<br>
		Rules<br>
		Models should be made at home and Presented on the day i.e 03/03/2019<br>
		Evaluation Based on following:<br>
		Material used<br>
		Innovation and Smartness in Work<br>
		Technical aspects of Construction<br>
		Presentation of work and model with Description of Model<br>
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Trilok - CIV - 6300389300<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-8 end-->
	
	
	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/cad.jpg" alt="Technical Events"/>
		<br>
		<h4>CIRCUIT TRICKS</h4>
		<a href="#" data-toggle="modal" data-target="#techev9">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
	<!--Modal Box-9 Start-->
<div class="modal fade" id="techev9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Vaishnavi - EEE - 7093061005<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-9 end-->
	
	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/bri.jpg" alt="Technical Events"/>
		<br>
		<h4>BRIDGE BUILDING</h4>
		<a href="#" data-toggle="modal" data-target="#techev10">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div><!--Modal Box-10 Start-->
<div class="modal fade" id="techev10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p>Oxford Dictionary defines "creative" as "involving the use of skill and the imagination to produce some thing new or a work of art"..
		Here is complex problem before you, a test of structural engineering brain. imagine there is no material like steel is available on this earth, can you
	fulfill the job using icecream sticks<br>
		A Team Should not Consist of more than 2 persons<br>
		The Bridge must be made entirely of these sticks and adhesive, standard pop sickle sticks/icecream sticksof maximum 12cm in length, maximum 1.5cm width and maximum 4mm stcik<br>
		Based on Weight and deformationof the bridge, we can have a method to rank<br>
		Adhesives such as M-seal are not allowed<br>
		4KG Truck will be placed at the center of the bridge and deformation is calculated<br>
		No Intermediate pillars are allowed<br>
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Kanka Raju - CIV - 7702187792<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-10 end-->
	
<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/mpr.jpg" alt="Technical Events"/>
		<br>
		<h4>MODEL PRESENTATION</h4>
		<a href="#" data-toggle="modal" data-target="#techev17">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div><!--Modal Box-17 Start-->
<div class="modal fade" id="techev17" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Ravi Teja - CIV - 9701441735<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team(2)<br>
		Entry fee: Rs.50/- per/head<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-17 end-->
	
	
	
	
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/eng.jpg" alt="Technical Events"/>
		<br>
		<h4>ENGINE CONSOLE</h4>
		<a href="#" data-toggle="modal" data-target="#techev11">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>	
	<!--Modal Box-11 Start-->
<div class="modal fade" id="techev11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p>Engine will be given<br>
		Contestants should Disassemble the given Engine and then reassemble it<br>
		Contestants who assemble the Engine in the least time will be Declared as Winners<br>
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Anil - MECH - 9********<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team<br>
		Entry fee: Rs.200/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-11 end-->
	
	
	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/inn.png" alt="Technical Events"/>
		<br>
		<h4>TECH QUIZ</h4>
		<a href="#" data-toggle="modal" data-target="#techev12">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-12 Start-->
<div class="modal fade" id="techev12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		All Participants will get Participation Certificate <br>
		<u>Co-Ordinators</u><br>
		Vineeth - CSE - 9700023647<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Team<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-12 end-->
	
	
	
	
 	
	
	
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

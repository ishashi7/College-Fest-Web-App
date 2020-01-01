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
background:rgba(234,32,39,0.90);
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
<p>Literary Events</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 even" >


    
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite1.jpg" alt="Literary Events"/>
		<br>
		<h4>A Minute to Win it</h4>
		<a href="#" data-toggle="modal" data-target="#litev1">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
<!--Modal Box-1 Start-->
<div class="modal fade" id="litev1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
        <p>Recreating the American/Indian classic show - A minute to win it, is a fun, easy, indoor game tasks where players complete the task in less than minute. Ring, hit the target, pong-cup are some of the many fun tasks you'll be assigned on spot.<br>
		RULES : <br>
		complete each task in a minute<br>
		Individual event<br>
		Game rules change accordingly<br>
		JUDGES : <br>
		to be announced<br>
		Prizes : Winner Prize for Winners and Participation Certificate to all<br>
		<u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
		Date : 3rd  April <br> 
		Venue: ATRI<br>
		Categories:Solo<br>
		Registration Fee:Rs.50 per/head</p>
		<a href="register.php">Register Now</a>
      </div>
    
	</div>
  </div>
</div>
<!--Modal Box-1 end-->
         


	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite2.jpg" alt="Technical Events"/>
		<br>
		<h4>Creative Writing</h4>
		<a href="#" data-toggle="modal" data-target="#litev2">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
<!--Modal Box-2 Start-->
<div class="modal fade" id="litev2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p>Logic will take you from A to B. Imagination will take you everywhere. Creativity is intelligence having fun. 
	<br>RULES:<br>
	Starting of the story will be given<br>
	No word limit <br>
	Time limit 30-45 mins <br> 
	JUDGES: <br>
	To Be Announced <br>
	Prizes up to _______to be won.<br>
	<u>Co-Ordinators</u><br>
	B S Ramya 7032469223<br>
	Date: 4th March <br>
	Venue: ATRI<br>
	Categories:Individual<br>
	Registration Fee: Rs.50 per/head</p>
	<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-2 end-->	

	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite3.jpg" alt="Technical Events"/>
		<br>
		<h4>Poetry</h4>
		<a href="#" data-toggle="modal" data-target="#litev3">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
<!--Modal Box-3 Start-->
<div class="modal fade" id="litev3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p>Poetry is when an emotion had found its thought and thought has found words. Spontaneous overflow of feelings. 
	<br>RULES:<br>
	Theme will be announced on spot<br>
	Time limit 30 mins<br>
    Prohibits adaptation/copying from any sources <br>
	Prizes up to _______to be won.<br>
	<u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
	Date: 4th March <br>
	Venue:ATRI <br>
	Categories:Individual<br>
	Registration Fee: Rs.50 per/head</p>
	<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-3 end-->	
	
	
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite4.jpg" alt="Technical Events"/>
		<br>
		<h4>Painting</h4>
		<a href="#" data-toggle="modal" data-target="#litev4">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
<!--Modal Box-4 Start-->
<div class="modal fade" id="litev4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p>This year borealis celebrates arts of all form. Painting, sketching, face painting, watercolor painting.. you name it. Bring out the M.F.Hussain in you and paint the world red. 
	<br>RULES:<br>
	Theme will be given at the time of event <br>
	Time limit - max 60mins <br>
	Get your own materials<br>
	JUDGES: <br>
	To Be Announced<br>
	Prizes up to _______to be won.<br>
	<u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
	Date: 4th March <br>
	Venue:-ATRI<br>
	Categories:Individual
	(Painting and sketching) 
	(Face painting)<br>
	Registration Fee: Rs.50 per/head</p>
	<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-4 end-->	

	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite5.jpg" alt="Technical Events"/>
		<br>
		<h4>Best out of Waste</h4>
		<a href="#" data-toggle="modal" data-target="#litev5">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-5 Start-->
<div class="modal fade" id="litev5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p>“One man's trash is another's treasure” . switch on to your creative side and turn trash into gold. Turn old newspaper into decorative item; old ragged jeans into a bag - anything. From diy to pro, we appreciate it all. 
<br>RULES:<br>
Bring your own materials<br>
Time limit -1 hr<br>
JUDGES: <br>
To Be Announced <br>
Prizes up to _______to be won.<br>
<u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
Date: 4th April <br>
Venue:ATRI<br>
Categories:Individual<br>
	Registration Fee: Rs.50 per/head</p>
	<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-5 end-->	
	
	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite6.jpg" alt="Technical Events"/>
		<br>
		<h4>Stand up</h4>
		<a href="#" data-toggle="modal" data-target="#litev6">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
		<!--Modal Box-6 Start-->
<div class="modal fade" id="litev6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p>To tickle your funny bones and bring out the comedian in you, Stand up comedy is the only way. 
This fest, get ready to laugh till you die or/and make them chuckle in this multi lingual comic set.
<br>RULES:<br>
1) Maximum of 5 mins<br>
2) Allows multilingual<br>
  3) Prohibits use of cuss words <br>
JUDGES: <br>
To Be Announced  <br>
Prizes upto _____to be won.<br>
<u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
 Date: 3rd March<br>
Venue: ATRI<br>
Categories:Individual<br>
Registration Fee: Rs.50 per/head</p>
<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-6 end-->	
	

	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite7.jpg" alt="Technical Events"/>
		<br>
		<h4>Tweet a Tale</h4>
		<a href="#" data-toggle="modal" data-target="#litev7">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
			<!--Modal Box-7 Start-->
<div class="modal fade" id="litev7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p>Long tales are reserved for bedtime. construct a tale the Gen Z way aka by tweeting it. Tweet a tale is a modern creative writing which allows a character limit of 150 only. An initial prompt is given and you weave a tale around it. 
	<br>RULES:<br> 
   10 mins limit<br>
   150 character limit<br> 
JUDGES:<br>
To Be Announced<br>
 Prizes up to _______to be won.<br>
 <u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
 Date: 3rd April <br>
 Venue: ATRI <br>
Categories:Individual<br>
Registration Fee: Rs.50 per/head</p>
<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-7 end-->	
	
	
	
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite8.jpg" alt="Technical Events"/>
		<br>
		<h4>Pop Culture Quiz</h4>
		<a href="#" data-toggle="modal" data-target="#litev8">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
<!--Modal Box-8 Start-->
<div class="modal fade" id="litev8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p>Put your Marvel, GoT, Anime, EDM, Friends, Bahubali knowledge to use. This unconventional quiz is both fun and will get you exciting prizes. This borealis participate in the most fun quiz ever! 
<br>RULES: <br>
  allows a team of two<br>
  Time limit ranges from 15 mins to 20 mins is different rounds<br>
 JUDGES: <br>
 To Be Announced<br>
 Prizes up to _______to be won.<br>
 <u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
 Date: 3rd april<br>
 Venue: ATRI <br>
Categories:Individual/Doubles <br>
Registration Fee: Rs.50 per/head (2)</p>
<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-8 end-->	
	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite9.jpg" alt="Technical Events"/>
		<br>
		<h4>Pun Intended</h4>
		<a href="#" data-toggle="modal" data-target="#litev9">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-9 Start-->
<div class="modal fade" id="litev9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p> Wordplay around the given object and create a funny meme worthy pun. Best meme will not only win but also get featured on the official borealis page !
 <br>Rules:<br>
  Prohibits use of cuss words <br>
  Individual event<br>
  Time limit - 10 mins<br>
 JUDGES: <br>
To Be Announced<br>
 Prizes up to _______to be won.<br>
 <u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
 Date: 3rd April<br>
 Venue: ATRI<br>
 Categories: Solo <br>
Registration Fee: Rs.50 per/head</p>
<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-9 end-->	


	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite10.jpg" alt="Technical Events"/>
		<br>
		<h4>Human Library</h4>
		<a href="#" data-toggle="modal" data-target="#litev10">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
		<!--Modal Box-10 Start-->
<div class="modal fade" id="litev10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p> Be your favorite book/movie and review yourself with constructive criticism. Human library promotes book/movie reviewing and appreciates constructive criticism. Speak about your favorite movie or book in first person!
<br>Rules:
5 min time limit <br>
Book/movie of their choice<br>
JUDGES: To Be Announced <br>
 Prizes up to _______to be won. <br>
 <u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
Date: 3rd April<br>
Venue: ATRI<br>
Categories:Solo<br>
Registration Fee: Rs.50 per/head</p>
<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-10 end-->	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/lite11.jpg" alt="Technical Events"/>
		<br>
		<h4>Debate</h4>
		<a href="#" data-toggle="modal" data-target="#litev11">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-11 Start-->
<div class="modal fade" id="litev11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
	 <div class="modal-body">
	<p> A one on one debate in favor or opposing the given topic. bring out the Arnab Goswami in you and fight for what you stand for. 
<br>RULES: <br>
Team of two (one in favor and one opposing)<br> 
Time limit -5 mins (2.5 mins each) <br>
topic- 10 mins before the event <br>
JUDGES: <br>
To Be Announced<br>
Prizes up to _______to be won.<br> 
<u>Co-Ordinators</u><br>
		B S Ramya 7032469223<br>
Date: 3rd April<br>
Venue: ATRI <br>
Categories:Team of two<br>
Registration Fee: Rs.50 per/head</p>
<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-11 end-->	
	
	
	
		<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/arg.jpg" alt="Technical Events"/>
		<br>
		<h4>Art Gallery</h4>
		<a href="#" data-toggle="modal" data-target="#litev12">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-12 Start-->
<div class="modal fade" id="litev12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<u>Co-Ordinators</u><br>
B S Ramya 7032469223<br>
Date: 3rd April<br>
Venue: ATRI <br>
Categories:Team of two<br>
Registration Fee: Rs.15 per/head</p>
<a href="register.php">Register Now</a>
      </div>
	</div>
  </div>
</div>
<!--Modal Box-12 end-->	
	
	
	
	
	
 </div>
<!--liter events End-->

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

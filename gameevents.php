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
background:rgba(22,160,133,0.90);
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
a:hover{
	text-decoration:none;
}
.foot .paraa{
font-size:18px;
padding-top:10px;
color:white;
text-align:center;
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
<p>Special/Non-Technical Events</p>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 even" >


    
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game1.jpg" alt="Technical Events"/>
		<br>
		<h4>Treasure Hunt</h4>
		<a href="#" data-toggle="modal" data-target="#spev1">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
<!--Modal Box-1 Start-->
<div class="modal fade" id="spev1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Team (3)<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-1 end-->
         


	
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game2.jpg" alt="Technical Events"/>
		<br>
		<h4>Sudoku</h4>
		<a href="#" data-toggle="modal" data-target="#spev2">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-2 Start-->
<div class="modal fade" id="spev2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-2 end-->
	

	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game3.jpg" alt="Technical Events"/>
		<br>
		<h4>Electro Cerite</h4>
		<a href="#" data-toggle="modal" data-target="#spev3">
        <input type="submit" value="MORE INFO"/>
        </a>
		</div>
	</div>
		<!--Modal Box-3 Start-->
<div class="modal fade" id="spev3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-3 end-->

	
	  <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/pict4.jpg" alt="Technical Events"/>
		<br>
		<h4>Pictionary</h4>
		<a href="#" data-toggle="modal" data-target="#spev4">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
		<!--Modal Box-4 Start-->
<div class="modal fade" id="spev4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Srividya - CSE - 9*******<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-4 end-->
	
	
	
	  <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/pict5.jpg" alt="Technical Events"/>
		<br>
		<h4>Picture Puzzle</h4>
		<a href="#" data-toggle="modal" data-target="#spev5">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
	<!--Modal Box-5 Start-->
<div class="modal fade" id="spev5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		A picture will be jumbled by the pieces of papers. 
		There are three levels in it : easy level ,medium level and hard level<br>
Rules<br>
Easy level : time limit 5 minutes<br>
medium level: time limit 10 min<br>
hard level: time limit 20 min<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Easy(Rs.80/-) Medium(Rs.120/-) Hard(Rs.180/-)<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-4 end-->

	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/pict6.jpg" alt="Technical Events"/>
		<br>
		<h4>Human Ludo</h4>
		<a href="#" data-toggle="modal" data-target="#spev6">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
<!--Modal Box-6 Start-->
<div class="modal fade" id="spev6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Its routine playing ludo in mobiles and its an outdated game 
		for a small change lets make the game interesting by making mobile
		world to the real world<br>
		RULES<br>
		Four members<br>
		Those  4 members will be separated into four teams and start the game <br>
		There will be a big Ludo sheet on which you have to play by walk accordingly<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Team (4)<br>
		Entry fee: Rs.200/-(Team)<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-6 end-->

	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/carm.jpg" alt="Technical Events"/>
		<br>
		<h4>Car Maze</h4>
		<a href="#" data-toggle="modal" data-target="#spev7">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
	<!--Modal Box-7 Start-->
<div class="modal fade" id="spev7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.200/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-7 end-->

	
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game4.jpg" alt="Technical Events"/>
		<br>
		<h4>Jenga Shot</h4>
		<a href="#" data-toggle="modal" data-target="#spev8">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>	
		<!--Modal Box-8 Start-->
<div class="modal fade" id="spev8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Team(2)<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-8 end-->


	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game5.jpg" alt="Technical Events"/>
		<br>
		<h4>Find a Bluf</h4>
		<a href="#" data-toggle="modal" data-target="#spev9">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-9 Start-->
<div class="modal fade" id="spev9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual<br>
		Entry fee: Rs.30/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-9 end-->
	
	
	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game7.jpg" alt="Technical Events"/>
		<br>
		<h4>Know Your Partner</h4>
		<a href="#" data-toggle="modal" data-target="#spev10">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
	<!--Modal Box-10 Start-->
<div class="modal fade" id="spev10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation:Partners(2)/Friends(2)<br>
		Entry fee: Rs.50/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-10 end-->
	
	

	<div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game6.jpg" alt="Technical Events"/>
		<br>
		<h4>Disco Dance</h4>
		<a href="#" data-toggle="modal" data-target="#spev11">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>
		<!--Modal Box-11 Start-->
<div class="modal fade" id="spev11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 align="center" class="modal-title" id="exampleModalLongTitle">Instructions to Participants</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>As you all enjoy dancing, we are here with some 
		different task to make it more entertaining<br>
RULES<br>
Song will start and suddenly song will be stopped<br>
All should be in the final position (or) positions<br>
we come and disturb you<br>
Those who distract will be having some tasks and the last person will be the winner<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation:Individual<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-11 end-->



	
    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/game8.jpg" alt="Technical Events"/>
		<br>
		<h4>Nerds United</h4>
		<a href="#" data-toggle="modal" data-target="#spev12">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>

		<!--Modal Box-12 Start-->
<div class="modal fade" id="spev12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Sada Siva - IT - 8686689807<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation:Team(2)<br>
		Entry fee: Rs.100/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-12 end-->
	
	 <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventy" >
		<img src="images/spr.png" alt="Technical Events"/>
		<br>
		<h4>Sports Quiz</h4>
		<a href="#" data-toggle="modal" data-target="#spev13">
        <input type="submit"  value="MORE INFO"/>
        </a>
		</div>
	</div>

		<!--Modal Box-13 Start-->
<div class="modal fade" id="spev13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
		Praneeth - ECE - 9603154343<br>
		Date: 3rd April<br>
		Venue: ATRI<br>
		Participation: Individual/Team(2)<br>
		Entry fee: Rs.50/-<p>
		<a href="register.php">Register Now</a>
      </div>
    </div>
  </div>
</div>
<!--Modal Box-13 end-->
	
	
	
	
	
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

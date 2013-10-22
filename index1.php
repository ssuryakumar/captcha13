<?php
$name=(isset($_POST['uname']))?trim($_POST['uname']):'';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>CAPTCHA'13</title>
		<meta charset="utf-8">
		<link rel="shortcut icon"  href="images/tlogo.png" type="image/png" >

		<link rel="stylesheet" href="css/style_home.css" />
		<link rel="stylesheet" href="css/buttons_home.css" />
		<link rel="stylesheet" href="css/buttons.css" media="all" type="text/css" charset="utf-8" /></script>
		<link rel="stylesheet" href="css/loading.css" media="all" type="text/css" charset="utf-8" /></script>
   	<link rel="stylesheet" href="css/feature-carousel.css" charset="utf-8" />
   	<link rel="stylesheet" href="css/page_load.css" />
  		
		<script type="text/javascript" src="js/countdown.js"></script>
		 <script src="js/jquery-1.7.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.featureCarousel.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
      $(document).ready(function() {
        var carousel = $("#carousel").featureCarousel({
          
        });

        $("#but_prev").click(function () {
          carousel.prev();
        });
        $("#but_pause").click(function () {
          carousel.pause();
        });
        $("#but_start").click(function () {
          carousel.start();
        });
        $("#but_next").click(function () {
          carousel.next();
        });
      });
    </script>
		
	</head>
	<body>
		<div class="top_container">
			<div id="line"></div>			
			
			<div class="left_pane">
				<!--<h1 id="captcha_title"  >CAPTCHA'13</h1>-->
				<img src="images/logo.png" alt="CAPTCHA'13" id="captcha_title" />
			</div>
			<div class="right_pane">
				<div id="clock">				
				<script type="text/javascript">
							var test1 = new Countdown({
							year	: 2013, 
							month	: 9, 
							day		: 26, 
							hour	: 9,
							ampm	: "am",
							minute	: 0, 
							second	: 0	,
							height: 150,
							width: 500,
							style: 'FLIP',
							rangeHi: 'day'	// <- no comma on last item!!
						});

			
					</script>
					</div>
			</div>
		</div>
		<div class="subtitle"> <h1 id="date">A NATIONAL LEVEL TECHNICAL SYMPOSIUM ON SEPT 26th & 27th OF 2013<br />
			Welcome <?php echo $name ?>		
		</h1></div>
		
		<div class="middle_container">
		<!-- COROSEL SLIDER -->
		<!--	 <a id="but_prev" href="#">PREV</a> | <a id="but_pause" href="#">PAUSE</a> | <a id="but_start" href="#">START</a> | <a id="but_next" href="#">NEXT</a>--> 
  
    <div class="carousel-container">
    
      <div id="carousel">
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" height="300" width="400" alt="Image Caption" src="images/events_images/whoami.jpg"></a>
          <div class="carousel-caption">
            <p>
						&quot;NO-ONE CAN JUDGE ME&quot;
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" height="300" width="400" alt="Image Caption" src="images/events_images/hacking.jpg"></a>
          <div class="carousel-caption">
            <p>
					&quot;HACK ME IF YOU CAN &quot;
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" height="300" width="400" alt="Image Caption" src="images/events_images/gaming.jpg"></a>
          <div class="carousel-caption">
            <p>
             &quot; GAMING IS A LAW &quot;	
            </p>
          </div>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" height="300" width="400" alt="Image Caption" src="images/events_images/paper_presentation.jpg"></a>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" height="300" width="400" alt="Image Caption" src="images/events_images/web_designing.jpg"></a>
          <div class="carousel-caption">
            <p>
           
            </p>
          </div>
        </div>
      </div> 
    </div>
			
			
			<!-------------------------------- bottom container---------------------------->
			
		</div>
		<div class="bottom_container">
			<div class="buttons">
				<a href="https://www.facebook.com/captcha13.dce" target="_blank"><div id="button1"></div></a>
				<a href="https://www.youtube.com/captcha2k13" target="_blank"><div id="button2"></div></a>
				<img id="button3" src="images/dce.jpg" alt="dce" width="500" height="100" />
				<a href="home.html"><img src="images/entersite.png" alt="enter-site" id="link" width="470" height="100"/></a>
			</div>
			<div id="my_cursor"></div>
		</div><hr />
		<div class="footer">
			<!--<h3 id="coll_name">Dhanalakshmi College of Engineering</h3>-->
			<h5 id="coll_add" style="text-align: center;">All Rights Reserved &nbsp; &nbsp; &nbsp; copyright&copy2013</h5>

			 
		</div>
		<script type="text/javascript" src="js/page_load.js"></script>
		
	</body>
</html>

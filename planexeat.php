<?php 
require 'sidemenu.php';
require 'connect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Caleb University E-Exeat Plan </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!--clock init-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
							<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Calender</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
										<!--/calender-->
											<div class="cal-main">
													<div class="calender graph-form">
														<h2 class="inner-tittle">Calender</h2>
														<div class="cal1">
															
														</div>
													</div>
													<div class="col-md-6 weather-grids widget-shadow">
															<div class="header-top weather">
																<figure class="icons">
																	<canvas id="clear-day" width="64" height="64"></canvas>
																</figure>
																<h4 class="weather">Weather</h4>
																<ul class="cen">
																	<li><p>°C</p></li>
																	<li><p class="cen">°F</p></li>
																</ul>
																<div class="clearfix"> </div>
															</div>
															<div class="header-bottom">
																<div class="header-bottom1">
																	<div class="header-head">
																		<h4>Sunny</h4>
																		<figure class="icons">
																			<canvas id="partly-cloudy-day" width="64" height="64"></canvas>
																		</figure>	
																		<h6>20°</h6>
																		<div class="bottom-head">
																			<p>Monday</p>
																		</div>
																	</div>
																</div>
																<div class="header-bottom1 header-bottom2">
																	<div class="header-head">
																		<h4>Cloudy</h4>
																		<figure class="icons">
																			<canvas id="cloudy" width="64" height="64"></canvas>
																		</figure>
																		<h6>37°</h6>
																		<div class="bottom-head">
																			<p>Tuesday</p>
																		</div>
																	</div>
																</div>
																<div class="header-bottom1">
																	<div class="header-head">
																		<h4>Rainy</h4>
																		<figure class="icons">
																			<canvas id="rain" width="64" height="64"></canvas>
																		</figure>
																		<h6>18°</h6>
																		<div class="bottom-head">
																			<p>Wednesday</p>
																		</div>
																	</div>
																</div>
																<div class="header-bottom1 header-bottom2">
																	<div class="header-head">
																		<h4>Snowy</h4>
																		<figure class="icons">
																			<canvas id="snow" width="64" height="64"></canvas>
																		</figure>
																		<h6>-2°</h6>
																		<div class="bottom-head">
																			<p>Thursday</p>
																		</div>
																	</div>
																</div>
																<div class="clearfix"> </div>
															</div>
															<script>
																 var icons = new Skycons({"color": "#fff"}),
																	  list  = [
																		"clear-day"
																	  ],
																	  i;

																  for(i = list.length; i--; )
																	icons.set(list[i], list[i]);

																  icons.play();
															</script>
															<script>
																 var icons = new Skycons({"color": "#00C6D7"}),
																	  list  = [
																		"clear-night", "partly-cloudy-day",
																		"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																		"fog"
																	  ],
																	  i;

																  for(i = list.length; i--; )
																	icons.set(list[i], list[i]);

																  icons.play();
															</script>
														</div>
														<div class="chat-mdl-grid two widget-shadow">
																			<div class="activity_box activity_box2">
																				<h4 class="title3">Todo</h4>
																				<div class="scrollbar" id="style-2">
																					<div class="single-bottom">
																						<ul>
																							<li>
																								<input type="checkbox" id="brand" value="">
																								<label for="brand"><span></span> Sunt in culpa qui officia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand1" value="">
																								<label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand2" value="">
																								<label for="brand2"><span></span> Dolorem eum.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand3" value="">
																								<label for="brand3"><span></span> Pain that produces no resultant.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand4" value="">
																								<label for="brand4"><span></span> Cupidatat non proident.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand5" value="">
																								<label for="brand5"><span></span> Praising pain was born.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand6" value="">
																								<label for="brand6"><span></span> Computer &amp; Electronics</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand7" value="">
																								<label for="brand7"><span></span> Dolorem ipsum quia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand8" value="">
																								<label for="brand8"><span></span> Consequatur aut perferendis.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand9" value="">
																								<label for="brand9"><span></span> Dolorem ipsum quia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand10" value="">
																								<label for="brand10"><span></span> Sunt in culpa qui officia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand11" value="">
																								<label for="brand11"><span></span> Fugiat quo voluptas nulla.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand12" value="">
																								<label for="brand12"><span></span> Dolorem eum.</label>
																							</li>
																						</ul>
																					</div>
																				</div>
								</div>
							</div>
				<!--//content-inner-->
			
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
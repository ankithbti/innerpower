<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "HOME" ;
  	include('commonHtmlHead.html');

?>
	<body class="index loading">

		<div id="showAlways" style="padding:0px;margin:0px;position: fixed ; bottom:0px; right:0px; z-index:5000;">
			<!-- <a href="index.php#askQuery" class="scrolly"><img style="width:80%;" src="images/post_your_query.png" /></a> -->
			<a href="postQuery.php" style="padding:5px 10px; background-color:rgba(0,0,0,1);color:#f1f1f1;">Post your queries&nbsp;&nbsp;<span class="icon fa-question-circle"></span></a>
		</div>

		<!-- Header -->
			<?php
			  include('commonPageAltHead.php');
			?>

		<!-- Banner -->		
			<section id="banner" style="padding-bottom:10px;padding-top:10px;">
				<div class="wrapper container" style="padding-bottom:10px;margin-bottom:10px;">
					<div class="row">
						<div class="8u bannerWithTransparency" align="left" style="text-align: justify;">
							<h3 style="padding-top:20px;">We are: <strong><?php echo COMPANY_NAME ; ?></strong></h3>
							<p>
								We are a training, coaching and mentoring company with a belief to tap into the power that lies within us to achieve our peak potential.
								And we are associated with world class mentors, coaches and leaders.
								<br>
								We believe in the importance of leadership in today’s constantly evolving <u>business landscape</u> to overcome our internal limitations and blocks to accelerate success.
							</p>
						</div>
						<div class="4u" align="center">
							<p>
								<a href="event_ip_utpw.php" class="button">Inner Power:<br>Leadership for <br>Changing Times</a>
							</p>
							<p>
								<a href="sponsors.php" class="button">Become Sponsor</a>
							</p>
							<p>
								<a href="ourSponsors.php" class="button">Our Sponsors</a>
							</p>
						</div>
					</div>

				</div>
				
			</section>

			<div class="sectionSegregation" align="center">
				<div class="container">
					<div class="row half">
					<div class="1u">
						<h2></h2>
					</div>
					<div class="10u">
								<h3>Upcoming event:&nbsp;&nbsp;<strong><?php echo EVENT_NAME ; ?></strong></h3>
							</div>
					<div class="1u">
						<h2></h2>
					</div>
				</div>
				</div>
				
			</div>
		
		
			

			<div class="row half">
				<div class=" 12u withImageBackground">
					<div class="extraLayer">
					<h2>IPTS is organizing its 2 days workshop event “Leadership for Changing Times” at Holiday INN- Goa- 26th to 28th Sep.</h2>
					<!-- <img src="images/bluishbg.png" width="100%" height="50px"/> -->
					<div class="bluishribbon">
						<h4><strong>Leading with Passion, Belief &amp; Self-Inspiration</strong></h4>
					</div>
					<h2>A workshop to address the need for a leadership mind-set to capture opportunities amidst a rapidly evolving business landscape.</h2>
					<br>
					</div>
				</div>
			</div>



					
			<div class="sectionSegregation" align="center">
				<div class="container">
					<div class="row half">
					<div class="1u">
						<h2></h2>
					</div>
					<div class="10u">
								<h3><img src="images/ip_log_new.png" style="width:50px;position:relative;top:5px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&amp;&nbsp;&nbsp;
									<img src="images/elantattva_logo.png" style="width:50px;position:relative;top:5px;"/>&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;Your Success is Our Vision
								</h3>
							</div>
					<div class="1u">
						<h2></h2>
					</div>
				</div>
				</div>
			</div>

			<div class="row half withImageBackgroundEnjoyman">
				<div class="12u">
					<div class="wrapBullots">
						<ul>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Holistic Leadership</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Inspiring Peak Performance</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Developing positive attitude towards life</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Empowering Vision, Passion and Goals</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Self Leadership</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Employee Engagement</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Success mindset</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Adaptation to change</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Holistic Growth</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Emotional management</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-caret-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Overcome limited beliefs and strengthen inner belief</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="sectionSegregation" align="center">
				<div class="container">
					<div class="row half">
					<div class="1u">
						<h2></h2>
					</div>
					<div class="10u">
								<h3>Our Products</h3>
							</div>
					<div class="1u">
						<h2></h2>
					</div>
				</div>
				</div>
			</div>

			<section class="wrapper style1 special putImageBG" style="margin:0px;padding:0px;">
				<div class="row">
					<div class="3u movedown">
						<section>
							<!-- <span class="icon feature fa-check"></span> -->
							<a href="http://www.elantattva.com/programs_new.php#at_easi101" target="_blank">
							<img src="images/product1.png" />
							<header>
								<h3>Emotional &amp; Social Intelligence 101</h3>
							</header>
							</a>
							<!-- <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p> -->
						</section>
					
					</div>
					<div class="3u movedown">
						<section>
							<a href="http://www.elantattva.com/programs_new.php#at_ig101" target="_blank">
							<!-- <span class="icon feature fa-check"></span> -->
							<img src="images/product2.png" />
							<header>
								<h3>Goal Setting</h3>
							</header>
							</a>
							<!-- <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p> -->
						</section>
					
					</div>
					<div class="3u movedown">
						<section>
							<a href="http://www.elantattva.com/programs_new.php#at_tm" target="_blank">
							<!-- <span class="icon feature fa-check"></span> -->
							<img src="images/product3.png" />
							<header>
								<h3>Time Mastery</h3>
							</header>
							</a>
							<!-- <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p> -->
						</section>
					
					</div>
					<div class="3u movedown">
						<section>
							<a href="event_ip_utpw.php">
							<!-- <span class="icon feature fa-check"></span> -->
							<img src="images/product4.png" />
							<header>
								<h3>Leadership - DNA</h3>
							</header>
							</a>
							<!-- <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p> -->
						</section>
					
					</div>
				</div>
			</section>


			<div class="sectionSegregation" align="center">
				<div class="container">
					<div class="row half">
					<div class="1u">
						<h2></h2>
					</div>
					<div class="10u">
								<h3>Be a part of the change</h3>
							</div>
					<div class="1u">
						<h2></h2>
					</div>
				</div>
				</div>
			</div>

			<!-- CTA -->
			<section id="cta">
			
				<header>
					<h2>Ready to <strong>attend</strong> ?</h2>
					<p>Register today to experience a new joy in your life.</p>
				</header>
				<footer>
					<ul class="buttons">
						<li><a href="attendee.php" class="button">Know More</a></li>
						<li><a href="attendee.php#attendeeRegisteration" class="button special">Registration Form</a></li>
					</ul>
				</footer>
			
			</section>

			<div class="sectionSegregation" align="center">
				<div class="container">
					<div class="row half">
					<div class="1u">
						<h2></h2>
					</div>
					<div class="10u">
								<h3>Contact Us @</h3>
							</div>
					<div class="1u">
						<h2></h2>
					</div>
				</div>
				</div>
			</div>

			<div class="container">
				<div class="row moveDown">
					<div class="6u contacticons" style="padding:20px 20px;margin-top:50px;">
						<div align="justify">
							<ul>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-facebook-square"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/innerpowermentors" target="_blank">innerpowermentors</a></li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-phone-square"></span>&nbsp;&nbsp;&nbsp;&nbsp;+91 87545 39191 <strong>,</strong> +91 99722 97259</li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-envelope-o"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:connect@innerpowermentors.com">connect@innerpowermentors.com</a></li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-linkedin-square"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.linkedin.com/pub/inner-power-training-solutions/77/456/85b" target="_blank">innerpowermentors</a></li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-dribbble"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.innerpowermentors.com/">www.innerpowermentors.com</a></li>
							</ul>
						</div>
					</div>
					<div class="6u"  style="text-align:justify;padding:20px 20px;margin-top:50px;">
						<h3 style="padding:0px;margin:0px;">The secret to success can be found in your daily agenda. Average people don’t put in the extra work every day to keep growing and changing.</h3>
						<h3>- John C. Maxwell</h3>
					</div>
				</div>
			</div>


		<!-- footer -->
			<?php
			  include('commonPageFooter.php');
			?>
<?php
    ob_start();
	session_start();
	// $_SESSION['page'] = "HOME" ;
  	include('commonHtmlHead.html');
  	// require_once('resources/dbconfig.php');
?>
	<body class="index loading">
	
		<!-- Header -->
			<?php
			  include('commonPageAltHead.php');
			?>

		<!-- Banner -->		
			<section id="banner">
				
				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner">
					
					<header>
						<h2>INNER POWER</h2>
					</header>
					<p><strong>Unlock the power within</strong>
					<br />Holiday Inn Resort, Goa
					<br />2014, Sept 26<sup>th</sup> - 28<sup>th</sup>
					<footer>
						<ul class="buttons vertical">
							<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
						</ul>
					</footer>
				
				</div>
				
			</section>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon"><img src="images/ip_logo_small.png"/></span>
					<h2><strong>INNER POWER</strong><br>is organizing a<br>two-and-half-days event.</h2>
					<p>It will be comprising of a series of theme based workshop<br>sessions to strengthen the core beliefs of individuals to excel in every aspects of life (professional &amp; personal).</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2>I believe there's an <strong>INNER POWER</strong> that makes winners or losers, and the winner are the ones who really listen to the truth of their hearts.<br>
									<span class="icon fa-comments"></span>  Sylvester Stallone  <span class="icon fa-comments"></span></h2>
								</header>
								<p>The event is an open event for passionate entrepreneurs, visionaries and for those who looking forward to take charge of their lives. Where you will get to meet inspiring speakers and network with passionate minded individuals.</p>
								<footer>
									<ul class="buttons">
										<li><a href="#" class="button">Find Out More</a></li>
									</ul>
								</footer>
							
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="feature-icons">
									<li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
									<li><span class="icon fa-group"><span class="label">Feature 2</span></span></li>
									<li><span class="icon fa-bullseye"><span class="label">Feature 3</span></span></li>
									<li><span class="icon fa-trophy"><span class="label">Feature 4</span></span></li>
									<li><span class="icon fa-globe"><span class="label">Feature 5</span></span></li>
									<li><span class="icon fa-gift"><span class="label">Feature 6</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section>

				

				<!-- Offerings -->
					<section class="wrapper style1 container special">
						<header class="major">
								<h2><strong>OUR OFFERINGS</strong></h2>
							</header>
						<div class="row">

							<div class="4u">
								
								<section>
									<header>
										<h3>One day workshops</h3>
									</header>
									<p>We organize one day workshops on a wide range of topics and themes.
									These workshops are customizable and can be delivered in corporate organizations and institutions.
									</p>
									<footer>
										<ul class="buttons">
											<li><a href="about_us.php" class="button small">Learn More</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<header>
										<h3>Events</h3>
									</header>
									<p>We organize mega training/learning events, wherein we bring world-class coaches, thought leaders, 
									and expert professionals from various industry segments under one roof.
									</p>
									<footer>
										<ul class="buttons">
											<li><a href="about_us.php" class="button small">Learn More</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<header>
										<h3>Weekend workshops</h3>
									</header>
									<p>Our in-house team of experienced trainers and coaches bring you specially designed unique weekend workshops.
									 Offered both as open workshops as well as exclusive events.
									</p>
									<footer>
										<ul class="buttons">
											<li><a href="about_us.php" class="button small">Learn More</a></li>
										</ul>
									</footer>
								</section>
							
							</div>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta">
					
						<header>
							<h2><strong>Sponsorship</strong> Opportunities</h2>
							<p>Make valuable connections within the Inner Power community<br>
							by becoming a Conference Sponsor and promoting your <br>products &amp; services to this Passionate Community.</p>
						</header>
						<footer>
							<ul class="buttons">
								<li><a href="#" class="button">Know More</a></li>
							</ul>		
						</footer>
					
					</section>
				
					
				<!-- Three -->
					<section class="wrapper style3 container special">
					
						<header class="major">
							<h2><strong>SPEAKERS - AN INTRO</strong></h2>
						</header>
						
						<div class="row">
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/pavan.png" alt="" /></a>
									<header>
										<h3><strong>Pavan Bakshi</strong></h3>
									</header>
									<p>A Colonel (Veteran), PMP, RCS Certified Executive Coach has a work experience of 30 years and wide expertise in the domain of Operations, Projects, Supply Chain Management, Business Development and Training.</p>
								</section>

							</div>
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/mathew.png" alt="" /></a>
									<header>
										<h3><strong>Jacob Mathewis</strong></h3>
									</header>
									<p>An innovative coach &amp; an effective Change Practitioner, with extensive experience in business optimisation and transformational coaching. A Certified Six Sigma Master Black Belt and Lean Practitioner from the US.</p>
								</section>

							</div>
						</div>
						<div class="row">
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/rajagopal.png" alt="" /></a>
									<header>
										<h3><strong>Jeanne-d’Arc Jabbour Rajagopal</strong></h3>
									</header>
									<p>An Entrepreneur, a Pranic Healer, Pranic Healing Instructor and Arhatic Yoga® Practioner. She has a BA in Sociology with Minor in Psychology and MBA in Marketing from the American University in Dubai.</p>
								</section>

							</div>
							<div class="6u">
							
								<section>
									<a href="#" class="image feature"><img src="images/sweta.png" alt="" /></a>
									<header>
										<h3><strong>Shwetha Bhatia</strong></h3>
									</header>
									<p>A registered dietician with the Indian Dietetic Association. Shwetha’s academic excellence is superseded by her successful and established clinical practice under the brand name ‘Metamorphosis’.</p>
								</section>

							</div>
						</div>

						<footer class="major">
							<ul class="buttons">
								<li><a href="#" class="button">Know More</a></li>
							</ul>
						</footer>
					
					</section>
					
			</article>

		<!-- CTA -->
			<section id="cta">
			
				<header>
					<h2>Ready to <strong>attend</strong> ?</h2>
					<p>Register today to experience a new joy in your life.</p>
				</header>
				<footer>
					<ul class="buttons">
						<li><a href="#" class="button special">Registration Form</a></li>
						<li><a href="#" class="button">Enquiry Form</a></li>
					</ul>
				</footer>
			
			</section>

		<!-- footer -->
			<?php
			  include('commonPageFooter.php');
			?>
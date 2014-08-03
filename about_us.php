<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "ABOUT" ;
  	include('commonHtmlHead.html');
  	require_once('CommonConstants.php');
  	// require_once('resources/dbconfig.php');
?>
	<body class="no-sidebar loading">

		<div id="showAlways" style="padding:0px;margin:0px;position: fixed ; bottom:0px; right:0px; z-index:5000;">
			<!-- <a href="index.php#askQuery" class="scrolly"><img style="width:80%;" src="images/post_your_query.png" /></a> -->
			<a href="postQuery.php" style="padding:5px 10px; background-color:rgba(0,0,0,1);color:#f1f1f1;">Post your queries&nbsp;&nbsp;<span class="icon fa-question-circle"></span></a>
		</div>
	
		<!-- Header -->
			<?php
			  include('commonPageMainHead.php');
			?>
		
		<!-- Main -->
			<article id="">

				<section id="banner" style="padding-bottom:10px;padding-top:10px;">
						<div class="wrapper container" style="padding-bottom:30px;margin-bottom:10px;">
						</div>
					</section>

				<header class="special container" style="">
					<span class="icon"><img src="images/ip_logo_small.png"/></span>
					<br><br>
					<!-- <h2>Unlock the <strong>power</strong> within</h2> -->
					<p>&#8220;Deep within man dwell those slumbering powers that would astonish him,<br>
					that he never dreams of possessing;
					forces that would revolutionize his life if aroused and put into action.&#8221;</p>
					<p><strong>-- Orison Swett Marden --</strong></p>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<!-- Content -->
							<div class="content">
								<section>
									<!-- <p align="center"><img src="images/ip_logo_big_white.png" alt="" /></p> -->
									<header>
										<h2>About Us</h2>
									</header>
									<p><strong><?php echo COMPANY_NAME ; ?></strong> is an inspiration company, our motto is to awaken the passions, the dreams and aspiration that might lie dormant within us, to unleash that power within us and script a grand success journey in our lives.</p>
									<p>
										We are a Training Company whose belief is to tap the Incredible Power that lies within us to achieve our Peak Potentials in life.  To achieve this we are associated with world class mentors, coaches.
										We believe in the importance of leadership and personal belief management in today’s constant evolving business industry and the need for overcoming our internal bondages and blockages to accelerate success.
									</p>
									<p>
										We believe in the importance of leadership and personal belief management in today’s constant evolving business industry and the need for overcoming our internal bondages and blockages to accelerate success.
									</p>


									<header>
										<h2>Our Mission</h2>
									</header>
									<p>
										<ul>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Inspiring Peak Performance</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Developing positive attitude towards life</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Empowering Vision, Passion and Goals</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Self-Leadership</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Adaption to change</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Holistic Growth</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Emotional Management</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-rocket"></span>&nbsp;&nbsp;&nbsp;&nbsp;Overcoming limited beliefs and strengthen inner belief</li>
										</ul>
									</p>


									<header>
										<h2>Our Services</h2>
									</header>
									<p>
										<ul>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-fire"></span>&nbsp;&nbsp;&nbsp;&nbsp;One day workshops</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flag-o"></span>&nbsp;&nbsp;&nbsp;&nbsp;Events</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-cogs"></span>&nbsp;&nbsp;&nbsp;&nbsp;Weekend workshops</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-gift"></span>&nbsp;&nbsp;&nbsp;&nbsp;Complimentary/Freebie Offers</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-users"></span>&nbsp;&nbsp;&nbsp;&nbsp;Forum: You Ask &amp; Our experts Answer!</li>
										</ul>
									</p>

									<header>
										<h2>Our Product</h2>
									</header>
									<p>
										<ul>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;Rekindling Passion</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;Teen Empowerment</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;Emotional Management</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;Energy Management</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;Influential Communication</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;Leadership</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;Journey of Journals</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-flask"></span>&nbsp;&nbsp;&nbsp;&nbsp;EFT – tap into to your power </li>
										</ul>
									</p>
								</section>
							</div>

					</section>

				<!-- One day workshops -->
					<section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2><strong>One day workshops</strong>
								</header>

								<p>
									<ul>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;We organize one day workshops on a wide range of topics and themes.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;We have an in-house team of highly experienced trainers.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;For select workshops, we invite top-notch experts and professionals from chosen areas like “Self Care”, “Developing a Coaching Culture for High Performance”</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;These workshops are customizable and can be delivered in corporate organizations and institutions.</li>
									</ul>
								</p>
								
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="feature-icons">
									<li><span class="icon fa-fire"><span class="label">One Day Workshop</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section>

				<!-- Events -->
					<section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2><strong>Events</strong>
								</header>

								<p>
									<ul>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;We organize mega training/learning events, wherein we bring world-class coaches, thought leaders, and expert professionals from various industry segments under one roof.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;The motto is to give a unique learning experience exposure, to re-ignite the passion that lies within each individual.</li>
									</ul>
								</p>
								
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="feature-icons">
									<li><span class="icon fa-flag-o"><span class="label">Events</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section>

				<!-- Weekend workshops -->
					<section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2><strong>Weekend workshops</strong>
								</header>

								<p>
									<ul>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;Our in-house team of experienced trainers and coaches bring you specially designed unique weekend workshops.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;These programs are offered both as open workshops as well as exclusive events for organizations/institutions.</li>
									</ul>
								</p>
								
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="feature-icons">
									<li><span class="icon fa-cogs"><span class="label">Weekend workshops</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section>

				<!-- Complimentary Offers/Freebies -->
					<section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2><strong>Complimentary Offers/Freebies</strong>
								</header>

								<p>
									<ul>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;Our motto and company belief is to nurture passionate living to rediscover the essence of life – Passion – drive.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;In our endeavour to disseminate this spirit of passionate living, we are extremely happy to share selected training/coaching materials online in the form of pdfs.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;These are offered on complimentary basis to our ever expanding community.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;In case you where unable to attend our workshops/events, we still want you to get at least few of the benefits!</li>
									</ul>
								</p>
								
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="feature-icons">
									<li><span class="icon fa-gift"><span class="label">Complimentary Offers/Freebies</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section>

				<!-- Forum -->
					<section class="wrapper style2 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2><strong>Forum</strong>
								</header>

								<p>
									<ul>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;Most of us feel the need for the right kind of mentorship at some points in our lives.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;We may feel the need to clarify some important questions/doubts in different areas of our professional/personal lives.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;It is important that we get the right support from the right sources.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;Team at <?php echo COMPANY_NAME ; ?> is happy to facilitate this for anyone who wishes to get such support.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;“Forum” (where we virtually connect you to expert trainers/coaches online) is the right place for you.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;You can send us your queries on professional/personal areas where you seem to face challenges on the path to success.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;We have a panel of Certified Professional Coaches, NLP trainers, Entrepreneurs, Senior Corporate Trainers on our panel. They are excited to take your questions online and share their expertise with you!</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;The questions should be relevant to the services offered by <?php echo COMPANY_NAME ; ?>.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;We will answer all the queries in a weeks’ time.</li>

									</ul>
								</p>
								
							</div>
							<div class="4u skel-cell-important">
							
								<ul class="feature-icons">
									<li><span class="icon fa-users"><span class="label">Forum</span></span></li>
								</ul>
							
							</div>				
						</div>
					</section>

				
					
			</article>

		<!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>
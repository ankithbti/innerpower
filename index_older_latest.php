<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "HOME" ;
  	include('commonHtmlHead.html');
  	//require_once('dbconfig.php');

  	$error = 0 ;
  	//$curr_date = date(DATE_RFC822);
	//$datetime = date('Y-m-d H:i:s') ;

	if(isset($_POST['submitted'])){

		$name = $_POST['name'];
  		$email = $_POST['email'];
  		$query = $_POST['query'];

  		$error = 0 ;

  		if( $_SESSION['security_code'] == $_POST['captcha'] && !empty($_SESSION['security_code'])) {

  			$body = "<font color='gray' size='3px' face='tahoma'>";
            $body .= "Hi Admin" . ",<br/><br/>Greetings from " . COMPANY_NAME . " Automated System.<br/><br/>";
            $body .= " This is to inform you that person with following details, asked query for " . COMPANY_NAME . " via Website contact page:<br/> " ;
            $body .= "<ul><li>Name:<b> " . $name . "</b></li><li>Email:<b> " . $email . 
            		"</b></li><li>Query:<b> " . $query . "</b></li></ul>" ;
            
            
            $body .= "<br/><br/>" ;
            $body .= "Thanks & Regards<br/><b>" . COMPANY_NAME . "</b><br/><a href='http://www.innerpowermentors.com/'>www.innerpowermentors.com/</a>";
            $body .= "</font>" ;
            $from_address = "noreply@innerpowermentors.com";
            $to = CONTACT_MAILING_LIST ;
            $subject = "Someone asked query for " . COMPANY_NAME . " via Post your Query at " . $curr_date ;
            $from_name = COMPANY_NAME ;
            //text/html\r\n ||||  ."Content-Type: text/plain; charset=utf-8\r\n"
            $headers = "MIME-Version: 1.0\r\n"
              ."Content-Type: text/html\r\n"
              ."Content-Transfer-Encoding: 8bit\r\n"
              ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"
              ."X-Mailer: PHP/". phpversion();
            mail($to, $subject, $body, $headers, "-f $from_address");

            // Send Ack mail to user
            $body = "<font color='gray' size='3px' face='tahoma'>";
            $body .= "Hello " . $name . ",<br/><br/>Greetings from <strong>" . COMPANY_NAME . "</strong><br/><br/>";
            $body .= " Thanks for asking a query. We will soon get in touch with you. " ;
            $body .= "<br/><br/>" ;
            $body .= "Thanks & Regards<br/><b>" . COMPANY_NAME . "</b><br/><a href='http://www.innerpowermentors.com'>www.innerpowermentors.com</a>";
            $body .= "</font>" ;
            $from_address = "noreply@innerpowermentors.com";
            $to = $email ;
            $subject = " Acknowledgement of your query to " . COMPANY_NAME . " at " . $curr_date ;
            $from_name = COMPANY_NAME ;
            //text/html\r\n ||||  ."Content-Type: text/plain; charset=utf-8\r\n"
            $headers = "MIME-Version: 1.0\r\n"
              ."Content-Type: text/html\r\n"
              ."Content-Transfer-Encoding: 8bit\r\n"
              ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"
              ."X-Mailer: PHP/". phpversion();
            mail($to, $subject, $body, $headers, "-f $from_address");

            // Save this person in our database
            //$name , $eMail
            $sql = "select * from subscribers where email = '" . $email . "'" ;
            $result = mysql_query($sql) or die(mysql_error() . " Contact @ connect@innerpowermentors.com ");
            $count = mysql_num_rows($result) ;

            if($count == 0){
            	// Add the person in our database
            	$insertQuery = "Insert into subscribers(name, email) values('" . $name . "','" . $email . "')" ;
            	$insertRes =  mysql_query($insertQuery) or die(mysql_error() . " Contact @ connect@innerpowermentors.com ");
            }

  		}else{
  			$error = 1 ;
  		}
  	}

?>
	<body class="index loading">

		<div id="showAlways" style="padding:0px;margin:0px;position: fixed ; bottom:0px; right:0px; z-index:5000;">
			<!-- <a href="index.php#askQuery" class="scrolly"><img style="width:80%;" src="images/post_your_query.png" /></a> -->
			<a href="#postQ" class="scrolly" style="padding:5px 10px; background-color:rgba(0,0,0,0.5);color:#f1f1f1;">Have a Query ? Post it.</a>
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

					


					<!-- <div class="inner" style="background-color: rgba(26,188, 156, 0.3);">
					
						<header>
							<h2 style="font-size: 25px;"><?php //echo COMPANY_NAME ; ?></h2>
						</header>
						<p>is organizing a 2 days event<br><strong style="color:#83d3c9;"><?php //echo EVENT_NAME ; ?></strong>
						<br>@ Holiday Inn Resort, Goa
						<br>on 2014, Sept 26<sup>th</sup> - 28<sup>th</sup>
						<footer>
							<ul class="buttons vertical">
								<li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
							</ul>
						</footer>
				
					</div> -->

					<!-- <div class="row">
						<div class="3u" align="center">
							<span class="labeltag">Self Leadership</span>
						</div>
						<div class="4u" align="center">
							<span class="labeltag-red">Inspiring Peak Performance</span>
						</div>
						<div class="5u" align="center">
							<span class="labeltag-blue">Empowering Vision, Passion and Goals</span>
						</div>
					</div>
					<div class="row">
						<div class="4u" align="center">
							<span class="labeltag-yellow">Emotional management</span>
						</div>
						<div class="5u" align="center">
							<span class="labeltag">Developing positive attitude towards life</span>
						</div>
						<div class="3u" align="center">
							<span class="labeltag-red">Holistic Growth</span>
						</div>
					</div>
					<div class="row">
						<div class="4u" align="center">
							<span class="labeltag-blue">Adaptation to change</span>
						</div>
						<div class="8u" align="center">
							<span class="labeltag-yellow">Overcoming limited beliefs and strengthen inner belief</span>
						</div>
					</div> -->
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
		
		<!-- Main -->
			<article id="">

					<div class="row half">
						<div class="4u" style="background-color:#f1f1f1;">
							<img src="images/sunrise.png" width="100%"/>
						</div>
						<div class="8u" align="center" style="margin:0px;padding:0px;">
							<p></p>
							<h3>IPTS is organizing its 2 days workshop event “Leadership for Changing Times” at Holiday INN- Goa- 26th to 28th Sep.</h3>
							<!-- <img src="images/bluishbg.png" width="100%" height="50px"/> -->
							<div class="bluishribbon">
								<h4><strong>Leading with Passion, Belief &amp; Self-Inspiration</strong></h4>
							</div>
							<h3>A workshop to address the need for a leadership mind-set to capture opportunities amidst a rapidly evolving business landscape.</h3>
							<br>
						</div>
					</div>



				<header class="special container">
					<!-- <span class="icon"><img src="images/ip_logo_small.png"/></span> -->
					<h2><strong><?php echo COMPANY_NAME ; ?></strong><br>is organizing a<br>TWO-days event.</h2>
					<p>It will be comprising of a series of theme based workshop<br>sessions to strengthen the core beliefs of individuals to excel in every aspects of life (professional &amp; personal).</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style1 container special-alt">
						<div class="row half">
							<div class="8u">
							
								<header>
									<h2>I believe there's an <strong>INNER POWER</strong> that makes winners or losers, and the winner are the ones who really listen to the truth of their hearts.<br>
									<span class="icon fa-comments"></span>  Sylvester Stallone  <span class="icon fa-comments"></span></h2>
								</header>
								<p>The event is an open event for passionate entrepreneurs, visionaries and for those who looking forward to take charge of their lives. Where you will get to meet inspiring speakers and network with passionate minded individuals.</p>
								<footer>
									<ul class="buttons">
										<li><a href="event_ip_utpw.php" class="button">Find Out More</a></li>
									</ul>
								</footer>
							
							</div>
							<div class="4u skel-cell-important" style="margin-top:40px;">
							
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

					<div class="sectionSegregation" align="center" id="postQ" style="margin-bottom:10px;">
						<div class="row half">
							<div class="4u">
								<h2>Queries</h2>
							</div>
							<div class="1u">
								<h2>|</h2>
							</div>
							<div class="7u">
								<h2>We would love to answer!!!</h2>
							</div>
							
						</div>
					</div>

					<section id="askQuery" class="wrapper style3 container special" style="background-color: #E3536C; color:#f1f1f1; margin-top:0px;padding-top:10px;margin-bottom:0px;padding-bottom:30px;">

						<?php
					    	if(isset($_POST['submitted']) && ($error == 0) ){
					    		// Show Thank you message
					    		echo '<section class="wrapper style2 special container small">';
					    		echo " Thank you <strong>" . $name . "</strong> for asking your doubt.<br>";
					    		echo " You will hear from us soon!!!! " . "<br>" ;
					    		echo " You can also <a href='contact.php#contactCall'><strong>Call</strong></a> &amp; <a href='contact.php#contactEMail'><strong>eMail</strong></a> Us." ;
						  		echo '</section>' ;
					    	}else{
					    		// Show Contact Form
					    ?>
						<header align="center">
							<h2>Post you quries</h2>
						</header>
						<?php
							if($error == 1){
	    						// show error
	    						echo '<div class="row half no-collapse-1"><div class="12u">';
		    					echo " <h3><font color='yellow'>Error!!!! Given Captacha text does not meet with the captcha image text. Try again. </font></h3>";
			  					echo '</div></div><br>' ;
    						}
    					?>

						<form method="post" action="index.php#askQuery" autocomplete="on">
							<div class="row half no-collapse-1">
								<div class="6u">
									<?php
										if($error == 1){
									?>
										<input style="color: #f1f1f1; border-color: #f1f1f1;" type="text" name="name" value="<?php echo $name ; ?>" required/>
									<?php
										}else{
									?>
										<input style="color: #f1f1f1; border-color: #f1f1f1;" type="text" name="name" placeholder="Name*" required/>
									<?php
										}
									?>
								</div>
								<div class="6u skel-cell-important">
									<?php
										if($error == 1){
									?>
										<input style="color: #f1f1f1; border-color: #f1f1f1;" type="email" name="email" value="<?php echo $email ; ?>" required/>
									<?php
										}else{
									?>
										<input style="color: #f1f1f1; border-color: #f1f1f1;" type="email" name="email" placeholder="Email*" required/>
									<?php
										}
									?>
									
								</div>			
							</div>
							<div class="row half no-collapse-1">
								<div class="12u">
									<?php
										if($error == 1){
									?>
										<textarea style="color: #f1f1f1; border-color: #f1f1f1;" name="query" placeholder="Query*" rows="5" required><?php echo $query ; ?></textarea>
									<?php
										}else{
									?>
										<textarea style="color: #f1f1f1; border-color: #f1f1f1;" name="query" placeholder="Query*" rows="5" required></textarea>
									<?php
										}
									?>
									
								</div>
							</div>
							<div class="row half">
								<div class="6u">
									<img style="padding-top:10px;" src="CaptchaSecurityImages.php?width=100&height=40&characters=5" />
									&nbsp;&nbsp;&nbsp;&nbsp;Enter Captcha Text:
								</div>
								<div class="6u">
									<?php
										if($error == 1){
									?>
										<input style="color: #f1f1f1; border-color: yellow;" type="text" name="captcha" placeholder="Captcha Text*" required />
									<?php
										}else{
									?>
										<input style="color: #f1f1f1; border-color: #f1f1f1;" type="text" name="captcha" placeholder="Captcha Text*" required />
									<?php
										}
									?>
									
								</div>
							</div>
							<br>
							<footer>
								<input type="submit" class="button" value="Post"/>
							</footer>
							<input type="hidden" name="submitted" value="submitted" />
						</form>

						<?php
							}
						?>
					</section>



					<!-- <section class="wrapper style3"> -->
						<!-- <header class="major" align="center">
								<h2><strong>About Us</strong></h2>
						</header>
						<div class="row half">
							<p>
								We are a Training Company whose belief is to tap the Incredible Power that lies within us to achieve our Peak Potentials in life.  To achieve this we are associated with world class mentors, coaches.
								We believe in the importance of leadership and personal belief management in today’s constant evolving business industry and the need for overcoming our internal bondages and blockages to accelerate success.
							</p>
						</div> -->

						
							<!-- <header class="major" align="center">
									<h2>Our Mission</h2>
							</header>
						
							
							<p>
								<ul>
									<li class="labeltag"><strong>Inspiring Peak Performance</strong></li>
									<li class="labeltag-red"><strong >Developing positive attitude towards life</strong></li>
									<li class="labeltag-blue"><strong >Empowering Vision, Passion and Goals</strong></li>
									<li class="labeltag-yellow"><strong >Self-Leadership</strong></li>
									<li class="labeltag"><strong >Adaption to change</strong></li>
									<li class="labeltag-red"><strong >Holistic Growth</strong></li>
									<li class="labeltag-blue"><strong >Emotional Management</strong></li>
									<li class="labeltag-yellow"><strong>Overcoming limited beliefs and strengthen inner belief</strong></li>
								</ul>
							</p>
						

						
							<div align="center">
								<p>
									<a href="about_us.php" class="button special">Know Us More</a>
								</p>
							</div>

					</section> -->


					<div class="sectionSegregation" align="center" style="margin-top:10px;">
						<div class="row half">
							<div class="4u">
								<h2>Sponsorship</h2>
							</div>
							<div class="1u">
								<h2>|</h2>
							</div>
							<div class="7u">
								<h2>Grow your connections</h2>
							</div>
							
						</div>
					</div>

				<!-- CTA -->
					<section id="main" align="center">
					
						<header>
							<h2><strong>Sponsorship</strong> Opportunities</h2>
							<p>Make valuable connections within the <?php echo COMPANY_NAME ; ?> community<br>
							by becoming a Conference Sponsor and promoting your <br>products &amp; services to this Passionate Community.</p>
						</header>
						<footer>
							<ul class="buttons">
								<li><a href="sponsors.php" class="button">Know More</a></li>
							</ul>		
						</footer>
					
					</section>

					<div class="sectionSegregation" align="center">
						<div class="row half">
							<div class="4u">
								<h2>Speakers</h2>
							</div>
							<div class="1u">
								<h2>|</h2>
							</div>
							<div class="7u">
								<h2>Best in class speakers</h2>
							</div>
							
						</div>
					</div>
				
					
				<!-- Three -->
					<section class="wrapper style3 container special" style="margin:0px;padding-top:20px;padding-bottom:40px;">
					
						<header class="major">
							<h2><strong>SPEAKERS - AN INTRO</strong></h2>
						</header>

						<div class="row">
							<div class="4u">
								<img class="circle" src="images/pavan.png"/>
							</div>
							<div class="8u" align="left">
								<h3><strong>Pavan Bakshi</strong></h3>
								<p>A Colonel (Veteran), PMP, RCS Certified Executive Coach has a work experience of 30 years and wide expertise in the domain of Operations, Projects, Supply Chain Management, Business Development and Training.</p>
							</div>
						</div>

						<div class="row">
							<div class="8u" align="right">
								<h3><strong>Jeanne-d’Arc Jabbour Rajagopal</strong></h3>
								<p>An Entrepreneur, a Pranic Healer, Pranic Healing Instructor and Arhatic Yoga® Practioner. She has a BA in Sociology with Minor in Psychology and MBA in Marketing from the American University in Dubai.</p>
							</div>
							<div class="4u" >
								<img class="circle" src="images/rajagopal.png"/>
							</div>
						</div>

						<div class="row">
							<div class="4u">
								<img class="circle" src="images/sweta.png"/>
							</div>
							<div class="8u" align="left">
								<h3><strong>Shwetha Bhatia</strong></h3>
								<p>A registered dietician with the Indian Dietetic Association. Shwetha’s academic excellence is superseded by her successful and established clinical practice under the brand name ‘Metamorphosis’.</p>
							</div>
						</div>

						<div class="row">
							<div class="8u" align="right">
								<h3><strong>Prarthana Prateek Kaul</strong></h3>
								<p>A Visionary Social Entrepreneur, Trainer &amp; Consultant. Guest speaker at different
									institutes including IIT Chennai, IIMB, NMIMS, TISS. She has 10 years of extensive NGO &amp; volunteering experience in India.
								</p>
							</div>
							<div class="4u" >
								<img class="circle" src="images/prarthana.png"/>
							</div>
						</div>

						
						<footer class="major">
							<ul class="buttons">
								<li><a href="speakers.php" class="button">Know More</a></li>
							</ul>
						</footer>
					
					</section>
					


			<!-- <div class="sectionSegregation" align="center">
						<div class="row half">
							<div class="4u">
								<h2>Attendee</h2>
							</div>
							<div class="1u">
								<h2>|</h2>
							</div>
							<div class="7u">
								<h2>Be Part of the Change</h2>
							</div>
							
						</div>
			</div> -->

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

		</article>


		<!-- footer -->
			<?php
			  include('commonPageFooter.php');
			?>
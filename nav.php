<nav id="nav">
	<ul>
		<?php
			if($_SESSION['page'] == "EVENT")
			{
				echo '<li class="submenu current">' ;
			}else{
				echo '<li class="submenu">' ;
			}
		?>

			<a href="event_ip_utpw.php">Event</a>
			
					<ul>
						<li><a href="event_ip_utpw.php#eventAbout"><span class="icon fa-desktop"></span>&nbsp;&nbsp;About</a></li>
						<li><a href="event_ip_utpw.php#eventBenefits"><span class="icon fa-gift"></span>&nbsp;&nbsp;Benefits</a></li>
						<!-- <li><a href="event_ip_utpw.php#eventThemes"><span class="icon fa-magic"></span>&nbsp;&nbsp;Themes</a></li> -->
						<li class="submenu">
							<a href="speakers.php"><span class="icon fa-users"></span>&nbsp;&nbsp;Speakers&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-arrow-right"></span></a>
							<ul>
								<li><a href="speakers.php#pavan"><span class="icon fa-user"></span>&nbsp;&nbsp;Pavan Bakshi</a></li>
								<li><a href="speakers.php#prarthana"><span class="icon fa-user"></span>&nbsp;&nbsp;Prarthana</a></li>
								<li><a href="speakers.php#sweta"><span class="icon fa-user"></span>&nbsp;&nbsp;Shwetha</a></li>
								<li><a href="speakers.php#rajagopal"><span class="icon fa-user"></span>&nbsp;&nbsp;Jean</a></li>
								<li><a href="speakers.php#raphael"><span class="icon fa-user"></span>&nbsp;&nbsp;Raphael</a></li>
								<li><a href="speakers.php#suresh"><span class="icon fa-user"></span>&nbsp;&nbsp;Suresh</a></li>
								
							</ul>
						</li>
						<li class="submenu">
							<a href="event_ip_utpw.php#eventSchedule"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Schedule&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-arrow-right"></span></a>
							<ul>
								<li><a href="event_ip_utpw.php#eventday1"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Day 1 ( 26<sup>th</sup> )</a></li>
								<li><a href="event_ip_utpw.php#eventday2"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Day 2 ( 27<sup>th</sup> )</a></li>
								<li><a href="event_ip_utpw.php#eventday3"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Day 3 ( 28<sup>th</sup> )</a></li>
							</ul>
						</li>
						<li><a href="event_ip_utpw.php#eventVenue"><span class="icon fa-building-o"></span>&nbsp;&nbsp;Venue</a></li>
						<!-- <li><a href="event_ip_utpw.php#eventWhoToAttend"><span class="icon fa-users"></span>&nbsp;&nbsp;For whom ?</a></li> -->
						<li class="submenu">
							<a href="sponsors.php"><span class="icon fa-money"></span>&nbsp;&nbsp;Sponsors&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-arrow-right"></span></a>
							<ul>
								<li><a href="sponsors.php#aboutEventToSponsor"><span class="icon fa-desktop"></span>&nbsp;&nbsp;About</a></li>
								<li><a href="sponsors.php#sponsorLevels"><span class="icon fa-bar-chart-o"></span>&nbsp;&nbsp;Levels &amp; Offers</a></li>
								<li><a href="sponsors.php#termsAndCond"><span class="icon fa-thumbs-o-up"></span>&nbsp;&nbsp;Terms &amp; Conds.</a></li>
								<li class="submenu">
									<a href="sponsors.php#sponsorDownbloads"><span class="icon fa-cloud-download"></span>&nbsp;&nbsp;Download&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-arrow-right"></span></a>
									<ul>
										<li><a href="docs/SponsorshipPortfolio.pdf" target="_blank"><span class="icon fa-download"></span>&nbsp;&nbsp;Portfolio</a></li>
										<li><a href="docs/SponsorshipAgreement.pdf" target="_blank"><span class="icon fa-download"></span>&nbsp;&nbsp;Agreement</a></li>
									</ul>
								</li>
								<li><a href="sponsors.php#contactToEnq"><span class="icon fa-pencil"></span>&nbsp;&nbsp;Inquire</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="attendee.php"><span class="icon fa-user"></span>&nbsp;&nbsp;Attendee&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-arrow-right"></span></a>
							<ul>
								<li><a href="attendee.php#attendeeOverview"><span class="icon fa-desktop"></span>&nbsp;&nbsp;Overview</a></li>
								<li><a href="attendee.php#attendeeRegisteration"><span class="icon fa-pencil"></span>&nbsp;&nbsp;Registration</a></li>
								<li><a href="attendee.php#attendeeInquire"><span class="icon fa-question"></span>&nbsp;&nbsp;Enquiry</a></li>
							</ul>
						</li>
						<li><a href="event_ip_utpw.php#eventNeedAssistance"><span class="icon fa-compass"></span>&nbsp;&nbsp;Need Assistance</a></li>
					</ul>
				
		</li>
		<?php
		if($_SESSION['page'] == "SPONSORS")
		{
			echo '<li class="current"><a href="sponsors.php">Sponsors</a></li>' ;
		}else{
			echo '<li><a href="sponsors.php">Sponsors</a></li>' ;
		}
		if($_SESSION['page'] == "ATTENDEE")
		{
			echo '<li class="current"><a href="attendee.php">Attendee</a></li>' ;
		}else{
			echo '<li><a href="attendee.php">Attendee</a></li>' ;
		}
		
		if($_SESSION['page'] == "ABOUT")
		{
			echo '<li class="current"><a href="about_us.php">About</a></li>' ;
		}else{
			echo '<li><a href="about_us.php">About</a></li>' ;
		}
		if($_SESSION['page'] == "CONTACT")
		{
			echo '<li class="current"><a href="contact.php">Contact</a></li>' ;
		}else{
			echo '<li><a href="contact.php">Contact</a></li>' ;
		}
		
		?>
	</ul>
</nav>
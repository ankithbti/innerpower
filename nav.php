<nav id="nav">
	<ul>
		<li class="submenu">
			<a href="#"><span class="icon fa-gift"></span>&nbsp;&nbsp;Programs</a>
			<ul>
				<li class="submenu">
					<a href="event_ip_utpw.php"><span class="icon fa-bell"></span>&nbsp;&nbsp;26<sup>th</sup> - 28<sup>th</sup> Sep Event</a>
					<ul>
						<li><a href="event_ip_utpw.php#eventAbout"><span class="icon fa-desktop"></span>&nbsp;&nbsp;About</a></li>
						<li><a href="event_ip_utpw.php#eventBenefits"><span class="icon fa-gift"></span>&nbsp;&nbsp;Benefits</a></li>
						<li><a href="event_ip_utpw.php#eventThemes"><span class="icon fa-magic"></span>&nbsp;&nbsp;Themes</a></li>
						<li class="submenu">
							<a href="speakers.php"><span class="icon fa-users"></span>&nbsp;&nbsp;Speakers</a>
							<ul>
								<li><a href="speakers.php#pavan"><span class="icon fa-user"></span>&nbsp;&nbsp;Pavan Bakshi</a></li>
								<li><a href="speakers.php#mathew"><span class="icon fa-user"></span>&nbsp;&nbsp;Jacob Mathew</a></li>
								<li><a href="speakers.php#rajagopal"><span class="icon fa-user"></span>&nbsp;&nbsp;Jean</a></li>
								<li><a href="speakers.php#sweta"><span class="icon fa-user"></span>&nbsp;&nbsp;Shwetha</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="event_ip_utpw.php#eventSchedule"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Schedule</a>
							<ul>
								<li><a href="event_ip_utpw.php#eventday1"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Day 1 ( 26<sup>th</sup> )</a></li>
								<li><a href="event_ip_utpw.php#eventday2"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Day 2 ( 27<sup>th</sup> )</a></li>
								<li><a href="event_ip_utpw.php#eventday3"><span class="icon fa-calendar"></span>&nbsp;&nbsp;Day 3 ( 28<sup>th</sup> )</a></li>
							</ul>
						</li>
						<li><a href="event_ip_utpw.php#eventVenue"><span class="icon fa-building-o"></span>&nbsp;&nbsp;Venue</a></li>
						<li><a href="event_ip_utpw.php#eventWhoToAttend"><span class="icon fa-users"></span>&nbsp;&nbsp;For whom ?</a></li>
						<li class="submenu">
							<a href="sponsors.php"><span class="icon fa-money"></span>&nbsp;&nbsp;Sponsors</a>
							<ul>
								<li><a href="sponsors.php#aboutEventToSponsor"><span class="icon fa-desktop"></span>&nbsp;&nbsp;About</a></li>
								<li><a href="sponsors.php#sponsorLevels"><span class="icon fa-bar-chart-o"></span>&nbsp;&nbsp;Levels &amp; Offers</a></li>
								<li><a href="sponsors.php#termsAndCond"><span class="icon fa-thumbs-o-up"></span>&nbsp;&nbsp;Terms &amp; Conds.</a></li>
								<li class="submenu">
									<a href="sponsors.php#sponsorDownbloads"><span class="icon fa-cloud-download"></span>&nbsp;&nbsp;Download</a>
									<ul>
										<li><a href="docs/SponsorshipPortfolio.pdf" target="_blank"><span class="icon fa-download"></span>&nbsp;&nbsp;Portfolio</a></li>
										<li><a href="docs/SponsorshipAgreement.pdf" target="_blank"><span class="icon fa-download"></span>&nbsp;&nbsp;Agreement</a></li>
									</ul>
								</li>
								<li><a href="sponsors.php#contactToEnq"><span class="icon fa-pencil"></span>&nbsp;&nbsp;Inquire</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="attendee.php"><span class="icon fa-user"></span>&nbsp;&nbsp;Attendee</a>
							<ul>
								<li><a href="attendee.php#attendeeOverview"><span class="icon fa-desktop"></span>&nbsp;&nbsp;Overview</a></li>
								<li><a href="attendee.php#attendeeRegisteration"><span class="icon fa-pencil"></span>&nbsp;&nbsp;Registration</a></li>
								<li><a href="attendee.php#attendeeInquire"><span class="icon fa-question"></span>&nbsp;&nbsp;Enquiry</a></li>
							</ul>
						</li>
						<li><a href="event_ip_utpw.php#eventNeedAssistance"><span class="icon fa-compass"></span>&nbsp;&nbsp;Need Assistance</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<?php
		if($_SESSION['page'] == "HOME")
		{
			echo '<li class="current"><a href="index.php"><span class="icon fa-home"></span>&nbsp;&nbsp;Home</a></li>' ;
		}else{
			echo '<li><a href="index.php"><span class="icon fa-home"></span>&nbsp;&nbsp;Home</a></li>' ;
		}
		
		if($_SESSION['page'] == "ABOUT")
		{
			echo '<li class="current"><a href="about_us.php"><span class="icon fa-desktop"></span>&nbsp;&nbsp;About</a></li>' ;
		}else{
			echo '<li><a href="about_us.php"><span class="icon fa-desktop"></span>&nbsp;&nbsp;About</a></li>' ;
		}
		if($_SESSION['page'] == "CONTACT")
		{
			echo '<li class="current"><a href="contact.php"><span class="icon fa-envelope">&nbsp;&nbsp;Contact</a></li>' ;
		}else{
			echo '<li><a href="contact.php"><span class="icon fa-envelope">&nbsp;&nbsp;Contact</a></li>' ;
		}
		
		?>
	</ul>
</nav>
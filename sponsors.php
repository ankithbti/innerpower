<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "SPONSORS" ;
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
				
				<!-- One -->
					<section class="wrapper style1 container" style="margin-top:60px; margin-bottom: 10px;">
						<p align="center"><img style="position:relative;width:90%;height:100%;" src="images/sponsors.png" alt="" /></p>
					</section>

				<!-- Two -->
					<section class="wrapper style1 container" style="margin-top:10px; margin-bottom: 10px;">
						<!-- Content -->
							<div class="content">
								<section>
									
									<header id="aboutEventToSponsor">
										<h2>About &#8220;<?php echo EVENT_NAME ; ?>&#8221;</h2>
									</header>
									<p>It is an open event for passionate entrepreneurs, professionals and those looking forward to take charge of their lives. It includes a series of workshop segments and key-note speeches by inspirational achievers and thought leaders from various fields.</p>
									<p>
										<ul class="buttons">
											<li><a href="event_ip_utpw.php" class="button special">Know More about Event</a></li>
										</ul>
									</p>

									<p>
										We expect around <strong>300</strong> participants for the event. The audience includes professionals from various fields, entrepreneurs and passionate young achievers. The event will be preceded by a massive publicity awareness campaigns in major Indian metros. We are glad to invite corporate organizations to be part of this event and avail of attractive sponsorship opportunities.
									</p>


									<header id="sponsorLevels">
										<h2>Sponsorship Levels &amp; Benefits</h2>
									</header>
									<p>
										<div class="pricing_level" align="center">

											<div class="whole">
												<div class="type platinum">
													<p>Platinum</p>
												</div>
												<div class="plan">
													<div class="header">
														<span>INR</span> 5 <span>lakhs</span>
													</div>
													<div class="content">
														<ul>
															<li>Name on Banner</li>
															<li>Name &amp; Logo on Tickets</li>
															<li>Recognition in Newspaper Ads</li>
															<li>Facebook &amp; LinkedIN Ads</li>
															<li>Twitter Posts</li>
															<li>Big size Logo on website</li>
															<li>Big rotating banner on website</li>
															<li>3 Free Invites</li>
															<li>Single Occupancy Accommodation</li>
															<li>Logo on the banner in Tech parks</li>
															<li>Logo on the banner in malls</li>
															<li>Publicity during event sessions</li>
															<li>Logo on program handouts</li>
															<li>Participant Bag</li>

														</ul>

													</div>
												</div>
											</div>

											<div class="whole">
												<div class="type gold">
													<p>Gold</p>
												</div>
												<div class="plan">
													<div class="header">
														<span>INR</span> 2 <span>lakhs</span>
													</div>
													<div class="content">
														<ul>
															<li>Name on Banner</li>
															<li>Name &amp; Logo on Tickets</li>
															<li>Recognition in Newspaper Ads</li>
															<li>Facebook &amp; LinkedIN Ads</li>
															<li>Twitter Posts</li>
															<li>Medium size Logo on website</li>
															<li>Small rotating banner on website</li>
															<li>2 Free Invites</li>
															<li>Double Occupancy Accommodation</li>
															<li>Logo on the banner in Tech parks</li>
															<li>Logo on the banner in malls</li>
															<li>Publicity during event sessions</li>
															<li>Logo on program handouts</li>
															<li>Participant Bag</li>
														</ul>

													</div>
												</div>
											</div>

											<div class="whole">
												<div class="type silver">
													<p>Silver</p>
												</div>
												<div class="plan">
													<div class="header">
														<span>INR</span> 1 <span>lakhs</span>
													</div>
													<div class="content">
														<ul>
															<li>Name on Banner</li>
															<li>Name &amp; Logo on Tickets</li>
															<li>Recognition in Newspaper Ads</li>
															<li>X</li>
															<li>Twitter Posts</li>
															<li>Small size Logo on website</li>
															<li>X</li>
															<li>1 Free Invites</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>Publicity during event sessions</li>
															<li>Logo on program handouts</li>
															<li>Participant Bag</li>
														</ul>

													</div>
												</div>
											</div>




											<div class="whole">
												<div class="type bronze">
													<p>Bronze</p>
												</div>
												<div class="plan">
													<div class="header">
														<span>INR</span> 50,000<span>/-</span>
													</div>
													<div class="content">
														<ul>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>X</li>
															<li>Publicity during event sessions</li>
															<li>Logo on program handouts</li>
															<li>Participant Bag</li>
														</ul>

													</div>
												</div>
											</div>

										</div>
									</p>

									<p>
										<ul>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-asterisk"></span>&nbsp;&nbsp;Logo Display Size will vary according to your sponsorship level</li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-asterisk"></span>&nbsp;&nbsp;Smaller rotating banner for Gold</li>
										</ul>
									</p>

									<header id="additionalNotes">
										<h2>Additional Notes on Sponsorship offers</h2>
									</header>
									<p>
										<h4>Participant Bag</h4>
										<p>
											Each one of our 300 participants and VIPs will receive a participant bag. This bag will contain business information and advertisement items from various sponsors. You may insert any promotional item, coupon, or offers that you provide into each bag. We will do all the work and stuff the bags! This is a great way to advertise and get your items directly in hand!
										</p>

										<h4>Free Tickets</h4>
										<p>
											Selected sponsorship levels include free tickets to the event.
										</p>

										<h4>Business Displayed on Banners</h4>
										<p>
											Your business name and logo will be displayed on posters and banners to be displayed in Malls and Tech parks. This benefit is available to Platinum and Gold members only.
										</p>

										<h4>Logo display on the back drop of the event venue/stage</h4>
										<p>
											Your brand logo will be displayed on the main back drop of the event and also at the Launch Event (which will be covered by media). We are keeping this logo display on the back drop for platinum members. And it is restricted to 8 logos.
										</p>


										<h4>Power Sponsors</h4>
										<p>
											Also there is the privilege of being power sponsors. 4 Slots. Power sponsors get to sponsor one full session of the event. The session title will prominently identify the power sponsor. Each session will be video recorded, and the videos will be available on YouTube . The summary of the session will be provided in our website. This is a great way to advertise your brand during the event and after it.
										</p>
										<p>
											During the entire 2 ½ -days event, your business name will be announced on pre-decided occasions. There are only 8 power sponsorships available for this event and it is a golden opportunity to promote your business to our premium attendees.
										</p>

										<h4>Program Book / Work Book / Hand-outs</h4>
										<p>
											Our full colour, high quality program book will professionally display your business’ ad! The program book/ Work Book and handouts  will be given to our participants Because they are keepsakes, participants and guests will continue to reference the program book well into the future. Full payment is required to secure your ad space choice. Presenting Sponsor (SOLD) will receive the exclusive Outside Back Cover.
										</p>
									</p>

									<header id="sponsorDownbloads">
										<h2>Downloads for Sponsors</h2>
									</header>
									<p>
										<ul>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-cloud-download"></span>&nbsp;&nbsp;<a href="docs/SponsorshipPortfolio.pdf" target="_blank">Sponsorship Portfolio</a></li>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-cloud-download"></span>&nbsp;&nbsp;<a href="docs/SponsorshipAgreement.pdf" target="_blank">Sponsorship Agreement </a></li>
										</ul>
									</p>

									<header id="termsAndCond">
										<h2>Important Terms &amp; Conditions for Sponsorship</h2>
									</header>
									<p>Sponsors participate on the understanding that:</p>
									<p>
										<ul>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;By returning the signed Sponsorship Agreement (“Agreement”), you agree to be a non-exclusive Sponsor of <?php echo COMPANY_NAME ; ?> for the Inner power workshop – Sep 26th to 28th @ The Holiday Inn, GOA on the following terms and conditions set out below. ( <a href="docs/SponsorshipAgreement.pdf" target="_blank">Download Sponsorship Agreement </a></li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;Upon receipt of your signed Agreement together with payment for the deposit, acknowledgment of receipt will be sent in writing with a Tax Invoice.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;You agree to pay:</li>
											<ul>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-arrow-right"></span>&nbsp;&nbsp;A deposit equal to the amount of 50% of the total amount payable; and </li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-arrow-right"></span>&nbsp;&nbsp;The balance of the total amount payable by 15th Aug 2014.</li>
											</ul>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;Sponsorship entitlements will not commence until the deposit has been paid.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;The deposit paid is non-refundable.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;No cancellations will be accepted after 20th Aug, 2014</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;Sponsorship will facilitate the successful planning and promotion of the Conference in addition to subsidising the costs of management, communication, invited speakers, programs, publications, etc. <br>Sponsorship exposure and acknowledgement is facilitated by the credits in the Conference program.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;Should Sponsors and Exhibitors wish to purchase additional delegate registrations (not included in the sponsorship package), the appropriate registration must be completed with payment of the applicable registration fee.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;The Conference Organisers may at their discretion use your logo, symbol, trade mark or registered mark in acknowledging your sponsorship in the Conference literature where this is offered as part of your particular sponsorship package and no payment shall be made to you for such use. You will be responsible for forwarding your logo, symbol, trademark or registered mark by the deadline. We request that all logos be supplied in an EPS and JPEG format, should an alternative format be received, the Conference organisers cannot be held responsible for the quality of the logo displayed in any of the promotional material.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;Provision of banners and any other promotional material is the responsibility of the sponsor.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;Colour reproductions will be printed as close to the specified colour as practicable.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;The Conference logo is available for sponsors and exhibitors to use in their own promotions. However, all use must follow the strict guidelines as set by the Conference organiser and is subject to approval.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;A sponsorship and exhibition kit will be provided to all sponsors. The schedule will cover details relating to sponsorship entitlements, deadlines for receipt of advertising materials, and the benefits of being our sponsor.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;Delegates list. The names of sponsorship delegation members should be pre informed to us due to limited seats.</li>
											<br>
											<li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon fa-check-square-o"></span>&nbsp;&nbsp;A sponsorship company won’t be considered to constitute a partnership, joint venture or agency relationship with <?php echo COMPANY_NAME ; ?></li>


										</ul>
									</p>

									<header id="contactToEnq">
										<h2>Contact to Enquire</h2>
									</header>
									<p>Contact @ <a href="mailto:raphael@innerpowermentors.com">raphael@innerpowermentors.com</a></p>
									<p>Also, you can visit <a href="contact.php">Contact Page</a> to enquire in more ways.</p>
									
								</section>
							</div>

					</section>

				
				
				

				

				<!-- Forum
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
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;Team Inner Power is happy to facilitate this for anyone who wishes to get such support.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;“Forum” (where we virtually connect you to expert trainers/coaches online) is the right place for you.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;You can send us your queries on professional/personal areas where you seem to face challenges on the path to success.</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;We have a panel of Certified Professional Coaches, NLP trainers, Entrepreneurs, Senior Corporate Trainers on our panel. They are excited to take your questions online and share their expertise with you!</li>
										<li><span class="icon fa-hand-o-right"></span>&nbsp;&nbsp;The questions should be relevant to the services offered by Inner Power.</li>
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
					</section> -->

				
					
			</article>

		<!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>
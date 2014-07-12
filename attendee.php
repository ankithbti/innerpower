<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "ATTENDEE" ;
  	include('commonHtmlHead.html');
  	// require_once('resources/dbconfig.php');
?>
	<body class="no-sidebar loading">
	
		<!-- Header -->
			<?php
			  include('commonPageMainHead.php');
			?>
		
		<!-- Main -->
			<article id="">
				
				<!-- One -->
					<section class="wrapper style1 container" style="margin-top:60px; margin-bottom: 10px;">
						<p align="center"><img style="position:relative;width:50%;height:100%;" src="images/attendeeCoverNew.png" alt="" /></p>
					</section>

				<!-- Two -->
					<section class="wrapper style1 container" style="margin-top:10px; margin-bottom: 10px;">
						<!-- Content -->
							<div class="content">
								<section>
									
									<header id="attendeeOverview">
										<h2>Be a Part of INNER POWER and Begin Your Personal Success Journey</h2>
									</header>

									<p>
										<a href="#attendeeRegisteration" class="button special scrolly">Go For Registration</a>
									</p>

									<p>
										<strong>Immerse yourself in Motivational Talks and Workshops, plus Keynote Addresses and Special Events</strong> -- It's ALL included with your Registration -- plus breakfast, lunch, reception and the evening party.
									</p>

									<p>
										<strong>This is your best opportunity in 2014</strong> to network with the most active and passionate minds.
									</p>

									<p>
										<strong>Confer with leading coaches and experts, thought leaders, innovators, and sports geniuses</strong> as they share their experiences, expertise and enthusiasm with you.  You'll take away actionable knowledge, valuable contacts, and loads of inspiration you need to achieve your dreams.
									</p>

									<p>
										<strong>Get ready for a dynamic, stimulating weekend</strong> of focused learning, brainstorming, problem-solving, networking, and collaborating with life coaches, experts, colleagues and peers.  If you are passionate minded, looking to make your life a passionate one, this workshop is for you.
									</p>
								
									<p>
										<strong>Remember to bring along your peers and colleagues!</strong>
									</p>

									<p>
										<a href="">Click here</a> to view conference rates and information, Member, Group and Academic discounts.
									</p>

									<p>
										All fees are in Indian Rupees.
									</p>

									<p>
										<strong>** Super Early Bird and Early Bird</strong> registrations do not have a specified cut-off date.  These registrations are based on a first-come / first-served basis and will be available till these seats are sold out.
									</p>

									<p>
										Groups of 20 or more please contact <strong>Raphael Joseph ( <span class="icon fa-envelope"></span>&nbsp;&nbsp;<a href="mailto:raphael@innerpowerclub.com">raphael@innerpowerclub.com</a>&nbsp;&nbsp;,&nbsp;&nbsp;<span class="icon fa-phone"></span>&nbsp;&nbsp;(+91) 87921 60045 )</strong> Registration Coordinator, for additional pricing.
									</p>

									<p>
										<a href="#attendeeRegisteration" class="button special scrolly">Go For Registration</a>
									</p>

									<header id="attendeePaymentMethods">
										<h2>Payment Methods</h2>
									</header>

									<p>
										Inner Power 2014 accepts Debit card, Visa, MasterCard, Cash transfer payments.
									</p>

									<p>
										You can also make Check/Money Order Payable to:<br>
										<strong>Inner Power India Pvt. Ltd.</strong>
									</p>

									<p>
										Please send a printed copy of your confirmation email along with your payment.
									</p>

									<header id="attendeeInquire">
										<h2>Contact to Inquire More</h2>
									</header>
									<p>Contact @ <a href="mailto:contact@innerpowerclub.com">contact@innerpowerclub.com</a></p>
									<p>Also, you can visit <a href="contact.php">Contact Page</a> to inquire in more ways.</p>

									<header id="attendeeRegisteration">
										<h2>Registration Form</h2>
									</header>

									<div class="content">
										<form method="post" target="#">
											<div class="row half">
												<div class="6u">
													<span>Registration Type:&nbsp;&nbsp;&nbsp;&nbsp;</span>
													<input type="radio" name = "registrationtype" id = "diamond" value = "diamond" checked = "checked" onClick="document.getElementById('regprice').value='INR 5000/-'"/><span>Diamond</span>&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="radio" name = "registrationtype" id = "golden" value = "golden" onClick="document.getElementById('regprice').value='INR 3000/-'" /><span>Golden</span>&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="radio" name = "registrationtype" id = "silver" value = "silver" onClick="document.getElementById('regprice').value='INR 1000/-'" /><span>Silver</span>
												</div>
												<div class="6u">
													<input id="regprice" type="text" name="price" placeholder="Price" value="INR 5000/-" required readonly style="background-color:#333;color:#f1f1f1;"/>
												</div>
											</div>
											<div class="row half no-collapse-1">
												<div class="6u">
													<input type="text" name="fname" placeholder="First Name*" required/>
												</div>
												<div class="6u">
													<input type="text" name="lname" placeholder="Last Name*" required/>
												</div>
											</div>
											<div class="row half no-collapse-1">
												<div class="6u">
													<input type="text" name="company" placeholder="Company" required/>
												</div>
												<div class="6u">
													<input type="text" name="jobtitle" placeholder="Job Title*" required/>
												</div>
											</div>
											<div class="row half no-collapse-1">
												<div class="6u">
													<input type="email" name="email" placeholder="Email*" required/>
												</div>
												<div class="6u">
													<input type="text" name="phone" placeholder="Phone Number*" required/>
												</div>
											</div>
											<div class="row half no-collapse-1">
												<div class="6u">
													<input type="text" name="companysize" placeholder="Company Size*" required/>
												</div>
												<div class="6u">
													<input type="text" name="jobcategory" placeholder="Job Category*" required/>
												</div>
											</div>
											<div class="row half no-collapse-1">
												<div class="6u">
													<input type="text" name="state" placeholder="State*" required/>
												</div>
												<div class="6u">
													<input type="text" name="country" placeholder="Country*" required/>
												</div>
											</div>
											
											<div class="row half">
												<div class="12u">
													<textarea name="medical" placeholder="Mention Medical/Dietary/Accessibility Restrictions, if any" rows="7"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<p align="center">
														<input type="submit" value="Submit" class="button special" />
													</p>
												</div>
											</div>
										</form>
									</div>
									
									
								</section>
							</div>

					</section>

				
					
			</article>

		<!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>
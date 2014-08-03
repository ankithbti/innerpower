<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "ATTENDEE" ;
  	include('commonHtmlHead.html');
  	require_once('dbconfig.php');

  	$error = 0 ;
  	$curr_date = date(DATE_RFC822);
	$datetime = date('Y-m-d H:i:s') ;

	if(isset($_POST['submitted'])){

		$name = $_POST['name'];
  		$email = $_POST['email'];
  		$company = $_POST['company'];
  		$phone = $_POST['phone'];
  		$companysize = $_POST['companysize'];
  		$jobcategory = $_POST['jobcategory'];
  		$state = $_POST['state'];
  		$country = $_POST['country'];
  		$medical = $_POST['medical'];

  		$error = 0 ;

  		if( $_SESSION['security_code'] == $_POST['captcha'] && !empty($_SESSION['security_code'])) {

  			$body = "<font color='gray' size='3px' face='tahoma'>";
            $body .= "Hi Admin" . ",<br/><br/>Greetings from " . COMPANY_NAME . " Automated System.<br/><br/>";
            $body .= " This is to inform you that one attendee with following details, registered for " . COMPANY_NAME . " via Attendee Regsitration page:<br/> " ;
            $body .= "<ul><li>Name:<b> " . $name . "</b></li>
            			  <li>Email:<b> " . $email . "</b></li>
            			  <li>Company:<b> " . $company . "</b></li>
            			  <li>Phone:<b> " . $phone . "</b></li>
            			  <li>CompanySize:<b> " . $companysize . "</b></li>
            			  <li>Job-Category:<b> " . $jobcategory . "</b></li>
            			  <li>State:<b> " . $state . "</b></li>
            			  <li>Country:<b> " . $country . "</b></li>
            			  <li>Medical:<b> " . $medical . "</b></li>
            		  </ul>" ;
            
            
            $body .= "<br/><br/>" ;
            $body .= "Thanks & Regards<br/><b>" . COMPANY_NAME . "</b><br/><a href='http://www.innerpowermentors.com/'>www.innerpowermentors.com/</a>";
            $body .= "</font>" ;
            $from_address = "noreply@innerpowermentors.com";
            $to = CONTACT_MAILING_LIST ;
            $subject = "Attendee registered for " . COMPANY_NAME . " via online Attendee registration page at " . $curr_date ;
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
            $body .= " Thanks for your registration. We will soon get in touch with you to provide you further update. " ;
            $body .= "<br/><br/>" ;
            $body .= "Thanks & Regards<br/><b>" . COMPANY_NAME . "</b><br/><a href='http://www.innerpowermentors.com'>www.innerpowermentors.com</a>";
            $body .= "</font>" ;
            $from_address = "noreply@innerpowermentors.com";
            $to = $email ;
            $subject = " Acknowledgement of your registration for " . COMPANY_NAME . " at " . $curr_date ;
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
						<p align="center"><img style="position:relative;width:50%;height:100%;" src="images/attendeeCoverNew.png" alt="" /></p>
					</section>

				<!-- Two -->
					<section class="wrapper style1 container" style="margin-top:10px; margin-bottom: 10px;">
						<!-- Content -->
							<div class="content">
								<section>
									
									<header id="attendeeOverview">
										<h2>Be a Part of Event and Begin Your Personal Success Journey</h2>
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
										Groups of 20 or more please contact <strong>Raphael Joseph ( <span class="icon fa-envelope"></span>&nbsp;&nbsp;<a href="mailto:raphael@innerpowermentors.com">raphael@innerpowermentors.com</a>&nbsp;&nbsp;,&nbsp;&nbsp;<span class="icon fa-phone"></span>&nbsp;&nbsp;(+91) 87921 60045 )</strong> Registration Coordinator, for additional pricing.
									</p>

									<p>
										<a href="#attendeeRegisteration" class="button special scrolly">Go For Registration</a>
									</p>

									<header id="attendeePaymentMethods">
										<h2>Payment Methods</h2>
									</header>

									<p>
										We accepts Debit card, Visa, MasterCard, Cash transfer payments.
									</p>

									<p>
										You can also make Check/Money Order Payable to:<br>
										<strong><?php echo COMPANY_NAME ; ?> India Pvt. Ltd.</strong>
									</p>

									<p>
										Please send a printed copy of your confirmation email along with your payment.
									</p>

									<header id="attendeeInquire">
										<h2>Contact to Inquire More</h2>
									</header>
									<p>Contact @ <a href="mailto:connect@innerpowermentors.com">connect@innerpowermentors.com</a></p>
									<p>Also, you can visit <a href="contact.php">Contact Page</a> to inquire in more ways.</p>

									<header id="attendeeRegisteration">
										<h2>Registration Form</h2>
									</header>

									<?php
								    	if(isset($_POST['submitted']) && ($error == 0) ){
								    		// Show Thank you message
								    		echo '<section class="wrapper style2 special container small">';
								    		echo " Thank you <strong>" . $name . "</strong> for your registration.<br>";
								    		echo " You will hear from us soon!!!! " . "<br>" ;
								    		echo " You can also <a href='contact.php#contactCall'><strong>Call</strong></a> &amp; <a href='contact.php#contactEMail'><strong>eMail</strong></a> Us." ;
									  		echo '</section>' ;
								    	}else{
								    		// Show Contact Form
								    ?>

								     <?php
										if($error == 1){
				    						// show error
				    						echo '<div class="row half no-collapse-1"><div class="12u">';
					    					echo " <h3><font color='red'>Error!!!! Given Captacha text does not meet with the captcha image text. Try again. </font></h3>";
						  					echo '</div></div><br>' ;
			    						}
			    					?>

									<div class="content">
										<form method="post" action="attendee.php#attendeeRegisteration" autocomplete="on">
											<!-- <div class="row half">
												<div class="6u">
													<span>Registration Type:&nbsp;&nbsp;&nbsp;&nbsp;</span>
													<input type="radio" name = "registrationtype" id = "diamond" value = "diamond" checked = "checked" onClick="document.getElementById('regprice').value='INR 5000/-'"/><span>Diamond</span>&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="radio" name = "registrationtype" id = "golden" value = "golden" onClick="document.getElementById('regprice').value='INR 3000/-'" /><span>Golden</span>&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="radio" name = "registrationtype" id = "silver" value = "silver" onClick="document.getElementById('regprice').value='INR 1000/-'" /><span>Silver</span>
												</div>
												<div class="6u">
													<input id="regprice" type="text" name="price" placeholder="Price" value="INR 5000/-" required readonly style="background-color:#333;color:#f1f1f1;"/>
												</div>
											</div> -->
											<div class="row half no-collapse-1">
												<div class="6u">
													<?php
														if($error == 1){
													?>
														<input type="text" name="name" value="<?php echo $name ; ?>" required/>
													<?php
														}else{
													?>
														<input type="text" name="name" placeholder="First Name*" required/>
													<?php
														}
													?>
													
												</div>
												<div class="6u">
													<?php
														if($error == 1){
													?>
														<input type="text" name="company" value="<?php echo $company ; ?>"/>
													<?php
														}else{
													?>
														<input type="text" name="company" placeholder="Company"/>
													<?php
														}
													?>
													
												</div>
											</div>
											<!-- <div class="row half no-collapse-1">
												<div class="6u">
													
												</div>
												<div class="6u">
													<input type="text" name="jobtitle" placeholder="Job Title*" required/>
												</div>
											</div> -->
											<div class="row half no-collapse-1">
												<div class="6u">
													<?php
														if($error == 1){
													?>
														<input type="email" name="email" value="<?php echo $email ; ?>" required/>
													<?php
														}else{
													?>
														<input type="email" name="email" placeholder="Email*" required/>
													<?php
														}
													?>
													
												</div>
												<div class="6u">
													
													<?php
														if($error == 1){
													?>
														<input type="text" name="phone" value="<?php echo $phone ; ?>"/>
													<?php
														}else{
													?>
														<input type="text" name="phone" placeholder="Phone Number"/>
													<?php
														}
													?>
												</div>
											</div>
											<div class="row half no-collapse-1">
												<div class="6u">
													<?php
														if($error == 1){
													?>
														<input type="text" name="companysize" value="<?php echo $companysize ; ?>"/>
													<?php
														}else{
													?>
														<input type="text" name="companysize" placeholder="Company Size"/>
													<?php
														}
													?>
													
												</div>
												<div class="6u">
													
													<?php
														if($error == 1){
													?>
														<input type="text" name="jobcategory" value="<?php echo $jobcategory ; ?>"/>
													<?php
														}else{
													?>
														<input type="text" name="jobcategory" placeholder="Job Category"/>
													<?php
														}
													?>
												</div>
											</div>
											<div class="row half no-collapse-1">
												<div class="6u">
													<?php
														if($error == 1){
													?>
														<input type="text" name="state" value="<?php echo $state ; ?>" required/>
													<?php
														}else{
													?>
														<input type="text" name="state" placeholder="State*" required/>
													<?php
														}
													?>
													
												</div>
												<div class="6u">
													<?php
														if($error == 1){
													?>
														<input type="text" name="country" value="<?php echo $country ; ?>" required/>
													<?php
														}else{
													?>
														<input type="text" name="country" placeholder="Country*" required/>
													<?php
														}
													?>
													
												</div>
											</div>
											
											<div class="row half">
												<div class="12u">
													<?php
														if($error == 1){
													?>
														<textarea name="medical" placeholder="Mention Medical/Dietary/Accessibility Restrictions, if any ( Write NA/NONE, if not applicable )" rows="5" required><?php echo $medical ; ?></textarea>
													<?php

														}else{
													?>
														<textarea name="medical" placeholder="Mention Medical/Dietary/Accessibility Restrictions, if any ( Write NA/NONE, if not applicable )" rows="5" required></textarea>
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
														<input style="border-color: red;" type="text" name="captcha" placeholder="Captcha Text*" required />
													<?php
														}else{
													?>
														<input type="text" name="captcha" placeholder="Captcha Text*" required />
													<?php
														}
													?>
													
												</div>
											</div>
											<br>
											<div class="row">
												<div class="12u">
													<p align="center">
														<input type="submit" value="Submit" class="button special" />
														<input type="hidden" name="submitted" value="submitted" />
													</p>
												</div>
											</div>
										</form>
										<?php
											}
										?>
									</div>
									
									
								</section>
							</div>

					</section>

				
					
			</article>

		<!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>
<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "CONTACT" ;
  	include('commonHtmlHead.html');
  	require_once('CommonConstants.php');
  	$error = 0 ;
  	$curr_date = date(DATE_RFC822);
	$datetime = date('Y-m-d H:i:s') ;

  	if(isset($_POST['submitted'])){
  		$name = $_POST['name'];
  		$email = $_POST['email'];
  		$subject = $_POST['subject'];
  		$message = $_POST['message'];

  		$error = 0 ;

  		if( $_SESSION['security_code'] == $_POST['captcha'] && !empty($_SESSION['security_code'])) {
  				
  			$body = "<font color='gray' size='3px' face='tahoma'>";
            $body .= "Hi Admin" . ",<br/><br/>Greetings from " . COMPANY_NAME . " Automated System.<br/><br/>";
            $body .= " This is to inform you that person with following details, contacted " . COMPANY_NAME . " via Website contact page:<br/> " ;
            $body .= "<ul><li>Name:<b> " . $name . "</b></li><li>Email:<b> " . $email . 
            		"</b></li><li>Subject:<b> " . $subject . "</b></li><li>Message:<b> " . $message . "</b></li></ul>" ;
            
            
            $body .= "<br/><br/>" ;
            $body .= "Thanks & Regards<br/><b>" . COMPANY_NAME . "</b><br/><a href='http://www.innerpowermentors.com/'>www.innerpowermentors.com/</a>";
            $body .= "</font>" ;
            $from_address = "noreply@innerpowermentors.com";
            $to = CONTACT_MAILING_LIST ;
            $subject = "Someone contacted " . COMPANY_NAME . " via website contact page at " . $curr_date ;
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
            $body .= " Thanks for contacting us. We will soon get in touch with you. " ;
            $body .= "<br/><br/>" ;
            $body .= "Thanks & Regards<br/><b>" . COMPANY_NAME . "</b><br/><a href='http://www.innerpowermentors.com'>www.innerpowermentors.com</a>";
            $body .= "</font>" ;
            $from_address = "noreply@innerpowermentors.com";
            $to = $email ;
            $subject = " Acknowledgement of your message to " . COMPANY_NAME . " @ " . $curr_date ;
            $from_name = COMPANY_NAME ;
            //text/html\r\n ||||  ."Content-Type: text/plain; charset=utf-8\r\n"
            $headers = "MIME-Version: 1.0\r\n"
              ."Content-Type: text/html\r\n"
              ."Content-Transfer-Encoding: 8bit\r\n"
              ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"
              ."X-Mailer: PHP/". phpversion();
            mail($to, $subject, $body, $headers, "-f $from_address");

  		}else{
  			$error = 1 ;
  		}
  	}

?>
	<body class="no-sidebar loading">

		
	
		<!-- Header -->
			<?php
			  include('commonPageMainHead.php');
			?>

		<!-- Main -->
		    <article id="" style="background-color: #e8e8e8; color:#f1f1f1;">

		    	<section id="banner" style="padding-bottom:10px;padding-top:10px;">
						<div class="wrapper container" style="padding-bottom:30px;margin-bottom:10px;">
						</div>
					</section>
		    
		    	<section id="cta">
				<header class="special container">
					<span class="icon fa-heart-o"></span>
					<br><br>
					<h2>Get In Touch</h2>
					<p>We would love to hear from you !!</p>
				</header>

					
						<?php
					    	if(isset($_POST['submitted']) && ($error == 0) ){
					    		// Show Thank you message
					    		echo '<section class="wrapper style2 special container small">';
					    		echo " Thank you <strong>" . $name . "</strong> for the message.<br>";
					    		echo " You will hear from us soon!!!! " . "<br>" ;
					    		echo " <a href='#contactCall' class='scrolly'><strong>Call</strong></a> &amp; <a href='#contactEMail' class='scrolly'><strong>eMail</strong></a>" ;
						  		echo '</section>' ;
					    	}else{
					    		// Show Contact Form
					    ?>
								<section class="wrapper style4 special container small" style="color: #333;">
								
									<!-- Content -->
										<div class="content">
											<form method="post" action="contact.php" autocomplete="on">
											<?php
												if($error == 1){
						    						// show error
						    						echo '<div class="row half no-collapse-1"><div class="12u">';
							    					echo " <font color='red'>Error!!!! Given Captacha text does not meet with the captcha image text. Try again. </font><br>";
								  					echo '</div></div>' ;
					    						}
					    					?>
												<div class="row half no-collapse-1">
													<div class="6u">
														<?php
															if($error == 1){
														?>
															<input type="text" name="name" value="<?php echo $name ; ?>" required/>
														<?php
															}else{
														?>
															<input type="text" name="name" placeholder="Name*" required/>
														<?php
															}
														?>
													</div>


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
												</div>
												<div class="row half">
													<div class="12u">
														<?php
															if($error == 1){
														?>
															<input type="text" name="subject" value="<?php echo $subject ; ?>" required/>
														<?php
															}else{
														?>
															<input type="text" name="subject" placeholder="Subject*" required/>
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
															<textarea name="message" placeholder="Message*" rows="7" required><?php echo $message ; ?></textarea>
														<?php
															}else{
														?>
															<textarea name="message" placeholder="Message*" rows="7" required></textarea>
														<?php
															}
														?>
													</div>
												</div>
												<div class="row half">
													<div class="6u">
														<img style="padding-top:5px;" src="CaptchaSecurityImages.php?width=100&height=40&characters=5" />
														&nbsp;&nbsp;&nbsp;&nbsp;Enter Captcha Text:
													</div>
													<div class="6u">
														<?php
															if($error == 1){
														?>
															<input style="border-color: red; border-style:solid; border-width: 5px;" type="text" name="captcha" placeholder="Captcha Text*" required />
														<?php
															}else{
														?>
															<input type="text" name="captcha" placeholder="Captcha Text*" required />
														<?php
															}
														?>
													</div>
												</div>
												<p></p>
												<div class="row">
													<div class="12u">
														<input type="submit" value="Send Message" class="button special" />
													</div>
												</div>
												<input type="hidden" name="submitted" value="submitted" />
											</form>
										</div>
										
								</section>

					<?php
						}
					?>

				<header class="special container" id="contactCall">
					<span class="icon fa-phone"></span>
					<br><br>
					<h2>Call Us @</h2>
					<p>(+91) 87921 60045</p>
					<p>(+91) 99722 97259</p>
				</header>

				<header class="special container" id="contactEMail">
					<span class="icon fa-envelope-o"></span>
					<br><br>
					<h2>Mail Us @</h2>
					<p><a href="mailto:connect@innerpowermentors.com">connect@innerpowermentors.com</a></p>
					<p><a href="mailto:raphael@innerpowermentors.com">raphael@innerpowermentors.com</a></p>
				</header>

				</section>
				
			</article>


			

		<!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>	
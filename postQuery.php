<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "HOME" ;
  	include('commonHtmlHead.html');
  	require_once('dbconfig.php');

  	$error = 0 ;
  	$curr_date = date(DATE_RFC822);
	$datetime = date('Y-m-d H:i:s') ;

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
	<body class="no-sidebar loading">

		
	
		<!-- Header -->
			<?php
			  include('commonPageMainHead.php');
			?>

			<article id="" style="background-color: #e8e8e8; color:#f1f1f1;">

		    	<section id="banner" style="padding-bottom:10px;padding-top:10px;">
						<div class="wrapper container" style="padding-bottom:30px;margin-bottom:10px;">
						</div>
				</section>


				<div class="sectionSegregation" align="center" id="askQuery">
					<div class="container">
						<div class="row half">
						<div class="1u">
							<h2></h2>
						</div>
						<div class="10u">
									<h3>Post your Quries</h3>
								</div>
						<div class="1u">
							<h2></h2>
						</div>
					</div>
					</div>
				</div>


				<section class="wrapper style3 special" style="background-color: #3E9F8F; color:#f1f1f1; margin-top:0px;padding-top:10px;margin-bottom:0px;padding-bottom:30px;">

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
						
						<?php
							if($error == 1){
	    						// show error
	    						echo '<div class="row half no-collapse-1"><div class="12u">';
		    					echo " <h3><font color='yellow'>Error!!!! Given Captacha text does not meet with the captcha image text. Try again. </font></h3>";
			  					echo '</div></div><br>' ;
    						}
    					?>

						<form method="post" action="postQuery.php#askQuery" autocomplete="on">
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

















			</article>


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
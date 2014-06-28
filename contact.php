<?php
    ob_start();
	session_start();
	// $_SESSION['page'] = "HOME" ;
  	include('commonHtmlHead.html');
  	// require_once('resources/dbconfig.php');
?>
	<body class="no-sidebar loading">
	
		<!-- Header -->
			<?php
			  include('commonPageMainHead.php');
			?>

		<!-- Main -->
		    <article id="main">

				<header class="special container">
					<span class="icon fa-heart"></span>
					<h2>Get In Touch</h2>
					<p>We would love to hear from you !!</p>
				</header>
					
				<!-- One -->
					<section class="wrapper style4 special container small">
					
						<!-- Content -->
							<div class="content">
								<form>
									<div class="row half no-collapse-1">
										<div class="6u">
											<input type="text" name="name" placeholder="Name" required/>
										</div>
										<div class="6u">
											<input type="email" name="email" placeholder="Email" required/>
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<input type="text" name="subject" placeholder="Subject" required/>
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<textarea name="message" placeholder="Message" rows="7"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><a href="#" class="button special">Send Message</a></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							
					</section>

				<header class="special container">
					<span class="icon fa-phone"></span>
					<h2>Call Us @</h2>
					<p>(+91) 99722 97259</p>
					<p>(+91) 96208 10505</p>
				</header>

				<header class="special container">
					<span class="icon fa-envelope"></span>
					<h2>Mail Us @</h2>
					<p><a href="mailto:contact@innerpowerclub.com">contact@innerpowerclub.com</a></p>
				</header>
				
			</article>


			

		<!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>	
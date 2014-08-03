<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "OURSPONSORS" ;
  	include('commonHtmlHead.html');
  	
  	
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
		    
		    	<section class="wrapper style4 container">
		    		<div class="content">
						<section>
							<header align="center" style="color:#333;">
								<h2>Details &amp; Logo of our Sponsors will come here....</h2>
								<p>
									Coming Soon....
								</p>
							</header>
						</section>
					</div>
				</section>
				
			</article>


			

		<!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>	
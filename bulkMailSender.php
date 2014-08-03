<?php
	ob_start();
	session_start();
	$_SESSION['page'] = "BULKMAIL" ;
	include('commonHtmlHead.html');
  	require_once('dbconfig.php');

  	$curr_date = date(DATE_RFC822);
	$datetime = date('Y-m-d H:i:s') ;

  	if(isset($_POST['checkbox'])){
  		$checkbox = $_POST['checkbox'];
		$id = "('" . implode( "','", $checkbox ) . "');" ;
		//$sql="UPDATE subscribers SET status = '".(isset($activate)?'Y':'N')."' WHERE id IN $id" ;
		$sql="select name, email from subscribers WHERE id IN " . $id ;
		//echo $sql ;
		$result = mysql_query($sql) or die(mysql_error());
		while($rows=mysql_fetch_array($result)){
			
			

			$message='
				<html>
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
				<link href="http://www.fitied.com/web_form/css/style.css" rel="stylesheet" type="text/css" media="all" />
				</head>
				<body style="font-family: ' . '\"Open Sans\"' . ', sans-serif;">
				<div class="wrap" style="color: #f1f1f1; background-color:#333; margin:10px auto; padding:5px 0 10px 0; border-radius:3px;">
					<div align="center">
						<p><img src="http://www.innerpowermentors.com/images/ip_logo_small.png"/></p>
						<h3 style="position:relative;left:10px;font-size:1.2em;">' . COMPANY_NAME . ' - Unlock the Power within</h3>
					</div>
				</div>
				<div class="wrap" style="color: #333;padding: 3em 0 0 0; margin:10px auto; padding:10px 10px;border-radius:10px;">
					<p style="font-size:1.2em;padding:10px 30px; text-align:justify;">
					Dear <b>' . $rows['name'] . '</b>,
					</p>

					<p style="font-size:1.2em;padding:10px 50px; text-align:justify;">
					Template message will appear here......
					</p>

					<p style="font-size:1.2em;padding:10px 30px; text-align:justify;">
					Thanks &amp; Regards<br>
					Inner Power Mentors<br>
					<a href="http://www.innerpowermentors.com" target="_blank">http://www.innerpowermentors.com</a>
					</p>

				</div>
				</div>
				</body>
				</html>' ;


			$to = $rows['email'] ;
			$subject = "[ Testing Bulk Mail Sending ] - Greetings from " . COMPANY_NAME . " @ " . $curr_date ;
			$from_address = "noreply@innerpowermentors.com";
            $from_name = COMPANY_NAME ;
            //text/html\r\n ||||  ."Content-Type: text/plain; charset=utf-8\r\n"
            $headers = "MIME-Version: 1.0\r\n"
              ."Content-Type: text/html\r\n"
              ."Content-Transfer-Encoding: 8bit\r\n"
              ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"
              ."X-Mailer: PHP/". phpversion();
            mail($to, $subject, $message, $headers, "-f $from_address");

			//mail($to, $subject, $body, $headers) or die(" Failed to send mail....Contact me @ ankithbti007@gmail.com !!!");   
		}//while ends here
	}
	
	$sql="SELECT * FROM subscribers";
	$result=mysql_query($sql);
	//$count=mysql_num_rows($result);
	
?>

	<body class="no-sidebar loading">
	
		<!-- Header -->
			<?php
			  include('commonPageMainHead.php');
			?>

		<!-- Main -->
		    <article id="banner" style="background-color: #e8e8e8; color:#f1f1f1;">
		    	<header class="special container">
					<span class="icon fa-share"></span>
					<h2>Send Mail to All or Some</h2>
					<p>Your shortcut to reach more users !!</p>
					<br>
					<p><a href="#mailTemplate" class="scrolly">Check out the mail template</a></p>
		    		<!-- <p><a href="logout.php" style='background-color: #E3536C; padding: 5px 10px; color: #f1f1f1;'><span class="icon fa-sign-out"></span> Logout</a></p> -->
				<?php
			    	if(isset($_POST['checkbox']) ) {
			    		// Show Thank you message
			    		echo '<p>';
			    		echo " <strong style='background-color: #1abc9c; padding: 5px 10px; color: #f1f1f1;'> Mail has been sent successfully. </strong> " ;
				  		echo '</p>' ;
			    	}
			    ?>
			    </header>
				
		    	<section class="wrapper style3 container special-alt">
		    		<form name="frmactive" method="post" action="">
			    	<table width="400" border="0" cellspacing="1" cellpadding="0" style="color: #333 ;">
						<tr>
							<td>
									<table width="400" border="0" cellpadding="3" cellspacing="1">
										<tr>
											<td align="center"><input type="checkbox" name="allbox" id="allbox" title="Select or Deselct ALL" style="background-color:#ccc;" onchange="javascript:foo();"/> [ Select All ]</td>
											<td align="center"><strong>Name</strong></td>
											<td align="center"><strong>Email</strong></td>
										</tr>
										<tr>
											<td colspan="3" align="center">&nbsp;</td>
										</tr>
										<?php
											while($rows=mysql_fetch_array($result)){
										?>
											<tr>
												<td align="center"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['id']; ?>"></td>
												<td><?php echo $rows['name']; ?></td>
												<td><?php echo $rows['email']; ?></td>
											</tr>
										<?php
											}
										?>
										
									</table>
							</td>
						</tr>
					</table>
					<p>
						<input type="submit" class="button special" name="Send" value="Send"/>
					</p>
					</form>
				</section>
				
				

				<section id="mailTemplate" class="wrapper style3 container special-alt" style="color:#333;">
					<div align="center">
						<h2>Mail Template</h2>
					</div>

					<?php
						include('mailTemplate1.html');
					?>

				</section>


		    </article>


		    <!-- Footer -->
			<?php
			  include('commonPageFooter.php');
			?>




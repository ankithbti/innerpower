<?php
	require_once('CommonConstants.php');
?>

<div id="showAlways" style="padding:0px;margin:0px;position: fixed ; bottom:35px;; right:0px; z-index:5000;">
	<!-- <a href="index.php#askQuery" class="scrolly"><img style="width:80%;" src="images/post_your_query.png" /></a> -->
	<a href="#topOfThePage" class="goToTop scrolly" style="padding:5px 10px; background-color:rgba(0,0,0,1);color:#f1f1f1;"><span class="icon fa-arrow-circle-up"></span></a>
</div>

<div class="topLine" id="topOfThePage">
</div>

<header id="header" class="alt">
	<h1 id="logo"><a href="index.php"><!-- <img src="images/ip_log_new.png" style="width:50px;position:relative;top:0px;"/>&nbsp;&nbsp;&nbsp;&nbsp; --><!-- <span style="position:relative;top:-20px;"> --><strong>Inner Power Training Solutions (IPTS)</strong><!-- </span> --></a></h1>
	<?php
	  include('nav.php');
	?>
</header>
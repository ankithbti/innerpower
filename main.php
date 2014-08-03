<?php
    ob_start();
	session_start();
	$_SESSION['page'] = "HOME" ;
  	include('commonHtmlHeadBootStrap.html');
?>

<body>
	
      <div style="margin:5px 0px ;padding:0px;margin-left:9%;">
          <a class="" href="#"><img src="images/textLogo1.png"/></a>
      </div>
    

	<!-- Fixed navbar -->
    <div class="navbar navbar-default" role="navigation" style="margin:0px;">
      <div class="container">
      	<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        	<div class="col-md-8">
        		<h2>We are: <strong><?php echo COMPANY_NAME ; ?></strong></h2>
				<p>
					We are a training, coaching and mentoring company with a belief to tap into the power that lies within us to achieve our peak potential.
					And we are associated with world class mentors, coaches and leaders.
				</p>
				<p>
					We believe in the importance of leadership in today’s constantly evolving business landscape to overcome our internal limitations and blocks to accelerate success
				</p>
        	</div>
        	<div class="col-md-4">
				<p>
					<a href="event_ip_utpw.php" class="button">Inner Power: Leadership <br> for Changing Times</a>
				</p>
				<p>
					<a href="sponsors.php" class="btn btn-large btn-warning">Book Now Sponsorship</a>
				</p>
				<p>
					<a href="sponsors.php" class="btn btn-large btn-warning">Know More</a>
				</p>
        	</div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="res/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

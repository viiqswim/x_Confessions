<html>
	<head>
		<title> SDSMT - Gossip </title>
		<!-- Contains main style sheet -->
		<link href="StyleSheets/SDSMT_gossip.css" rel="stylesheet" type="text/css" media="screen" />
		<!-- Contains thank_you page style sheet -->
		<link href="StyleSheets/thank_you.css" rel="stylesheet" type="text/css" media="screen" />
		<!-- Contains google fonts I use for author/date -->
		<!-- font-family: 'Electrolize', sans-serif; -->
		<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
		<!-- Contains google fonts I use for entry content -->
		<!-- font-family: 'Strait', sans-serif; -->
		<link href='http://fonts.googleapis.com/css?family=Strait' rel='stylesheet' type='text/css'>
	</head>


<body>
	<!-- start wrapper -->
	<div id="wrapper">


			<!-- start header -->
		<div id="header">
			<div id="logo">
				<h1>
					<img id="main_img" src="images/sdsmt_logo.jpg">
					<a href="#">SDSMT Gossip</a>
				</h1>
			</div>
		</div>
		<!-- end #header -->

		<!-- start .randomSpacing -->
		<div class="randomSpacing1"> </div>
		<!-- end .randomSpacing -->
		<br/>
		
		
		<div id="thankyou"> Thank You for sharing! </div>
		<div id="redirect"> 
			You will be redirected to the main page in 5 seconds. 
			<br> If you do not wish to wait, <a href="home.php"> click here. </a>
		</div>
		
		
		<!-- start .randomSpacing -->
		<div class="randomSpacing2"> </div>
		<!-- end .randomSpacing -->
		
		
		<?php
			//sleep( 5 );
			header('Location: Home.php');
		?>
		
		
		<br/>
		<!-- start footer -->
		<div id="footer">
			<p>Copyright (c) 2013 sdsmt-gossip.com All rights reserved.</p>
		</div>
		<!-- end #footer -->

	</div>
	<!-- end wrapper -->
</body>
</html>
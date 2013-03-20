<?php
define( '__FORM_INDEX', 1 );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title> Tech Confessions </title>
		<!-- Contains main style sheet -->
		<link href="StyleSheets/SDSMT_gossip.css" rel="stylesheet" type="text/css" media="screen" />
		<!-- Contains form style sheet -->
		<link href="StyleSheets/formOptions.css" rel="stylesheet" type="text/css" media="screen" />
		<!-- Contains script that toggles form options -->
		 <script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="javascript/formToggle.js"></script>
		<!-- Contains google fonts I use for author/date -->
		<!-- font-family: 'Electrolize', sans-serif; -->
		<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
		<!-- Contains google fonts I use for entry content -->
		<!-- font-family: 'Strait', sans-serif; -->
		<link href='http://fonts.googleapis.com/css?family=Strait' rel='stylesheet' type='text/css'>
	</head>


<body>
	<!-- JavaScript SDK -->
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
		// init the FB JS SDK
		FB.init({
		  appId      : 'YOUR_APP_ID', // App ID from the App Dashboard
		  channelUrl : 'http://localhost/sdsmt_gossip/Home.php', // Channel File for x-domain communication
		  status     : true, // check the login status upon init?
		  cookie     : true, // set sessions cookies to allow your server to access the session?
		  xfbml      : true  // parse XFBML tags on this page?
		});

		// Additional initialization code such as adding Event Listeners goes here

	  };

	  // Load the SDK's source Asynchronously
	  // Note that the debug version is being actively developed and might 
	  // contain some type checks that are overly strict. 
	  // Please report such bugs using the bugs tool.
	  (function(d, debug){
		 var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement('script'); js.id = id; js.async = true;
		 js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
		 ref.parentNode.insertBefore(js, ref);
	   }(document, /*debug*/ false));
	</script>
	
	<!-- start wrapper -->
	<div id="wrapper">


			<!-- start header -->
		<div id="header">
			<div id="logo">
				<h1>
					<img id="main_img" src="images/sdsmt_logo.jpg">
					<a href="#">Tech Confessions</a>
				</h1>
			</div>
		</div>
		<!-- end #header -->

		<!-- start .randomSpacing -->
		<div class="randomSpacing1"> </div>
		<!-- end .randomSpacing -->
		<br/>
		
		<button1 id="button1">Give your name</button1>
		<button2 id="button2">Attach a picture</button2>
		<form action="Home.php" method="POST">
			<!-- start #text -->
			<div id="text">
				<textarea id="story" name="story" 
						placeholder="Share your story..."
						wrap="hard"
						autofocus rows=3 cols=50></textarea><br>
			</div>
			<!-- end #text -->
			<div id="authorText">
				<input id="author" type="text" placeholder="Anonymous" name="author"/>
			</div>
			<div id="imageText">
				<input id="image" type="file" name="pic"></input>
			</div>
			<input type="submit" value="Share" class="share"></input>
		</form>

		<!-- start .randomSpacing -->
		<div class="randomSpacing2"> </div>
		<!-- end .randomSpacing -->
		
		<!-- start #stories -->
		<div id="stories">
			<?php
				// Contains global variables
				include_once( 'Includes/variables.php' );
				// Database connection
				include_once( 'Includes/config.php' );
				//Story and Comment classes
				include_once( 'Includes/post.php' );
				// Script that shows all the entries
				include_once( 'Includes/show_stories.php' );
				// Script that takes care of user's input
				include_once( 'Includes/get_story.php' );
			?>
		</div>
		<!-- end #stories -->
		
		<br/>
		<!-- start footer -->
		<div id="footer">
			<p>Copyright (c) 2013 TechConfessions.com All rights reserved.</p>
		</div>
		<!-- end #footer -->

	</div>
	<!-- end wrapper -->
</body>
</html>
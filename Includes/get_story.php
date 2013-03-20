<?php
if ( !defined( '__FORM_INDEX' ) )
	header( 'location: index.php' );

// If the user pressed "Share/Submit"
if ( isset( $_POST[ "story" ] ) ) {
	$author = htmlspecialchars( $_POST[ "author" ] );
	$story  = htmlspecialchars( $_POST[ "story" ] );
	$image  = $_POST[ "pic" ];
	echo $author . " " . $story . " ";
	$addEntry = FALSE; // This will tell wether to run query or not
	// Build the query according to user's input
	$query    = "INSERT INTO `gossip`.`sdsmt_stories` " . "(`story_id` , `author` , `date` , `story` , `picture`) " . "VALUES (NULL";
	// If the user gave a name
	if ( !empty( $author ) ) {
		$query .= " , '$author'";
	} else {
		$query .= " , ''";
	}
	// Gets today's date and time
	$MDY     = date( "m/d/y" );
	$hours   = date( "g" );
	$hours   = (int) $hours - 7;
	$minutes = date( "i a" );
	$date    = $hours . ":" . $minutes . ", " . $MDY;
	$query .= ", '$date'";
	// If they had a story
	if ( !empty( $story ) ) {
		$query .= ", '$story'";
		// Run query
		$addEntry = TRUE;
	} else {
		$query .= ", ''";
	}
	// If they had an image
	if ( !empty( $image ) ) {
		$query .= ", '$image'";
	} else {
		$query .= ", ''";
	}
	$query .= ");";
	// Connects to mySQL
	$mysql_connection = @mysql_connect( "localhost", "viiqswim", "micuenta2" );
	// Name of database to access
	$db_name          = "gossip";
	// Connects to the database
	$db_connection    = @mysql_select_db( $db_name, $mysql_connection );
	// If $db_connection equals false, then connection failed
	if ( $db_connection === FALSE ) {
		echo "Could not access the database <br/>";
		die( );
	}
	echo "$query<br/>";
	// The following line performs the query
	if ( $addEntry == TRUE ) {
		$queryResult = mysql_query( $query, $mysql_connection );
		header( 'Location: Thank_you.php' );
	}
	// If $queryResult equals false, query failed for some reason
	if ( $queryResult === FALSE ) {
		echo "Query failed.<br/>";
		die( );
	}
}
?>
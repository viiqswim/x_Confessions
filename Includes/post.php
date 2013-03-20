<!-- This file contains 'story' and 'comment' classes
	story class -
		getStories() - Gets the 'confessions' from the database
						and outputs them.
	comment class-
		getComments() - STILL UNDER CONSTRUCTION ---
						It's supposed to get the comments per confession
							and output them to the website.
<?php
if ( !defined( '__FORM_INDEX' ) )
	header( 'location: index.php' );
	
class story {
	function __construct( ) {
		$this->comment      = new comment;
		$this->DBConnection = new DBConnection;
	}
	function getStories( ) {
		$this->DBConnection->connect();
		$storyid          = NULL;
		// The following variable holds the query string
		$sqlStoryString   = "SELECT * FROM " . $this->DBConnection->globalVariables->storytbl . " ORDER BY storyid DESC";
		// The following line performs the query
		$queryStoryResult = mysql_query( $sqlStoryString, $this->DBConnection->getConnection() );
		// If $queryResult equals false, query failed for some reason
		if ( $queryStoryResult === FALSE ) {
			echo "Query failed.<br/>";
			die( );
		}
		// Get the number of results found in query
		$num_results = mysql_num_rows( $queryStoryResult );
		// Gets the number of fields in the result
		$num_fields  = mysql_num_fields( $queryStoryResult );
		//echo "Number of results: $num_results<br/>"
		//	 . "Number of fields: $num_fields<br/>";
		do {
			// Put results of query in the $rows array (one by one)
			$rows = mysql_fetch_row( $queryStoryResult );
			// If rows becomes false, then end of results
			// has been reached
			if ( $rows === FALSE ) {
				break;
			}
			// Otherwise, there are still records to display
			else {
				echo "<div class=\"entry\">";
				for ( $field = 0; $field < $num_fields; $field++ ) {
					$empty = empty( $rows[ $field ] );
					// Show the story number
					if ( $field == 0 ) {
						$storyid = $rows[ $field ];
						echo "<div class=\"entryData\">#$rows[$field] ";
					}
					// Show the author
					else if ( $field == 1 ) {
						// If empty author, then anonymous
						if ( $empty ) {
							echo "- By Anonymous ";
						} else {
							echo "by " . htmlspecialchars( $rows[ $field ] );
						}
					}
					// Show the date
					else if ( $field == 5 ) {
						echo "- $rows[$field]. </div><br/>";
					}
					// Show the story
					else if ( $field == 3 ) {
						echo "<div class=\"entryStory\">" . htmlspecialchars( $rows[ $field ] ) . "</div><br/>";
					}
					// Show the image
					else if ( $field == 2 && !$empty ) {
						echo "<img src=\"\"></img>";
					}
				}
				echo "</div>";
			}
			//Populate child comments from this story
			$this->comment->getComments( $storyid );
		} while ( $rows != FALSE );
		// Close query
		mysql_free_result( $queryStoryResult );
		$this->DBConnection->close();
	}
}
class comment {
	function __construct( ) {
		$this->DBConnection = new DBConnection;
	}
	function getComments( $storyid ) {
		$this->DBConnection->connect();
		$sqlCommentString   = "SELECT CommentId, Comment, CreateDate FROM " . $this->DBConnection->globalVariables->storycommenttbl . " ORDER BY CommentId ASC";
		// The following line performs the query
		$queryCommentResult = mysql_query( $sqlCommentString, $this->DBConnection->getConnection() );
		//Aqui vamos a poner los comments
		// Close query
		mysql_free_result( $queryCommentResult );
		//$this->DBConnection->close();
	}
}
?>
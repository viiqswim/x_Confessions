<?php
if ( !defined( '__FORM_INDEX' ) )
	header( 'location: index.php' );
	
			// If $db_connection equals false, then connection failed
			// if( $dbConnection->getConnection() === FALSE )
			// {
			// echo "Could not access the database <br/>";
			// die();
			// }
			//Initialize Stories and Comments
$story = new story;
			//Show Stories and Comments
$story->getStories();
			// The following variable holds the query string
			// $sqlString = "SELECT * FROM $storytbl ORDER BY storyid DESC";
			// // The following line performs the query
			// $queryResult = mysql_query( $sqlString, $mysql_connection );
			// // If $queryResult equals false, query failed for some reason
			// if( $queryResult === FALSE )
			// {
			// echo "Query failed.<br/>";
			// die();
			// }
			// // Get the number of results found in query
			// $num_results = mysql_num_rows( $queryResult );
			// // Gets the number of fields in the result
			// $num_fields = mysql_num_fields( $queryResult );
			// //echo "Number of results: $num_results<br/>"
			// //	 . "Number of fields: $num_fields<br/>";
			// do{
			// // Put results of query in the $rows array (one by one)
			// $rows = mysql_fetch_row( $queryResult );
			// // If rows becomes false, then end of results
			// // has been reached
			// if( $rows === FALSE )
			// {
			// break;
			// }
			// // Otherwise, there are still records to display
			// else
			// {
			// echo "<div class=\"entry\">";
			// for( $field = 0; $field < $num_fields; $field++ )
			// {
			// $empty = empty($rows[$field]);
			// // Show the story number
			// if( $field == 0 )
			// {
			// echo "<div class=\"entryData\">#$rows[$field] ";
			// }
			// // Show the author
			// else if( $field == 1 )
			// {
			// // If empty author, then anonymous
			// if( $empty )
			// {
			// echo "- By Anonymous ";
			// }
			// else
			// {
			// echo "by " . htmlspecialchars($rows[$field]) ;
			// }
			// }
			// // Show the date
			// else if( $field == 5 )
			// {
			// echo "- $rows[$field]. </div><br/>";
			// }
			// // Show the story
			// else if( $field == 3 )
			// {
			// echo "<div class=\"entryStory\">" 
			// . htmlspecialchars($rows[$field]) 
			// . "</div><br/>";
			// }
			// // Show the image
			// else if( $field == 2 && !$empty )
			// {
			// echo "<img src=\"\"></img>";
			// }
			// }
			// echo "</div>";
			// }
			// } while( $rows != FALSE );
			// // Close query
			// mysql_free_result( $queryResult );
			// Close mySQL connection
			//mysql_close( $mysql_connection );
?>
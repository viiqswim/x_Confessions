<!-- This file contains global variables -->
<?php
if ( !defined( '__FORM_INDEX' ) )
	header( 'location: index.php' );
	
class globalVariables {
	function __construct( ) {
		// Name of database to access
		$this->db_name            = "xconfessions";
		//Server name
		$this->db_host            = "localhost";
		//Server username
		$this->db_user            = "root";
		//Server password
		$this->db_pass            = "caca";
		/** Table variables **/
		$this->storytbl           = "story";
		$this->storycommenttbl    = "storycomment";
		$this->storypropertytbl   = "storyproperty";
		$this->commentpropertytbl = "commentproperty";
	}
}
?>
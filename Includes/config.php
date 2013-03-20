<!-- This  file handles database connection -->
<?php
if ( !defined( '__FORM_INDEX' ) )
	header( 'location: index.php' );
	
define( '__FORM_CONNECTION', 3 );

class DBConnection {
	private $connection = "";
	function __construct( ) {
		$this->globalVariables = new globalVariables;
	}
	//Establish a sql connection
	function connect( ) {
		$this->connection = mysql_connect( $this->globalVariables->db_host, $this->globalVariables->db_user, $this->globalVariables->db_pass );
		mysql_select_db( $this->globalVariables->db_name, $this->connection );
	}
	//Close sql connection
	function close( ) {
		mysql_close();
	}
	function getConnection( ) {
		return $this->connection;
	}
}
?>
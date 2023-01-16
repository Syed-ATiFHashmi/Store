<?php
require_once(dirname(__FILE__).'/dbconn.php');
class DBController extends dbconn{
	
	private $conn;
	
	function __construct() {
		parent::__construct();
	}
	
	// function connectDB() {
	// 	$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
	// 	return $conn;
	// }
	
	function runQuery($query) {
		$result = mysqli_query($this->connection,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->connection,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>
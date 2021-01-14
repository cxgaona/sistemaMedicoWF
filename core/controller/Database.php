<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="id15896132_smilemed";$this->pass="uzhy?8!p#]Jp5[@G";$this->host="localhost";$this->ddbb="id15896132_bookmedik";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>

<?php
require_once 'ilogger.php';

class DBLogger implements ILogger{
	public function log($message){
		echo sprintf("log %s to the database\n",$message);
	}
}

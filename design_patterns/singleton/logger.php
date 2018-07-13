<?php
require_once 'singleton.php';
class Logger extends singleton{
	private $fileHandle;

	protected function __construct(){
		$this->fileHandle = fopen('php://stdout','w');
	}
	public function writeLog(string $message){
		$date = date('Y-m-d');

	}
	public static function log(string $message){
		$logger=static::getInstance();
		$logger->writeLog($message);
		echo $message;
	
	}


}

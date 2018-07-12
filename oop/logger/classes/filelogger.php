<?php
require_once 'ilogger.php';

class FileLogger implements ILogger{
	private $handle;
	private $logFile;
	public function __construct($fileName, $mode){
		$this->logFile=$fileName;
		$this->handle=fopen($fileName, $mode) or die("Could not open the log file");
	}
	public function log($message){
		$message=date("F j, Y, g:ia"). ':'.$message."\n";
		fwrite($this->handle,$message);
	}
	public function __destruct(){
		if($this->handle){
			fclose($this->handle);
		}
	}

}

<?php
require_once 'classes/filelogger.php';
require_once 'classes/dblogger.php';

function testFileLogger(){
	$logger=new FileLogger('./log.txt','w');
	$logger->log('start using file logger');
	$logger->log('another log message');

}
testFileLogger();

function testLoggers(){
	$loggers=array(
		new FileLogger('./log.txt','w'),
		new DBLogger()
	);
	foreach($loggers as $logger){
		$logger->log('ASDFGHHJK');
	}
}

testLoggers();

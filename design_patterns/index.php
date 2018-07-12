<?php
require_once 'EventFacade.php';

$eventSampleObject =getSampleData();
$evFac= new EventFacade($eventSampleObject);
$evFac->createNewEvent();

function getSampleData(){
	$obj = new StdClass();
	$obj->id=666;
	$obj->title='Internation PHP asdasd';
	$obj->startDate='21 Sep 2019';
	$obj->endDate='29 Sep 2019';
	$obj->phone ='+591 68924564';
	$obj->venue='XYZ av QWE Mall';
	$obj->city='Nuestr Sra de La Paz';
	$obj->title='MyFTitle!';
	$obj->latitude= 33.009;
	$obj->longitude=770666;
	
	return $obj;
}

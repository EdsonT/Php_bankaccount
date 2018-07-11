<?php
echo "<br/>------ EMPLOYEE:<br/>";
require_once 'classes/employee.php';
require_once 'classes/contractor.php';
$e=new Employee('Jhon','Doe',99999);
echo $e;
echo "<br/>------ CONTRACTOR:<br/>";
$c= new Contractor ('David','Hill',75,1750);
echo $c;




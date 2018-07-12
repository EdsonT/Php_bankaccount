<?php

trait Preprocessor{
	function preprocess(){
		echo 'Preprocess ...done <br/>';
	}
	
}
trait Compiler{
	function compile(){
		echo 'Compile code...done <br/>';
	}
}
trait Assembler{
	function createObjCode(){
		echo 'Create the object code files ... done <br/>';
	}
}
trait Linker{
	function createExec(){
		echo 'Create the executable file..done <br/>';
	}
}

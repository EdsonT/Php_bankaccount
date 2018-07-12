<?php 
require_once 'classes/traitcompilation.php';
require_once 'classes/traitFiles.php';
class IDE{
	use Preprocessor, Compiler, Assembler, Linker;
	function run(){
		$this->preprocess();
		$this->compile();
		$this->createObjCode();
		$this->createExec();
	echo 'Execute the file...done <br/>';
	}
}

$ide=new IDE();
$ide->run();

$file=new FileUtil();
$file->copyfile("/asd/www","/opt/wtf");
$file->write("qweqwer");

<?php 
class FileUtil{
    private $handle;
    private $filename;

    public function __construct($filename, $mode){
        $this->filename=$filename;
        $this->handle = fopen($filename, $mode);
   }
    public function __destruct(){
	if($this->handle){
	 fclose($this->handle);
	}
    }
    public function display(){
	    echo fread($this->handle, filesize($this->filename));
    }


}
$fu= new FileUtil('./test.txt','r');
$fu->display();

?>

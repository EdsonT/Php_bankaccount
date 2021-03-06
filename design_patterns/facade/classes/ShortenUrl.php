<?php 
class ShortenUrl{
	private $id;
	private $title;
	function __construct($_id, $_title){
		$this->id=$_id;
		$this->title=$_title;
	}
	function add(){
		$long_url=$this->_getEventUrl();
		echo "Long Url: ".$long_url."<br/>";
		
		$shorten_url='www.e.co/xcs84'; //dummy url
		echo "Shorten Url inserted Succesfully<br><br>";
	}
	private function _getEventUrl(){
		return 'www.events.com/'.$this->id.'/'.$this->_createSlug($this->title);
	}
	private function _createSlug($text){
		$text = preg_replace('~[^pLd]+~u','-',$text);
		$text = iconv('utf-8','us-ascii//TRANSLIT',$text);
		$text = preg_replace('~[^-w]+~','',$text);
		$text = trim($text,'-');
		$text = preg_replace('~-+~','-',$text);
		$text = strtolower($text);
		if (empty($text)){
			return 'na';
		}
		return $text;
	}


}

<?php
/* 	Emoticon replacment class by Marek Galovič */

class Emotify{

	private $emoticons;
	private $path = "";
	private $replaced;
	
	public function __construct(){
		$emoticons = array(
			":)" => '1.png',
			":-)" => '1.png',
			":]" => '1.png',
			"=)" => '1.png',
			":(" => '2.png',
			":-(" => '2.png',
			":[" => '2.png',
			"=(" => '2.png',
			":P" => '3.png',
			":-P" => '3.png',
			":p" => '3.png',
			":-p" => '3.png',
			"-O" => '4.png',
			":O" => '4.png',
			":D" => '5.png',
			":-D" => '5.png',
			"=D" => '5.png',
			";-)" => '6.png',
			";)" => '6.png',
			":-/" => '7.png',
			":/" => '7.png',
			":'(" => '8.png',
			":-*" => '9.png',
			":*" => '9.png',
			"^_^" => '10.png',
			"^-^" => '10.png',
			"-_-" => '11.png',
			"o.O" => '12.png',
			"O.o" => '12.png',
			":3" => '13.png',
			"O:-)" => '14.png',
			"O:)" => '14.png',
			"<3" => '15.png',
		);
		$this->emoticons = $emoticons;	
	}
	
	public function setPath($path = ""){
		$this->path = $path;	
		return $this;
	}
	
	public function replace($text = ""){
		foreach($this->emoticons as $icon=>$file){
			$image = '<img src="'.$this->path.DIRECTORY_SEPARATOR.$file.'" alt="'.$icon.'">';
			$repIcon = " ".$icon."";
			$text = str_replace($repIcon, $image, $text);
		}
		$this->replaced = $text;
		return $this;
	}
	
	public function get(){
		return $this->replaced;
	}
}

?>
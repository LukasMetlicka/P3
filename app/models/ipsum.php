<?php

/*
Goals

 1. create an array from a text doc using file()

 2. create a class that will hold my logic

3. create methods that create a random word, sentence, paragraph, and group of paragraphs
*/
class ipsum {
	//PROPERTIES
	public $path;
	public $wordlist;
	public $sentence;
	public $numberOfParagraphs;
	
	//CONSTRUCTORS
	public function __construct( $path ) {
		$this->set_path($path);
	}
	
	
	//GETTERS
	public function get_path(){
		return $this->path;
	}
	public function get_array() {
		global $wordlist;
		return $this->wordlist; 
	}
	public function get_word($num) {
		return $wordlist[$num];
	}
	
	public function get_random_sentence() {
		global $wordlist;
		global $rand_keys;
		print_r($rand_keys);
	}
	public function get_random_num() {
		return $this->random;
	}
	public function get_numberOfParagraphs(){
		return $this->numberOfParagraphs;
	} 
	public function get_paragraphs() {
		global $text;
		$numberOfParagraphs = array("","","","","");
		foreach ($numberOfParagraphs as $whatever) {
			global $text;
			$text .= $this->generate_random_sentence()."<br></br>";
		}
		return $text;
	}
	
	//SETTERS
	
	public function set_path($new_path) {
		$this->path = $new_path;
	}
	public function set_numberOfParagraphs() {
		$numberOfParagraphs = array_fill(0, 4, 'poop');
	}
	
	
	//GENERATORS
	public function init_array() {
		global $wordlist;
		$wordlist = file($this->path);
		$this->wordlist = $wordlist;
	}	
	
	public function generate_random_sentence() {
		global $rand_keys;
		global $endmark;
		$endmark = array('.',"?","!","","","","");
		$mylist = $this->get_array();
		$rand_keys = array_rand($mylist, 80);
		$rand = array_slice($rand_keys, -80);
		
		foreach ($rand as $number) {
			global $wordlist;
			global $sentence;
			global $endmark;
			$word = $this->wordlist[$number];
			$sentence .= $word." ";
			$sentence .= $endmark[rand(0,6)];
		}
		return $sentence;
	}
	
	
}
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
	public function __construct( $path, $wordsPerParagraph, $numberOfParagraphs ) {
		$this->set_path($path);
		$this->specify_wordsPerParagraph($wordsPerParagraph);
		$this->set_numberOfParagraphs($numberOfParagraphs);
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
		$numberOfParagraphs = 4; //4 will end up being a variable inputted by the user
		$i = 0;
		while ( $i < $numberOfParagraphs ){
			$text .= $this->get_randomParagraph();
			$text .= "<br></br>";
			$i++;	
		}
		return $text;
	}
	public function get_wordsPerParagraph() {
		return $this->wordsPerParagraph;
	}
	public function get_randomParagraph() {
		return $this->generate_random_paragraph();
	}
	
	//SETTERS
	
	public function set_path($new_path) {
		$this->path = $new_path;
	}
	public function specify_wordsPerParagraph($ammount) {
		$this->wordsPerParagraph = $ammount;
	}
	public function set_numberOfParagraphs($new_number) {
		$this->numberOfParagraphs =$new_number;
	}
	
	//GENERATORS
	public function init_array() {
		global $wordlist;
		$wordlist = file($this->path);
		$this->wordlist = $wordlist;
	}	
	
	public function generate_random_paragraph() {
		$wordsPerParagraph = $this->get_wordsPerParagraph();
		global $rand_keys;
		global $endmark;
		$endmark = array('.  ',"?  ","!  ","","","","");
		$mylist = $this->get_array();
		$rand_keys = array_rand($mylist, $wordsPerParagraph);
		$rand = array_slice($rand_keys, -$wordsPerParagraph);
		$sentence = "";
		foreach ($rand as $number) {
			global $wordlist;
			global $endmark;
			$word = $this->wordlist[$number];
			$sentence .= $word." ";
			$sentence .= $endmark[rand(0,6)];
		}
		return $sentence;
	}
	
	
}
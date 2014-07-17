<?php
class password {

	//SETTERS
	public function loadWordList() {
		global $wordList;
		$wordList = file('files/wordlist.txt');
	}
	
	
	//GETTERS
	public function get_wordList() {
		global $wordList;
		return $wordList;
	}
	//EXPORTER
	public function export_password() {
		$this->generate_randomPassword();
		global $password;
		return $password;
	}
	
	
	//LOGIC
	public function generate_randomPassword() {
		global $password;
		$this->loadWordList();
		$wordList = $this->get_wordList();
		$randomNumberArray = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
		$randomNumberIndex = array_rand($randomNumberArray, 1 );
		$randomNumber = $randomNumberArray[$randomNumberIndex];
		
		
		$randomWord = array_rand($wordList);
		$randomPassWord = $wordList[$randomWord];
		$password = $randomPassWord.$randomNumber;
		
	}
}
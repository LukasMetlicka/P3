<?php
class randomUser extends password {

	public $firstName;
	
	
	
	
	//GETTERS
	public function get_firstNameArray() {
		return $this->firstNameArray;
	}
	public function get_lastNameArray() {
		return $lastnameArray;
	}
	public function get_gender() {
		global $number;
		$gendercheck = $number;
		if ($gendercheck == 0) {
			return "Male";
		}
		if ($gendercheck == 1) {
			return "Female";
		}
	}
	public function get_firstName() {
		global $firstName;
		return $firstName;
	}
	public function get_lastName() {
		global $lastName;
		return $lastName;
	}
	public function get_userName() {
		global $userName;
		return $userName;
	}
	
	
	//SETTERS
	public function loadGenderMaleArray() {
		global $firstNameArray;
		$firstNameArray = file('files/malename.txt');
		return $firstNameArray;
	}
	public function loadGenderFemaleArray() {
		global $firstNameArray;
		$firstNameArray = file('files/femalename.txt');
		return $firstNameArray;
	}
	
	public function loadLastNameArray() {
		global $lastNameArray;
		$lastNameArray = file('files/surnames.txt');
	}
	public function loadPasswordArray() {
		$passwordArray = file('files/wordlist.txt');
	}
	
	//LOGIC
	public function decideGender() {
		global $number;
		$number = rand(0,1);
		$firstNameArrayMale = $this->loadGenderMaleArray();
		$firstNameArrayFemale = $this->loadGenderFemaleArray();
		
		if ($number == 0 ) {
			global $firstNameArray;
			$this->firstNameArray = $firstNameArrayMale;
		}
		elseif ($number == 1 ) {
			global $firstNameArray;
			$this->firstNameArray = $firstNameArrayFemale;
		}
		
	}
	public function randomize_FirstName() {
		$this->decideGender();
		global $firstNameArray;
		global $firstName;
		
		$firstNameRandom = array_rand($firstNameArray, 1 );
		$firstNameCaps = $firstNameArray[$firstNameRandom];
		$firstNameLower = strtolower($firstNameCaps);
		$firstName = ucfirst($firstNameLower);
	}
	public function randomize_lastName() {
		$this->loadLastNameArray();
		global $lastNameArray;
		global $lastName;
		
		$lastNameRandom = array_rand($lastNameArray, 1 );
		$lastNameLower = $lastNameArray[$lastNameRandom];
		$lastName = ucfirst($lastNameLower);
	}
	public function generate_userName() {
		$firstName = $this->get_firstName();
		$lastName = $this->get_lastName();
		global $userName;
		$number = rand(0,1);
		
		if ( $number == 0 ) {
			global $firstName;
			global $lastName;
			global $userName;
			$partOfFirstName = substr( $firstName, 0, 1 );
			$userName = $partOfFirstName.$lastName;
		}
		elseif ( $number == 1 ) {
			global $firstName;
			global $lastName;
			global $userName;
			$partOfLastName = substr( $lastName , 0, 1 );
			$userName = $firstName.$partOfLastName;
		}
	}
	//IMPORTER
	public function import_password() {
		$password = $this->export_password();
		return $password;
	}
	
	
	//EXPORTER
	public function export_firstName() {
		$this->randomize_FirstName();
		$firstName = $this->get_firstName();
		return $firstName;
	}
	public function export_lastName() {
		$this->randomize_lastName();
		$lastName = $this->get_lastName();
		return $lastName;
	}
	public function export_userName() {
		$this->generate_userName();
		$userName = $this->get_userName();
		return $userName;
	}
	public function export_password() {
		$password = $this->import_password();
		return $password;
	}
	
}
<?php

class Person {
	private $name;
	private $age;
	const UNIVERSITY = "Mawlana Bhashani Science & Technology University";
	
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
	
	public function printPersonDetails() {
		echo "Name: {$this->name}<br>Age: {$this->age}<br>";
		echo "University: ".Person::UNIVERSITY;
	}
	
	public function __destruct() {
		unset($this->name);
		unset($this->age);
	}
}

	$person = new Person("Kazi Nur Alam Mashry", 22);
	$person->printPersonDetails();
?>
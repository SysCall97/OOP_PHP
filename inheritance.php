<?php

class Person {
	protected $name;
	protected $age;
	
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
	
	public function printPersonDetails() {
		echo "Name: {$this->name}<br>Age: {$this->age}<br>";
	}
	
}

final class Admin extends Person { //final keyword is used to stop extending a class(if we use it before a class) or to override a function(if we use it before function)
	public $level;
	public function printPersonDetails () {
		echo "Name: {$this->name}<br>Age: {$this->age}<br>level: {$this->level}<br>";
	}
}

	$admin = new Admin("Sohel", 30);
	$admin->level = "Administrator";
	$admin->printPersonDetails();

?>
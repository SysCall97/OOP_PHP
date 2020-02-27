<?php

class Person {
	private $name;
	private $age;
	public static $id = "CE-17036";
	
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
	
	public static function printID() {
		echo self::$id;
	}
	
	public function printPersonDetails() {
		echo "Name: {$this->name}<br>Age: {$this->age}<br>";
	}
	
	public function __destruct() {
		unset($this->name);
		unset($this->age);
	}
}

	Person::printID();
?>
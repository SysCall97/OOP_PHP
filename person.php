<?php

class Person {
	public $name = "Kazi Nur Alam Mashry";
	private $age;
	
	public function get_name() {
		return $this->name;
	}
	public function print_age() {
		echo $this->age;
	}
	public function set_age($age) {
		$this->age = $age;
	}
}

	$person = new Person;
	echo $person->get_name()."<br>";
	$person->set_age(22);
	$person->print_age();
?>
<?php

class Dog{
	public $numLegs=4;
	public $name;

	public function __construct($name)
	{
		$this->name=$name;
	}

	public function greet()
	{
		echo "Hello, My name is ".$this->name. ", and I have ".$this->numLegs." legs.";
	}
}

$dog=new Dog("Happy");
$dog->greet();
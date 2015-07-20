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
		echo "Hello, My name is ".$this->name. ", and I have ".$this->numLegs." legs.<br />";
	}

	public function bark()
	{
		echo "Woof!";
	}
}

$dog1=new Dog("Happy");
$dog1->greet();
$dog2=new Dog("Lucky");
$dog2->greet();


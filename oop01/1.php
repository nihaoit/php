<?php

class Person{
	public $name;
	public $age;

	/*public funcition __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}*/
	public function __construct($name , $age)
	{
		$this->name=$name;
		$this->age=$age;
	}

	public function sayHello()
	{
		echo "Hello,my name is ".$this->name." and I am ".$this->age." years old";
	}
}

$p=new Person("luokai",25);
$p->sayHello();
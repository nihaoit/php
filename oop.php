<?php

class Person
{
	public $name;
	public $age;

	public function __constuct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
	}

	public function sayHello()
	{
		echo 'I am '.$this->name.' hello,welcome to nihaoit.com';
	}
}

$p=new Person('andy',28);
$p->sayHello();
<?php

class Workers extends User implements Iinterface
{
	private $salary;
	private $text;

	public function __construct($name, $age, $salary)
	{
		parent::__construct($name, $age);
		$this->salary = $salary;
	}

	public function getSalary(): int
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	// parent abstract class User
	public function getText($text)
	{
		return $this->text = $text;

	}

	// parent interface
	public function test()
	{
		return self::TEST2;
	}
}

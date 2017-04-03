<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		public $salary = 0;

		function __construct($name, $college, $company, $hourly)
		{
			parent::__construct($name, $college, $company, $hourly);
		}

		public function calculateSalary()
		{
			$this->salary = $this->getHourly() * 2080;
			return $this->salary;
		}

		public function __toString()
		{
			$temp = "Hello " . $this->getName() . " you current salary this year is " . $this->calculateSalary() . ".";
			return $temp;
		}
	}

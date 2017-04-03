<?php
	// This is the file for the parent class

	class ParentClass {
		public $name = "";
		public $college = "";
		public $company = "";
		public $hourly = 0;

		public function __construct($name, $college, $company, $hourly)
		{
			$this->name = $name;
			$this->college = $college;
			$this->company = $company;
			$this->hourly = $hourly;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function setCollege($college)
		{
			$this->college = $college;
		}

		public function setCompany($company)
		{
			$this->company = $company;
		}

		public function setHourly($hourly)
		{
			$this->hourly = $hourly;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getCollege()
		{
			return $this->college;
		}

		public function getCompany()
		{
			return $this->company;
		}

		public function getHourly()
		{
			return $this->hourly;
		}

		public function __toString()
		{
			$tempName = "Name: " . $this->name;
			$tempCollege = "College: " . $this->college;
			$tempCompany = "Company: " . $this->company;
			$tempHourly = "Hourly: " . $this->hourly;

			return $tempName . "<br>" . $tempCollege . "<br>" . $tempCompany . "<br>" . $tempHourly . "<br>";
		}
	}

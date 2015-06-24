<?php
	/*
		Basic Bird Class
		Every Bird has
			- a possibility fly
	*/	
	Class Bird extends Animal{
		private $canFly = true;

		public function __construct($objName, $objSound, $objType, $objCanFly)
  		{
  			parent::__construct($objName, $objSound, $objType);
  			$this->canFly = $objCanFly;
  		}

  		public function getCanFly(){
  			return $this->canFly;
  		}
	}

?>
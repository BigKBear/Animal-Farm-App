<?php 
	/*
		Duck Class
		Every Duck has:
			- the ability to quack
	*/
	Class Duck extends Bird 
	{
		private $canQuack = true;

		public function __construct($objName, $objSound, $objType, $objCanFly)
  		{
  			parent::__construct($objName, $objSound, $objType, $objCanFly);
  		}

  		public function getCanQuack(){
  			return $this->canQuack;
  		}
	}

?>
<?php 
	/*
		Mammal Class
		Every Mammal has: 
			- hair
	*/
	Class Mammal extends Animal 
	{
		private $hairLength = 0.0;

		public function __construct($objName, $objSound, $objType, $objHairLength)
  		{
  			parent::__construct($objName, $objSound, $objType);
  			$this->hairLength = $objHairLength;
  		}

  		public function getHairLength(){
  			return $this->hairLength;
  		}

  		public function setHairLength($objHairLength){
  			$this->hairLength = $objHairLength;
  		}
	}
?>
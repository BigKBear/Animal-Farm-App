<?php
	/*
		Basic Animal class
		Every animal has 
			- a name
			- a sound
	*/ 
	Class Animal
	{
		private $name = '';
		private $sound = '';
		private $type = '';

		public function __construct($objName, $objSound, $objType)
  		{
  			$this->name = $objName;
  			$this->sound = $objSound;
  			$this->type = $objType;
  		}

  		public function getName(){
  			return $this->name;
  		}

  		public function getSound(){
  			return $this->sound;
  		}

  		public function getType(){
  			return $this->type;
  		}
	}

?>
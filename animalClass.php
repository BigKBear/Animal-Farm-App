BigK



Drive
.
Folder Path
My Drive
Animal farm
classes
NEW 
Folders and views
My Drive
Shared with me
Google Photos
Recent
Starred
Trash
.

PHP
Animal.php

PHP
Bird.php

PHP
Cat.php

PHP
Dog.php

PHP
Duck.php

PHP
Mammal.php
5 GB used (31%)
Buy more storage
All selections cleared 
Animal.php
Open with
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
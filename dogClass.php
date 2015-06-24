<?php
//this class contains a multidemetional array that stores dogs (names,type,sound,length of hair)
	class DogStructure{
			//extra value for all dogs that stores hair length
		public $dogHairLength;
		
		public $dogs=array(
		array("DogA","Poodle","softbark",3),
		array("DogB","Rottweiler","mediumbark",9),
		array("DogC","SiberianHusky","heavybark",4)
		);
	}

?>
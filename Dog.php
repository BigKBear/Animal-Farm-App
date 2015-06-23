<?php
//this class contains a multidemetional array that stores dogs (names,type,sound,length of hair)
	class DogStructure{
		public $dogs=array(
		array("DogA","Poodle","softbark",3),
		array("DogB","Rottweiler","mediumbark",9),
		array("DogC","SiberianHusky","heavybark",4)
		);
	}

	function GetLengthOfAllHair()
{
	
	$lengthOfAllHair = $dogs[0][3]+$dogs[1][3]+$dogs[2][3];
	return $lengthOfAllHair;
}

?>
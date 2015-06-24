<!-- This is the home interface my index file this is where the magic of BigKBear animal farm occurs -->
<?php 
  include 'classes/Animal.php';

  	include 'classes/Mammal.php';
  		include 'classes/Dog.php';	//name, sound, type, hair length
  		include 'classes/Cat.php';	//name, sound, type, hair length

  	include 'classes/Bird.php';
  		include 'classes/Duck.php';	//name, sound, type, can fly?

  	function boolToString($bool) {
  		return ($bool) ? 'True' : 'False';
  	}

  	/* start here */

  	$dogs[] = new Dog('Dog1', 'Woof1', 'Poodle', 3.8);
  	$dogs[] = new Dog('Dog2', 'Woof2', 'Rottweiler', 1.8);
  	$dogs[] = new Dog('Dog3', 'Woof3', 'Siberian Husky', 5);
  	$dogs[] = new Dog('Dog4', 'Woof4', 'Poodle', 1.24);

  	foreach ($dogs as $dog)
  	{
  		echo 'The dog is called '.$dog->getName().'. It sounds like "'.$dog->getSound().'". It is of type '.$dog->getType().'. 
  			With a hair length of '.$dog->getHairLength().'<br />'; 
  	}

  	echo '<br />';

  	$cats[] = new Cat('Cat1', 'Meow1', 'Siamese', 2.3);
  	$cats[] = new Cat('Cat2', 'Meow2', 'Persian', 1.3);
  	$cats[] = new Cat('Cat3', 'Meow3', 'Siamese', 9);
  	$cats[] = new Cat('Cat4', 'Meow4', 'Persian', 1.12);

  	foreach ($cats as $cat)
  	{
  		echo 'The cat is called '.$cat->getName().'. It sounds like "'.$cat->getSound().'". It is of type '.$cat->getType().'. 
  			With a hair length of '.$cat->getHairLength().'<br />'; 
  	}

  	echo '<br />';

  	$ducks[] = new Duck('Duck1','Quack1','Duck', true);
  	$ducks[] = new Duck('Duck2','Quack2','Duck', true);

  	foreach ($ducks as $duck)
  	{
  		echo 'This duck is called '.$duck->getName().'. It sounds like "'.$duck->getSound().'". It is of type '.$duck->getType().'. 
  			Can it quack? '.boolToString( $duck->getCanQuack() ).'. Can it fly? '.boolToString( $duck->getCanFly() ).'<br />';
  	}

  	echo '<br />';

  	//instantiate Poodle 
  	$poodle = new Dog('Rick', 'Yip Yip', 'Poodle', 2.18);

  	//getting the poodle's hair length
  	echo $poodle->getName().'\'s hair length is '.$poodle->getHairLength();


?>
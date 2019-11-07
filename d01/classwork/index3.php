<?php
	$txt = "Welcome to PHP"; //global variable working not inside a function
	$y =1;
	$x = 2;
	$sum =0;
	function myTest(){
		$s = 10;
		echo $s."</br>";  //local variable working not outside function
		global $y; //to acess global varaible inside a function we should specify global keyword with it
		global $x;
		global $sum;
		echo $x+$y."</br>";//first way to add global variables
		$GLOBALS['sum'] = $GLOBALS['x'] + $GLOBALS['y'];//second way to use indexof method.
		echo $sum."</br>";
	}
	myTest();
	echo $txt;
	echo "<br>";
	function myTest1(){
		static $a = 5;
		echo $a;
		$a++;
		
	}
	myTest1();
	echo "<br>";
	myTest1();
	echo "<br>";
	<?= "$x+$y"?>


	
	
?>
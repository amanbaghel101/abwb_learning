<?php
	$a = "hii india";
	$n = 8;
	echo '$a'; //print $a
	echo "$a"; //print value of var. a
	echo $n*10000;
	echo "$n"*50;   //both are correct
	echo "80 <br>";

	//Concatenation operators
	echo "output=$a <br>";
	echo 'output=' . $a . "  " . $n . "<br>";

	//button
	echo '<a href="https://www.google.com">Google</a>' ;
	echo ' <br> it\'s nice day <br>';  //it's nice day


	//arithmetic  operator
	$num1 = 10;
	$num2 = 10;
	echo 'add = ' . $num1 + $num2 . "<br>";
	echo 'sub = ' . $num1 - $num2 . "<br>";
	echo 'mul = ' . $num1 * $num2 . "<br>";
	echo 'div = ' . $num1 / $num2 . "<br>";


	//comparison operators
	// ==, ===, !=, <>, !==, >, <, <=, >=

	//logical operators
	// and, or, xor, &&, ||, !

	//Array
	$array = array('aman','baghel','ji');
	//add extra array value
	$array[5] = 'hello';
	echo $array[5];
	//to print full array
	print_r($array);

	//Associative array
	$array2=array('aman'=>67,'anuj'=>30);
	echo $array2['aman'];
	echo 'weight of aman is ' .$array2['aman'].'<br>';
	echo 'weight of anuj is ' .$array2['anuj'].'<br>';

	//Multidimensional array
	$array3=array(array('Mark',30,60),
				  array('jhon',20,40),
				  array('tom',10,20));
	echo $array3[0][0];


	//conditional statement
	if ($num1 > $num2) {
		echo 'The number '. $num1 .' greater'; 
	}
	else if ($num1 < $num2) {
		echo "the number $num2 greater";
	}
	else{
		echo "the number first $num1 and second $num2 both are equal <br>";
	}



	//switch statement
	$switch = 13;
	switch($switch)
	{
		case 1:
		echo "number is one";
		break;
		case 2:
		echo "number is two";
		break;
		case 3:
		echo "number is three";
		break;

		default:
		echo "number not found";
		break;

	}
?>
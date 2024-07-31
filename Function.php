

<?php
//A function is a block of code designed to perform a particular task
//Function are used to
//1.increase the readability of program
//2.to perform a task in repetitive manner

											//Declararion of function
function hello_world()
{
	echo "hiii<br>";
	echo "aman<br>";
}
//calling the function
hello_world();
hello_world();


											//function with argument
function add($num1, $num2)
{
	echo $num1+$num2 .'<br>';
}
add(1,2);
add(99,1);


											//return result
function mul($n1, $n2)
{
	$result = $n1 + $n2;
	return $result;
}
$add1 = mul(100,1);
$add2 = mul(200,1);
echo $add1 * $add2 . '<br>';

										//date_time function
$date=date('d-m-y');
echo $date . '<br>';

$datee=date('D');
echo $datee . '<br>';

$time=date('H-i-s');
echo $time . '<br>';


								//Global variable and function
//local variable
$name="Mark";
echo $name . '<br>';
function showName()
{
	global $name;
	echo "The name of student is : ".$name . '<br>';
}
showName();

								//include and require function
//require/include 'loop.php';


//view.php (calling the session)
//make sure give session_start() and $_SESSION
session_start();
$name=$_SESSION['Name'];
$age=$_SESSION['Age'];

echo $name.'<br>'.$age;

//destroy the session
unset($_SESSION['Name']);
//if i once run destroy the session program the its not come after that if we session start main program its agian set

//if you want destroy all session at a time : session_destroy();


//calling cookie.php
$student=$_COOKIE['student'];
echo $student
?>
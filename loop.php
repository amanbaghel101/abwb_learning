<?php
$counter=1;

//while loop
while($counter<=10)
{
	echo "Programming_Knowledge";
	echo "$counter <br>";
	$counter++;
}

//do while loop
do
{
	echo 'do loop <br>';
	$counter++;
}
while($counter<=15);

//for loop
/*
for ( init; condition; increment)
{
	statement(s);
}
*/

for($counter1=1; $counter1<=10; $counter1++)
{
	echo 'for loop'.$counter1.'done<br>';
}


//for each loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

//switch statement
?>
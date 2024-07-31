<?php
session_start();

$_SESSION['Name']='Aman';
$_SESSION['Age']=22;

echo "Done";

//once we set the session we can use these session throughout the project
//we call it these session in function.php

?>
<?php
$time=time();
echo $time;
//setcookie(name, value, expire, path, domain);

setcookie('student', 'AMAN', $time+15); //$time+5 , $time = current time, +5 extra 5 sec after that expire.  
//this cookie call in function.php

?>
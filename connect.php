 
<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = 'root';

// Connect to MySQL
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
} else {
    // Select database
    $db_selected = mysqli_select_db($conn, 'banking');

    if ($db_selected) {
        echo "Connection success<br>";
    } else {
        die('Failed to select database');
    }
}
//after completing the connection if want seprate use of connection file in anyy file 
//then use 'require 'connect.php'
// Query execution
$query = "SELECT * FROM user";

if ($result = mysqli_query($conn, $query)) {
    echo "Query executed<br>";
    while ($query_executed = mysqli_fetch_assoc($result)) {
        echo $query_executed['name'] . '<br>';
    }
    mysqli_free_result($result); // Free result set
} else {
    echo "Failed";
}

// Close connection
mysqli_close($conn);

?>

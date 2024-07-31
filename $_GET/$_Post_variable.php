<!--<php
if ( ($_POST["username"]==="Aman") && ($_POST["passwad"]===1234) ) {
	echo "Signup Successfully";
}
else
{
	echo "Failed! try again";
}
?>-->


<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["passwad"])) {
        // Assigning posted values to variables and correcting the password data type issue
        $username = $_POST["username"];
        $password = $_POST["passwad"]; // Consider this should be a string for comparison

        // Correcting the password comparison to string and checking credentials
        if ($username === "Aman" && $password === "1234") {
            echo "Signup Successfully";
        } else {
            echo "Failed! Try again";
        }
    } else {
        echo "Username and Password are required!";
    }
} else {
    // Form not submitted
    echo "Please submit the form.";
}
?>
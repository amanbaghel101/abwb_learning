<!-- <php
$upload_directory = __DIR__ . "/"; // Use the current directory as the upload directory
$target_file = $upload_directory . basename($_FILES['fileToUpload']['name']);

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
    echo "File uploaded successfully!";
} else {
    echo "Sorry, file not uploaded, please try again!";
}
?> -->
<?php
$upload_directory = __DIR__ . "/"; // Use the current directory as the upload directory

// Check if a file was uploaded
if(isset($_FILES['fileToUpload'])) {
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_type = $_FILES['fileToUpload']['type'];

    // Move the uploaded file to the target directory
    $target_file = $upload_directory . basename($file_name);
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "File uploaded successfully!<br>";
        echo "File Name: " . basename($file_name) . "<br>";
        echo "File Size: " . $file_size . " bytes<br>";
        echo "File Type: " . $file_type . "<br>";
    } else {
        echo "Sorry, file not uploaded, please try again!";
    }
} else {
    echo "Error: No file uploaded.";
}
?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Assuming empty password for localhost
$dbname = "photo_gallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// File upload handling
if(isset($_POST['submit'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "INSERT INTO photos (photo_data) VALUES ('$image')";
    if ($conn->query($sql) === TRUE) {
        echo "Photo uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

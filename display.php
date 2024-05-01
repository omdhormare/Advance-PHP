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

// Fetching image data from the database
$sql = "SELECT photo_data FROM photos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Display the image
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo_data']).'" />';
    }
} else {
    echo "0 results";
}
$conn->close();
?>

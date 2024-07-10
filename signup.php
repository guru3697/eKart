<?php
// Connect to your MySQL database - Replace placeholders with actual credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ekart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $countryCode = $_POST['countryCode'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    // Insert data into the database (example query)
    $sql = "INSERT INTO users (username, email, countryCode, phoneNumber, password)
            VALUES ('$username', '$email', '$countryCode', '$phoneNumber', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

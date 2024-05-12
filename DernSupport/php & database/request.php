<?php
// Include your database configuration file
include('./config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $username = $_POST['username'];
    $problem = $_POST['problem'];
    $email = $_POST['email'];
    $requestType = $_POST['requestType'];
    $deliveryDate = $_POST['deliveryDate'];
    
    // Prepare and execute the SQL query to insert form data into the database
    $sql = "INSERT INTO requests (username, problem, deliveryDate,requestType,email) VALUES ('$username', '$problem', '$deliveryDate','$requestType','$email')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/DernSupport/clients.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<?php
include('./config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $password = $_POST['password']; 
    
    $sql = "INSERT INTO users (username, email, password ,type) VALUES ('$username', '$email', '$password','$type')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to the client page after successful insertion
        header("Location: http://localhost/DernSupport/clients.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
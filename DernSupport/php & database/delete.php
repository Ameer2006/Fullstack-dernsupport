<?php
// Close database connection
include('./config.php');

// Check if the delete button is clicked
if(isset($_POST['delete_row'])) {
    // Get the id of the row to be deleted
    $id = $_POST['id'];

    // Prepare and execute the SQL query to delete the row from the database
    $sql = "DELETE FROM requests WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page after deletion
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection

mysqli_close($conn);
?>
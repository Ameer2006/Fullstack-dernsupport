<?php
include('./config.php');

$query_stockroom = "SELECT * FROM stockroom";
$result_stockroom = mysqli_query($conn, $query_stockroom);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stockroom</title>
    <!-- Add your CSS and JavaScript links here -->
</head>

<body>


</body>

</html>

<?php
// Close database connection
mysqli_close($conn);
?>
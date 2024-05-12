<?php
include('./php & database/config.php');

$query_clients = "SELECT * FROM users";
$result_clients = mysqli_query($conn, $query_clients);

$sql = "SELECT * FROM requests";
$result = $conn->query($sql);

$query_stockroom = "SELECT * FROM stockroom";
$result_stockroom = mysqli_query($conn, $query_stockroom);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dern Support business site</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container-fluid px-4 px-lg-5">
            <img class="navbar-brand col-4" id="logo" src="assets\Logo.png" href="#page-top" />
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse col-4" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#clients">clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Requisites">Requisites</a></li>
                    <li class="nav-item"><a class="nav-link" href="#stockroom">Stockroom</a></li>
                </ul>
            </div>
            <ul class="navbar-nav col-4 d-flex justify-content-end">

                <li class="nav-item">
                    <a class="text-sm nav-link" href="clients.php">
                        <i class="fas fa-user"></i> <!-- Corrected the Font Awesome icon class -->
                        user account
                    </a>
                </li>
            </ul>


        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Dern Support</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">It's your home
                    </h2>
                    <div class=" btn-group">
                        <a class="btn btn-primary" href="#clients">clients</a>
                        <a class="btn btn-primary" href="#Requisites">Requisites</a>
                        <a class="btn btn-primary" href="#stockroom">Stockroom</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- clients-->
    <div class="clients-section text-center" id="clients">
        <h2 class="text-light mb-5">Clients List</h2>
        <div class="d-flex justify-content-center">
            <table class="table table-light table-hover w-75 table-striped ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            if ($result_clients->num_rows > 0) {

            while ($row_clients = mysqli_fetch_assoc($result_clients)) {
                echo "<tr>";
                echo "<th scope=\"row\">" . $row_clients['id'] . "</th>";
                echo "<td>" . $row_clients['username'] . "</td>";
                echo "<td>" . $row_clients['type'] . "</td>";
                echo "<td>" . $row_clients['email'] . "</td>";
                echo "<td>" . $row_clients['password'] . "</td>";
                echo "</tr>";
            }
        }else{
            echo "<tr><td colspan='5'>No Users yet</td></tr>";

        }
            ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Requests-->
    <div class="Requisites-section text-center " id="Requisites">
        <h2 class="text-light mb-5">Requisites</h2>
        <div class=" d-flex justify-content-center ">
            <table class="table table-light table-hover table-striped w-75 ">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">User name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Request Type</th>
                        <th scope="col">Requisites</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $email = $row["email"];
                        $problem = $row["problem"];
                        $requestType = $row["requestType"];

                        // Output the data in the table format
                        echo '<tr data-toggle="collapse" data-target="#complaint'.$id.'" aria-expanded="false" aria-controls="complaint'.$id.'">
                                <th scope="row">' . $id . '</th>
                                <td>' . $username . '</td>
                                <td>' . $email . '</td>
                                <td>' . $requestType . '</td>
                                <td>
                                    <a type="button" class="btn-link link-primary" data-toggle="collapse" data-target="#complaint'.$id.'" aria-expanded="false" aria-controls="complaint'.$id.'">
                                        View Complaint
                                    </a>
                                </td>
                                <td>
                                    <form method="post">
                                        <input type="hidden" name="delete_id" value="'.$id.'">
                                        <button type="submit" name="delete" class="btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr id="complaint'.$id.'" class="collapse">
                                <td colspan="5">
                                    <div>' . $problem . '</div>
                                </td>
                            </tr>';
                    }
                } else {
                    echo "<tr><td colspan='6'>No requests naw</td></tr>";
                }
                if(isset($_POST['delete'])) {
                    $delete_id = $_POST['delete_id'];
                
                    // Perform delete operation in the database
                    $sql_delete = "DELETE FROM requests WHERE id = '$delete_id'";
                    if ($conn->query($sql_delete) === TRUE) {
                        echo "<script>alert('Request deleted successfully');</script>";
                        echo "<script>window.location.href='business.php';</script>";
                
                    } else {
                        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
                    }
                }
                
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Stockroom-->
    <div class="stockroom-section text-center mt-5" id="stockroom">
        <h2 class="text-light mb-5">Stockroom</h2>
        <div class="d-flex justify-content-center">
            <table class="table table-light table-hover table-striped clients-table w-75">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Item name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Item ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            while ($row_stockroom = mysqli_fetch_assoc($result_stockroom)) {
                echo "<tr>";
                echo "<th scope=\"row\">" . $row_stockroom['id'] . "</th>";
                echo "<td>" . $row_stockroom['item'] . "</td>";
                echo "<td>" . $row_stockroom['amount'] . "</td>";
                echo "<td>" . $row_stockroom['itemId'] . "</td>";
                echo "</tr>";
            }
            ?>
                </tbody>
            </table>
        </div>
    </div>





    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Dern Support 2024</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>


</html>
<?php
// Close database connection
mysqli_close($conn);
?>
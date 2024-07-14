<?php
// database connection details
include 'config.php';

// create connection
$connection = new mysqli($servername, $username, $password, $database);

// check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// check if the id parameter is set via GET method
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // delete the client record from the database
    $sql = "DELETE FROM clients WHERE id = $id";
    if ($connection->query($sql) === TRUE) {
        // record deleted successfully, redirect to index page
        header("location: ./client.php");
        exit;
    } else {
        // display error message
        echo "Error deleting record: " . $connection->error;
    }
} else {
    // id parameter not set, redirect to index page
    header("location: ./client.php");
    exit;
}

// close database connection
$connection->close();
?>

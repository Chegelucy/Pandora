<?php
include 'config.php';

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare and execute the DELETE statement
    $stmt = $connection->prepare("DELETE FROM stock WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    // Check if the item was deleted successfully
    if ($stmt->affected_rows > 0) {
        $successMessage = "Item deleted successfully!";
    } else {
        $errorMessage = "Unable to delete item.";
    }
    
    // Close statement
    $stmt->close();
}

// Close connection
$connection->close();

// Redirect back to the index page
header("Location: ./stock.php");

?>

<?php
include 'config.php';

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Handle file upload
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $temp_file = $_FILES['image']['tmp_name'];
        $target_dir = '../images/productImages/';
        $target_file = $target_dir . basename($_FILES['image']['name']);

        if (move_uploaded_file($temp_file, $target_file)) {
            // File was uploaded successfully
            // Insert data into database
            $image = $connection->real_escape_string($target_file);
            $price = $connection->real_escape_string($_POST['price']);
            $name = $connection->real_escape_string($_POST['name']);

            $sql = "INSERT INTO stock (image, price, name) VALUES ('$image', '$price', '$name')";

            if ($connection->query($sql) === TRUE) {
               // Redirect to index page with success message
                header("Location: ./stock.php?success=New item created successfully");
                exit();
            } else {
                // Error inserting data
                error_reporting();
                header('Location: ../sellpage.php?error=notuploaded');
            }
        } else {
            error_reporting();
        }
    } else {
        error_reporting();
    }
    
}

// Close connection
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Create New Item</h2>
        <?php if (!empty($errorMessage)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> <?php echo $errorMessage; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="./stock.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>

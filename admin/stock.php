<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">



</head>
<body>
  <div class="container my-s">
    <h2>Items in stock</h2>
    <a class="btn btn-primary" href="./stock_create.php" role="button">Add Item</a>
    <a class="btn btn-primary" href="./index.php" role="button">Home</a>
<br>
<table class="table">
    <thead>
        <tr>
           
        <th>ID</th>
        <th>Name</th>
        <th>price</th>
        <th>Image</th>
            <th>Action</th>
</tr>
</thead>
<tbody>
    <?php
    include 'config.php';

    //create connection
    $connection =new mysqli($servername, $username, $password, $database);

    // check connection
    if ($connection->connect_error){
        die("connection failed: .$connection->connect_error");
    }
    // read all row from database table
    $sql ="SELECT * FROM stock";
    $result =$connection->query($sql);
    if (!$result){
        die("invalid query: " .$connection->error);
    }
    //read data of each row
    while($row =$result->fetch_assoc()) {

        echo "
    <tr>
    <td>$row[id]</td>
    <td>$row[name]</tb>
    <td>$row[price]</td>
    <td>$row[image]</td>
    <td>
    <a class='btn btn-primary btn-sm' href='./stock_edit.php?id=$row[id]'>Edit</a>
    <a class='btn btn-primary btn-sm' href='./stock_delete.php?id=$row[id]'>delete</a>
    </td>
    </tr>
        ";
    }
    ?>

</tbody>
</table>
  </div>  
</body>
</html>
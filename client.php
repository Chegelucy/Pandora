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
    <h2>list of clients</h2>
    <a class="btn btn-primary" href="./client_create.php" role="button">New client</a>
    <a class="btn btn-primary" href="./index.php" role="button">Home</a>
<br>
<table class="table">
    <thead>
        <tr>
           
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
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
    $sql ="SELECT * FROM clients";
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
    <td>$row[email]</td>
    <td>$row[phone]</td>
    <td>$row[address]</td>
    <td>
    <a class='btn btn-primary btn-sm' href='./client_edit.php?id=$row[id]'>Edit</a>
    <a class='btn btn-primary btn-sm' href='./client_delete.php?id=$row[id]'>delete</a>
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
<?php

function getRandomProducts($conn){
    // Perform the search query here
    
    $sql = "SELECT * FROM stock ORDER BY RAND() LIMIT 8";
    $result = $conn->query($sql);

    // Create an array to hold the search results
    $randomResults = array();

    // Loop through the search results and add them to the array
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $randomResults[] = array(
                'item_id' => $row['id'],
                'item_image' => $row['image'],
                'item_name' => $row['name'],
                'item_price' => $row['price']
            );
        }
    }

    // Return the search results array
    return $randomResults;
}
function removeItem(){
    if (isset($_GET['itemId'])) {
        $itemId = $_GET['itemId'];
        
        if (isset($_SESSION['cart_items'])) {
            foreach ($_SESSION['cart_items'] as $key => $item) {
                if ($item['id'] == $itemId) {
                    unset($_SESSION['cart_items'][$key]);
                    break;
                }
            }
        }
        var_dump($_SESSION['cart_items']);

        // Redirect back to the cart page
        header('Location: ../cart.php');
        exit();
    } else {
        // Return an error message
        echo 'Error: Item ID not provided';
    }
}
function removeAllItems(){
    unset($_SESSION['cart_items']);
    var_dump($_SESSION['cart_items']);
    header('Location: ../cart.php'); 
    exit();  
}
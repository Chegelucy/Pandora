<?php
require_once 'db.inc.php';
require_once 'functions.inc.php';

// Call the getRandomProducts function to get the array of random products
$randomProducts = getRandomProducts($connection);

// Return the array of random products
return $randomProducts;

// SECTION: adding items to the cart
function addToCart(item_id, item_name, item_price) {
    
    // Retrieve the data attributes from the "Add to cart" button
    const itemId = item_id;
    const itemName = item_name;
    const itemPrice = item_price;
    // Send an AJAX request to add the item to the cart
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/cart.inc.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      // Handle the response from the server
      console.log(xhr.responseText);
    };
    xhr.send(`itemId=${itemId}&itemName=${itemName}&itemPrice=${itemPrice}`);
    alert("Added to cart");
    
    
  }
  // Remove item from cart
function removeItem(itemId) {
    var confirmRemove = confirm('Are you sure you want to remove this item from your cart?');
    if (confirmRemove) {
        window.location.href = 'includes/remove_item.inc.php?itemId=' + itemId;
    }
  }
  function removeAllItems() {
    if (confirm("Are you sure you want to remove all items from the cart?")) {
      window.location.href = "includes/remove_all_items.inc.php";
    }
  }
  function sendToProductPage(url, id){
    window.location.href = "../pandora/" + url + "?id=" + id;
    
  }  
    //linking pages
function Page(url){
    console.log("working..");
    window.location.href = "../pandora/" + url;
    
}

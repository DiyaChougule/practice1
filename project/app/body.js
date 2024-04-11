document.addEventListener("DOMContentLoaded", function() {
    // Select all "Add to Cart" buttons
    var addToCartButtons = document.querySelectorAll(".addCart");
    
    // Add event listener to each button
    addToCartButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            // Find the parent box of the clicked button
            var box = event.target.closest(".box-content");
            // Retrieve product information from the box
            var productName = box.querySelector("h2").textContent;
            var productPrice = box.querySelector(".price").textContent;
            // You can add more product details as needed
            
            // Add the product to the shopping cart (you can define your own logic here)
            addToCart(productName, productPrice);
            
            // Optional: Update UI to reflect changes in the shopping cart
            updateCartUI();
        });
    });
    
    function addToCart(name, price) {
        // Implement your logic to add the product to the cart
        // For example, you can use localStorage, session storage, or maintain an array in memory
        // Example using localStorage:
        var cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.push({ name: name, price: price });
        localStorage.setItem("cart", JSON.stringify(cart));
    }
    
    function updateCartUI() {
        // Implement your logic to update the UI to reflect changes in the shopping cart
        // For example, you can update the cart icon to show the number of items in the cart
        // Or you can display a message confirming that the item has been added to the cart
        alert("Item added to cart!");
    }
});
  
let login=document.getElementsByClassName("acc");

function redirectToLoginPage() {
    // Redirect to the login page
    window.location.href = "../login/index.php";
}
login.addEventListener("onclick",redirectToLoginPage);





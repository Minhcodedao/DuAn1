document.addEventListener("DOMContentLoaded", function() {
    const itemsliderbar = document.querySelectorAll(".cartegory-left-li");
  
    itemsliderbar.forEach(function (menu, index) {
      menu.addEventListener("click", function (e) {
        e.preventDefault();
        menu.classList.toggle("block");
      });
    });
  });



  function addFlowerBadgeToProduct(productId) {
    // Get the product element by its ID
    var productElement = document.getElementById(productId);
  
    // Create the badge element
    var badge = document.createElement('div');
    badge.classList.add('hot-badge');
    badge.innerHTML = '<i class="fa fa-flower"></i>';
  
    // Append the badge to the product element
    productElement.appendChild(badge);
  }
  
  // Example usage:
  // addFlowerBadgeToProduct('product123');
  
  
  // Example usage:
  // addHotBadgeToProduct('product123');
  
  
  // Example usage:
  // addHotBadgeToProduct('product123');
  
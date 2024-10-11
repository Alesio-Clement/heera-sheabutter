</div>

 <div class="footer footer-1">
            <div class="footer-top clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 about-us-col">
                            <img src="./assets/images/logo.svg" alt="" />
                            <p>1st Floor, Eagle House,<br>Kilimani Road, Nairobi,Kenya</p>
                            <p><b>Phone</b>: (254) 797816805</p>
                            <ul class="list--inline social-icons">
                                <li><a href="" target="_blank"><i class="icon icon-facebook"></i></a></li>
                                <li><a href="" target="_blank"><i class="icon icon-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="icon icon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                            <h4 class="h4">Quick Shop</h4>
                            <ul>
                                <li><a href="our-products.php">Shea Butter</a></li>
                                <li><a href="our-products.php">Body and Face Oils</a></li>
                                <li><a href="our-products.php">Scented Candles</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                            <h4 class="h4">Informations</h4>
                            <ul>
                                <li><a href="about-us/">About us</a></li>
                                <li><a href="privacy-policy/">Privacy policy</a></li>
                                <li><a href="">Terms &amp; condition</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                            <h4 class="h4">Customer Services</h4>
                            <ul>
                                <li><a href="">FAQ's</a></li>
                                <li><a href="">Support Center</a></li>
                                <li><a href="">Orders and Returns</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 newsletter-col">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <form action="index-modern.html#" method="post">
                                        <label class="h4">Newsletter</label>
                                        <p>Enter your email to receive updates on coupon for all items.</p>
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter-input" name="EMAIL"
                                                value="" placeholder="Email address" required>
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit"
                                                    id="Subscribe"><span
                                                        class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="container">
                    <ul class="payment-icons list--inline">
                        <li><i class="anm anm-cc-visa" aria-hidden="true"></i></li>
                        <li><i class="anm anm-cc-mastercard" aria-hidden="true"></i></li>
                        <li><i class="anm anm-cc-amex" aria-hidden="true"></i></li>
                        <li><i class="anm anm-cc-paypal" aria-hidden="true"></i></li>
                        <li><i class="anm anm-cc-discover" aria-hidden="true"></i></li>
                        <li><i class="anm anm-cc-stripe" aria-hidden="true"></i></li>
                        <li><i class="anm anm-cc-jcb" aria-hidden="true"></i></li>
                    </ul>
                    <div class="copytext">
                        &copy; 2024 HeeraSheaButter. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
       

        <span id="site-scroll"><i class="icon anm anm-arw-up"></i></span>
  
        <script src="assets/js/vendor/jquery-min.js"></script>
        <script src="assets/js/vendor/js.cookie.js"></script>
        <!-- Including Javascript -->
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </div>

    <script>
    $(document).ready(function () {
        // Initialize cartItems from localStorage
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Function to update the cart counter in the header and modal
        function updateCartCounter() {
            const cartCount = cartItems.reduce((acc, item) => acc + (item.quantity || 0), 0);
            $('.site-cart-count').text(cartCount);
            $('.cart-item-count').text(cartCount);
        }

        // Function to update the cart total price
        function updateCartTotalPrice() {
            let total = cartItems.reduce((acc, item) => acc + (item.price * (item.quantity || 0)), 0);
            $('.cart-total-price').text('KSH ' + total.toFixed(2));
        }

        // Function to dynamically update the cart modal content
        function updateCartModal() {
            let cartModalContent = '';

            if (cartItems.length === 0) {
                $('.cart-items-list').html('<li>Your cart is empty</li>');
                $('.cart-total-price').text('KSH 0.00');
            } else {
                cartItems.forEach(function (item, index) {
                    cartModalContent += `
                        <li class="item clearfix">
                            <a class="product-image" href="${item.link}">
                                <img src="${item.image}" alt="${item.name}" title="${item.name}">
                            </a>
                            <div class="product-details">
                                <a href="javascript:void(0);" class="remove" data-index="${index}">
                                    <i class="anm anm-times-sql" aria-hidden="true"></i>
                                </a>
                                <a class="product-title" href="${item.link}">${item.name}</a>
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);" data-index="${index}">
                                            <i class="anm anm-minus-r" aria-hidden="true"></i>
                                        </a>
                                        <input type="text" name="quantity" value="${item.quantity || 1}" class="qty" readonly>
                                        <a class="qtyBtn plus" href="javascript:void(0);" data-index="${index}">
                                            <i class="anm anm-plus-r" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">KSH ${item.price.toFixed(2)}</span>
                                    </div>
                                </div>
                            </div>
                        </li>`;
                });

                $('.cart-items-list').html(cartModalContent);
                updateCartTotalPrice(); // Ensure the total price is updated
            }
        }

        // Function to save cart to localStorage
        function saveCartToLocalStorage() {
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
        }

        // Function to update the Add to Cart button text
        function updateCartButtons() {
            $('.btn-addto-cart').each(function () {
                var productName = $(this).data('name');
                var isInCart = cartItems.some(item => item.name === productName);

                if (isInCart) {
                    $(this).html('<i class="icon anm anm-cart-l"></i> Remove from Cart <span class="tooltip-label">Remove from Cart</span>');
                    $(this).addClass('added');
                } else {
                    $(this).html('<i class="icon anm anm-cart-l"></i> Add to Cart <span class="tooltip-label">Add to Cart</span>');
                    $(this).removeClass('added');
                }
            });
        }

        // Add to cart button click handler
        $('.btn-addto-cart').on('click', function (e) {
            e.preventDefault();

            let productName = $(this).data('name');
            let productPrice = parseFloat($(this).data('price'));
            let productImage = $(this).data('image');
            let productLink = $(this).data('link');
            let existingProduct = cartItems.find(item => item.name === productName);

            if ($(this).hasClass('added')) {
                // Remove product from the cart
                cartItems = cartItems.filter(item => item.name !== productName);
                updateCartCounter();
                updateCartModal();
                saveCartToLocalStorage();
                $(this).removeClass('added');
                $(this).html('<i class="icon anm anm-cart-l"></i> Add to Cart <span class="tooltip-label">Add to Cart</span>');
            } else {
                if (!existingProduct) {
                    cartItems.push({
                        name: productName,
                        price: productPrice,
                        image: productImage,
                        link: productLink,
                        quantity: 1
                    });
                }
                updateCartCounter();
                updateCartModal();
                saveCartToLocalStorage();
                $(this).addClass('added');
                $(this).html('<i class="icon anm anm-cart-l"></i> Remove from Cart <span class="tooltip-label">Remove from Cart</span>');
            }
        });

        // Remove product from cart in modal
        $(document).on('click', '.remove', function () {
            let itemIndex = $(this).data('index');
            cartItems.splice(itemIndex, 1); // Remove item
            updateCartCounter();
            updateCartModal();
            saveCartToLocalStorage();
            updateCartButtons(); // Update the buttons since the item is removed
        });

        // Increase product quantity
        $(document).on('click', '.plus', function () {
            let itemIndex = $(this).data('index');
            if (cartItems[itemIndex]) {
                cartItems[itemIndex].quantity++;
                updateCartModal();
                saveCartToLocalStorage();
                updateCartCounter();
            }
        });

        // Decrease product quantity
        $(document).on('click', '.minus', function () {
            let itemIndex = $(this).data('index');
            if (cartItems[itemIndex] && cartItems[itemIndex].quantity > 1) {
                cartItems[itemIndex].quantity--;
                updateCartModal();
                saveCartToLocalStorage();
                updateCartCounter();
            }
        });

        // Load cart data on page load
        function loadCartData() {
            cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            updateCartCounter();
            updateCartModal();
            updateCartButtons(); // Ensure buttons are synced with cart items
        }

        loadCartData(); // Load data when the page loads

        // Click event for opening the cart modal
        $('.open-cart-modal').on('click', function () {
            updateCartModal();
        });

        // Click event for the Proceed to Checkout button
        $('.proceed-to-checkout').on('click', function (event) {
            event.stopPropagation(); // Prevent modal close
            window.location.href = 'checkout.php'; // Redirect to checkout page
        });
    });
</script>



<script>
    $(document).ready(function() {
        var businessPhoneNumber = "254797816805"; // Business WhatsApp number (no "+")
        
        // Get the initial base price and product name
        var basePrice = parseFloat($('.money').text().replace('Ksh ', '').replace(',', '')); // Base price from product
        var productName = $('.product-single__title').text(); // Get product name

        // Function to update the total price
        function updatePrice(quantity) {
            var totalPrice = basePrice * quantity;
            $('.money').text('Ksh ' + totalPrice.toFixed(2)); // Update price element
        }

        // Cart Quantity Handling
        var $cartQtyInput = $('.cart-qty'); // Cart quantity input field

        // Handle the minus button for Cart
        $('.cart-minus').off('click').on('click', function(e) {
            e.preventDefault();
            var cartQty = parseInt($cartQtyInput.val()) || 1; // Ensure quantity is an integer

            if (cartQty > 1) {
                cartQty--; // Decrease by 1
                $cartQtyInput.val(cartQty); // Update input field
                updatePrice(cartQty); // Update the price
            }
        });

        // Handle the plus button for Cart
        $('.cart-plus').off('click').on('click', function(e) {
            e.preventDefault();
            var cartQty = parseInt($cartQtyInput.val()) || 1; // Ensure quantity is an integer

            cartQty++; // Increase by 1
            $cartQtyInput.val(cartQty); // Update input field
            updatePrice(cartQty); // Update the price
        });

        // WhatsApp Quantity Handling
        var $whatsappQtyInput = $('.whatsapp-qty'); // WhatsApp quantity input field

        // Handle the minus button for WhatsApp
        $('.whatsapp-minus').off('click').on('click', function(e) {
            e.preventDefault();
            var whatsappQty = parseInt($whatsappQtyInput.val()) || 1; // Ensure quantity is an integer

            if (whatsappQty > 1) {
                whatsappQty--; // Decrease by 1
                $whatsappQtyInput.val(whatsappQty); // Update input field
                updatePrice(whatsappQty); // Update the price for WhatsApp
            }
        });

        // Handle the plus button for WhatsApp
        $('.whatsapp-plus').off('click').on('click', function(e) {
            e.preventDefault();
            var whatsappQty = parseInt($whatsappQtyInput.val()) || 1; // Ensure quantity is an integer

            whatsappQty++; // Increase by 1
            $whatsappQtyInput.val(whatsappQty); // Update input field
            updatePrice(whatsappQty); // Update the price for WhatsApp
        });

        // WhatsApp Order Button Click
        $('.whatsapp-order').off('click').on('click', function(e) {
            e.preventDefault(); // Prevent default behavior
            var whatsappQty = parseInt($whatsappQtyInput.val()) || 1; // Get WhatsApp quantity
            var totalPrice = basePrice * whatsappQty; // Calculate total price

            // Generate WhatsApp message
            var whatsappMessage = `Hello, I would like to order the following product:\n\n` +
                                `*Product*: ${productName}\n` +
                                `*Quantity*: ${whatsappQty}\n` +
                                `*Total Price*: Ksh ${totalPrice.toFixed(2)}`;

            // Create WhatsApp URL
            var whatsappURL = `https://api.whatsapp.com/send?phone=${businessPhoneNumber}&text=${encodeURIComponent(whatsappMessage)}`;

            // Redirect to WhatsApp
            window.open(whatsappURL, '_blank');
        });
    });
</script>



<script>
  $(document).ready(function() {
    // Retrieve cart data from localStorage
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    
    // Function to update checkout page with cart items
    function populateCheckoutTable() {
      let checkoutTableContent = '';
      let total = 0;
      
      if (cartItems.length === 0) {
        $('#checkout-items').html('<tr><td colspan="4" class="text-center">Your cart is empty</td></tr>');
        $('#checkout-total').text('KSH 0.00');
      } else {
        cartItems.forEach(function(item) {
          let itemTotal = item.price * item.quantity;
          total += itemTotal;
          
          checkoutTableContent += `
            <tr>
              <td class="text-left">${item.name}</td>
              <td>KSH ${item.price.toFixed(2)}</td>
              <td>${item.quantity}</td>
              <td>KSH ${itemTotal.toFixed(2)}</td>
            </tr>`;
        });
        
        $('#checkout-items').html(checkoutTableContent);
        $('#checkout-total').text('KSH ' + total.toFixed(2));
      }
    }
    
    // Call the function to populate the checkout table
    populateCheckoutTable();
  });
</script>

	
</body>
</html>
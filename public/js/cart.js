
    //add cart
    var cart = document.getElementsByClassName('minicart');
    console.log('test');
    if(cart.length > 0) {
        console.log('test1');
        var cartAddBtns = document.getElementsByClassName('add-to-cart'),
        cartBody = cart[0],
        cartList = cartBody.getElementsByTagName('ul')[0],
        cartListItems = cartList.getElementsByTagName('li'),
        cartTotal = cart[0].getElementsByClassName('minicart-total')[0].getElementsByTagName('span')[0],
        cartCount = cart[0].getElementsByClassName('cart-count')[0],
        cartCountItems = cartCount.getElementsByTagName('li');
        initCartEvents(); 
        function initCartEvents() {
			// add products to cart
			for(var i = 0; i < cartAddBtns.length; i++) {(function(i){
				cartAddBtns[i].addEventListener('click', addToCart);
            })(i);}

            cart[0].addEventListener('click', function(event) {
				if(event.target == cart[0]) { // close cart when clicking on bg layer
					toggleCart(true);
				} else if (event.target.closest('.delete')) { // remove product from cart
					event.preventDefault();
					removeProduct(event.target.closest('.delete-item'));
				}
			});
        };
        
		function addToCart(event) {
			event.preventDefault();
			// if(animatingQuantity) return;
			var cartIsEmpty = Util.hasClass(cart[0], 'cart-empty');
			//update cart product list
			addProduct(this);
			//update number of items 
			updateCartCount(cartIsEmpty);
			//update total price
			updateCartTotal(this.getAttribute('data-price'), true);
			//show cart
			Util.removeClass(cart[0], 'cart-empty');
        };
        function addProduct(target) {
			// this is just a product placeholder
			// you should insert an item with the selected product info
			// replace productId, productName, price and url with your real product info
			// you should also check if the product was already in the cart -> if it is, just update the quantity
			// productId = productId + 1;
			var productAdded = '<li><a href="single-product.html" class="minicart-product-image"><img src="images/product/small-size/5.jpg" alt="cart products"></a><div class="minicart-product-details"><h6><a href="single-product.html">Aenean eu tristique</a></h6><span>£40 x 1</span></div><button class="close" title="Remove"><i class="fa fa-close"></i></button></li>';
			cartList.insertAdjacentHTML('beforeend', productAdded);
        };
        function updateCartCount(emptyCart, quantity) {
		
				var actual = Number(cartCountItems[0].innerText) + quantity;
				var next = actual + 1;
				
				cartCountItems[0].innerText = actual;
				cartCountItems[1].innerText = next;
				animatingQuantity = false;
			
        };
        function updateCartTotal(price, bool) {
			cartTotal.innerText = bool ? (Number(cartTotal.innerText) + Number(price)).toFixed(2) : (Number(cartTotal.innerText) - Number(price)).toFixed(2);
		};
        function quickUpdateCart() {
			var quantity = 0;
			var price = 0;

			// for(var i = 0; i < cartListItems.length; i++) {
			// 	if( !Util.hasClass(cartListItems[i], 'cd-cart__product--deleted') ) {
			// 		var singleQuantity = Number(cartListItems[i].getElementsByTagName('select')[0].value);
			// 		quantity = quantity + singleQuantity;
			// 		price = price + singleQuantity*Number((cartListItems[i].getElementsByClassName('cd-cart__price')[0].innerText).replace('$', ''));
			// 	}
			// }

			cartTotal.innerText = price.toFixed(2);
			cartCountItems[0].innerText = quantity;
			cartCountItems[1].innerText = quantity+1;
		};
    };

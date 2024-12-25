@extends('layout.style')
@section('title')
shoping-cart
@endsection
@section('content')
	{{-- <!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div> --}}


	<!-- Shoping Cart -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>

                                <tr class="table_row" id="cart-product-template" style="display: none;">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="" alt="Product Image" class="product-image">
                                        </div>
                                    </td>
                                    <td class="column-2 product-name"></td>
                                    <td class="column-3 product-price"></td>
                                    <td class="column-4">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="column-5 product-total"></td>
                                </tr>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Update Cart
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									$79.65
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>

								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" id="method-pay" name="method-pay">
											<option>Select a Method Pay...</option>
											<option>Credit Card</option>
											<option>PayPal</option>
                                            <option>Cash on Delivery</option>
                                            <option>Bank Transfer</option>
                                            <option>Apple Pay</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

                                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" id="status" name="status">
											<option>Select Status...</option>
											<option>Pending</option>
											<option>Completed</option>
                                            <option>Canceled</option>
                                            <option>Shipped</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" id="client-name" name="client-name" placeholder="Your Name">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" id="client-email" name="client-email" placeholder="Your Email">
									</div>

									{{-- <div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Update Totals
										</div>
									</div> --}}

								</div>
							</div>
						</div>
                        <br>

						{{-- <div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									$79.65
								</span>
							</div>
						</div> --}}

						<button id="checkout-button" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Retrieve cart from local storage
            let cart = JSON.parse(sessionStorage.getItem('cart')) || [];

            // Get the cart table and template row
            const cartTable = document.querySelector('.table-shopping-cart');
            const templateRow = document.getElementById('cart-product-template');

            // Function to update cart totals
            function updateCartTotals() {
                const subtotal = cart.reduce((total, product) => total + product.price * product.quantity, 0);
                document.querySelector('.mtext-110.cl2').textContent = `$${subtotal.toFixed(2)}`;
                document.querySelector('.mtext-110.cl2.total').textContent = `$${subtotal.toFixed(2)}`;
            }

            // Function to refresh the cart display
            function refreshCart() {
                // Clear the cart table before adding new rows
                cartTable.querySelectorAll('tr:not(.table_head)').forEach(row => row.remove());

                // Loop through the cart and display each product
                cart.forEach(product => {
                    // Clone the template row
                    const row = templateRow.cloneNode(true);
                    row.style.display = ''; // Make the row visible

                    // Set product details
                    row.querySelector('.product-image').src = product.image;
                    row.querySelector('.product-image').dataset.id = product.id; // Add data-id for deletion
                    row.querySelector('.product-name').textContent = product.name;
                    row.querySelector('.product-price').textContent = `$${product.price.toFixed(2)}`;
                    row.querySelector('.num-product').value = product.quantity;
                    row.querySelector('.product-total').textContent = `$${(product.price * product.quantity).toFixed(2)}`;

                    // Add click listener to `<td>` containing the image for product deletion
                    const productTd = row.querySelector('.column-1');
                    productTd.addEventListener('click', () => {
                        // Show SweetAlert confirmation before deleting
                        Swal.fire({
                            title: 'Are you sure?',
                            text: 'You will not be able to recover this product!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                const productId = product.id; // Get product ID
                                cart = cart.filter(item => item.id !== productId); // Remove the clicked product
                                sessionStorage.setItem('cart', JSON.stringify(cart)); // Save updated cart
                                refreshCart(); // Refresh the cart display
                                updateCartTotals(); // Update totals
                                Swal.fire(
                                    'Deleted!',
                                    'The product has been removed from your cart.',
                                    'success'
                                );
                            }
                        });
                    });

                    // Quantity buttons functionality
                    const qtyInput = row.querySelector('.num-product');
                    const btnPlus = row.querySelector('.btn-num-product-up');
                    const btnMinus = row.querySelector('.btn-num-product-down');

                    // Increase quantity
                    btnPlus.addEventListener('click', () => {
                        const index = cart.findIndex(item => item.id === product.id);
                        cart[index].quantity++;
                        qtyInput.value = cart[index].quantity;
                        row.querySelector('.product-total').textContent = `$${(cart[index].price * cart[index].quantity).toFixed(2)}`;
                        sessionStorage.setItem('cart', JSON.stringify(cart));
                        updateCartTotals();
                    });

                    // Decrease quantity
                    btnMinus.addEventListener('click', () => {
                        const index = cart.findIndex(item => item.id === product.id);
                        if (cart[index].quantity > 1) {
                            cart[index].quantity--;
                            qtyInput.value = cart[index].quantity;
                            row.querySelector('.product-total').textContent = `$${(cart[index].price * cart[index].quantity).toFixed(2)}`;
                            sessionStorage.setItem('cart', JSON.stringify(cart));
                            updateCartTotals();
                        }
                    });

                    // Append the new row to the cart table
                    cartTable.appendChild(row);
                });

                // Update totals
                updateCartTotals();
            }

            // Initial cart refresh
            refreshCart();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', function (e) {
        e.preventDefault();

        // Récupérer le panier
        const cart = JSON.parse(sessionStorage.getItem('cart')) || [];

        // Vérifier si le panier est vide
        if (cart.length === 0) {
            Swal.fire('Error', 'Your cart is empty!', 'error');
            return;
        }

        // Demander confirmation pour procéder
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to place the order?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, Place Order',
            cancelButtonText: 'No, Cancel',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                // Envoyer les données au serveur
                fetch('/checkout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({ cart }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your order has been placed successfully.',
                            icon: 'success',
                            confirmButtonText: 'OK',
                        }).then(() => {
                            window.location.href = '/order-confirmation'; // Rediriger vers la page de confirmation
                        });
                    } else {
                        Swal.fire('Error', data.message || 'Failed to place the order. Please try again.', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire('Error', 'Something went wrong. Please try again later.', 'error');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire('Cancelled', 'Your order was not placed.', 'info');
            }
        });
    });
});
    </script>
@endsection

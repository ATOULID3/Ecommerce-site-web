@extends('admin.admin-layout.style')
@section('title')
    Order
@endsection
@section('contentt')

<div class="container mt-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text">Create New Order</h2>
        <a href="/order" class="btn btn-outline-secondary">
            <i class="bx bx-arrow-back"></i> Back to Orders
        </a>
    </div>


    <!-- Order Form -->
    <form action="{{ route('order.store') }}" method="POST">
        @csrf

        <!-- Customer and Product Info Section -->
        <div class="row">
            <!-- Customer Information -->
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header  text-white">
                        <h5><i class="bx bx-user"></i> Customer Information</h5>
                    </div>
                    <div class="card-body">                        <div class="mb-3">
                        <label for="customer_name" class="form-label">Select Customer</label>
                        <select name="customer_name" id="customer_name" class="form-select" required>
                            <option value="">Select a Customer</option>
                            @foreach($clients as $client)
                                <option value="{{ $client->name }}">{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="mb-3">
                            <label for="customer_email" class="form-label">Customer Email</label>
                            <input type="email" name="customer_email" id="customer_email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="method_Pay" class="form-label">Méthode de paiement</label>
                            <select name="method_Pay" id="method_Pay" class="form-select" required>
                              <option value="" >Choisissez une méthode de paiement</option>
                              <option value="Credit Card" >Credit Card</option>
                              <option value="PayPal" >PayPal</option>
                              <option value="Cash on Delivery" >Cash on Delivery</option>
                              <option value="Bank Transfer" >Bank Transfer</option>
                              <option value="Apple Pay" >Apple Pay</option>
                            </select>
                          </div>
                        <div class="mb-3">
                            <label for="satatus" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="" >Status</option>
                                <option value="Pending" >Pending</option>
                                <option value="Completed" >Completed</option>
                                <option value="Canceled" >Canceled</option>
                                <option value="Shipped" >Shipped</option>
                              </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Selection -->
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header  text-white">
                        <h5><i class="bx bx-cart"></i> Product Selection</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="product_id" class="form-label">Product</label>
                            <select name="product_id" id="product_id" class="form-select" required>
                                <option value="">Select a Product</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" data-price="{{ $product->price }}" data-image="{{ asset('product/' . $product->image) }}" data-description="{{ $product->description }}">
                                        {{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total Price</label>
                            <input type="text" id="total_price" name="total_price" class="form-control" readonly>
                        </div>
                        <a href="javascript:void(0);" id="view-product-details" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#productModal">
                            <i class="bx bx-info-circle"></i> View Product Details
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Notes Section -->
        <div class="card shadow-sm mb-4">
            <div class="card-header  text-white">
                <h5><i class="bx bx-note"></i> Additional Notes</h5>
            </div>
            <div class="card-body">
                <textarea name="notes" class="form-control" rows="3" placeholder="Enter any additional notes (optional)"></textarea>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100"><i class="bx bx-save"></i> Submit Order</button>
    </form>
    <br>
</div>

<!-- Product Details Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel"><i class="bx bx-detail"></i> Product Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <img id="productImage" src="" alt="Product Image" style="width: 150px; height: auto;">
                </div>
                <h5 id="productName" class="text-center"></h5>
                <p id="productDescription" class="text-center text-muted"></p>
                <p class="text-center"><strong>Price:</strong> <span id="productPrice"></span></p>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to Update Price and Modal Details -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const productSelect = document.getElementById('product_id');
    const quantityInput = document.getElementById('quantity');
    const totalPriceInput = document.getElementById('total_price');
    const viewProductDetailsBtn = document.getElementById('view-product-details');

    const updateTotalPrice = () => {
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        const price = selectedOption.getAttribute('data-price');
        const quantity = quantityInput.value || 1;
        totalPriceInput.value = (price * quantity);
    };

    productSelect.addEventListener('change', updateTotalPrice);
    quantityInput.addEventListener('input', updateTotalPrice);

    viewProductDetailsBtn.addEventListener('click', function () {
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        const productName = selectedOption.text;
        const productPrice = selectedOption.getAttribute('data-price');
        const productImage = selectedOption.getAttribute('data-image');
        const productDescription = selectedOption.getAttribute('data-description');

        document.getElementById('productName').textContent = productName;
        document.getElementById('productPrice').textContent = productPrice;
        document.getElementById('productDescription').textContent = productDescription;
        document.getElementById('productImage').src = productImage;
    });
});
</script>
@if ($errors->any())
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let errorMessages = `
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    `;
    Swal.fire({
        icon: 'error',
        title: 'Oops... Something went wrong!',
        html: errorMessages,
        confirmButtonText: 'OK'
    });
</script>
@endif

@endsection

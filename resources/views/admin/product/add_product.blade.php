@extends('admin.admin-layout.style')
@section('title')
    Add Product
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">


    <div class="app-ecommerce">

      <!-- Add Product -->
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">

        <div class="d-flex flex-column justify-content-center">
          <h3 class="mb-1">Add a new Product</h3>
        </div>

      </div>
      <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">

        <!-- First column-->
        <div class="col-12 col-lg-8">
          <!-- Product Information -->
          <div class="card mb-6">
            <div class="card-header">
              <h5 class="card-tile mb-0">Product information</h5>
            </div>
            <div class="card-body">
              <div class="mb-6">
                <label class="form-label" for="ecommerce-product-name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Product title" name="name" aria-label="Product title">
              </div>
              <div class="row mb-6">
                <div class="mb-6 ecommerce-select2-dropdown">
                    <label class="form-label">Select category status</label>
                    <div class="position-relative">
                        <select id="status" name="status" class="select2 form-select" data-placeholder="Select category status">
                            <option value="">Select parent Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category }}">{{ $category->status }}:{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col"><label class="form-label" for="ecommerce-product-barcode">Barcode</label>
                  <input type="text" class="form-control" id="barcode" placeholder="0123-4567" name="barcode" aria-label="Product barcode"></div>
              </div>
              <!-- Description -->
              <div>
                <label class="mb-1">Description (Optional)</label>
                <textarea class="form-control" id="description" placeholder="Product description" name="description" aria-label="Product description" rows="4"></textarea>
              </div>
            </div>
          </div>
          <br>
          <!-- /Product Information -->
          <!-- Media -->
          <div class="card mb-4 shadow-sm border-light">
            <div class="card-header d-flex justify-content-between align-items-center bg-light">
              <h5 class="mb-0 card-title font-weight-bold">Product Image</h5>
              <a href="javascript:void(0);" class="text-primary fw-medium">Add media from URL</a>
            </div>
            <div class="card-body text-center">
              <!-- Image Upload Section -->
              <div class="upload-area p-4 border border-dashed rounded bg-light">
                <p class="h4 pt-3 mb-2">Drag and drop your image here</p>
                <p class="text-muted mb-3">or</p>
                <label class="btn btn-primary btn-sm" for="imageUpload">Browse Image</label>
                <input type="file" id="imageUpload" name="image" accept="image/*" class="d-none">
              </div>
            </div>
          </div>
          <br>
          <!-- /Media -->
          <!-- Variants -->
          <div class="card mb-6">
            <div class="card-header">
              <h5 class="card-title mb-0">Variants</h5>
            </div>
            <div class="card-body">
                <div data-repeater-list="group-a">
                  <div data-repeater-item="">
                    <div class="row g-6 mb-6">

                      <div class="col-4">
                        <label class="form-label" for="form-repeater-1-1">Options</label>
                        <div class="position-relative"><select id="form-repeater-1-1" class="select2 form-select select2-hidden-accessible" data-placeholder="Size" data-select2-id="form-repeater-1-1" tabindex="-1" aria-hidden="true">
                          <option value="" data-select2-id="2">Size</option>
                          <option value="size">Size</option>
                          <option value="color">Color</option>
                          <option value="weight">Weight</option>
                          <option value="smell">Smell</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 233.363px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-form-repeater-1-1-container"><span class="select2-selection__rendered" id="select2-form-repeater-1-1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                      </div>

                      <div class="col-8">
                        <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                        <input type="number" id="size" name="size" class="form-control" placeholder="Enter size">
                      </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="card mb-6">
            <div class="card-body">
                <div data-repeater-list="group-a">
                  <div data-repeater-item="">
                    <div class="row g-6 mb-6">

                      <div class="col-4">
                        <label class="form-label" for="form-repeater-1-1">Options</label>
                        <div class="position-relative"><select id="form-repeater-1-1" class="select2 form-select select2-hidden-accessible" data-placeholder="Size" data-select2-id="form-repeater-1-1" tabindex="-1" aria-hidden="true">
                          <option value="" data-select2-id="2">color</option>
                          <option value="size">Size</option>
                          <option value="color">Color</option>
                          <option value="weight">Weight</option>
                          <option value="smell">Smell</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 233.363px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-form-repeater-1-1-container"><span class="select2-selection__rendered" id="select2-form-repeater-1-1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                      </div>

                      <div class="col-8">
                        <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                        <input type="text" id="color" name="color" class="form-control" placeholder="Enter color">
                      </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
          <br>
          <!-- /Variants -->
          <!-- Inventory -->
          <div class="card mb-6">
            <div class="card-header">
              <h5 class="card-title mb-0">Inventory</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <!-- Navigation -->
                <div class="col-12 col-md-4 col-xl-5 col-xxl-4 mx-auto card-separator">
                  <div class="d-flex justify-content-between flex-column mb-4 mb-md-0 pe-md-4">
                    <div class="nav-align-left">
                      <ul class="nav nav-pills flex-column w-100" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#restock" aria-selected="true" role="tab">
                            <i class="bx bx-cube bx-sm me-1_5"></i>
                            <span class="align-middle">Restock</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#shipping" aria-selected="false" tabindex="-1" role="tab">
                            <i class="bx bx-car bx-sm me-1_5"></i>
                            <span class="align-middle">Shipping</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#global-delivery" aria-selected="false" tabindex="-1" role="tab">
                            <i class="bx bx-globe bx-sm me-1_5"></i>
                            <span class="align-middle">Global Delivery</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#attributes" aria-selected="false" tabindex="-1" role="tab">
                            <i class="bx bx-link bx-sm me-1_5"></i>
                            <span class="align-middle">Attributes</span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#advanced" aria-selected="false" tabindex="-1" role="tab">
                            <i class="bx bx-lock bx-sm me-1_5"></i>
                            <span class="align-middle">Advanced</span>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /Navigation -->
                <!-- Options -->
                <div class="col-12 col-md-8 col-xl-7 col-xxl-8 pt-6 pt-md-0">
                  <div class="tab-content p-0 ps-md-4">
                    <!-- Restock Tab -->
                    <div class="tab-pane fade show active" id="restock" role="tabpanel">
                      <h6 class="text-body">Options</h6>
                      <label class="form-label" for="ecommerce-product-stock">Add to Stock</label>
                      <div class="row mb-4 g-4 pe-md-4">
                        <div class="col-12 col-sm-9">
                          <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity" aria-label="Quantity"></div>
                        <div class="col-12 col-sm-3">
                          <button class="btn btn-primary">Confirm</button>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-2 fw-normal">Product in stock now: <span class="text-body">54</span></h6>
                        <h6 class="mb-2 fw-normal">Product in transit: <span class="text-body">390</span></h6>
                        <h6 class="mb-2 fw-normal">Last time restocked: <span class="text-body">24th June, 2023</span></h6>
                        <h6 class="mb-0 fw-normal">Total stock over lifetime: <span class="text-body">2430</span></h6>
                      </div>
                    </div>
                    <!-- Shipping Tab -->
                    <div class="tab-pane fade" id="shipping" role="tabpanel">
                      <h6 class="mb-3 text-body">Shipping Type</h6>
                      <div>
                        <div class="form-check mb-4">
                          <input class="form-check-input" type="radio" name="shippingType" id="seller">
                          <label class="form-check-label" for="seller">
                            <span class="mb-1 h6">Fulfilled by Seller</span><br>
                            <small>You'll be responsible for product delivery.<br>
                              Any damage or delay during shipping may cost you a Damage fee.</small>
                          </label>
                        </div>
                        <div class="form-check mb-6">
                          <input class="form-check-input" type="radio" name="shippingType" id="companyName" checked="">
                          <label class="form-check-label" for="companyName">
                            <span class="mb-1 h6">Fulfilled by Company name &nbsp;<span class="badge rounded-2 badge-warning bg-label-warning fs-tiny py-1">RECOMMENDED</span></span><br>
                            <small>Your product, Our responsibility.<br>
                              For a measly fee, we will handle the delivery process for you.</small>
                          </label>
                        </div>
                        <p class="mb-0">See our <a href="javascript:void(0);">Delivery terms and conditions</a> for details</p>
                      </div>
                    </div>
                    <!-- Global Delivery Tab -->
                    <div class="tab-pane fade" id="global-delivery" role="tabpanel">
                      <h6 class="mb-3 text-body">Global Delivery</h6>
                      <!-- Worldwide delivery -->
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="globalDel" id="worldwide">
                        <label class="form-check-label" for="worldwide">
                          <span class="mb-1 h6">Worldwide delivery</span><br>
                          <small>Only available with Shipping method:
                            <a href="javascript:void(0);">Fulfilled by Company name</a></small>
                        </label>
                      </div>
                      <!-- Global delivery -->
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="globalDel" checked="">
                        <label class="form-check-label w-75 pe-12" for="country-selected">
                          <span class="mb-2 h6">Selected Countries</span>
                          <input type="text" class="form-control" placeholder="Type Country name" id="country-selected">
                        </label>
                      </div>
                      <!-- Local delivery -->
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="globalDel" id="local">
                        <label class="form-check-label" for="local">
                          <span class="mb-1 h6">Local delivery</span><br>
                          <small>Deliver to your country of residence :
                            <a href="javascript:void(0);">Change profile address</a></small>
                        </label>
                      </div>
                    </div>
                    <!-- Attributes Tab -->
                    <div class="tab-pane fade" id="attributes" role="tabpanel">
                      <h6 class="mb-2 text-body">Attributes</h6>
                      <div>
                        <!-- Fragile Product -->
                        <div class="form-check mb-4">
                          <input class="form-check-input" type="checkbox" value="fragile" id="fragile">
                          <label class="form-check-label" for="fragile">
                            <span class="fw-medium">Fragile Product</span>
                          </label>
                        </div>
                        <!-- Biodegradable -->
                        <div class="form-check mb-4">
                          <input class="form-check-input" type="checkbox" value="biodegradable" id="biodegradable">
                          <label class="form-check-label" for="biodegradable">
                            <span class="fw-medium">Biodegradable</span>
                          </label>
                        </div>
                        <!-- Frozen Product -->
                        <div class="form-check mb-4">
                          <input class="form-check-input" type="checkbox" value="frozen" checked="">
                          <label class="form-check-label w-75 pe-12" for="frozen">
                            <span class="mb-1 h6">Frozen Product</span>
                            <input type="number" class="form-control" placeholder="Max. allowed Temperature" id="frozen">
                          </label>
                        </div>
                        <!-- Exp Date -->
                        <div class="form-check mb-6">
                          <input class="form-check-input" type="checkbox" value="expDate" id="expDate" checked="">
                          <label class="form-check-label w-75 pe-12" for="date-input">
                            <span class="mb-1 h6">Expiry Date of Product</span>
                            <input type="text" class="product-date form-control flatpickr-input" id="date-input" readonly="readonly">
                          </label>
                        </div>
                      </div>
                    </div>
                    <!-- /Attributes Tab -->
                    <!-- Advanced Tab -->
                    <div class="tab-pane fade" id="advanced" role="tabpanel">
                      <h6 class="mb-3 text-body">Advanced</h6>
                      <div class="row">
                        <!-- Product Id Type -->
                        <div class="col">
                          <label class="form-label" for="product-id">
                            <span class="mb-1 h6">Product ID Type</span>
                          </label>
                          <div class="position-relative"><select id="product-id" class="select2 form-select select2-hidden-accessible" data-placeholder="ISBN" data-select2-id="product-id" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="4">ISBN</option>
                            <option value="ISBN">ISBN</option>
                            <option value="UPC">UPC</option>
                            <option value="EAN">EAN</option>
                            <option value="JAN">JAN</option>
                          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-product-id-container"><span class="select2-selection__rendered" id="select2-product-id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">ISBN</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Product Id -->
                        <div class="col">
                          <label class="form-label" for="product-id-1">
                            <span class="mb-1 h6">Product ID</span>
                          </label>
                          <input type="number" id="product-id-1" class="form-control" placeholder="ISBN Number">
                        </div>

                      </div>
                    </div>
                    <!-- /Advanced Tab -->

                  </div>
                </div>
                <!-- /Options-->
              </div>
            </div>
          </div>
          <!-- /Inventory -->
        </div>
        <!-- /Second column -->

        <!-- Second column -->
        <div class="col-12 col-lg-4">
          <!-- Pricing Card -->
          <div class="card mb-6">
            <div class="card-header">
              <h5 class="card-title mb-0">Pricing</h5>
            </div>
            <div class="card-body">
              <!-- Base Price -->
              <div class="mb-6">
                <label class="form-label" for="ecommerce-product-price">Base Price</label>
                <input type="number" class="form-control" id="price" placeholder="Price" name="price" aria-label="Product price">
              </div>
              <!-- Discounted Price -->
              <div class="mb-6">
                <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                <input type="number" class="form-control" id="ecommerce-product-discount-price" placeholder="Discounted Price" name="productDiscountedPrice" aria-label="Product discounted price">
              </div>
              <!-- Charge tax check box -->
              <div class="form-check ms-2 mt-7 mb-4">
                <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked="">
                <label class="switch-label" for="price-charge-tax">
                  Charge tax on this product
                </label>
              </div>
              <!-- Instock switch -->
              <div class="d-flex justify-content-between align-items-center border-top pt-2">
                <span class="mb-0">In stock</span>
                <div class="w-25 d-flex justify-content-end">
                  <div class="form-check form-switch me-n3">
                    <input type="checkbox" class="form-check-input" checked="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <!-- /Pricing Card -->
          <!-- Organize Card -->
          <div class="card mb-6">
            <div class="card-header">
              <h5 class="card-title mb-0">Organize</h5>
            </div>
            <div class="card-body">
              <!-- Vendor -->
              <div class="mb-6 col ecommerce-select2-dropdown">
                <label class="form-label mb-1" for="vendor">
                  Vendor
                </label>
                <div class="position-relative"><select id="vendor" name="vendor" class="select2 form-select select2-hidden-accessible" data-placeholder="Select Vendor" data-select2-id="vendor" tabindex="-1" aria-hidden="true">
                  <option value="" data-select2-id="6">Select Vendor</option>
                  <option value="men-clothing">Men's Clothing</option>
                  <option value="women-clothing">Women's-clothing</option>
                  <option value="kid-clothing">Kid's-clothing</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-vendor-container"><span class="select2-selection__rendered" id="select2-vendor-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
              </div>
              <!-- Collection -->
              <div class="mb-6 col ecommerce-select2-dropdown">
                <label class="form-label mb-1" for="collection">Collection
                </label>
                <div class="position-relative"><select id="collection" name="collection" class="select2 form-select select2-hidden-accessible" data-placeholder="Collection" data-select2-id="collection" tabindex="-1" aria-hidden="true">
                  <option value="" data-select2-id="10">Collection</option>
                  <option value="men">Men's Clothing</option>
                  <option value="women">Women's-clothing</option>
                  <option value="kid">Kid's-clothing</option>
                  <option value="bag">Bag</option>
                  <option value="shoes">Shoes</option>
                  <option value="watches">Watches</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-collection-container"><span class="select2-selection__rendered" id="select2-collection-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
              </div>
              <!-- Status -->
              <div class="mb-6 col ecommerce-select2-dropdown">
                <label class="form-label mb-1" for="status-org">Status
                </label>
                <div class="position-relative"><select id="status-org" class="select2 form-select select2-hidden-accessible" data-placeholder="Published" data-select2-id="status-org" tabindex="-1" aria-hidden="true">
                  <option value="" data-select2-id="12">Published</option>
                  <option value="Published">Published</option>
                  <option value="Scheduled">Scheduled</option>
                  <option value="Inactive">Inactive</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 337.062px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-org-container"><span class="select2-selection__rendered" id="select2-status-org-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
              </div>
              <!-- Tags -->
              <div>
                <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                <tags class="tagify  form-control" tabindex="-1">
                <tag title="Normal" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Normal"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Normal</span></div></tag><tag title="Standard" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Standard"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Standard</span></div></tag><tag title="Premium" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="Premium"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">Premium</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                    ​
            </tags><input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags" value="Normal,Standard,Premium" aria-label="Product Tags" tabindex="-1">
              </div>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Publish product</button>
          <a href="/product-admin" class="btn btn-danger">Go Back</a>
          <!-- /Organize Card -->
        </div>
        <!-- /Second column -->
      </div>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        confirmButtonText: 'OK'
    });
</script>
@endif
<script>
function confirmDelete(clientId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-category-' + clientId).submit();
        }
    });
}
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

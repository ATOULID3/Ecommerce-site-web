
@extends('admin.admin-layout.style')
@section('title')
    Product
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="card-widget-separator-wrapper">
          <div class="card-body card-widget-separator">
            <div class="row gy-4 gy-sm-1">
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-4 pb-sm-0">
                  <div>
                    <p class="mb-1">In-store Sales</p>
                    <h4 class="mb-1">$5,345.43</h4>
                    <p class="mb-0"><span class="me-2">5k orders</span><span class="badge bg-label-success">+5.7%</span></p>
                  </div>
                  <span class="avatar me-sm-6">
                    <span class="avatar-initial rounded w-px-44 h-px-44">
                      <i class="bx bx-store-alt bx-lg text-heading"></i>
                    </span>
                  </span>
                </div>
                <hr class="d-none d-sm-block d-lg-none me-6">
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
                  <div>
                    <p class="mb-1">Website Sales</p>
                    <h4 class="mb-1">$674,347.12</h4>
                    <p class="mb-0"><span class="me-2">21k orders</span><span class="badge bg-label-success">+12.4%</span></p>
                  </div>
                  <span class="avatar p-2 me-lg-6">
                    <span class="avatar-initial rounded w-px-44 h-px-44">
                      <i class="bx bx-laptop bx-lg text-heading"></i>
                    </span>
                  </span>
                </div>
                <hr class="d-none d-sm-block d-lg-none">
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
                  <div>
                    <p class="mb-1">Discount</p>
                    <h4 class="mb-1">$14,235.12</h4>
                    <p class="mb-0">6k orders</p>
                  </div>
                  <span class="avatar p-2 me-sm-6">
                    <span class="avatar-initial rounded w-px-44 h-px-44">
                      <i class="bx bx-gift bx-lg text-heading"></i>
                    </span>
                  </span>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start">
                  <div>
                    <p class="mb-1">Affiliate</p>
                    <h4 class="mb-1">$8,345.23</h4>
                    <p class="mb-0"><span class="me-2">150 orders</span><span class="badge bg-label-danger">-3.5%</span></p>
                  </div>
                  <span class="avatar p-2">
                    <span class="avatar-initial rounded w-px-44 h-px-44">
                      <i class="bx bx-wallet bx-lg text-heading"></i>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
<div class="card">
    <h5 class="card-header">Product</h5>
    <div class="card-header d-flex flex-wrap py-0 flex-column flex-sm-row"><div><div id="DataTables_Table_0_filter" class="dataTables_filter me-3 mb-sm-6 mb-0 ps-0"><label><input type="search" class="form-control ms-0" placeholder="Search Category" aria-controls="DataTables_Table_0"></label></div></div><div class="d-flex justify-content-center justify-content-md-end align-items-baseline"><div class="dt-action-buttons d-flex justify-content-center flex-md-row align-items-baseline pt-0"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select ms-0"><option value="7">7</option><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="70">70</option><option value="100">100</option></select></label></div><div class="dt-buttons btn-group flex-wrap"><a href="/add_product"><button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList"><span><i class="bx bx-plus bx-sm me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add new Product</span></span></button></a> </div></div></div></div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Clients</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ( $products as $product )
          <tr>
            <td><img src="{{ asset('product/' . $product->image) }}" alt="IMG" style="width: 60px; height: auto;"></td>
            <td>{{$product->name}}</td>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Lilian Fuller"
                >
                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Sophia Wilkerson"
                >
                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Christina Parker"
                >
                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                </li>
              </ul>
            </td>
            <td><span class="badge bg-label-warning me-1">{{$product->price}}DH</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <button type="button" class="btn btn-info btn-sm" onclick="showProductDetails({{ $product->id }})">
                    <i class="bx bx-info-circle"></i>
                  </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form id="delete-product-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="dropdown-item" onclick="confirmDelete('{{ $product->id }}')">
                        <i class="bx bx-trash me-1"></i> Delete
                    </button>
                </form>
                </div>
              </div>
            </td>
          </tr>
          {{-- <tr>
            <td><img src="images/item-cart-05.jpg" alt="IMG"></td>
            <td>Barry Hunter</td>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Lilian Fuller"
                >
                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Sophia Wilkerson"
                >
                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Christina Parker"
                >
                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                </li>
              </ul>
            </td>
            <td><span class="badge bg-label-success me-1">Completed</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="images/item-cart-01.jpg" alt="IMG"></td>
            <td>Trevor Baker</td>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Lilian Fuller"
                >
                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Sophia Wilkerson"
                >
                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Christina Parker"
                >
                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                </li>
              </ul>
            </td>
            <td><span class="badge bg-label-info me-1">Scheduled</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
                <img src="images/item-cart-02.jpg" alt="IMG">
            </td>
            <td>Jerry Milton</td>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Lilian Fuller"
                >
                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Sophia Wilkerson"
                >
                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Christina Parker"
                >
                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                </li>
              </ul>
            </td>
            <td><span class="badge bg-label-warning me-1">Pending</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="images/item-cart-03.jpg" alt="IMG"></td>
            <td>Albert Cook</td>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Lilian Fuller"
                >
                  <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Sophia Wilkerson"
                >
                  <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                </li>
                <li
                  data-bs-toggle="tooltip"
                  data-popup="tooltip-custom"
                  data-bs-placement="top"
                  class="avatar avatar-xs pull-up"
                  title="Christina Parker"
                >
                  <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                </li>
              </ul>
            </td>
            <td><span class="badge bg-label-primary me-1">Active</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="javascript:void(0);"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr> --}}
          @endforeach
        </tbody>
      </table>

<!-- Modal Structure -->
<div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="productDetailModalLabel">Details of <span id="modal-product-title"></span></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr><td>Product:</td>
                <td>
                  <div class="d-flex justify-content-start align-items-center product-name">
                    <div class="avatar-wrapper">
                      <div class="avatar avatar me-4 rounded-2 bg-label-secondary">
                        <img id="modal-product-image" src="" alt="Product Image" class="rounded">
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="text-nowrap mb-0" id="modal-product-name"></h6>
                      <small class="text-truncate d-none d-sm-block" id="modal-product-description"></small>
                    </div>
                  </div>
                </td>
              </tr>
              <tr><td>Description:</td> <td><span id="modal-product-category"></span></td></tr>
              <tr><td>Stock:</td>
                <td>
                  <span id="modal-product-stock">
                    <label class="switch switch-primary switch-sm">
                      <input type="checkbox" class="switch-input" id="modal-product-stock-status" disabled>
                      <span class="switch-toggle-slider"><span class="switch-off"></span></span>
                    </label>
                  </span>
                </td>
              </tr>
              <tr><td>Barcode:</td> <td><span id="modal-product-sku"></span></td></tr>
              <tr><td>Price:</td> <td><span id="modal-product-price"></span></td></tr>
              <tr><td>Quantity:</td> <td><span id="modal-product-quantity"></span></td></tr>
              <tr><td>Collection:</td>
                <td><span id="modal-product-status" class="badge text-capitalized"></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    </div>
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
    function confirmDelete(productId) {
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
                document.getElementById('delete-product-' + productId).submit();
            }
        });
    }
    </script>
    <!-- JavaScript to Populate Modal -->
<script>
    function showProductDetails(productId) {
      const product = @json($products->keyBy('id'))[productId];

      document.getElementById('modal-product-title').textContent = product.name;
      document.getElementById('modal-product-image').src = "{{ asset('product/') }}/" + product.image;
      document.getElementById('modal-product-name').textContent = product.name;
      document.getElementById('modal-product-description').textContent = product.category;
      document.getElementById('modal-product-category').textContent = product.description;
      document.getElementById('modal-product-stock-status').checked = product.stock > 0;
      document.getElementById('modal-product-sku').textContent = product.barcode;
      document.getElementById('modal-product-price').textContent = product.price + ' DH';
      document.getElementById('modal-product-quantity').textContent = product.quantity;
      document.getElementById('modal-product-status').textContent = product.vendor;
      document.getElementById('modal-product-status').className = `badge bg-label-${product.status.toLowerCase()}`;

      new bootstrap.Modal(document.getElementById('productDetailModal')).show();
    }

    function editProduct(productId) {
      // Add logic for editing the product
      console.log('Edit product:', productId);
    }
  </script>
@endsection

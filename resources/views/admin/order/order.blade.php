@extends('admin.admin-layout.style')
@section('title')
    Order
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 mb-6">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="card-title fw-normal m-0 me-2">Total Sales</h6>
              <div class="dropdown">
                <button class="btn btn-text text-muted p-0" type="button" id="totalSalesList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Today <i class="bx bx-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalSalesList">
                  <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <div class="d-flex justify-content-center mb-3">
                <div class="avatar avatar-md flex-shrink-0">
                  <span class="avatar-initial avatar-shadow-primary rounded-circle"><i class="bx bx-trending-up bx-26px"></i></span>
                </div>
              </div>
              <h4 class="card-title mb-0">8,352</h4>
              <p class="mb-2">12% of target</p>
              <span class="text-success">+29% <i class="bx bx-chevron-up bx-lg"></i></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-6">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="card-title fw-normal m-0 me-2">Referral Income</h6>
              <div class="dropdown">
                <button class="btn btn-text text-muted p-0" type="button" id="referralsList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Today <i class="bx bx-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="referralsList">
                  <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <div class="d-flex justify-content-center mb-3">
                <div class="avatar avatar-md flex-shrink-0">
                  <span class="avatar-initial avatar-shadow-info rounded-circle"><i class="bx bx-dollar bx-26px"></i></span>
                </div>
              </div>
              <h4 class="card-title mb-0">$1,271</h4>
              <p class="mb-2">34% of target</p>
              <span class="text-danger">-23% <i class="bx bx-chevron-down bx-lg"></i></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-6">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="card-title fw-normal m-0 me-2">Customers</h6>
              <div class="dropdown">
                <button class="btn btn-text text-muted p-0" type="button" id="customersList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Today <i class="bx bx-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customersList">
                  <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <div class="d-flex justify-content-center mb-3">
                <div class="avatar avatar-md flex-shrink-0">
                  <span class="avatar-initial avatar-shadow-success rounded-circle"><i class="bx bx-user bx-26px"></i></span>
                </div>
              </div>
              <h4 class="card-title mb-0">{{$clientCount}}</h4>
              <p class="mb-2">29% of target</p>
              <span class="text-success">+42% <i class="bx bx-chevron-up bx-lg"></i></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-6">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="card-title fw-normal m-0 me-2">Orders Received</h6>
              <div class="dropdown">
                <button class="btn btn-text text-muted p-0" type="button" id="orderReceivedList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Today <i class="bx bx-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderReceivedList">
                  <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <div class="d-flex justify-content-center mb-3">
                <div class="avatar avatar-md flex-shrink-0">
                  <span class="avatar-initial avatar-shadow-warning rounded-circle"><i class="bx bx-archive bx-26px"></i></span>
                </div>
              </div>
              <h4 class="card-title mb-0">{{$orderCount}}</h4>
              <p class="mb-2">47% of target</p>
              <span class="text-success">+82% <i class="bx bx-chevron-up bx-lg"></i></span>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="card">
        <h5 class="card-header">Orders</h5>
        <div class="card-header d-flex flex-wrap py-0 flex-column flex-sm-row"><div><div id="DataTables_Table_0_filter" class="dataTables_filter me-3 mb-sm-6 mb-0 ps-0"><label><input type="search" class="form-control ms-0" placeholder="Search Category" aria-controls="DataTables_Table_0"></label></div></div><div class="d-flex justify-content-center justify-content-md-end align-items-baseline"><div class="dt-action-buttons d-flex justify-content-center flex-md-row align-items-baseline pt-0"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select ms-0"><option value="7">7</option><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="70">70</option><option value="100">100</option></select></label></div><div class="dt-buttons btn-group flex-wrap"><a href="/add_order"><button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList"><span><i class="bx bx-plus bx-sm me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add new Order</span></span></button></a> </div></div></div></div>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>Order</th>
                <th>Order Name</th>
                <th>Client</th>
                <th>Date</th>
                <th>payment</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($orders as $order )
              <tr>
                <td>
                @if($order->product && $order->product->image)
                <img src="{{ asset('product/' . $order->product->image) }}"
                    alt="{{ $order->product->name }}"
                    style="width: 50px; height: auto;">
                @else
                 <span>No Image</span>
                @endif
                </td>
                <td>{{ $order->product->name }}</td>
                <td>{{$order->customer_name}}</td>
                <td>{{$order->created_at}}</td>
                <td><span class="badge bg-label-success me-1">{{$order->method_Pay}}</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/order_detail/{{$order->id}}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form id="delete-order-{{ $order->id }}" action="{{ route('order.destroy', $order->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="button" class="dropdown-item" onclick="confirmDelete('{{ $order->id }}')">
                            <i class="bx bx-trash me-1"></i> Delete
                        </button>
                    </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
            document.getElementById('delete-order-' + clientId).submit();
        }
    });
}
</script>
@endsection

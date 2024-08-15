@extends('admin.admin-layout.style')
@section('title')
    Order
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
                    <h4 class="mb-0">56</h4>
                    <p class="mb-0">Pending Payment</p>
                  </div>
                  <span class="avatar w-px-40 h-px-40 me-sm-6">
                    <span class="avatar-initial bg-label-secondary rounded">
                      <i class="bx bx-calendar bx-lg text-heading"></i>
                    </span>
                  </span>
                </div>
                <hr class="d-none d-sm-block d-lg-none me-6">
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
                  <div>
                    <h4 class="mb-0">12,689</h4>
                    <p class="mb-0">Completed</p>
                  </div>
                  <span class="avatar w-px-40 h-px-40 p-2 me-lg-6">
                    <span class="avatar-initial bg-label-secondary rounded">
                      <i class="bx bx-check-double bx-lg text-heading"></i>
                    </span>
                  </span>
                </div>
                <hr class="d-none d-sm-block d-lg-none">
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
                  <div>
                    <h4 class="mb-0">124</h4>
                    <p class="mb-0">Refunded</p>
                  </div>
                  <span class="avatar w-px-40 h-px-40 p-2 me-sm-6">
                    <span class="avatar-initial bg-label-secondary rounded">
                      <i class="bx bx-wallet bx-lg text-heading"></i>
                    </span>
                  </span>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start">
                  <div>
                    <h4 class="mb-0">32</h4>
                    <p class="mb-0">Failed</p>
                  </div>
                  <span class="avatar w-px-40 h-px-40 p-2">
                    <span class="avatar-initial bg-label-secondary rounded">
                      <i class="bx bx-error-alt bx-lg text-heading"></i>
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
        <h5 class="card-header">Orders</h5>
        <div class="card-header d-flex flex-wrap py-0 flex-column flex-sm-row"><div><div id="DataTables_Table_0_filter" class="dataTables_filter me-3 mb-sm-6 mb-0 ps-0"><label><input type="search" class="form-control ms-0" placeholder="Search Category" aria-controls="DataTables_Table_0"></label></div></div><div class="d-flex justify-content-center justify-content-md-end align-items-baseline"><div class="dt-action-buttons d-flex justify-content-center flex-md-row align-items-baseline pt-0"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select ms-0"><option value="7">7</option><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="70">70</option><option value="100">100</option></select></label></div><div class="dt-buttons btn-group flex-wrap"><a href="/add_product"><button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList"><span><i class="bx bx-plus bx-sm me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add new Order</span></span></button></a> </div></div></div></div>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>order</th>
                <th>Client</th>
                <th>date</th>
                <th>payment</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td><img src="images/item-cart-04.jpg" alt="IMG"></td>
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
              </tr>
              <tr>
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
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection

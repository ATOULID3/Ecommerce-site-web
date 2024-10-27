@extends('admin.admin-layout.style')
@section('title')
    emails
@endsection
@section('contentt')
    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<div class="row mb-6 g-6">
<div class="col-sm-6 col-xl-3">
<div class="card">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between">
      <div class="content-left">
        <h5 class="mb-1">$24,983</h5>
        <small>Total Earning</small>
      </div>
      <span class="badge bg-label-primary rounded-circle p-2">
        <i class="bx bx-dollar bx-lg"></i>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between">
      <div class="content-left">
        <h5 class="mb-1">$8,647</h5>
        <small>Unpaid Earning</small>
      </div>
      <span class="badge bg-label-success rounded-circle p-2">
        <i class="bx bx-gift bx-lg"></i>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between">
      <div class="content-left">
        <h5 class="mb-1">2,367</h5>
        <small>Signups</small>
      </div>
      <span class="badge bg-label-danger rounded-circle p-2">
        <i class="bx bx-user bx-lg"></i>
      </span>
    </div>
  </div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between">
      <div class="content-left">
        <h5 class="mb-1">4.5%</h5>
        <small>Conversion Rate</small>
      </div>
      <span class="badge bg-label-info rounded-circle p-2">
        <i class="bx bx-infinite bx-lg"></i>
      </span>
    </div>
  </div>
</div>
</div>
</div>
<br>

<div class="row mb-6 g-6">
<div class="col-lg-7">
<div class="card h-100">
  <div class="card-body">
    <h5 class="mb-1">How to use</h5>
    <p class="mb-6 card-subtitle mt-0">Integrate your referral code in 3 easy steps.</p>
    <div class="d-flex flex-column flex-sm-row justify-content-between text-center gap-6">
      <div class="d-flex flex-column align-items-center">
        <span><i class="bx bx-rocket text-primary bx-36px p-4 border border-primary rounded-circle border-dashed mb-0"></i></span>
        <p class="my-2 w-75">Create &amp; validate your referral link and get</p>
        <h6 class="text-primary mb-0">$50</h6>
      </div>
      <div class="d-flex flex-column align-items-center">
        <span><i class="bx bxs-user-badge text-primary bx-36px p-4 border border-primary rounded-circle border-dashed mb-0"></i></span>
        <p class="my-2 w-75">For every new signup you get</p>
        <h6 class="text-primary mb-0">10%</h6>
      </div>
      <div class="d-flex flex-column align-items-center">
        <span><i class="bx bxs-paper-plane text-primary bx-36px p-4 border border-primary rounded-circle border-dashed mb-0"></i></span>
        <p class="my-2 w-75">Get other friends to generate link and get</p>
        <h6 class="text-primary mb-0">$100</h6>
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-lg-5">
<div class="card h-100">
  <div class="card-body">
    <form class="referral-form" onsubmit="return false">
      <div class="mb-6 mt-1">
        <h5 class="mb-5">Invite your friends</h5>
        <div class="d-flex gap-4 align-items-end">
          <div class="w-100">
            <label class="form-label mb-1" for="referralEmail">Enter friend’s email address and invite them</label>
            <input type="email" id="referralEmail" name="referralEmail" class="form-control w-100" placeholder="Email address">
          </div>
          <div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
      <div>
        <h5 class="mb-5">Share the referral link</h5>
        <div class="d-flex gap-4 align-items-end">
          <div class="w-100">
            <label class="form-label mb-1" for="referralLink">Share referral link in social media</label>
            <input type="text" id="referralLink" name="referralLink" class="form-control w-100 h-px-40" placeholder="pixinvent.com/?ref=6479">
          </div>
          <div class="d-flex">
            <button type="button" class="btn btn-facebook btn-icon me-2"><i class="bx bxl-facebook text-white bx-md"></i></button>
            <button type="button" class="btn btn-twitter btn-icon"><i class="bx bxl-twitter text-white bx-md"></i></button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<br>

<!-- Referral List Table -->
<div class="card">
<div class="card-datatable table-responsive">
<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="card-header d-flex flex-column flex-sm-row align-items-center py-0"><div class="head-label"><h5 class="card-title mb-0 text-nowrap mt-6 mt-sm-0">Referred users</h5></div><div class="d-flex align-items-center justify-content-end"><div class="dataTables_length me-2 ms-n2 ms-sm-0" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div class="dt-action-buttons pt-0"><div class="dt-buttons btn-group flex-wrap"><div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle btn-label-secondary" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="bx bx-export bx-sm me-2"></i>Export</span></button></div> </div></div></div></div><table class="datatables-referral table border-top dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1210px;">
  <thead>
    <tr><th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 407px;" aria-label="Users: activate to sort column descending" aria-sort="ascending">Users</th><th class="text-nowrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 154px;" aria-label="Referred ID: activate to sort column ascending">Referred ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 127px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="Value: activate to sort column ascending">Value</th><th class="text-nowrap sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 124px; display: none;" aria-label="Earnings: activate to sort column ascending">Earnings</th></tr>
  </thead><tbody><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-primary">AC</span></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Andria Chisnell</span></a><small class="text-nowrap">achisnellq@imageshack.us</small></div></div></td><td><span>3363</span></td><td><span class="badge bg-label-warning" text-capitalized="">Unpaid</span></td><td><span>$9106.99</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$705.15</span> </td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="../../assets/img/avatars/8.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Adriano Lygoe</span></a><small class="text-nowrap">alygoe2m@gravatar.com</small></div></div></td><td><span>5361</span></td><td><span class="badge bg-label-success" text-capitalized="">Paid</span></td><td><span>$6447.15</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$777.46</span> </td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-warning">AH</span></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Anabal Hakking</span></a><small class="text-nowrap">ahakkingd@paginegialle.it</small></div></div></td><td><span>4892</span></td><td><span class="badge bg-label-danger" text-capitalized="">Rejected</span></td><td><span>$8797.12</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$679.71</span> </td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="../../assets/img/avatars/17.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Akim Korba</span></a><small class="text-nowrap">akorbab@flickr.com</small></div></div></td><td><span>8561</span></td><td><span class="badge bg-label-warning" text-capitalized="">Unpaid</span></td><td><span>$3104.91</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$552.75</span> </td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="../../assets/img/avatars/18.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Allsun Wrotchford</span></a><small class="text-nowrap">awrotchford25@fc2.com</small></div></div></td><td><span>1094</span></td><td><span class="badge bg-label-danger" text-capitalized="">Rejected</span></td><td><span>$6186.51</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$653.95</span> </td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="../../assets/img/avatars/8.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Althea Dayce</span></a><small class="text-nowrap">adaycet@youtu.be</small></div></div></td><td><span>6069</span></td><td><span class="badge bg-label-danger" text-capitalized="">Rejected</span></td><td><span>$6098.09</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$269.32</span> </td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Andre Kenway</span></a><small class="text-nowrap">akenwayh@rambler.ru</small></div></div></td><td><span>9826</span></td><td><span class="badge bg-label-danger" text-capitalized="">Rejected</span></td><td><span>$2221.71</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$347.19</span> </td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle"></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Antone Szymon</span></a><small class="text-nowrap">aszymon27@wufoo.com</small></div></div></td><td><span>3985</span></td><td><span class="badge bg-label-success" text-capitalized="">Paid</span></td><td><span>$7048.75</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$246.18</span> </td></tr><tr class="odd"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-danger">AS</span></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Aurora Skpsey</span></a><small class="text-nowrap">askpseyo@cdc.gov</small></div></div></td><td><span>2821</span></td><td><span class="badge bg-label-warning" text-capitalized="">Unpaid</span></td><td><span>$2938.87</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$317.42</span> </td></tr><tr class="even"><td class="control" tabindex="0" style=""></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4"><span class="avatar-initial rounded-circle bg-label-dark">AT</span></div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">Adrienne Tourne</span></a><small class="text-nowrap">atourne8@fotki.com</small></div></div></td><td><span>4072</span></td><td><span class="badge bg-label-warning" text-capitalized="">Unpaid</span></td><td><span>$6774.33</span></td><td class="dtr-hidden" style="display: none;"><span class="text-heading">$821.78</span> </td></tr></tbody>
</table><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 100 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link"><i class="bx bx-chevron-left bx-18px"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="ellipsis" tabindex="-1" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="9" tabindex="0" class="page-link">10</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link"><i class="bx bx-chevron-right bx-18px"></i></a></li></ul></div></div></div><div style="width: 1%;"></div></div>
</div>

</div>


      <!-- / Content -->
      <div class="content-backdrop fade"></div>
    </div>
@endsection

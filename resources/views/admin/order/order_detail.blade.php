@extends('admin.admin-layout.style')
@section('title')
    Order
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="content-wrapper">

        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">

  <div class="d-flex flex-column justify-content-center">
    <div class="mb-1">
      <span class="h5">Order #32543 </span><span class="badge bg-label-success me-1 ms-2">Paid</span> <span class="badge bg-label-info">Ready to Pickup</span>
    </div>
    <p class="mb-0">Aug 17, <span id="orderYear">2024</span>, 5:48 (ET)</p>
  </div>
  <div class="d-flex align-content-center flex-wrap gap-2">
    <button class="btn btn-danger delete-order">Delete Order</button>
  </div>
</div>

<!-- Order Details Table -->

<div class="row">
  <div class="col-12 col-lg-8">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title m-0">Order details</h5>
        <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6>
      </div>
      <div class="card-datatable table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><table class="datatables-order-details table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" style="width: 798px;">
          <thead>
            <tr><th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="w-50 sorting_disabled" rowspan="1" colspan="1" style="width: 299px;" aria-label="products">products</th><th class="w-25 sorting_disabled" rowspan="1" colspan="1" style="width: 126px;" aria-label="price">price</th><th class="w-25 sorting_disabled" rowspan="1" colspan="1" style="width: 117px;" aria-label="qty">qty</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 42px;" aria-label="total">total</th></tr>
          </thead><tbody><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center text-nowrap"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="images/item-cart-04.jpg" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><h6 class="text-heading mb-0">Wooden Chair</h6><small>Material: Wooden</small></div></div></td><td><span>$841</span></td><td><span class="text-body">2</span></td><td><span class="text-body">1682</span></td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center text-nowrap"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="images/item-cart-04.jpg" alt="product-Oneplus 10" class="rounded-2"></div></div><div class="d-flex flex-column"><h6 class="text-heading mb-0">Oneplus 10</h6><small>Storage:128gb</small></div></div></td><td><span>$896</span></td><td><span class="text-body">3</span></td><td><span class="text-body">2688</span></td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center text-nowrap"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="images/item-cart-04.jpg" alt="product-Nike Jordan" class="rounded-2"></div></div><div class="d-flex flex-column"><h6 class="text-heading mb-0">Nike Jordan</h6><small>Size:8UK</small></div></div></td><td><span>$392</span></td><td><span class="text-body">1</span></td><td><span class="text-body">392</span></td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center text-nowrap"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3"><img src="images/item-cart-04.jpg" alt="product-Face cream" class="rounded-2"></div></div><div class="d-flex flex-column"><h6 class="text-heading mb-0">Face cream</h6><small>Gender:Women</small></div></div></td><td><span>$813</span></td><td><span class="text-body">2</span></td><td><span class="text-body">1626</span></td></tr></tbody>
        </table><div style="width: 1%;"></div></div>
        <div class="d-flex justify-content-end align-items-center m-6 mb-2">
          <div class="order-calculations">
            <div class="d-flex justify-content-start mb-2">
              <span class="w-px-100 text-heading">Subtotal:</span>
              <h6 class="mb-0">$2093</h6>
            </div>
            <div class="d-flex justify-content-start mb-2">
              <span class="w-px-100 text-heading">Discount:</span>
              <h6 class="mb-0">$2</h6>
            </div>
            <div class="d-flex justify-content-start mb-2">
              <span class="w-px-100 text-heading">Tax:</span>
              <h6 class="mb-0">$28</h6>
            </div>
            <div class="d-flex justify-content-start">
              <h6 class="w-px-100 mb-0">Total:</h6>
              <h6 class="mb-0">$2113</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <div class="card mb-6">
      <div class="card-header">
        <h5 class="card-title m-0">Customer details</h5>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-start align-items-center mb-6">
          <div class="avatar me-3">
            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
          </div>
          <div class="d-flex flex-column">
            <a href="app-user-view-account.html" class="text-body text-nowrap">
              <h6 class="mb-0">Shamus Tuttle</h6>
            </a>
            <span>Customer ID: #58909</span></div>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-6">
          <span class="avatar rounded-circle bg-label-success me-3 d-flex align-items-center justify-content-center"><i class="bx bx-cart bx-lg"></i></span>
          <h6 class="text-nowrap mb-0">12 Orders</h6>
        </div>
        <div class="d-flex justify-content-between">
          <h6 class="mb-1">Contact info</h6>
          <h6 class="mb-1"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editUser">Edit</a></h6>
        </div>
        <p class=" mb-1">Email: Shamus889@yahoo.com</p>
        <p class=" mb-0">Mobile: +1 (609) 972-22-22</p>
      </div>
    </div>

    <div class="card mb-6">

      <div class="card-header d-flex justify-content-between">
        <h5 class="card-title m-0">Shipping address</h5>
        <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
      </div>
      <div class="card-body">
        <p class="mb-0">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
      </div>

    </div>
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between pb-2">
        <h5 class="card-title m-0">Billing address</h5>
        <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
      </div>
      <div class="card-body">
        <p class="mb-6">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
        <h5 class="mb-1">Mastercard</h5>
        <p class="mb-0">Card Number: ******4291</p>
      </div>

    </div>
  </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit User Information</h4>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form class="row g-6" onsubmit="false">
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" value="John">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" value="Doe">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="johndoe007" value="johndoe007">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" value="example@domain.com">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <div class="position-relative"><div class="position-relative"><select id="modalEditUserStatus" name="modalEditUserStatus" class="select2 form-select select2-hidden-accessible" aria-label="Default select example" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserStatus">
              <option selected="" data-select2-id="15">Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="14" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalEditUserStatus-container"><span class="select2-selection__rendered" id="select2-modalEditUserStatus-container" role="textbox" aria-readonly="true" title="Status">Status</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" value="123 456 7890">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" value="202 555 0111">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <div class="position-relative"><div class="position-relative"><select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserLanguage">
              <option value="">Select</option>
              <option value="english" selected="" data-select2-id="26">English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="25" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="27"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <div class="position-relative"><div class="position-relative"><select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserCountry">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India" selected="" data-select2-id="54">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="53" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalEditUserCountry-container"><span class="select2-selection__rendered" id="select2-modalEditUserCountry-container" role="textbox" aria-readonly="true" title="India"><span class="select2-selection__clear" title="Remove all items" data-select2-id="55">×</span>India</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch my-2 ms-2">
              <input type="checkbox" class="form-check-input" id="editBillingAddress" checked="">
              <label for="editBillingAddress" class="switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->

<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="address-title mb-2">Add New Address</h4>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-6 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">

          <div class="col-12">
            <div class="row">
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon checked">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Home</span>
                      <small> Delivery time (9am – 9pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked="">
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                    <span class="custom-option-body">
                      <i class="bx bx-briefcase"></i>
                      <span class="custom-option-title"> Office </span>
                      <small> Delivery time (9am – 5pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalAddressFirstName">First Name</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalAddressLastName">Last Name</label>
            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe">
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Country</label>
            <div class="position-relative"><div class="position-relative"><select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" tabindex="-1" aria-hidden="true" data-select2-id="modalAddressCountry">
              <option value="" data-select2-id="82">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="81" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalAddressCountry-container"><span class="select2-selection__rendered" id="select2-modalAddressCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12 ">
            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">Landmark</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">City</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">State</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950">
          </div>
          <div class="col-12">
            <div class="form-check form-switch my-2 ms-2">
              <input type="checkbox" class="form-check-input" id="billingAddress">
              <label for="billingAddress" class="switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        <input type="hidden"></form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->



          </div>
          <!-- / Content -->

          <div class="content-backdrop fade"></div>
        </div>
</div>
@endsection

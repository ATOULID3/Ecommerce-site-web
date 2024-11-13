<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Amine Store</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/icons/274763268_680404692998477_6439814936089119377_n.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <!-- Dropzone.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"/>

<!-- DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-5k6z+f8Vz0bLm11qs3m+y5w3fPC7+vc6yfjHG7UDFM4k8us+uC4zJw1TBLyKBdFi" crossorigin="anonymous">



    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
          <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
              <div class="app-brand demo">
                <a href="index-admin" class="app-brand-link">
                  <span class="app-brand-logo demo">
                    <img src="{{ asset('images/icons/274763268_680404692998477_6439814936089119377_n.jpg') }}" alt="IMG-LOGO" style="height: 50px;">
                  </span>
                  <span class="app-brand-text demo menu-text fw-bolder ms-2">AMINE STORE</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                  <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
              </div>

              <div class="menu-inner-shadow"></div>

              <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item {{ request()->is('index-admin') ? 'active' : '' }}">
                  <a href="/index-admin" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                  </a>
                </li>
                 <!-- DashboardEcommerce -->
                <li class="menu-item {{ request()->is('Ecommerce_dash') ? 'active' : '' }}">
                    <a href="/Ecommerce_dash" class="menu-link">
                           <i class="menu-icon tf-icons bx bx-home"></i>
                        <div data-i18n="Analytics">Ecommerce Dashboard</div>
                    </a>
                </li>
                <!-- clients -->
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Clients</span>
                  </li>
                  <li class="menu-item {{ request()->is('clients') || request()->is('add_client') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                      <div data-i18n="Layouts">Clients</div>
                    </a>

                    <ul class="menu-sub">
                      <li class="menu-item {{ request()->is('clients') ? 'active' : '' }}">
                        <a href="/clients" class="menu-link">
                          <div data-i18n="Without menu">Clients</div>
                        </a>
                      </li>
                      <li class="menu-item {{ request()->is('add_client') ? 'active' : '' }}">
                        <a href="/add_client" class="menu-link">
                          <div data-i18n="Without menu">Add client</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                 <!-- product -->
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Products</span>
                  </li>
                <!-- category -->
                <li class="menu-item {{ request()->is('category') ? 'active' : '' }}">
                    <a href="/category" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-category"></i>
                      <div data-i18n="Analytics">Category</div>
                    </a>
                  </li>
                 <!-- product -->
                 <li class="menu-item {{ request()->is('product-admin') || request()->is('add_product') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-shopping-bag"></i>
                      <div data-i18n="Layouts">Products</div>
                    </a>

                    <ul class="menu-sub">
                      <li class="menu-item {{ request()->is('product-admin') ? 'active' : '' }}">
                        <a href="/product-admin" class="menu-link">
                          <div data-i18n="Without menu">Product</div>
                        </a>
                      </li>
                      <li class="menu-item {{ request()->is('add_product') ? 'active' : '' }}">
                        <a href="/add_product" class="menu-link">
                          <div data-i18n="Without menu">Add Product</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                <!-- oreders -->
                <li class="menu-item {{ request()->is('order') || request()->is('add_order') ? 'active' : '' }}">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Layouts">Order</div>
                  </a>

                  <ul class="menu-sub">
                    <li class="menu-item {{ request()->is('order') ? 'active' : '' }}">
                      <a href="/order" class="menu-link">
                        <div data-i18n="Without menu">Order list</div>
                      </a>
                    </li>
                    <li class="menu-item {{ request()->is('add_order') ? 'active' : '' }}">
                        <a href="/add_order" class="menu-link">
                          <div data-i18n="Without menu">Add Order</div>
                        </a>
                      </li>
                  </ul>
                </li>
                <!-- Logistics -->
                <li class="menu-item {{ request()->is('dash_logi') || request()->is('logistics') ? 'active' : '' }}">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-car"></i>
                    <div data-i18n="Layouts">Logistics</div>
                  </a>

                  <ul class="menu-sub">
                    <li class="menu-item {{ request()->is('dash_logi') ? 'active' : '' }}">
                      <a href="/dash_logi" class="menu-link">
                        <div data-i18n="Without menu">dash logistics</div>
                      </a>
                    </li>
                    <li class="menu-item {{ request()->is('logistics') ? 'active' : '' }}">
                      <a href="/logistics" class="menu-link">
                        <div data-i18n="Without navbar">list logistics</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- invoice -->
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Invoice</span>
                  </li>

                 <li class="menu-item {{ request()->is('invoices') || request()->is('add_invoice') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-receipt"></i>
                      <div data-i18n="Layouts">Invoice</div>
                    </a>

                    <ul class="menu-sub">
                      <li class="menu-item {{ request()->is('invoices') ? 'active' : '' }}">
                        <a href="/invoices" class="menu-link">
                          <div data-i18n="Without menu">Invoices</div>
                        </a>
                      </li>
                      <li class="menu-item {{ request()->is('add_invoice') ? 'active' : '' }}">
                        <a href="/add_invoice" class="menu-link">
                          <div data-i18n="Without menu">Add Invoice</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                <!-- pages -->
                {{-- <li class="menu-header small text-uppercase">
                  <span class="menu-header-text">Pages</span>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Account Settings</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                    <div data-i18n="Authentications">Authentications</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Login</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Register</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Forgot Password</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                    <div data-i18n="Misc">Misc</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                <!-- Components -->
                {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
                <!-- Cards -->
                <li class="menu-item">
                  <a href="cards-basic.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div data-i18n="Basic">Cards</div>
                  </a>
                </li>
                <!-- User interface -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div data-i18n="User interface">User interface</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">Accordion</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-alerts.html" class="menu-link">
                        <div data-i18n="Alerts">Alerts</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-badges.html" class="menu-link">
                        <div data-i18n="Badges">Badges</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-buttons.html" class="menu-link">
                        <div data-i18n="Buttons">Buttons</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-carousel.html" class="menu-link">
                        <div data-i18n="Carousel">Carousel</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-collapse.html" class="menu-link">
                        <div data-i18n="Collapse">Collapse</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-dropdowns.html" class="menu-link">
                        <div data-i18n="Dropdowns">Dropdowns</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-footer.html" class="menu-link">
                        <div data-i18n="Footer">Footer</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-list-groups.html" class="menu-link">
                        <div data-i18n="List Groups">List groups</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-modals.html" class="menu-link">
                        <div data-i18n="Modals">Modals</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-navbar.html" class="menu-link">
                        <div data-i18n="Navbar">Navbar</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-offcanvas.html" class="menu-link">
                        <div data-i18n="Offcanvas">Offcanvas</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                        <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-progress.html" class="menu-link">
                        <div data-i18n="Progress">Progress</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-spinners.html" class="menu-link">
                        <div data-i18n="Spinners">Spinners</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-tabs-pills.html" class="menu-link">
                        <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-toasts.html" class="menu-link">
                        <div data-i18n="Toasts">Toasts</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-tooltips-popovers.html" class="menu-link">
                        <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ui-typography.html" class="menu-link">
                        <div data-i18n="Typography">Typography</div>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Extended components -->
                <li class="menu-item">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-copy"></i>
                    <div data-i18n="Extended UI">Extended UI</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="extended-ui-text-divider.html" class="menu-link">
                        <div data-i18n="Text Divider">Text Divider</div>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="menu-item">
                  <a href="icons-boxicons.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-crown"></i>
                    <div data-i18n="Boxicons">Boxicons</div>
                  </a>
                </li> --}}

                <!-- Forms & Tables -->
                {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
                <!-- Forms -->
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Form Elements">Form Elements</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="forms-basic-inputs.html" class="menu-link">
                        <div data-i18n="Basic Inputs">Basic Inputs</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="forms-input-groups.html" class="menu-link">
                        <div data-i18n="Input groups">Input groups</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div data-i18n="Form Layouts">Form Layouts</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="form-layouts-vertical.html" class="menu-link">
                        <div data-i18n="Vertical Form">Vertical Form</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="form-layouts-horizontal.html" class="menu-link">
                        <div data-i18n="Horizontal Form">Horizontal Form</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Tables -->
                <li class="menu-item">
                  <a href="tables-basic.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-table"></i>
                    <div data-i18n="Tables">Tables</div>
                  </a>
                </li> --}}
                <!-- Misc -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
                <li class="menu-item">
                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="menu-link"
                  >
                    <i class="menu-icon tf-icons bx bx-support"></i>
                    <div data-i18n="Support">Support</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="menu-link"
                  >
                    <i class="menu-icon tf-icons bx bx-file"></i>
                    <div data-i18n="Documentation">Documentation</div>
                  </a>
                </li>
              </ul>
            </aside>
                    <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
              class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
              id="layout-navbar"
            >
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>

              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                  <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                      type="text"
                      class="form-control border-0 shadow-none"
                      placeholder="Search..."
                      aria-label="Search..."
                    />
                  </div>
                </div>
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <!-- Place this tag where you want the button to render. -->
                  <li class="nav-item lh-1 me-3">
                    <a
                      class="github-button"
                      href="https://github.com/themeselection/sneat-html-admin-template-free"
                      data-icon="octicon-star"
                      data-size="large"
                      data-show-count="true"
                      aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                      >Star</a
                    >
                  </li>
                  <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                      <span class="position-relative">
                        <i class="bx bx-bell bx-sm"></i>
                        <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                      </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                          <h6 class="mb-0 me-auto">Notification</h6>
                          <div class="d-flex align-items-center h6 mb-0">
                            <span class="badge bg-label-primary me-2">8 New</span>
                            <a href="javascript:void(0)" class="dropdown-notifications-all p-2" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark all as read" data-bs-original-title="Mark all as read"><i class="bx bx-envelope-open text-heading"></i></a>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown-notifications-list scrollable-container ps">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/1.png" alt="" class="rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">Congratulation Lettie 🎉</h6>
                                <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                                <small class="text-muted">1h ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">Charles Franklin</h6>
                                <small class="mb-1 d-block text-body">Accepted your connection</small>
                                <small class="text-muted">12hr ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/2.png" alt="" class="rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">New Message ✉️</h6>
                                <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                                <small class="text-muted">1h ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">Whoo! You have new order 🛒 </h6>
                                <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                                <small class="text-muted">1 day ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/9.png" alt="" class="rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">Application has been approved 🚀 </h6>
                                <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                                <small class="text-muted">2 days ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">Monthly report is generated</h6>
                                <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/5.png" alt="" class="rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">Send connection request</h6>
                                <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                                <small class="text-muted">4 days ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/6.png" alt="" class="rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">New message from Jane</h6>
                                <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                                <small class="text-muted">5 days ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="small mb-0">CPU is running high</h6>
                                <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                                <small class="text-muted">5 days ago</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                      <li class="border-top">
                        <div class="d-grid p-4">
                          <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                            <small class="align-middle">View all notifications</small>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown-notifications">
                    <a class="nav-link " href="/emails"  data-bs-auto-close="outside" aria-expanded="false">
                      <span class="position-relative">
                        <i class="bx bx-envelope bx-sm"></i>
                        <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                      </span>
                    </a>
                  </li>

                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-semibold d-block">John Doe</span>
                              <small class="text-muted">Admin</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="/profile">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="/settings">
                          <i class="bx bx-cog me-2"></i>
                          <span class="align-middle">Settings</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="/Billing">
                          <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                          </span>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="/logout">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">


                @yield("contentt")


                            <!-- Footer -->
            {{-- <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                  </div>
                  <div>
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a
                      href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link me-4"
                      >Support</a
                    >
                  </div>
                </div>
              </footer>
              <!-- / Footer -->
              <div class="content-backdrop fade"></div>
            </div> --}}
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
          <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Dropzone.js JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<!-- jQuery (necessary for DataTables) -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<!-- js -->
	<script src="{{ asset('vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('vendors/scripts/script.min.js')}}"></script>
	<script src="{{ asset('vendors/scripts/process.js')}}"></script>
	<script src="{{ asset('vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<!-- buttons for Export datatable -->
	<script src="{{asset('plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>


<!-- Optional: Bootstrap JS for additional components -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-X5SeQ8Gr2l3QUFLjDsFSe4QlkIF5OtJDUxDXFQq/6hU2j5KL6fgj8rxOYRaQ6pNr" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-7+q8Rhr6p+I3A5z6Ozx4KsLCbQtZayN7QZ79IQqaktrfTjkU0JGmP/LjzUrc8gCx" crossorigin="anonymous"></script>


<!-- Initialize Dropzone -->
<script>
  Dropzone.options.dropzoneBasic = {
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
    acceptedFiles: "image/*",
    dictDefaultMessage: "Drag and drop your image here or click to browse",
    init: function() {
      this.on("success", function(file, response) {
        // Handle successful uploads here
        console.log("File uploaded successfully:", response);
      });
      this.on("error", function(file, errorMessage) {
        // Handle errors during upload
        console.log("File upload error:", errorMessage);
      });
    }
  };
</script>
  </body>
</html>

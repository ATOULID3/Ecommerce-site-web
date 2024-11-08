@extends('admin.admin-layout.style')
@section('title')
    logistics
@endsection
@section('contentt')
<div class="container-fluid my-4">
    <div class="row">
        <!-- Dashboard Summary -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-primary">Total Orders</h5>
                            <h3 id="totalOrders">150</h3>
                        </div>
                        <i class="fas fa-box fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-success">Orders Delivered</h5>
                            <h3 id="ordersDelivered">120</h3>
                        </div>
                        <i class="fas fa-check-circle fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-info">In Transit</h5>
                            <h3 id="inTransitOrders">25</h3>
                        </div>
                        <i class="fas fa-shipping-fast fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-warning">Pending Orders</h5>
                            <h3 id="pendingOrders">5</h3>
                        </div>
                        <i class="fas fa-clock fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logistics Tracking Table and Map -->
    <div class="row">
        <!-- Logistics Tracking Table -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Logistics Tracking</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Status</th>
                                    <th>Last Update</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody id="logisticsTable">
                                <!-- Dynamic rows will be populated here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map for Logistics Tracking -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Tracking Map</h5>
                </div>
                <div class="card-body">
                    <div id="logisticsMap" style="width: 100%; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 order-5">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2">On Route Vehicles</h5>
            </div>
            <div class="dropdown">
              <button class="btn text-muted p-0" type="button" id="routeVehicles" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded bx-lg"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
              </div>
            </div>
          </div>
          <div class="card-datatable table-responsive">
            <table class="dt-route-vehicles table table-sm dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
              <thead>
                <tr>
                  <th class="sorting_disabled dtr-hidden" style="width: 0px; display: none;"></th>
                  <th class="dt-checkboxes-cell dt-checkboxes-select-all" style="width: 18px;">
                    <input type="checkbox" class="form-check-input">
                  </th>
                  <th class="sorting" style="width: 143px;" aria-label="Location: activate to sort column descending">Location</th>
                  <th class="sorting" style="width: 217px;" aria-label="Starting Route: activate to sort column ascending">Starting Route</th>
                  <th class="sorting" style="width: 215px;" aria-label="Ending Route: activate to sort column ascending">Ending Route</th>
                  <th class="sorting" style="width: 175px;" aria-label="Warnings: activate to sort column ascending">Warnings</th>
                  <th class="w-20 sorting" style="width: 206px;" aria-label="Progress: activate to sort column ascending">Progress</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd">
                  <td class="control" style="display: none;"></td>
                  <td class="dt-checkboxes-cell">
                    <input type="checkbox" class="dt-checkboxes form-check-input">
                  </td>
                  <td>
                    <div class="d-flex justify-content-start align-items-center">
                      <div class="avatar-wrapper">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded-circle bg-label-secondary">
                            <i class="bx bxs-truck bx-lg"></i>
                          </span>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-159145</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-body">Paris 19, France</div>
                  </td>
                  <td>
                    <div class="text-body">Dresden, Germany</div>
                  </td>
                  <td>
                    <span class="badge rounded bg-label-success">No Warnings</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="text-body ms-3">60%</div>
                    </div>
                  </td>
                </tr>
                <tr class="even">
                  <td class="control" style="display: none;"></td>
                  <td class="dt-checkboxes-cell">
                    <input type="checkbox" class="dt-checkboxes form-check-input">
                  </td>
                  <td>
                    <div class="d-flex justify-content-start align-items-center">
                      <div class="avatar-wrapper">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded-circle bg-label-secondary">
                            <i class="bx bxs-truck bx-lg"></i>
                          </span>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-182964</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-body">Saintes, France</div>
                  </td>
                  <td>
                    <div class="text-body">Roma, Italy</div>
                  </td>
                  <td>
                    <span class="badge rounded bg-label-primary">Fuel Problems</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="text-body ms-3">82%</div>
                    </div>
                  </td>
                </tr>
                <tr class="odd">
                  <td class="control" style="display: none;"></td>
                  <td class="dt-checkboxes-cell">
                    <input type="checkbox" class="dt-checkboxes form-check-input">
                  </td>
                  <td>
                    <div class="d-flex justify-content-start align-items-center">
                      <div class="avatar-wrapper">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded-circle bg-label-secondary">
                            <i class="bx bxs-truck bx-lg"></i>
                          </span>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-276904</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-body">Aulnay-sous-Bois, France</div>
                  </td>
                  <td>
                    <div class="text-body">Torino, Italy</div>
                  </td>
                  <td>
                    <span class="badge rounded bg-label-warning">Temperature Not Optimal</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="text-body ms-3">30%</div>
                    </div>
                  </td>
                </tr>
                <tr class="even">
                  <td class="control" style="display: none;"></td>
                  <td class="dt-checkboxes-cell">
                    <input type="checkbox" class="dt-checkboxes form-check-input">
                  </td>
                  <td>
                    <div class="d-flex justify-content-start align-items-center">
                      <div class="avatar-wrapper">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded-circle bg-label-secondary">
                            <i class="bx bxs-truck bx-lg"></i>
                          </span>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-300198</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-body">West Palm Beach, USA</div>
                  </td>
                  <td>
                    <div class="text-body">Dresden, Germany</div>
                  </td>
                  <td>
                    <span class="badge rounded bg-label-danger">ECU Not Responding</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="text-body ms-3">90%</div>
                    </div>
                  </td>
                </tr>
                <tr class="odd">
                  <td class="control" style="display: none;"></td>
                  <td class="dt-checkboxes-cell">
                    <input type="checkbox" class="dt-checkboxes form-check-input">
                  </td>
                  <td>
                    <div class="d-flex justify-content-start align-items-center">
                      <div class="avatar-wrapper">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded-circle bg-label-secondary">
                            <i class="bx bxs-truck bx-lg"></i>
                          </span>
                        </div>
                      </div>
                      <div class="d-flex flex-column">
                        <a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-125478</a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-body">Marseille, France</div>
                  </td>
                  <td>
                    <div class="text-body">Copenhagen, Denmark</div>
                  </td>
                  <td>
                    <span class="badge rounded bg-label-warning">Engine Overheating</span>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="progress w-100" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="text-body ms-3">45%</div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
<!-- Leaflet CSS and JS for interactive map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sample data for logistics
    const logisticsData = [
        { orderId: 101, status: 'Dispatched', lastUpdate: '2024-11-08 10:00 AM', location: [40.7128, -74.0060] },
        { orderId: 102, status: 'In Transit', lastUpdate: '2024-11-08 01:00 PM', location: [41.8781, -87.6298] },
        { orderId: 103, status: 'Out for Delivery', lastUpdate: '2024-11-08 05:00 PM', location: [34.0522, -118.2437] }
    ];

    // Populate logistics tracking table
    const logisticsTable = document.getElementById('logisticsTable');
    logisticsData.forEach(data => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${data.orderId}</td>
            <td>${data.status}</td>
            <td>${data.lastUpdate}</td>
            <td>${data.location.join(', ')}</td>
        `;
        logisticsTable.appendChild(row);
    });

    // Initialize Leaflet map
    const map = L.map('logisticsMap').setView([37.0902, -95.7129], 4); // Centered over the US
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Add markers to map for each logistics data point
    logisticsData.forEach(data => {
        L.marker(data.location).addTo(map)
            .bindPopup(`<strong>Order #${data.orderId}</strong><br>Status: ${data.status}<br>Last Update: ${data.lastUpdate}`);
    });
});
</script>
@endsection

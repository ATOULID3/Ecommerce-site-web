@extends('admin.admin-layout.style')
@section('title')
    logistics
@endsection
@section('contentt')
<div class="container my-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
        <div class="d-flex flex-column justify-content-center">
            <div class="mb-1">
                <span class="h5">Order #<span id="orderId"></span></span>
                <span class="badge bg-label-success me-1 ms-2" id="orderPaidStatus">Paid</span>
                <span class="badge bg-label-info" id="orderStatus">In Transit</span>
            </div>
            <p class="mb-0" id="orderDate"></p>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-2">
            <button class="btn btn-danger delete-order" onclick="deleteOrder()">Delete Order</button>
        </div>
    </div>

    <!-- Logistics Tracking Information -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title m-0">Logistics Tracking</h5>
        </div>
        <div class="card-body">
            <div class="tracking-info" id="trackingInfoContainer">
                <!-- Tracking steps will be dynamically added here -->
            </div>
        </div>
    </div>

    <!-- Map for Visualizing Tracking -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0">Tracking Map</h5>
        </div>
        <div class="card-body">
            <div id="mapContainer" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
</div>
<!-- Include Leaflet CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sample data - replace with actual data or an API call
        const orderData = {
            id: 1234,
            paidStatus: 'Paid',
            status: 'In Transit',
            date: '2024-11-08',
            logistics: [
                { status: 'Dispatched', coordinates: [40.7128, -74.0060], time: '2024-11-08 10:00 AM' },
                { status: 'In Transit', coordinates: [41.8781, -87.6298], time: '2024-11-08 01:00 PM' },
                { status: 'Out for Delivery', coordinates: [34.0522, -118.2437], time: '2024-11-08 05:00 PM' }
            ]
        };

        // Populate order details
        document.getElementById('orderId').textContent = orderData.id;
        document.getElementById('orderPaidStatus').textContent = orderData.paidStatus;
        document.getElementById('orderStatus').textContent = orderData.status;
        document.getElementById('orderDate').textContent = orderData.date;

        // Populate logistics tracking steps
        const trackingContainer = document.getElementById('trackingInfoContainer');
        orderData.logistics.forEach(logistic => {
            const trackingStep = document.createElement('div');
            trackingStep.classList.add('tracking-step', 'mb-3');
            trackingStep.innerHTML = `
                <span class="badge bg-primary">Status:</span> <span>${logistic.status}</span><br>
                <span class="badge bg-secondary">Coordinates:</span> <span>(${logistic.coordinates.join(', ')})</span><br>
                <span class="badge bg-info">Time:</span> <span>${logistic.time}</span>
            `;
            trackingContainer.appendChild(trackingStep);
        });

        // Initialize the map
        const map = L.map('mapContainer').setView(orderData.logistics[0].coordinates, 5);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add markers to the map
        orderData.logistics.forEach(logistic => {
            L.marker(logistic.coordinates).addTo(map)
                .bindPopup(`<strong>${logistic.status}</strong><br>${logistic.time}`)
                .openPopup();
        });
    });

    // Example function for delete order - replace with actual logic
    function deleteOrder() {
        alert('Order deleted.');
    }
</script>
@endsection

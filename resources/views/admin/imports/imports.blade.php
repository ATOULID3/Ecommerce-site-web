@extends('admin.admin-layout.style')
@section('title')
    imports
@endsection
@section('contentt')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <h1 class="text-center">Export Data</h1>
            <p class="text-center text-muted">Download clients and orders data in Excel format.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Export Clients</h5>
                </div>
                <div class="card-body">
                    <p>Download all client data in an Excel file.</p>
                    <a href="" class="btn btn-success w-100">
                        <i class="fas fa-download"></i> Export Clients
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Export Orders</h5>
                </div>
                <div class="card-body">
                    <p>Download all order data in an Excel file.</p>
                    <a href="" class="btn btn-success w-100">
                        <i class="fas fa-download"></i> Export Orders
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-center">Import Data</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Import Clients</h5>
                </div>
                <div class="card-body">
                    <p>Upload an Excel file to add or update client data.</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-3">
                            <i class="fas fa-upload"></i> Import Clients
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Import Orders</h5>
                </div>
                <div class="card-body">
                    <p>Upload an Excel file to add or update order data.</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-3">
                            <i class="fas fa-upload"></i> Import Orders
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

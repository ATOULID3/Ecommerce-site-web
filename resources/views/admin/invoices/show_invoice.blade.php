@extends('admin.admin-layout.style')
@section('title')
    invoices
@endsection
@section('contentt')
<div class="container py-5">
    <div class="invoice-box p-5 border rounded shadow-sm">
        <!-- Invoice Header with Logo and Title -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <img src="{{ asset('../assets/img/favicon/favicon.ico') }}" alt="Company Logo" style="max-height: 70px;">
            </div>
            <div>
                <h2 class="mb-0">Invoice #{{ $invoice->invoice }}</h2>
                <small class="text-muted">Date Issued: {{ $invoice->date_issued }}</small><br>
                <small class="text-muted">Due Date: {{ $invoice->due_date }}</small>
            </div>
        </div>

        <!-- Billing Information -->
        <div class="row mb-5">
            <div class="col-md-6">
                <h5>Billed To</h5>
                <p><strong>{{ $invoice->invoice_to }}</strong></p>
                <p>Company or Client Address Line 1</p>
                <p>City, State, Zip</p>
                <p>Email: client@example.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
            <div class="col-md-6 text-end">
                <h5>Company Information</h5>
                <p>Our Company Name</p>
                <p>Company Address Line 1</p>
                <p>City, State, Zip</p>
                <p>Email: info@ourcompany.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
        </div>

        <!-- Invoice Items Table -->
        <table class="table table-striped table-borderless">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Item Description</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Invoice Summary -->
        <div class="row mt-4">
            <div class="col-md-6">
                <h5>Payment Information</h5>
                <p><strong>Bank Name:</strong> {{ $invoice->bank_name }}</p>
                <p><strong>IBAN:</strong> {{ $invoice->iban }}</p>
                <p><strong>SWIFT:</strong> {{ $invoice->swift }}</p>
            </div>
            <div class="col-md-6 text-end">
                <h5>Total Due</h5>
                <h3 class="text-primary">${{ number_format($invoice->total_due, 2) }}</h3>
            </div>
        </div>

        <!-- Download PDF Button -->
        <div class="d-flex justify-content-end mt-5">
            <a href="{{ route('invoices.downloadPDF', $invoice->id) }}" class="btn btn-primary"target="_blank">
                <i class="bx bxs-download"></i> Download PDF
            </a>
        </div>
    </div>
</div>
@endsection

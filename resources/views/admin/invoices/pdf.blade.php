<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #{{ $invoice->invoice }}</title>
    <style>
        /* Basic Styling for PDF */
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        .header, .footer {
            text-align: center;
        }
        .header img {
            max-height: 60px;
        }
        .header h1 {
            margin: 10px 0;
        }
        .section-title {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .row div {
            width: 48%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f5f5f5;
            text-align: left;
        }
        .total {
            font-weight: bold;
            font-size: 1.1em;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header with Logo and Invoice Information -->
    <div class="header">
        <h1>Invoice #{{ $invoice->invoice }}</h1>
        <p>Date Issued: {{ $invoice->date_issued }}</p>
        <p>Due Date: {{ $invoice->due_date }}</p>
    </div>

    <!-- Billing Information -->
    <div class="row">
        <div>
            <h3 class="section-title">Invoice To</h3>
            <p><strong>{{ $invoice->invoice_to }}</strong></p>
            <p>Client Address Line 1</p>
            <p>City, State, Zip</p>
            <p>Email: client@example.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>
        <div>
            <h3 class="section-title">Our Company Information</h3>
            <p>Company Name</p>
            <p>Company Address Line 1</p>
            <p>City, State, Zip</p>
            <p>Email: info@company.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>
    </div>

    <!-- Invoice Items Table -->
    <h3 class="section-title">Invoice Details</h3>
    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total</th>
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
        <tfoot>
            <tr>
                <td colspan="3" class="text-right">Total Due</td>
                <td class="total">${{ number_format($invoice->total_due, 2) }}</td>
            </tr>
        </tfoot>
    </table>

    <!-- Payment Information -->
    <div class="row mt-4">
        <div>
            <h3 class="section-title">Payment Information</h3>
            <p><strong>Bank Name:</strong> {{ $invoice->bank_name }}</p>
            <p><strong>IBAN:</strong> {{ $invoice->iban }}</p>
            <p><strong>SWIFT:</strong> {{ $invoice->swift }}</p>
        </div>
            <!-- Footer -->
    <div class="footer mt-5">
        <p>Thank you for your business!</p>
    </div>
    </div>
</body>
</html>

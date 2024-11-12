@extends('admin.admin-layout.style')
@section('title')
    invoices
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row invoice-add">
      <!-- Invoice Add-->
            <div class="col-lg-12 col-16">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create New Invoice</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('invoices.store') }}" method="POST">
                            @csrf
                            <!-- Invoice Information -->
                            <div class="mb-4">
                                <label for="invoice" class="form-label">Invoice Number</label>
                                <input type="text" class="form-control" id="invoice" name="invoice" placeholder="INV-1001" required>
                            </div>
                            <div class="mb-4">
                                <label for="date_issued" class="form-label">Date Issued</label>
                                <input type="date" class="form-control" id="date_issued" name="date_issued" required>
                            </div>
                            <div class="mb-4">
                                <label for="due_date" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="due_date" name="due_date" required>
                            </div>
                            <div class="mb-4">
                                <label for="invoice_to" class="form-label">Invoice To</label>
                                <input type="text" class="form-control" id="invoice_to" name="invoice_to" placeholder="Client Name or Company" required>
                            </div>

                            <!-- Invoice Details (Items) -->
                            <h5 class="mb-3">Invoice Details</h5>
                            <div class="invoice-details">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="item" class="form-label">Item</label>
                                        <input type="text" class="form-control" name="items[0][name]" placeholder="Item Description" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="item_price" class="form-label">Unit Price ($)</label>
                                        <input type="number" class="form-control" name="items[0][price]" placeholder="Unit Price" step="0.01" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="item_qty" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" name="items[0][quantity]" placeholder="1" min="1" required>
                                    </div>
                                    <div class="col-md-1 d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-danger btn-sm delete-item" data-index="0">
                                            <i class="bx bx-x"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" id="add-item-btn">Add Another Item</button>

                            <!-- Invoice Summary -->
                            <div class="mt-4">
                                <h5>Invoice Summary</h5>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="total_due" class="form-label">Total Due ($)</label>
                                        <input type="number" class="form-control" id="total_due" name="total_due" step="0.01">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bank_name" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="iban" class="form-label">IBAN</label>
                                        <input type="text" class="form-control" id="iban" name="iban" placeholder="IBAN" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="swift" class="form-label">SWIFT Code</label>
                                        <input type="text" class="form-control" id="swift" name="swift" placeholder="SWIFT Code" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Create Invoice</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    <!-- Optional: Add Item Script (if using JS for dynamically adding items) -->
    <script>
        document.getElementById('add-item-btn').addEventListener('click', function() {
            let itemIndex = document.querySelectorAll('.invoice-details .row').length;
            const newItemRow = `
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="item" class="form-label">Item</label>
                        <input type="text" class="form-control" name="items[${itemIndex}][name]" placeholder="Item Description" required>
                    </div>
                    <div class="col-md-3">
                        <label for="item_price" class="form-label">Unit Price ($)</label>
                        <input type="number" class="form-control" name="items[${itemIndex}][price]" placeholder="Unit Price" step="0.01" required>
                    </div>
                    <div class="col-md-2">
                        <label for="item_qty" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="items[${itemIndex}][quantity]" placeholder="1" min="1" required>
                    </div>
                    <div class="col-md-1 d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-danger btn-sm delete-item" data-index="${itemIndex}">
                            <i class="bx bx-x"></i>
                        </button>
                    </div>
                </div>
            `;
            document.querySelector('.invoice-details').insertAdjacentHTML('beforeend', newItemRow);
        });

        // Remove item
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-item')) {
                e.target.closest('.row').remove();
            }
        });
    </script>

      <!-- /Invoice Add-->

      <!-- Invoice Actions -->
      {{-- <div class="col-lg-3 col-12 invoice-actions">
        <div class="card mb-6">
            <div class="card-body">
                <!-- Send Invoice Button -->
                <button class="btn btn-primary d-grid w-100 mb-4" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                    <span class="d-flex align-items-center justify-content-center text-nowrap">
                        <i class="bx bx-paper-plane bx-xs me-2"></i> Send Invoice
                    </span>
                </button>
                <!-- Preview Invoice Link -->
                <button class="btn btn-warning d-grid w-100 mb-4"><a href="./app-invoice-preview.html">Preview</a></button>
                <!-- Save Button -->
                <button type="button" class="btn btn-success d-grid w-100">Save</button>
            </div>
        </div>
        <br>

        <!-- Payment Options -->
        <div>
            <label for="acceptPaymentsVia" class="form-label">Accept Payments via</label>
            <select class="form-select mb-6" id="acceptPaymentsVia">
                <option value="Bank Account">Bank Account</option>
                <option value="Paypal">Paypal</option>
                <option value="Card">Credit/Debit Card</option>
                <option value="UPI Transfer">UPI Transfer</option>
            </select>

            <!-- Payment Terms Toggle -->
            <div class="d-flex justify-content-between mb-2">
                <label for="payment-terms" class="form-label">Payment Terms</label>
                <div class="form-check form-switch me-n2">
                    <input type="checkbox" class="form-check-input" id="payment-terms" checked>
                </div>
            </div>

            <!-- Client Notes Toggle -->
            <div class="d-flex justify-content-between mb-2">
                <label for="client-notes" class="form-label">Client Notes</label>
                <div class="form-check form-switch me-n2">
                    <input type="checkbox" class="form-check-input" id="client-notes" checked>
                </div>
            </div>

            <!-- Payment Stub Toggle -->
            <div class="d-flex justify-content-between">
                <label for="payment-stub" class="form-label">Payment Stub</label>
                <div class="form-check form-switch me-n2">
                    <input type="checkbox" class="form-check-input" id="payment-stub" checked>
                </div>
            </div>
        </div>
    </div> --}}
      <!-- /Invoice Actions -->
    </div>

    <!-- Offcanvas -->
    <!-- Send Invoice Sidebar -->
    {{-- <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
        <div class="offcanvas-header mb-4 border-bottom">
            <h5 class="offcanvas-title">Send Invoice</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-0 flex-grow-1">
            <form id="sendInvoiceForm">
                <!-- From Field -->
                <div class="mb-4">
                    <label for="invoice-from" class="form-label">From</label>
                    <input type="email" class="form-control" id="invoice-from" value="shelbyCompany@email.com" placeholder="Enter your email" required>
                </div>

                <!-- To Field -->
                <div class="mb-4">
                    <label for="invoice-to" class="form-label">To</label>
                    <input type="email" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="Enter recipient's email" required>
                </div>

                <!-- Subject Field -->
                <div class="mb-4">
                    <label for="invoice-subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice subject" required>
                </div>

                <!-- Message Field -->
                <div class="mb-4">
                    <label for="invoice-message" class="form-label">Message</label>
                    <textarea class="form-control" id="invoice-message" rows="5" placeholder="Your message here" required>Dear Queen Consolidated,
                    Thank you for your business, always a pleasure to work with you!
                    We have generated a new invoice in the amount of $95.59.
                    We would appreciate payment of this invoice by 05/11/2021.</textarea>
                </div>

                <!-- Attachment Badge -->
                <div class="mb-4">
                    <span class="badge bg-label-primary">
                        <i class="bx bx-link bx-xs"></i>
                        <span class="align-middle">Invoice Attached</span>
                    </span>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap">
                    <button type="submit" class="btn btn-primary me-3">Send</button>
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>
        </div>
    </div> --}}

    <script>
        // Handle Form Submission
        document.getElementById('sendInvoiceForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const fromEmail = document.getElementById('invoice-from').value;
            const toEmail = document.getElementById('invoice-to').value;
            const subject = document.getElementById('invoice-subject').value;
            const message = document.getElementById('invoice-message').value;

            // Example AJAX call to send the invoice (replace with your actual API endpoint)
            fetch('/send-invoice', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    fromEmail: fromEmail,
                    toEmail: toEmail,
                    subject: subject,
                    message: message
                }),
            })
            .then(response => response.json())
            .then(data => {
                alert("Invoice sent successfully!");
                const offcanvasElement = document.getElementById('sendInvoiceOffcanvas');
                const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
                offcanvas.hide();
            })
            .catch(error => {
                console.error("Error sending invoice:", error);
                alert("There was an error sending the invoice.");
            });
        });
    </script>
    <!-- /Send Invoice Sidebar -->

    <!-- /Offcanvas -->
</div>

{{-- <script>
    // JavaScript to handle payment option changes
    document.getElementById('acceptPaymentsVia').addEventListener('change', function() {
        const selectedOption = this.value;
        console.log("Payment method selected:", selectedOption);
        // Add any additional handling logic here, such as updating the invoice preview.
    });

    // Event listeners for toggles
    document.getElementById('payment-terms').addEventListener('change', function() {
        console.log("Payment terms:", this.checked ? "Enabled" : "Disabled");
    });

    document.getElementById('client-notes').addEventListener('change', function() {
        console.log("Client notes:", this.checked ? "Enabled" : "Disabled");
    });

    document.getElementById('payment-stub').addEventListener('change', function() {
        console.log("Payment stub:", this.checked ? "Enabled" : "Disabled");
    });
</script> --}}
@if ($errors->any())
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let errorMessages = `
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    `;
    Swal.fire({
        icon: 'error',
        title: 'Oops... Something went wrong!',
        html: errorMessages,
        confirmButtonText: 'OK'
    });
</script>
@endif
@endsection

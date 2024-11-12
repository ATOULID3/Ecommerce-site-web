<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use PDF;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function invoices(){
        $invoices=Invoice::all();
        return view('admin.invoices.invoices',compact('invoices'));
    }
    public function add_invoice(){
        return view('admin.invoices.add_invoice');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice' => 'required|string',
            'date_issued' => 'required|date',
            'due_date' => 'required|date',
            'invoice_to' => 'required|string',
            'total_due' => 'required|numeric',
            'bank_name' => 'required|string',
            'iban' => 'required|string',
            'swift' => 'required|string',
            'items' => 'required|array',
            'items.*.name' => 'required|string',
            'items.*.price' => 'required|numeric',
            'items.*.quantity' => 'required|integer',
        ]);

        $invoice = Invoice::create($validated);

        // You can also store the invoice items in a related table if needed
        foreach ($request->input('items') as $item) {
            $invoice->items()->create([
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity']
            ]);
        }

        return redirect()->route('invoices')->with('success', 'Invoice created successfully!');
    }
    public function show_invoice($id)
    {
        $invoice = Invoice::with('items')->findOrFail($id);
        return view('admin.invoices.show_invoice', compact('invoice'));
    }
    public function downloadPDF($id)
    {
        $invoice = Invoice::with('items')->findOrFail($id);
        $pdf = PDF::loadView('admin.invoices.pdf', compact('invoice'));
        return $pdf->stream("invoice-{$invoice->invoice}.pdf");
    }
    public function destroy($id)
    {
        // Find the order by ID
        $invoice = Invoice::findOrFail($id);

        // Delete the order
        $invoice->delete();

        // Redirect back with a success message
        return redirect()->route('invoices')->with('success', 'Invoice deleted successfully.');
    }
}

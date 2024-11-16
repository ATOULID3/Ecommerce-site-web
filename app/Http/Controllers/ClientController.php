<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client(){
        $clientCount = Client::count(); // Total number of clients
        $clients = Client::paginate(10);  // Limite à 10 clients par page
        return view('admin.clients.client',compact('clients','clientCount'));
    }
    public function add_client(){
        return view('admin.clients.add_client');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        Client::create($request->all());

        return redirect()->route('clients')->with('success', 'Client added successfully.');
    }
    public function destroy($id)
{
    $client = Client::findOrFail($id);
    $client->delete();

    return redirect()->route('clients')->with('success', 'Client deleted successfully');
}

}

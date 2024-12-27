<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Mail\ClientNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    public function chat(){
        $chats=Chat::all();
        $clients=Client::all();
        $users=User::all();
        return view('admin.chat.chat',compact('users','clients','chats'));
    }
    public function sendMessage(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // Create a new message record
        $chats = new Chat();
        $chats->message = $request->message;
        $chats->save();

        return redirect('/chat');
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $clients = Client::all();

        foreach ($clients as $client) {
            $messageContent = [
                'name' => $client->name,
                'body' => $request->message,
                'subject' => $request->subject, // Pass the subject here
            ];

            Mail::to($client->email)->send(new ClientNotification($messageContent));
        }

        return redirect()->back()->with('success', 'Emails have been sent to all clients.');
    }
}

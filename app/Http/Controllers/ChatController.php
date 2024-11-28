<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}

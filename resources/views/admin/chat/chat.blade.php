@extends('admin.admin-layout.style')
@section('title')
    Chat
@endsection
@section('contentt')
<style>
.chat-container {
    display: flex;
    height: 100vh;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Sidebar: User List */
.sidebar {
    width: 25%;
    background-color: #97adc3;
    color: #ecf0f1;
    padding: 20px;
    overflow-y: auto;
}

.sidebar h3 {
    margin-bottom: 20px;
}

.user-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.user-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding: 10px;
    background: #34495e;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.user-item:hover {
    background: #6951e1;
}

.user-avatar img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.user-info {
    display: flex;
    flex-direction: column;
}

.user-name {
    font-size: 16px;
    font-weight: bold;
}

.user-status {
    font-size: 12px;
    color: #bdc3c7;
}

/* Chat Area */
.chat-area {
    width: 75%;
    display: flex;
    flex-direction: column;
    background: #ecf0f1;
}

.chat-header {
    background: #ddd;
    color: white;
    padding: 15px;
    font-size: 18px;
    font-weight: bold;
}

.chat-messages {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
    background: #f8f9fa;
    border: 1px solid #ddd;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.chat-messages .placeholder {
    text-align: center;
    color: #999;
    font-style: italic;
}

.message {
    max-width: 70%;
    padding: 10px;
    border-radius: 8px;
    font-size: 14px;
    line-height: 1.4;
    word-wrap: break-word;
}

.message-left {
    background: #dff9fb;
    align-self: flex-start;
}

.message-right {
    background: #74b9ff;
    color: white;
    align-self: flex-end;
}

/* Footer */
.chat-footer {
    padding: 15px;
    display: flex;
    border-top: 1px solid #ddd;
}

.chat-footer form {
    display: flex;
    width: 100%;
}

.chat-footer input[type="text"] {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    outline: none;
}

.chat-footer button {
    padding: 10px 20px;
    margin-left: 10px;
    border: none;
    border-radius: 4px;
    background: #2980b9;
    color: white;
    cursor: pointer;
    transition: background 0.3s ease;
}

.chat-footer button:hover {
    background: #1e6e9f;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="chat-container">
        <!-- Sidebar: User List -->
        <div class="sidebar">
            <h3 id="header1" name="main-heading">Users</h3>
            <ul id="userList" class="user-list">
                @foreach ($clients as $client)
                <li class="user-item" data-user-id="{{ $client->id }}">
                    <div class="user-avatar">
                        <img src="../assets/img/avatars/7.png" alt="Avatar">
                    </div>
                    <div class="user-info">
                        <span class="user-name">{{ $client->name }}</span>
                        <small class="user-status">Last active: {{ $client->updated_at->diffForHumans() }}</small>
                    </div>
                </li>
            @endforeach
                @foreach ($users as $user)
                    <li class="user-item" data-user-id="{{ $user->id }}">
                        <div class="user-avatar">
                            <img src="../assets/img/avatars/5.png" alt="Avatar">
                        </div>
                        <div class="user-info">
                            <span class="user-name">{{ $user->name }}</span>
                            <small class="user-status">Last active: {{ $user->updated_at->diffForHumans() }}</small>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Main Chat Area -->
        <div class="chat-area">
            <div class="chat-header">
                <h3 id="chatUserName">Select a User</h3>
            </div>
            <div class="card-body p-4">
                <div id="messages" class="chat-messages mb-3" style="height: 400px; overflow-y: auto; border: 1px solid #ddd; padding: 10px;">
        <!-- Messages Section --><div id="messages" class="chat-messages">
    <!-- Messages Section -->
    <ul class="chat-messages-list">
        @foreach ($chats as $chat)
        <li class="clearfix admin_chat">
            <span class="chat-img">
                <img src="vendors/images/chat-img2.jpg" alt="">
            </span>
            <div class="chat-body clearfix">
                <p>{{$chat->message}}</p>
                <div class="chat_time">{{$chat->created_at}}</div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
                </div>
            <div class="chat-footer">
                <form  method="POST" action="{{ route('chat.store') }}">
                    @csrf
                    <input type="text" id="message" name="message" placeholder="Type your message here..." >
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let selectedUser = null;

        document.querySelectorAll('.user-item').forEach(item => {
            item.addEventListener('click', function () {
                selectedUser = this.getAttribute('data-user-id');
                const userName = this.querySelector('.user-name').textContent;
                document.getElementById('chatUserName').textContent = `Chat with ${userName}`;
                document.getElementById('messageInput').disabled = false;
                document.querySelector('#messageForm button').disabled = false;

                fetch(`/chat/messages/${selectedUser}`)
                    .then(response => response.json())
                    .then(messages => {
                        const messagesDiv = document.getElementById('messages');
                        messagesDiv.innerHTML = '';
                        messages.forEach(msg => {
                            const messageElement = document.createElement('div');
                            const alignment = msg.sender_id == {{ Auth::id() }} ? 'message-right' : 'message-left';
                            messageElement.className = `message ${alignment}`;
                            messageElement.textContent = msg.message;
                            messagesDiv.appendChild(messageElement);
                        });
                        messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the latest message
                    });
            });
        });

        document.getElementById('messageForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const message = document.getElementById('messageInput').value;
            if (selectedUser && message) {
                fetch(`/chat/messages/${selectedUser}`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ message: message, _token: '{{ csrf_token() }}' }),
                })
                    .then(response => response.json())
                    .then(msg => {
                        const messagesDiv = document.getElementById('messages');
                        const messageElement = document.createElement('div');
                        messageElement.className = 'message message-right';
                        messageElement.textContent = msg.message;
                        messagesDiv.appendChild(messageElement);
                        messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the latest message
                        document.getElementById('messageInput').value = ''; // Clear input
                    });
            }
        });
    </script>
</div>


@endsection

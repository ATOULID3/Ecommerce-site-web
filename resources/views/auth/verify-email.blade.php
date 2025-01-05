<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>
<body>
    <h1>Email Verification</h1>
    <p>Before proceeding, please check your email for a verification link.</p>

    @if (session('status'))
        <p style="color: green;">{{ session('status') }}</p>
    @endif

    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit">Resend Verification Email</button>
    </form>
</body>
</html>

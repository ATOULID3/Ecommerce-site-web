<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required value="{{ $email ?? old('email') }}">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <label for="password-confirm">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password-confirm" required>
        @error('password_confirmation')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>

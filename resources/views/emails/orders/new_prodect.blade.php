<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Alert</title>
</head>
<body>
    <h2>🔥 New Product Added: {{ $name }} 🔥</h2>
    <p>Price: ${{ $price }}</p>
    <img src="{{ $image }}" alt="Product Image" width="300">
    <p>Check it out now: <a href="{{ $link }}">View Product</a></p>
</body>
</html>

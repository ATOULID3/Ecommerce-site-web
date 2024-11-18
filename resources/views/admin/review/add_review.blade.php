@extends('admin.admin-layout.style')
@section('title')
    Reviews
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">

<div class="container">
    <h1>Add a New Review</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reviews.create') }}" method="POST">
        @csrf

        <!-- Select Client -->
        <div class="mb-3">
            <label for="client" class="form-label">Select Client</label>
            <select name="client_id" id="client" class="form-select" required>
                <option value="" disabled selected>Select a client</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Product -->
        <div class="mb-3">
            <label for="product" class="form-label">Select Product</label>
            <select name="product_id" id="product" class="form-select" required>
                <option value="" disabled selected>Select a product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Rating -->
        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1 to 5)</label>
            <select name="rating" id="rating" class="form-select" required>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <!-- Review Text -->
        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea name="review" id="review" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Review</button>
    </form>
</div>


</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Product</h2>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Brand:</label>
            <select name="brand_id" class="form-control">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
</div>
@endsection

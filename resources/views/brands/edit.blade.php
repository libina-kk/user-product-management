@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Brand</h2>
    <form action="{{ route('brand.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Brand Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $brand->name) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Brand</h2>
    <form action="{{ route('brand.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
</div>
@endsection

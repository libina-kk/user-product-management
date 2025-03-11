@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Brand List</h2>
    <a href="{{ route('brand.create') }}" class="btn btn-primary">Add Brand</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>
                <a href="{{ route('brand.edit', $brand) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('brand.destroy', $brand) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

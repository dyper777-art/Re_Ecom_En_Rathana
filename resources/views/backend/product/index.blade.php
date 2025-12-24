@extends('backend.layout.master')

@section('title', 'Product List')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">PRODUCTS</h4>
        <a href="{{ route('backend.products.create') }}" class="btn btn-primary mb-3">+ Create</a>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->product_id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <span class="badge {{ $product->status === 'ACTIVE' ? 'badge-success' : 'badge-danger' }}">
                                    {{ $product->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('backend.products.edit', $product->product_id) }}" class="btn btn-sm btn-info">Edit</a>

                                <form action="{{ route('backend.products.destroy', $product->product_id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends('backend.layout.master')

@section('title', isset($product) ? 'Edit Product' : 'Create Product')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ isset($product) ? 'Edit Product' : 'Create Product' }}</h4>

            <form
                action="{{ isset($product) ? route('backend.products.update', $product->product_id) : route('backend.products.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($product))
                    @method('PUT') {{-- This is the correct method for update --}}
                @endif

                <div class="form-group">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}"
                        required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Price *</label>
                    <input type="number" step="0.01" name="price" class="form-control"
                        value="{{ old('price', $product->price ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label>Stock *</label>
                    <input type="number" name="stock" class="form-control"
                        value="{{ old('stock', $product->stock ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    @if (isset($product) && $product->image_url)
                        <div class="mb-2">
                            <img src="{{ asset($product->image_url) }}" alt="Product Image" width="150"
                                style="border:1px solid #ddd; padding:5px;">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control-file">
                </div>


                <div class="form-group">
                    <label>Status *</label>
                    <select name="status" class="form-control" required>
                        <option value="ACTIVE" {{ old('status', $product->status ?? '') === 'ACTIVE' ? 'selected' : '' }}>
                            Active</option>
                        <option value="INACTIVE"
                            {{ old('status', $product->status ?? '') === 'INACTIVE' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Create' }}</button>
            </form>
        </div>
    </div>
@endsection

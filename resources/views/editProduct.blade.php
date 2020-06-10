@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $product->name }}">
                @error('name')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="2">{{ $product->description }}</textarea>
                @error('description')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <select name="size" class="form-control" id="size">
                    <option @if( $product->size == "XS") selected @endif>XS</option>
                    <option @if( $product->size == "S") selected @endif>S</option>
                    <option @if( $product->size == "M") selected @endif>M</option>
                    <option @if( $product->size == "L") selected @endif>L</option>
                    <option @if( $product->size == "XL") selected @endif>XL</option>
                </select>
                @error('size')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="number" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ $product->price }}">
                @error('price')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>
            <div class="img-text set-bg" @if(isset($product->image)) data-setbg="/images/storage/products/{{ $product->user_id }}/{{ $product->image }}" @endif></div>

            <div class="form-group">
                <label for="file">Replace Image</label>
                <input name="file" type="file" class="form-control-file" id="file">
                @error('file')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input name="stock" type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" value="{{ $product->stock }}">

                @error('stock')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select name="state" class="form-control" id="state">
                    <option @if( $product->state == "new") selected @endif>New</option>
                    <option @if( $product->state == "solde") selected @endif>Solde</option>
                </select>
                @error('state')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="state">Online</label>
                <select name="online" class="form-control" id="online">
                    <option value="publish" @if( $product->online == "publish") selected @endif>Publish</option>
                    <option value="unpublished" @if( $product->online == "unpublished") selected @endif>Unpublished</option>
                </select>
                @error('state')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <a class="btn btn-danger" href="{{route('admin.dashboard')}}" role="button">Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

@stop
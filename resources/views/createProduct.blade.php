@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Manteau court..">
                @error('name')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=" description" rows="2"></textarea>
                @error('description')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <select name="size" class="form-control" id="size">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                @error('size')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="number" class="form-control @error('price') is-invalid @enderror" id="price">
                @error('price')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="file">Add Image</label>
                <input name="file" type="file" class="form-control-file" id="file">
                @error('file')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input name="stock" type="number" class="form-control @error('stock') is-invalid @enderror" id="stock">
                @error('stock')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select name="state" class="form-control" id="state">
                    <option>New</option>
                    <option>Solde</option>
                </select>
                @error('state')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="state">Online</label>
                <select name="online" class="form-control" id="online">
                    <option value="publish">Publish</option>
                    <option value="unpublished">Unpublished</option>
                </select>
                @error('state')<div class="alert alert-danger mt-2">{{ $message }}</div>@enderror
            </div>
            <a class="btn btn-danger" href="{{route('admin.dashboard')}}" role="button">Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

@stop
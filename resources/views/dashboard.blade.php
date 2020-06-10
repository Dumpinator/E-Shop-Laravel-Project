@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="dashboard-head">
                            <div class="text-center font-weight-bold">DASHBOARD</div>
                            <div class="dashboard-head-info">
                                <span> {{ $count }} Products</span>
                                <a class="btn btn-success" href="{{ route('admin.add') }}" role="button"><i class="fas fa-plus-circle"></i> Product</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">

                        @forelse ($products as $product)
                            <li class="list-group list-group-item">
                                <div class="dashboard-content">
                                    <div class="img-text set-bg" @if(isset($product->image)) data-setbg="/images/storage/products/{{ $product->user_id }}/{{ $product->image }}" @endif></div>
                                    <span> {{ $product->name }} </span>
                                    <a class="btn btn-danger" href="{{ route('admin.delete', $product->id) }}" role="button"><i class="fas fa-trash-alt"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.edit', $product->id) }}" role="button"><i class="fas fa-edit"></i></a>
                                </div>
                            </li>
                        @empty
                            <p>No products</p>
                        @endforelse

                        </ul>
                    </div>
                    <div class="card-footer text-muted">
                        <a class="btn btn-success" href="{{ route('home') }}" role="button"><i class="fas fa-angle-left"></i> Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

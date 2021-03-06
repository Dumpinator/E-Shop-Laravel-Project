@extends('layouts.app')

@section('content')
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">E-Shop with Laravel 7</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <div class="card-img-top img-text-shop set-bg" style="height: 225px; width: 100%; display: block;" @if(isset($product->image)) data-setbg="/images/storage/products/{{ $product->user_id }}/{{ $product->image }}" @endif></div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <h6 class="card-price">{{$product->price}}€</h6>
                                    </div>
                                    <p class="card-text">{{$product->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('show', $product->id) }}">Go</a></button>
                                        </div>
                                        <small class="text-muted">{{$product->stock}} Stocks</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No products</p>
                    @endforelse
                </div>
            </div>
        </div>

    </main>
@stop

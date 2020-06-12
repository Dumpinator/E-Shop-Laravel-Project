@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-lg-2 order-1">
                <div class="image_selected img-text-shop set-bg" @if(isset($product->image)) data-setbg="/images/storage/products/{{ $product->user_id }}/{{ $product->image }}" @endif></div>
            </div>
            <div class="col-lg-6 order-3">
                <div class="product_description">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item m-2"><a href="{{ route('home') }}">Home</a></li>
                        </ol>
                    </nav>
                    <div class="product_name">{{ $product->name }}</div>
                    <div> <span class="product_price">{{ $product->price }} €</span></div>
                    <div class="product-rating"><span class="badge badge-success">
                        <i class="far fa-star"></i> 4.5 Star</span><br> <span class="rating-review font-weight-light">45 Reviews</span></div>
                    <hr class="singleline">
                    <div> <span class="product_info">{{ $product->description }}<span><br><span class="product_info">In Stock: {{ $product->stock }} units<span> </div>
                    <div>
                        <div class="row" style="margin-top: 15px; justify-content: space-between;">
                            <div class="col-xs-6" style="margin-left: 15px;"> 
                                <span class="product_options">Sizes Available </span><br> 
                                <button class="btn btn-primary btn-sm">XS</button> 
                                <button class="btn btn-primary btn-sm">S</button> 
                                <button class="btn btn-primary btn-sm">L</button> 
                            </div>
                            <div class="col-xs-6">
                                <span class="product_info">Stock: {{ $product->stock }} units<span>
                            </div>
                        </div>

                    </div>
                    <hr class="singleline">
                    <div class="order_info d-flex flex-row">
                        <form action="#">
                    </div>
                    <div class="row">
                        <div class="col-xs-6" style="margin-left: 13px;">
                            <div class="product_quantity"> <span>Quantity: </span> <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> <button type="button" class="btn btn-success shop-button">Buy Now</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-underline">
            <div class="col-md-6"> <span class=" deal-text">Product Details</span> </div>
            <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="col-md-12">
                    <tbody>
                        <tr class="row mt-10">
                            <td class="col-md-4"><span class="p_specification">Sales Package :</span> </td>
                            <td class="col-md-8">
                                <ul>
                                    <li>lorem ipsum dolor sit amet consectetur adipiscing elit</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="row mt-10">
                            <td class="col-md-4"><span class="p_specification">Model Number :</span> </td>
                            <td class="col-md-8">
                                <ul>
                                    <li> lorem ipsum </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="row mt-10">
                            <td class="col-md-4"><span class="p_specification">Item Number :</span> </td>
                            <td class="col-md-8">
                                <ul>
                                    <li>7AL87PA</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="row mt-10">
                            <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                            <td class="col-md-8">
                                <ul>
                                    <li>Black</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="row mt-10">
                            <td class="col-md-4"><span class="p_specification">Lorem ipsum :</span> </td>

                            <td class="col-md-8">
                                <ul>
                                    <li>lorem ipsum dolor sit amet consectetur adipiscing elit</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="row mt-10">
                            <td class="col-md-4"><span class="p_specification">Lorem ipsum :</span> </td>

                            <td class="col-md-8">
                                <ul>
                                    <li>lorem ipsum dolor sit amet consectetur adipiscing elit</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

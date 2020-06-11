<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('shop', [
            'products' => $products,
        ]);
    }

        /**
     * Display a men resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMen()
    {
        $products = DB::table('products')->where('category_id', '1')->get();
        
        return view('shop', [
            'products' => $products,
        ]);
    }

            /**
     * Display a men resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexWomen()
    {
        $products = DB::table('products')->where('category_id', '2')->get();
        
        return view('shop', [
            'products' => $products,
        ]);
    }

            /**
     * Display a men resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDiscount()
    {
        $products = DB::table('products')->where('state', 'solde')->get();
        
        return view('shop', [
            'products' => $products,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $categories = Category::all();
        $product = Product::find($id);

        //dd($product);

        return view('showProduct', [
            'product' => $product
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Form;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // VUE DE MON DASHBOARD
    public function index()
    {
        $products = DB::table('products')->get();

        return view('dashboard', [
            'count' => count($products),
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('createProduct', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'description' => 'required|max:200',
            'price' => 'required',
            'stock' => 'required',
            'online' => 'required',
        ]);

        $product = new Product();
        $slugify = new Slugify();
        
        $product->name = $request->input('name');
        $product->slug = $slugify->slugify($product->name);
        $product->description = $request->input('description');
        $product->price = floatval($request->input('price'));
        $product->stock = intval($request->input('stock'));
        $product->size = $request->input('size');
        // La catégorie associée
        $product->category_id = intval($request->input('category'));
        // Le user associé
        $product->user_id = Auth::user()->id;
        $product->online = $request->input('online');
        $product->state = $request->input('state');
        // GESTION DE L'IMAGE
        $image = $request->file('file');
        $imageFullPath = $image->getClientOriginalName();
        $imageName = pathinfo($imageFullPath, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $file = time() . '_' . $imageName . '.' . $extension;
        $image->storeAs('storage/products/' . Auth::user()->id, $file);

        $product->image = $file;
        $product->save();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Your product have been successfully create !');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('editProduct', [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'description' => 'required|max:200',
            'price' => 'required',
            'stock' => 'required',
            'online' => 'required',
        ]);

        $product = Product::find($id);
        $slugify = new Slugify();

        $product->name = $request->input('name');
        $product->slug = $slugify->slugify($product->name);
        $product->description = $request->input('description');
        $product->price = floatval($request->input('price'));
        $product->stock = intval($request->input('stock'));
        $product->size = $request->input('size');
        $product->category_id = intval($request->input('category'));
        $product->user_id = Auth::user()->id;
        $product->online = $request->input('online');
        $product->state = $request->input('state');
        
        if($request->file('file')) {
        // GESTION DE L'IMAGE
            $image = $request->file('file');
            $imageFullPath = $image->getClientOriginalName();
            $imageName = pathinfo($imageFullPath, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $file = time() . '_' . $imageName . '.' . $extension;
            $image->storeAs('storage/products/' . Auth::user()->id, $file);
            $product->image = $file;
        }

        //dd($request);
        $product->save();
        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Your changes have been successfully registered !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Your product have been successfully deleted !');
    }
}

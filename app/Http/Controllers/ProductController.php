<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use App\Product;
use App\Category;
use App\Store;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //contoh join has many
      // $store = \App\Store::with('users')->first();

      // foreach($store->users as $item){
      //   return $item->name;
      // }
      // return $store->users[0]->name;
      //end contoh
      $user = auth()->user();
      $products = Product::with('category')->where('store_id', $user->store_id)->get();
      // return($products);
      return view('cms.product.index', compact('products'));
    }

    public function indexPublic()
    {
      //contoh join has many
      // $store = \App\Store::with('users')->first();

      // foreach($store->users as $item){
      //   return $item->name;
      // }
      // return $store->users[0]->name;
      //end contoh
      // $user = auth()->user();
      // $products = Product::with('category')->where('store_id', $user->store_id)->get();
      $products = Product::all();
      return view('public.home.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();

      return view('cms.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = auth()->user();
      $this->validate($request, [
        'name' => 'required|max:181',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'weight' => 'required|max:181',
        'description' => 'required',
        'category_id' => 'required',
        'thumbnail'   => 'nullable|file|max:5048|mimes:jpg,jpeg,png'
      ]);

      if($request->has('thumbnail')){
        $directory = 'product';
        $image = $request->file('thumbnail');
        if (!File::isDirectory($directory)) {
          File::makeDirectory($directory, 0777, true, true);
        }
        $imageName    = uniqid() . $image->getClientOriginalName();
        Storage::disk('public')->put($directory .'/'. $imageName,  file_get_contents($image));
        $request['file'] = $directory .'/'. $imageName;
      }

      Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'stock' => $request->stock,
        'weight' => $request->weight,
        'description' => $request->description,
        'category_id' => $request->category_id,
        'store_id' => $user->store_id,
        'user_id' => $user->id,
        'photo' => $request->file,
      ]);

      return redirect()->route('product.index')->with(['success' => 'Product added successfully']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        // $products = DB::table('products')->find($id);

        // $products =  DB::table('products')->where('id',$id)->first();


        // return $stores->name;
        return view('product.product-details', compact('product'));
    }

    public function detail($id)
    {
        //
        // $products = DB::table('products')->find($id);

        // $products =  DB::table('products')->where('id',$id)->first();
        // return response()->json(auth()->user()->store());
        // return $stores->name;

        $product = Product::with('store')->where('id', $id)->first();
        // return ($products->name);
        return view('public.home.detail', compact('product'));
    }

    public function showAdmin(Product $product)
    {
        //
        // $products = DB::table('products')->find($id);

        // $products =  DB::table('products')->where('id',$id)->first();


        // return $stores->name;
        return view('product.dashboard-products-details', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories = Category::all();
      $product = Product::find($id);
      if($product){
        return view('cms.product.edit', compact('categories', 'product'));
      }
      abort(500);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = auth()->user();
      $this->validate($request, [
        'name' => 'required|max:181',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'weight' => 'required|max:181',
        'description' => 'required',
        'category_id' => 'required',
        'thumbnail'   => 'nullable|file|max:5048|mimes:jpg,jpeg,png'
      ]);
      $data = Product::find($id);

      if($data){
        if($request->has('thumbnail')){
          $directory = 'product';
          $image = $request->file('thumbnail');
          if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0777, true, true);
          }
          $imageName    = uniqid() . $image->getClientOriginalName();
          Storage::disk('public')->put($directory .'/'. $imageName,  file_get_contents($image));
          $request['file'] = $directory .'/'. $imageName;

          if(!is_null($data->photo)){ //hapus photo lama update yg baru
            Storage::disk('public')->delete($data->photo);
          }
          $data->update([
            'photo' => $request->file
          ]);
        }

        $data->update([
          'name' => $request->name,
          'price' => $request->price,
          'stock' => $request->stock,
          'weight' => $request->weight,
          'description' => $request->description,
          'category_id' => $request->category_id,
          'store_id' => $user->store_id,
          'user_id' => $user->id,
        ]);
        return redirect()->route('product.index')->with(['success' => 'Product successfully Updated']);;
      }
      return redirect()->route('product.index')->with(['danger' => 'Data not found, Update Failed!']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $user = auth()->user();
      $data = Product::where('id', $id)->where('store_id', $user->store_id)->first();
      if($data){
        Storage::disk('public')->delete($data->photo);
        $data->delete();
        return redirect()->route('product.index')->with(['success' => 'Product successfully DELETED']);;
      }
      return redirect()->route('product.index')->with(['danger' => 'Product not found']);;
    }

}

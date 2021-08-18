<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use App\CategoryStore;
use App\User;
use View;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stores = Store::all();
        // dd($products);
        // return view('store.toko', compact('stores'));
        // return \View::make('asddsa');
        // return view('asddsa', $products);
        $auth= auth()->user()->role;
        // return $auth;
        if(auth()->user()->role == User::ROLE_KUBE){
            return view('cms.store.index', compact('stores'));
        }

        elseif(auth()->user()->role == User::ROLE_ADMIN){
            return view('cms.admin.store.index', compact('stores'));
        }

    }

    public function registerSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:181',
            'namatoko' => 'nullable|max:181',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users',
        ]);

       $store =  Store::create([
            'name' => $request->namatoko,
            'category_store_id' => $request->category_store_id
        ]);

        $request['store_id'] = $store->id;
        $request['password'] = bcrypt($request->password);
        $request['role'] = User::ROLE_KUBE;
        User::create($request->only('name', 'email','password', 'store_id', 'role'));

        return redirect()->route('store.index')->with(['success' => 'Successful Registration']);

    }

    public function indexPublic()
    {
        //
        $stores = Store::all();
        // dd($products);
        return view('public.store.index', compact('stores'));
        // return \View::make('asddsa');
        // return view('asddsa', $products);
    }


    public function updateStore()
    {
        //
        $stores = Store::all();
        // dd($products);
        return view('public.map.index', compact('stores'));
        // return \View::make('asddsa');
        // return view('asddsa', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stores = Store::all();
        $categories = CategoryStore::all();
        // return view(self::BASE_VIEW_DIR . 'register', compact('categories'));
        return view('cms.admin.store.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
        // return $store;
        return view('public.store.detail', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        //
        // $store = Category::all();
        $store = Store::find($id);
        // $user = auth()->user();
        // $store = Store::where('id', $user->store_id)->first();;
        // return($store);
        if($store){
          $categories = CategoryStore::all();
          return view('cms.admin.store.edit', compact('store', 'categories'));
        }
        abort(500);
    }


    public function editKube($id)
    {
        //
        // $store = Category::all();
        $store = Store::find($id);
        // $user = auth()->user();
        // $store = Store::where('id', $user->store_id)->first();;
        // return($store);
        if($store){
            return view('cms.store.edit', compact('store'));
        }
        abort(500);
    }

    public function updateKube(Request $request, $id)
    {
        //
        $user = auth()->user();
        $this->validate($request, [
            'name' => 'required|max:181',
            // 'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            // 'category_store_id' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $data = Store::where('id', $id)->first();

        // $user = User::where('id', auth()->user()->id)->first();

        if($data){

            $data->update([
            'name' => $request->name,
            'phone' => $request->phone,
            // 'category_store_id' => $request->category_store_id,
            'address' => $request->address,
            'description' => $request->description,
            ]);
            // $user->update([
            //     'email' => $request->email,
            // ]);
            return redirect()->back()->with(['success' => 'Account Store Successfully Updated']);;
        }
        return redirect()->back()->with(['danger' => 'Data not found, Update Failed!']);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = auth()->user();
        $this->validate($request, [
            'name' => 'required|max:181',
            // 'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            // 'category_store_id' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $data = Store::where('id', $id)->first();

        // $user = User::where('id', auth()->user()->id)->first();

        if($data){

            $data->update([
            'name' => $request->name,
            'phone' => $request->phone,
            // 'category_store_id' => $request->category_store_id,
            'address' => $request->address,
            'description' => $request->description,
            ]);
            // $user->update([
            //     'email' => $request->email,
            // ]);
            return redirect()->back()->with(['success' => 'Store successfully Updated']);;
        }
        return redirect()->back()->with(['danger' => 'Data not found, Update Failed!']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $user = auth()->user();
      $data = Store::where('id', $id)->first();
    //   $user = User::where('id', auth()->user()->id)->first();
      if($data){
        $data->delete();
        // $user->delete();
        return redirect()->route('store.index')->with(['success' => 'Product successfully DELETED']);;
      }
      return redirect()->route('store.index')->with(['danger' => 'Product not found']);;
    }
}





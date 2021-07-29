<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryStore;
use App\Store;
use App\User;
use Auth;
class AuthController extends Controller
{
    CONST BASE_VIEW_DIR = 'auth.';
    public function login()
    {
        return view(self::BASE_VIEW_DIR . 'login');
    }

    public function loginSubmit(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $auth = Auth::attempt($request->only('email', 'password'));
        if(!$auth){
            return redirect()->back()->with(['warning' => 'akun tidak ditemukan']);
        }
        return redirect()->route('dashboard.index');
    }

    public function register()
    {
        $categories = CategoryStore::all();
        return view(self::BASE_VIEW_DIR . 'register', compact('categories'));
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
        User::create($request->only('name', 'email','password', 'store_id'));
       
        return redirect()->back()->with(['warning' => 'Berhasil Registrasi 1']);

    }

    public function logout()
    {
        Auth::logout();
      return redirect()->route('auth.login')->with(['success' => 'Anda telah Logout']);
    }
}

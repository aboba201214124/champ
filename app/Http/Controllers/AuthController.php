<?php

namespace app\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use App\Models\User;
use App\Queries\ProductQuery;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function index(Request $request){
        $products = product::filter($request);
        $categories = Category::all();
        return view('auth.index',[
            'products'=>$products,
        ],[
            'categories'=>$categories,
        ]);
    }

    public function login(){
        return view('auth.login');
    }
    public function reg(){
        return view('auth.reg');
    }
    public function authentication(Request $request){
        $arr = $request->only(['email','password']);
        Auth::attempt($arr);
        return redirect('/');
    }
    public function register(Request $request){
        User::create($request->only(['email','password','name']));
        return view('auth.index');
    }
    public function main(){
        return view('auth.index');
    }
    public function logout(Request $request){
        Auth::logout();
        $products = product::filter($request);
        $categories = Category::all();
        return view('auth.index',[
            'products'=>$products,
        ],[
            'categories'=>$categories,
        ]);
    }
}

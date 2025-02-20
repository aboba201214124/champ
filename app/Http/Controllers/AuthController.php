<?php

namespace app\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use App\Models\User;
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
    public function filter(FilterRequest $request){
        $data = $request->validated();

        $query = product::query();
        if(isset($data['category_id'])){
            $query->where('category_id',$data['category_id']);
        }
        $product = $query->get();
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
        return view('auth.index');
    }
}

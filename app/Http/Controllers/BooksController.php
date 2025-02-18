<?php

namespace App\Http\Controllers;

use App\Models\book;

class BooksController
{
    public function index(){
        $books = book::all();

        return view('index',[
            'books'=>$books,
        ]);
    }
}

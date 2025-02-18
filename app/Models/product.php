<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class product extends Model
{
    protected $guarded = false;
    public function category(){
        return $this->belongsTo(Category::class);
    }


    public static function filter(Request $request){
        $query = product::query();

        if($request->has('category_id') && $request->category_id !== 'all'){
            $query->where('category_id', $request->category_id);
        }

        return $query->get();
    }
}

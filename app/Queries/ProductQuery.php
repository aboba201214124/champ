<?php

namespace app\Queries;

use App\Models\product;
use Illuminate\Database\Eloquent\Collection;

class ProductQuery
{
    public function filter(?string $categoryId): Collection
    {
        $query = Product::query();

        if($categoryId && $categoryId !== 'all'){
            $query->where('category_id', $categoryId);
        }

        return $query->get();
    }
}

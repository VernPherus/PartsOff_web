<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Resources\ProductListResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //returns all products
    public function index()
    {
        $perPage = request('per_page', 10);
        $search = request('search', '');
        $sortField = request('sort_field', 'updated_at');
        $sortDirection = request('sort_direction', 'desc');

        $query = Product::query()
            ->where('title', 'like', "%{$search}%")
            ->orderBy($sortField, $sortDirection)
            ->paginate($perPage);


        return ProductListResource::collection($query);
    }

}

<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoryAction($name)
    {
        $category = Categories::find(['latin_url' => $name]);
        if (!empty($category)) {
            var_dump($category);
            $goods = Goods::find(['category_id' => $category->id]);
            return view('categories.products', ['goods' => $goods]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\AttributeCategory;

class DataFillController extends Controller
{
    
    public function category(){

        // get all categories
        $categories = Category::all();

        foreach($categories as $category){
            $attributes=[5,11,26,6,8,9];

            $category->attributes()->sync($attributes);

        }

    }
}

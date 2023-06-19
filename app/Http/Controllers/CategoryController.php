<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(){
        $category = Category::all();
        return response()->json($category, 200);
    }

    public function store(Request $request){

        $request->validate([
            'libelle'=> 'required|min:6|unique:categories',
        ]);

        $category =Category::create([
            'libelle'=> $request->libelle,
        ]);
        return response()->json($category, 200);


    }
}

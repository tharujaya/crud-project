<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('dashboard.category.create');
    }

    public function store(Request $request){
       // dd($request);
        $category=new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save();
        if($request->modal='modal'){
            return redirect()->Route('product.create');
        }else{
            return redirect()->Route('dashboard.index');
        }
       // return redirect()->back();
       // return redirect()->Route('dashboard.index');
    }
    public function destroy(Category $category){
        $category->delete();
        return redirect()->Route('dashboard.index');
    }
    public function edit(Category $category){
        return view('dashboard.category.edit', compact('category') );
    }
    public function update(Request $request, Category $category){
        
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save();

        return redirect()->Route('dashboard.index');
    }
}
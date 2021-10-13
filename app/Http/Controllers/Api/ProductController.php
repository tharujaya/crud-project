<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
       // return $products;
         return Response::json($products, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->status=$request->status;
       $product->category_id=$request->category_id;
        $result = $product->save();
       // return redirect()->Route('dashboard.index');
       if($result){
        return ["result"=>"Product created"];
       }else{
        return ["result"=>"Product creation unsucsseful"];
       }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=Product::find($id);
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        //
      //  $product= Product::find($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->status=$request->status;
        $product->category_id=$request->category_id;
        $result = $product->save();
       // return redirect()->Route('dashboard.index');
       if($result){
        return ["result"=>"Product updated"];
       }else{
        return ["result"=>"Product update unsucsseful"];
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product= Product::find($id);
        $result=$product->delete();
        if($result){
            return ["result"=>"Product deleted"];
           }else{
            return ["result"=>"Product delete unsucsseful"];
           }
        
    }
}
<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index($id = null) {
        if ($id == null) {
            return Product::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $product = new Product();

        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();

        return response($product , 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();

        return response(Product::orderBy('id', 'asc')->get() , 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request , $id) {
        $product = Product::find($id);

        $product->delete();

        return response([], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductStore;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;

class ProductsController extends Controller
{
	public function index()
		{
		    $products = Product::all();
			return response()->json($products);
		    //return view("products.index", [
		     //   "products" => $products
		    //]);
		}

	 public function create()
		{
		    return view("products.create");
		}

	public function store(Request $request)
		{
		    $product = new Product;
		    $product->title = $request->input("title");
		    $product->brand = $request->input("brand");
		    $product->image = $request->input("image");
			$product->description = $request->input("description");
			$product->price = $request->input("price");
		    $product->save();

		    return redirect()->route('products.index');
		}

	 public function show($id)
		{
		    $product = Product::find($id);
		    return view("products.show", [
		        "product" => $product
		    ]);
		}

	public function edit($id)
		{
		    $product = Product::find($id);
		    return view("products.edit", [
		        "product" => $product
		    ]);
		}

	public function update(Request $request, $id)
		{
		    $product->title = $request->input("title");
		    $product->brand = $request->input("brand");
		    $product->image = $request->input("image");
			$product->description = $request->input("description");
			$product->price = $request->input("price");
		    $product->save();

		    return redirect()->route('products.index');
		}

	 public function destroy($id)
		{
		    Product::destroy($id);
		    
		    return redirect()->route('products.index');
		}
	}


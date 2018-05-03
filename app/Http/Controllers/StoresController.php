<?php

namespace App\Http\Controllers;

use App\Store;

use Illuminate\Http\Response;

class StoresController extends Controller
{
    public function index() 
    {
        $stores = Store::all();
        //return response()->json($stores);
		    return view("stores.index", [
		        "stores" => $stores
		    ]);
    }
}

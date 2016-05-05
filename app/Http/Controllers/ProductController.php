<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{

    function index() {

        return Product::all();
    }

    function show( $slug ) {

        return Product::forSlug( $slug )->first();
    }

    function delete( $slug ) {

        return Product::forSlug( $slug )->delete();
    }


}

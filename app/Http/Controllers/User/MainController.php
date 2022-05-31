<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;

class MainController extends Controller
{

    protected $product;
    //
    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }
    public function index(){

        return view('SuperKay.main', [
            'title'=>'Super Kay',
            'products' => $this->product->get()
        ]);
    }
}

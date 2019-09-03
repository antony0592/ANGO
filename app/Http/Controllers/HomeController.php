<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Supplier;

class HomeController extends Controller
{
    public function viewHome (){

        $objeto = Supplier::find(1);
        $objeto->tbsupplierid;
        $objeto->tbsuppliername;
        $objeto->tbsupplieractive;
        $objeto->tbsupplierkey;

        $objeto2 = Product::all();


        return view("index",['supplier' => $objeto, 'product' => $objeto2]);
     }
}

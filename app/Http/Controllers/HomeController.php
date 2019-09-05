<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
use App\Supplier;
use App\Category;


class HomeController extends Controller
{
    public function viewHome (){

        $objeto = Supplier::find(1);
        $objeto->tbsupplierid;
        $objeto->tbsuppliername;
        $objeto->tbsupplieractive;
        $objeto->tbsupplierkey;

        $objeto2 = Product::all();

        $objeto3 = DB::table('tbproduct')
            ->join('tbcategory', 'tbcategory.tbcategoryid', '=' ,'tbproduct.tbproductidcategory')
            ->select('tbproduct.tbproductid', 'tbproduct.tbproductname', 'tbcategory.tbcategoryname', 'tbproduct.tbproductprice')
            ->get(); 


        return view("home",['supplier' => $objeto, 'product' => $objeto2, 'join' => $objeto3]);
     }
}

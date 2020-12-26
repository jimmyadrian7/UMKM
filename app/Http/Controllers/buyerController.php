<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Services\PayUService\Exception;
use Helper;

class buyerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        $data['categories'] = DB::table('mscategories')
                            ->limit(10)
                            ->inRandomOrder()
                            ->get();
        
        $data['barang'] = DB::table('msproduct')
                            ->join('msstore', 'msproduct.StoreId', '=', 'msstore.StoreId')
                            ->where('msproduct.StatusId','Ready')
                            ->orWhere('msproduct.StatusId','PO')
                            ->inRandomOrder()
                            ->get();
        $data['banner'] = DB::table('msbanner')
                            ->where('StatusId','Active')
                            ->limit(6)
                            ->get();
        $data['countBarang'] = $data['barang']->count();
        
        return view('pembeli.home', $data);
    }

    public function detail_product($store, $product){
        // urldecode
        $product = DB::table('msproduct')
                    ->join('msstore', 'msproduct.StoreId', '=', 'msstore.StoreId')
                    ->where('msproduct.StatusId','Ready')
                    ->where('msproduct.ProductName',urldecode($product))
                    ->where('msstore.StoreName',urldecode($store))
                    ->limit(1)
                    ->get();

        $data['detail'] = $product[0];

        // echo $product;

        if($product->count() == 1){
            $data['image'] = DB::table('msproductimage')
                    ->where('ProductId', $product[0]->ProductId)
                    ->where('StatusId','Active')
                    ->get();

            if($data['image']->count() <= 0){
                return redirect('/');        
            }
        }else{
            return redirect('/');
        }
        return view('pembeli.detail', $data);
    }
}

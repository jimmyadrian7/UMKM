<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends CrudController
{
    protected $table_name = "msproduct";
    protected $base_url = "/penjual/produk";
    protected $field_name = "ProductName";
    protected $view_table = "penjual.Produk";
    protected $view_form = "penjual.ProdukTambah";
    protected $view_data = "";
    protected $table_id_name = "ProductId";

    public function getSelection()
    {
        return [
            'active' => 'produk',
            'categories' => DB::table('mscategories')->get()
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Helper;

class CrudController extends Controller
{
    protected $table_name;
    protected $base_url;
    protected $field_name;
    protected $view_table;
    protected $view_form;
    protected $view_data;
    protected $table_id_name;

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // init
        $keyword = '';
        $table_name = $this->table_name;
        $data = DB::table($table_name);

        if(isset($request->keyword)){
            $data = $table->where($this->field_name, 'like', '%'.$request->keyword.'%');
            $keyword = $request->keyword;
        }

        $data = $data->paginate(20)->setPath('');
        $data->appends(array('keyword' => $keyword));

        $view_data = [
            'table_name' => $table_name,
            'datas' => $data,
            'keyword' => $keyword,
            'active' => 'produk'
        ];

        return view($this->view_table, $view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data = $this->getSelection();
        $view_data['mode'] = 'POST';
        $view_data['form_url'] = str_replace("/create", "", url()->current());
        return view($this->view_form, $view_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $table_name = $this->table_name;
            $table = DB::table($table_name);
            $data = [];
            foreach ($request->except(['_token', '_method', 'id_record']) as $key => $value) {
                $data[$key] = $value;
            }
            $table->insert($data);
            // alert()->success('Data berhasil ditambahkan');
        } catch (Exception $e) {
            report($e);
            // Helper::ErrorHandler('Data gagal ditambahkan', $e->getMessage());
        }
        return redirect($this->base_url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table_name = $this->table_name;
        $table = DB::table($table_name);
        $data = $table->where($this->table_id_name, $id)->first();
        return view($this->view_data, ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table_name = $this->table_name;
        $data = DB::table($table_name)->where($this->table_id_name, $id)->first();
        $view_data = $this->getSelection();
        $view_data['data'] = $data;
        $view_data['mode'] = 'PATCH';
        $view_data['form_url'] = str_replace("/edit", "", url()->current());
        return view($this->view_form, $view_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $table_name = $this->table_name;
            $table = DB::table($table_name)->where($this->table_id_name, $id);
            $data = [];
            foreach ($request->except(['_token', '_method', 'id_record']) as $key => $value) {
                $data[$key] = $value;
            }

            $table->update($data);
            // alert()->success('Data berhasil diubah');
        } catch (Exception $e) {
            report($e);
            // Helper::ErrorHandler('Data gagal diubah', $e->getMessage());
        }
        // return redirect($this->base_url."/".$id);
        return redirect($this->base_url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $table_name = $this->table_name;
            $table = DB::table($table_name)->where($this->table_id_name, $id)->delete();
            // alert()->success('Data berhasil dihapus');
        } catch (Exception $e) {
            // Helper::ErrorHandler('Data gagal dihapus', $e->getMessage());
        }
        
        return redirect($this->base_url);
    }

    public function getSelection()
    {
        return [];
    }
}

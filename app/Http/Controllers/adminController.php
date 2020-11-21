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

class adminController extends Controller
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

    public function addBanner(Request $request)
    {
        $banner = $request->file('banner');
        $path = 'image/banner/';
        try {
            $bannerImg = '/'.$path.$banner->hashName();

            DB::table('msbanner')-> insert([
                'BannerImage' => $bannerImg,
                'StatusId' => 'Active',
            ]);

            $banner->move($path,$banner->hashName());

        } catch (\Exception $e) {
            // $($request -> password.)
            $data_view['status'] = $e->errorInfo[2];
            return redirect('/admin/akses')->with($data_view);
        }

        return redirect('/admin/akses');
    }

    public function akses(){
        $data['active'] = 'akses';

        $data['banner'] = DB::table('msbanner')
                        ->limit(6)
                        ->where('StatusId','Active')
                        ->get();
        $data['TotalBanner'] = DB::table('msbanner')->where('StatusId','Active')->count();
        return view('admin.Akses', $data);
    }

    public function delBanner($id){

        if($id <= 0){
            return redirect('/admin/akses');
        }

        try {
            DB::table('msbanner')
            ->where('BannerId',$id)
            ->update(['StatusId' => 'Deleted']);

        } catch (\Exception $e) {
            // $($request -> password.)
            $data_view['status'] = $e->errorInfo[2];
            return redirect('/admin/akses')->with($data_view);
        }

        return redirect('/admin/akses');

    }
}

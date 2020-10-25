<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\PayUService\Exception;
use Illuminate\Support\Str;
use Helper;

class AuthController extends Controller
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
        return view('Login');
    }

    public function create(){
        return view('Register');
    }

    public function store(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $data_view['name'] = $request -> name;
        $data_view['email'] = $request -> email;
        $data_view['password'] = $request -> password;
        $data_view['repassword'] = $request -> repassword;

        if(strlen($request->password) < 8){
            $data_view['status'] = 'Password Minimal Harus 8 Karakter';

            return redirect('/register')->with($data_view);
        }
        $random = Str::random(5);

        if($request -> password != $request-> repassword){
            $data_view['status'] = 'Pastikan password anda sama';

            return redirect('/register')->with($data_view);
        }

        try {

            DB::table('msuser')-> insert([
                'UserName' => $request -> name,
                'UserEmail' => $request -> email,
                'VerificationCode' => $random,
                'UserPassword' => Hash::make($request -> phone),
                'UserDriver' => 'Inactive',
                'UserSeller' => 'Inactive',
                'UserStatus' => 'Inactive',
            ]);

        } catch (\Exception $e) {
            // $($request -> password.)
            $data_view['status'] = $e->errorInfo[2];
            return redirect('/register')->with($data_view);
        }

        return redirect('/');
    }
}

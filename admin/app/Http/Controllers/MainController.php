<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{   
    function index()
    {
        return view('login');
    }
    function checklogin(Request $request)
    {
        // $this->validate($request, [
        //     'nama'       => 'required|email',
        //     'password'  => 'required|alphaNum|min:3'
        // ]);

        $user_data = array(
            'nama' => $request->get('nama'), 
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('main/succeslogin');
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
    }

    function succeslogin()
    {
        return view('Laporan_hilang');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('pages.index');
    // }

    // public function login(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         $data = $request->all();

    //         if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
    //             return redirect('pages/index');
    //         } else {
    //             Session::flash('error_message', 'Invalid Email or Password');
    //             return redirect()->back();
    //         }
    //     }
    // }
}

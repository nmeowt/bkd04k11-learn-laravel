<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Ministry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function process(Request $request)
    {
        try {
            $email = $request->get('email');
            $password = $request->get('password');
            $ministry = Ministry::where('email', $email)->where('password', $password)->firstOrFail();
            $request->session()->put('id', $ministry->id);
            $request->session()->put('fullName', $ministry->fullName);
            return Redirect::route('dashboard');
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Lỗi rồi nhập lại đi');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}

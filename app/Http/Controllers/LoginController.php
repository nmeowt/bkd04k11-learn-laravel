<?php

namespace App\Http\Controllers;

use App\Models\Ministry;
use Exception;
use Illuminate\Http\Request;

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
            return view('dashboard'); # chưa học hết đâu, 2 phần nữa cơ
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

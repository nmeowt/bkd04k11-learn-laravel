<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = [
            "trang-chu" =>  "Trang chủ",
            "trang-ca-nhan" => "Trang cá nhân",
            "thong-tin" => "Thông tin"
        ];

        return view("menu", [
            "menu" => $menu,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostCtrler extends Controller
{
    public function create(){
        
        // 新規購入作成画面を表示するための処理
        return view('purchases.create');
    }
}

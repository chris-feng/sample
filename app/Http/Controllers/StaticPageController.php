<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{

    //
    public function home(){
        return "主页";
    }

    public function help(){
        return "帮助";
    }

    public function about(){
        return "about";
    }
}

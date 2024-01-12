<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public $myvar = "Hello World2";

    function _construct(){

    }

    public function index(){
        return view('home');
    }

    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute',$data);
    }
}

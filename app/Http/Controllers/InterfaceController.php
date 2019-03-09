<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class InterfaceController extends Controller
{
    //
    public function index(){
        $categories = category::whereNull('parent_id')->with('children')->get();

        return view('welcome' , compact('categories'));
    }
}

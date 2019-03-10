<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\services;
use App\testimoni;
use App\product;



class InterfaceController extends Controller
{
    //
    public function index(){
       $prodcuts = product::whereNull('parent_id')->with('children')->get();
       $sliders = slider::all();
       $services = services::all();


        return view('PublicPage.index' ,compact('services','sliders' ,'prodcuts' ) );
    }
}

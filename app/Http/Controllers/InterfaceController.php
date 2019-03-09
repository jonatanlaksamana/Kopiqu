<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\slider;
use App\services;
use App\testimoni;



class InterfaceController extends Controller
{
    //
    public function index(){
       $categories = category::whereNull('parent_id')->with('children')->get();
       $sliders = slider::all();
       $services = services::all();


        return view('PublicPage.index' ,compact('categories','sliders' ,'services' ) );
    }
}

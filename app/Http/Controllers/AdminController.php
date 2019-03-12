<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\product;
use App\Order;
use DB;

class AdminController extends Controller
{
    //
    public function index(){
        $orders = DB::table('orders')
            ->leftJoin('users', 'orders.user_id', '=', 'users.id')
            ->get();
        $products = product::all();
        $adminlogin = Auth::user();
        return view('admin.admin' , compact('adminlogin','products','orders'));
    }

    public function products(){
        $products = product::whereNull('parent_id')->with('children')->paginate(5);
        $adminlogin = Auth::user();

        return view('admin.ProductPage' ,compact('adminlogin' , 'products'));
    }
    public function  orders(){
        return view('admin.OrderPage');
    }
    public function destroyProduct($id){
        $product = product::find($id);
        if($product->delete()){
            return redirect()->route('view.productlist');
        }
    }
}

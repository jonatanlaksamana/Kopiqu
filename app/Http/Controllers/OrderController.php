<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Auth;
use App\Order;
use DB;
class OrderController extends Controller
{
    //
    public function index(){
        $prodcuts = product::whereNull('parent_id')->with('children')->get();
        return view('StorePage.order' , compact('prodcuts'));
    }
    public function cart(){
        $total = \Cart::getTotal();
        $items = \Cart::getContent();
        $totalQTY= \Cart::getTotalQuantity();;
        $products = product::class;
        return view('StorePage.ShoopingCart' , compact('items' ,'total' , 'products','totalQTY'));
    }

    public function save(){

        $add = \Cart::add(\request('id'), \request('name'),  \request('price'),1);
        if($add){
            return redirect()->route('order.cart');
        }
    }
    public function delete($id){
         \Cart::remove($id);
         return redirect()->route('order.cart');

    }

    public function confirm(){

        $randomValue = Rand(100,500);
        $newOrder = new Order;
        $newOrder->user_id = Auth::id();
        $newOrder->payment_status = 'Not Paid';
        $newOrder->payment_value = \request('total') - $randomValue;
        if($newOrder->save()){
            $orderdetails = Order::find($newOrder->id);
            $name = Auth::user()->name;


            \Cart::clearCartConditions();
            return view('StorePage.confirm' , compact('orderdetails' , 'name'));
        }
        else{
            echo "gagal input";
        }



    }
    public function editAddres($id){
        $addres = \request('addres');
        $order = Order::find($id);
        $order->addres = $addres;
        if($order->save()){
            return redirect()->route('index');
        }


    }

}

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
        $totalQTY= \Cart::getTotalQuantity();
        $products = product::class;
        return view('StorePage.ShoopingCart' , compact('items' ,'total' , 'products','totalQTY' ));
    }

    public function save(){

        $add = \Cart::add(\request('id'), \request('name'),  \request('price'),1);
        if($add){
            return redirect()->route('order.cart')->with('success','Cart Added successfully!');
        }
    }
    public function delete($id){
         \Cart::remove($id);
         return redirect()->route('order.cart')->with('success','Item Deleted From Cart!');

    }

    public function storeOrder(){
        $order = new Order;
        $order->user_id = Auth::id();
        $order->payment_status = 'Not Paid';
        $order->payment_value = \request('price');
        $order->addres = \request('addres');
        $order->city = \request('city');
        $order->state = \request('state');
        $order->postcode= \request('postcode');
        $order->country = \request('country');
        if($order->save()){

            \request()->session()->flush();

            return redirect()->route('order.view')->with('success' ,'Your Order Has Been Proceed Thanks ');
        }
        else{
            echo "fail";
        }

    }

    public function confrimpage(){
        $status = \Cart::isEmpty();
        if(!$status){
            $items = \Cart::getContent();
            $totalQTY= \Cart::getTotalQuantity();
            $name = Auth::user()->name;


            $total = \Cart::getTotal();
            return view('StorePage.PaymentInfo' , compact('items' ,'total' ,'totalQTY' ,'name' , 'total'));
        }
        else{
            return redirect()->back()->with('error','your shooping cart is empty');
        }

    }


}

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
        $products = product::whereNull('parent_id')->with('children')->get();
        $adminlogin = Auth::user();
        return view('admin.admin' , compact('adminlogin','products','orders'))->with('success','Welcome to admin Panel!');;
    }




    public function products(){
        $products = product::whereNull('parent_id')->with('children')->get();
        $adminlogin = Auth::user();

        return view('admin.ProductPage' ,compact('adminlogin' , 'products'));
    }







    public function  orders(){
        $orders = DB::table('orders')
            ->leftJoin('users', 'orders.user_id', '=', 'users.id')
            ->get();
        $adminlogin = Auth::user();
        return view('admin.orderpage',compact('adminlogin' , 'orders'));
    }





    public function destroyProduct($id){
        $product = product::find($id);
        if($product->delete()){
            return redirect()->route('view.productlist')->with('success','Product has been deleted!');;
        }
    }





    public function editProduct($id){
        $product = product::find($id);
        $name = \request('name');
        $desc =  \request('desc');
        $price = \request('price');
        $product->name = $name;
        $product->desc = $desc;
        $product->price = $price;

        if($product->save()){
            return redirect()->route('view.productlist')->with('success','Product Edit Succesfuly');;
        }

    }






    public function  editProductPage($id){
        $adminlogin = Auth::user();
        $product = product::find($id);

        return view('admin.editpage' ,compact('adminlogin','product'));
    }







    public function addchild(){
        $product = new product;
        $image = \request('image');
        $dest = storage_path('/app/public/img/products');
//        $dest_heroku = public_path('/img/products');
        $product->image = time() .".".$image->extension();
//        uncomment this when heroku is done

        $image->move($dest,$product->image);

//        move for heroku
//        $image->move($dest_heroku,$product->image);

        $product->name = \request('name');
        $product->desc = \request('desc');
        $product->price = \request('price');
        $product->parent_id = \request('parentid');
        if($product->save()){
          return  redirect()->route('view.productlist')->with('success','new item successfully added!');;
        }

    }





    public function addParent(){
        $product = new product;
        $product->name = \request('name');
        $product->desc = "";
        if($product->save()){
            return  redirect()->route('view.productlist')->with('success','new category successfully added ! ');;
        }
    }

    public function editorder(){
        $order = Order::find(\request('id'));
        $option = \request('select');
        $order->payment_status = $option;
        if($order->save()){
            return redirect()->route('view.orderlist')->with('success','Order has been edited!');;
        }

    }
}

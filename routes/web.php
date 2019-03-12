<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//auth
Auth::routes();

//inteface
Route::get('/','InterfaceController@index')->name('index');
//order
Route::get('/order' , 'OrderController@index')->name('order.view');
Route::get('/cart' , 'OrderController@cart')->middleware('loginvertif')->name('order.cart');
Route::POST('/cart','OrderController@save')->name('cart.store');
route::post('/delete/{id}','OrderController@delete')->name('cart.delete');
Route::post('/edit/{id}','OrderController@edit')->name('cart.edit');
Route::post('/confirm', 'OrderController@confirm')->name('confirm.payment');
Route::post('/confrimAddres/{id}' , 'OrderController@editAddres')->name('edit.order');




//admin
Route::get('/admin', 'AdminController@index')->middleware('admin')->name('admin.panel');
Route::get('/admin/products', 'AdminController@products')->name('view.productlist');
Route::get('/admin/orders' , 'AdminController@orders')->name('view.orderlist');
//crud for product in admin
//delete product
Route::post('/admin/delete/product/{id}' , 'AdminController@destroyProduct')->name('delete.product');
//edit page
Route::get('/admin/product/{id}' , 'AdminController@editProductPage')->name('edit.product.page');
//edit prodcut
Route::post('/admin/editproduct/{id}' , 'AdminController@editProduct')->name('edit.product');
//add product child
Route::post('/admin/addchild' , 'AdminController@addchild')->name('add.child');
//add parent
Route::post('/admin/addparent' , 'AdminController@addParent')->name('add.parent');
//edit order
Route::post('/admin/editorder' ,'AdminController@editorder')->name('edit.order');



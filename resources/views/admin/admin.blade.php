@extends('layouts.AdminTemplate')
@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-25">
                    {{--flassh message--}}
                    @include('layouts.Snipsets.FlashMessage')
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-storage"></i>
                                    </div>
                                    <div class="text">

                                        <!-- Jumlah member boi -->
                                        <h2>{{count($products)}}</h2>
                                        <span> Products</span>
                                    </div>
                                </div>
                                <div class="overview-chart">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <!-- JASA YANG TERPAKAI  -->
                                        <h2>{{count($orders)}}</h2>
                                        <span>Orders</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">View Product</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>name</th>
                                    <th>Parent_id</th>
                                    <th>price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    @foreach($product->children  as $child)
                                    <tr>
                                        <td>{{$child->name}}</td>
                                        <td>{{$child->parent_id}}</td>
                                        <td>{{$child->price}}</td>

                                    </tr>
                                        @endforeach

                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">View Orders</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Payment Status</th>
                                    <th>Addres</th>
                                    <th class="text-right">Total Price</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->payment_status}}</td>
                                        <th>{{$order->addres}}</th>
                                        <td class="text-right">{{$order->payment_value}}</td>

                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

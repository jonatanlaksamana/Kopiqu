@extends('layouts.AdminTemplate')
@section('content')
    <div class="page-wrapper">


        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <input class="btn btn-success btn-lg my-5" value="+ Add Product">
                    <div class="row">

                        <div class="col-lg-12">
                            <h2 class="title-1 m-b-25">Products</h2>
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent_id</th>
                                        <th>Desc</th>
                                        <th class="text-right">Price</th>
                                        <th class="text-right">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        @foreach($product->children  as $child)
                                    <tr>
                                        <td>{{$child->name}}</td>
                                        <td>{{$child->parent_id}}</td>
                                        <td>{{$child->desc}}</td>
                                        <td class="text-right">Rp.{{$child->price}}</td>
                                        <td class="text-right">
                                            <input class="btn btn-secondary btn-sm" value="Edit">
                                            <form method="post" action="{{url('/admin/delete/product/' . $child->id)}}">
                                                @csrf
                                                <input  type="submit" class="btn btn-danger btn-sm" value="Remove">

                                            </form>



                                        </td>
                                    </tr>
                                            @endforeach
                                    @endforeach


                                    </tbody>

                                </table>

                            </div>
                            {{$products->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

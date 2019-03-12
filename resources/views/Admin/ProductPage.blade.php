@extends('layouts.AdminTemplate')
@section('content')

    <div class="page-wrapper">


        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <button type="button" class="btn btn-success btn-lg my-5" data-toggle="modal" data-target="#addChildModal"> Add Product (child) </button>
                    <button type="button" class="btn btn-success btn-lg my-5" data-toggle="modal" data-target="#addParentModal"> Add  Parent </button>
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
                                            <a href="{{url('/admin/product/' . $child->id)}}" class="btn btn-primary btn-sm">Edit</a>
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

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



{{--modal--}}


    <div class="modal fade" id="addChildModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('add.child')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Product</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Name</label>
                                <div class="col-sm-10">
                                    <input value="" type="text" placeholder="insert product name..." name="name" class="form-control">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Product Description</label>
                                <div class="col-sm-10">
                                    <textarea   placeholder="insert description..." name="desc" class="form-control"> </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Parent Category</label>
                                <div class="col-sm-10">

                                    <select  name="parentid" class="form-control" id="exampleFormControlSelect1">
                                        @foreach($products as $parent)
                                            <option value="{{$parent->id}}">{{$parent->name}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Price</label>
                                <div class="col-sm-4">
                                    <input  value="" name="price" type="number" placeholder="price" class="form-control">
                                </div>
                            </div>

                            {{--file image--}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Image</label>
                                <div class="col-sm-10">

                                    <input type="file" name="image">
                                </div>
                            </div>


                        </fieldset>
                        <input type="submit" class="btn btn-primary" value="Add">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>

    {{--modal 2--}}






    <div class="modal fade" id="addParentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('add.parent')}}" method="post" class="form-horizontal" >
                        @csrf
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Product</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Name</label>
                                <div class="col-sm-10">
                                    <input value="" type="text" placeholder="insert Parent name..." name="name" class="form-control">
                                </div>
                            </div>


                        </fieldset>
                        <input type="submit" class="btn btn-primary" value="Add">
                    </form>
                </div>




                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>








@endsection

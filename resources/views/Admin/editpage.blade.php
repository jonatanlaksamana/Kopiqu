@extends('layouts.AdminTemplate')
@section('content')
    <div class="page-wrapper">
        <div class="main-content">
    <form action="{{url('/admin/editproduct/' . $product->id)}}" method="post" class="form-horizontal" role="form">
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend>Edit Product</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Name</label>
                <div class="col-sm-10">
                    <input value="{{$product->name}}" type="text" placeholder="insert product name..." name="name" class="form-control">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Product Description</label>
                <div class="col-sm-10">
                    <textarea   placeholder="insert description..." name="desc" class="form-control"> </textarea>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Price</label>
                <div class="col-sm-4">
                    <input  value="{{$product->price}}" name="price" type="number" placeholder="price" class="form-control">
                </div>
            </div>








        </fieldset>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" value="Edit" class="btn btn-primary">

        </div>
    </form>
    </div>
    </div>
@endsection

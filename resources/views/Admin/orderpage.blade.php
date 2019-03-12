@extends('layouts.AdminTemplate')
@section('content')
    <div class="page-wrapper">


        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <h2 class="title-1 m-b-25">Orders</h2>
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Payment Status</th>
                                        <th>Addres</th>
                                        <th class="text-right">Total Price</th>
                                        <th>action</th>

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
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm " data-orderid="{{$order->id}}" data-toggle="modal" data-target="#editorder"> Edit </button>
                                            </td>

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
    </div>

    {{--modal--}}


    <div class="modal fade" id="editorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('edit.order')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Edit Orders</legend>

                            <input name="id" type="hidden" id="id">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="textinput">Status</label>
                                <div class="col-sm-10">

                                    <select  name="select" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Paid">Paid</option>
                                        <option value="Shipping">Shipping</option>

                                    </select>
                                </div>
                            </div>

                        </fieldset>
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </form>
                </div>




                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>

@endsection

@extends('layouts.AuthTemplate')
@section('content')

    <style>
        body{
            padding-top: 100px;
        }
    </style>




    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Payment Number : {{$orderdetails->id}}</h1>
                </div>
                <div class="col-lg-12">
                    <table style="width:50%">
                        <tr>
                            <th>Name</th>
                            <td>{{$name}}</td>

                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$orderdetails->created_at}}</td>

                        </tr>
                        <tr>
                            <th>total</th>
                            <td>{{$orderdetails->payment_value}}</td>

                        </tr>
                    </table>

                </div>
            </div>
            <div>
                <form method="post" action="{{url('confrimAddres/'. $orderdetails->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Enter your addres</label>
                        <textarea name="addres" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Make Order Now">
                </form>

            </div>

            <p class="lead"> You need transfer to our bank Account and our admin will check your payment order thanks <br> Regrats Coffequ Team </p>


        </div>
    </div>
@endsection

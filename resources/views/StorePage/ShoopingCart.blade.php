@extends('layouts.AuthTemplate')
@section('content')
    <style>
        body{
            padding-top: 100px;
        }
    </style>
<div class="container">
    <p class="lead">Note : every single order got fee charge Rp.5000 /kg <br> And will be counted at total</p>

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-2 hidden-xs"><img src="{{asset('/storage/img/products/' .$products::find($item->id)->image ) }}" alt="..." class="img-responsive"/></div>
                    <div class="col-sm-10">
                        <h4 class="nomargin">{{$item->name}}</h4>

                    </div>
                </div>
            </td>
            <td data-th="Price">Rp.{{$item->price}}</td>
            <td data-th="Quantity">
               <p>{{$item->quantity}} Kg</p>
            </td>
            <td data-th="Subtotal" class="text-center">Rp.{{ $item->quantity * $item->price}}</td>
            <td class="actions" data-th="">
                <form method="post" action="{{url('delete/' . $item->id)}}">
                           @csrf
                           <input  type="submit" class="btn btn-danger btn-sm" value="remove item">
                </form>




            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total: Rp.{{$total}}</strong></td>
        </tr>
        <tr>
            <td><a href="{{route('order.view')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total: Rp.{{  ($totalQTY * 5000)+ $total}}</strong></td>
            <td>
                <form method="post" action="{{route('confirm.payment')}}">
                    @csrf

                    <input name="total" type="hidden"  value={{($totalQTY * 5000)+ $total}}>
                    <input type="submit" href="#" value="Checkout" class="btn btn-success btn-block">
                </form>

            </td>
        </tr>
        </tfoot>
    </table>
</div>
@endsection

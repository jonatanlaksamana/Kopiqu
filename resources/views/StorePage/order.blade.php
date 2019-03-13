@extends('layouts.AuthTemplate')
@section('content')
    <style>
        body{
            padding-top: 100px;
        }
    </style>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                <div class="awesome-menu ">
                    <ul class="project-menu">
                        <li>
                            <a href="#" class="active" data-filter="*">All</a>
                        </li>
                        @foreach($prodcuts as $parent)
                            <li>
                                <a href="#" data-filter=".{{$parent->id}}">{{$parent->name}}</a>
                            </li>

                        @endforeach



                    </ul>
                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">

                <div class="row">
                    <div class="awesome-project-content">
                        <!-- single-awesome-project start -->
                        @foreach($prodcuts as $parent)
                            @foreach($parent->children  as $child)
                                <div class="col-md-4 col-sm-4 col-xs-12 design {{$child->parent_id}}">
                                    <div class="card">
                                        {{--image--}}
                                        <div class="single-awesome-project">
                                            <div class="awesome-img">
                                                <a href="#">
                                                    <img src="{{asset('/storage/img/products/' .$child->image)}}" alt="" />
                                                    {{--<img src="{{secure_asset('/img/products/' .$child->image)}}" alt="" />--}}
                                                </a>
                                                <div class="add-actions text-center">
                                                    <div class="project-dec">
                                                        <a class="venobox" data-gall="myGallery" href="{{asset('/storage/img/products/' . $child->image)}}">
                                                            {{--<a class="venobox" data-gall="myGallery" href="{{secure_asset('/img/products/' . $child->image)}}">--}}
                                                            <h4>{{$child->name}}</h4>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">{{$child->name}}</a>
                                            </h4>
                                            <h5>Rp.{{$child->price}}</h5>
                                            <p class="card-text">{{$child->desc}}</p>
                                        </div>

                                        <div class="card-footer">
                                            <form method="post" action="{{route('cart.store')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$child->id}}">
                                                <input type="hidden" name="name" value="{{$child->name}}">
                                                <input type="hidden" name="price" value="{{$child->price}}">

                                                <input  type="submit" class="btn btn-success" value="Add to Cart">
                                            </form>


                                        </div>


                                    </div>

                                </div>

                            @endforeach



                        @endforeach

                    </div>





                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>

@endsection

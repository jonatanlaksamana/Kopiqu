@extends('layouts.PublicTemplate')
<style>

</style>
@include('layouts.Snipsets.FlashMessage')

@section('content')


<!-- header end -->

<!-- Start Slider Area -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">


        <div id="ensign-nivoslider" class="slides">



                <img src="{{asset('/storage/img/slider/' . $sliders[0]->image)}}" title="#{{$sliders[0]->title}}">
                {{--<img src="{{secure_asset('/img/slider/' . $slide->image)}}" title="#{{$slide->title}}">--}}



        </div>

        <!-- direction 1 -->

        @foreach($sliders as $slide)
            <div id="{{$slide->title}}" class="slider-direction">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">{{$slide->author}}</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">{{$slide->quote}}</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="{{route('order.view')}}">Order Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach


</div>
</div>
<!-- End Slider Area -->

<!-- Start About area -->
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>About us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src=" {{asset('/storage/img/about/1.jpg')}}" alt="">
                            <img src=" {{secure_asset('/img/about/1.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">Welcome to Sally Coffe Shop!!!</h4>
                        </a>
                        <p>Sally Coffe has built a strong reputation for offering a wide variety of quality Coffe products that include delightful Brazilian ,Indonesiam , Arabic.</p>
                        <h5>Come experience something new! </h5>
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
<!-- End About area -->

<!-- Start Service area -->
<div id="services" class="services-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="services-contents">
                <!-- Start Left services -->
                @foreach($services as $service)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="{{$service->font}}"></i>
                                    </a>
                                    <h4>{{$service->service}}</h4>
                                    <p>{{$service->desc}}</p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>


                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- End Service area -->




<!-- Start reviews Area -->
<div class="reviews-area hidden-xs">
    <div class="work-us">
        <div class="work-left-text">
            <a href="#">
                <img src=" {{asset('/storage/img/about/2.jpg')}}" alt="">
                <img src=" {{secure_asset('/img/about/2.jpg')}}" alt="">
            </a>
        </div>
        <div class="work-right-text text-center">
            <h2>What do you waiting for</h2>
            <h5>Come Order our Coffe !</h5>
            <a href="{{route('order.view')}}" class="ready-btn">Order Now</a>
        </div>
    </div>
</div>
<!-- End reviews Area -->



<!-- Start products Area -->
<div id="product" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Our Product</h2>
                    <p class="lead">take a peek of our coffe</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Portfolio -page -->
            <div class="awesome-project-1 fix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
            </div>
            <div class="awesome-project-content">
                <!-- single-awesome-project start -->
                @foreach($prodcuts as $parent)
                    @foreach($parent->children  as $child)
                        <div class="col-md-4 col-sm-4 col-xs-12 design {{$child->parent_id}}">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="{{asset('/storage/img/products/' .$child->image)}}" alt="" />
                                        <img src="{{secure_asset('/img/products/' .$child->image)}}" alt="" />

                                    </a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{asset('/storage/img/products/' . $child->image)}}">
                                                <a class="venobox" data-gall="myGallery" href="{{secure_asset('/img/products/' . $child->image)}}">
                                                <h4>{{$child->name}}</h4>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach



                @endforeach

            </div>
        </div>
    </div>
</div>

<div class="suscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                <div class="suscribe-text text-center">
                    <h3>Well what do you waiting for!!, come order now</h3>
                    <a class="sus-btn" href="{{route('order.view')}}">Order!</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- End Suscrive Area -->


@endsection

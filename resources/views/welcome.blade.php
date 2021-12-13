@extends('front.supportive.action')

@section('content')
<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">

            
            <div class="item-slick1" style="background-image: url({{asset('assets/images/slide-01.jpg')}});">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Women Collection 2018
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                NEW SEASON
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url({{asset('assets/images/slide-02.jpg')}});">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Men New-Season
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Jackets & Coats
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url({{asset('assets/images/slide-03.jpg')}});">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Men Collection 2018
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                New arrivals
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <h4 class="mt-0">Categories</h4>
        <hr>
        <div class="row">
            @foreach ($category as $item)
                
           
            <div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
                <!-- Block1 -->

             <div class="card">
                 <div class="card-body">
                    <div class="media">
                        <img src="{{asset('uploads/category/'.$item->icon)}}" class="mr-3" style="width: 40px">
                        <div class="media-body">
                          <h5 class="mt-0">{{$item->name}}</h5>
                        </div>
                      </div>
                 </div>
             </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>


<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Product Overview
            </h3>
        </div>

        <div class="flex-w flex-sb-m p-b-52">
           
            <!-- Filter -->
           
        </div>

        <div class="row isotope-grid">
            @foreach ($product as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img  src="{{asset('uploads/product/'.$item->thumbnail)}}" alt="IMG-PRODUCT">

                        <a href="{{route('productdetail',['id'=>$item->id,'slug'=>$item->slug])}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                             View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                              {{-- {{$item->name}} --}}
                              {{\Illuminate\Support\Str::limit($item->name,25)}}

                            </a>

                            <span class="stext-105 cl3">
                                &#8377; {{$item->price}}
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="{{asset('assets/images/icons/icon-heart-01.png')}}" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('assets/images/icons/icon-heart-02.png')}}" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>
</section>


<!-- Banner -->
<div class="sec-banner bg0">
    <div class="container">
        <h4 class="mt-0">Brands</h4>
        <hr>
        <div class="row">
            @foreach ($brand as $item)
                
           
            <div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
                <!-- Block1 -->

             <div class="card">
                 <div class="card-body">
                    <div class="media">
                        <img src="{{asset('uploads/brands/'.$item->icon)}}" class="mr-3" style="width: 40px">
                        <div class="media-body">
                          <h5 class="mt-0">{{$item->name}}</h5>
                        </div>
                      </div>
                 </div>
             </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>


@endsection

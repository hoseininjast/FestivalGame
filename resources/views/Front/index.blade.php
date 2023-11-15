@extends('layouts.Front.Master')

@section('content')
    <main class="main-content dt-sl mb-3">
        <div class="container main-container">
            <!-- Start Main-Slider -->
            <div class="row mb-5">
                <aside class="sidebar col-lg-4 hidden-md order-2 pr-0 hidden-md">
                    <!-- Start banner -->
                    <div class="sidebar-inner dt-sl">
                        <div class="sidebar-banner">
                            <div class="row">
                                @foreach(\App\Models\SiteSettings\Banner::whereIn('Position' , [1,2])->get() as $banner)
                                    <div class="col-12 mb-1">
                                        <div class="widget-banner">
                                            <a href="{{rawurldecode($banner->Link)}}">
                                                <img src="{{$banner->ImageUrl}}" alt="" style="width: 412px;height: 206px">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End banner -->
                </aside>
                <div class="col-lg-8 col-md-12 order-1">
                    <!-- Start main-slider -->
                    <section id="main-slider" class="main-slider main-slider-cs mt-1 carousel slide carousel-fade card hidden-sm"
                             data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach(\App\Models\Sliders::orderby('Priority')->get() as $slider)
                                <li data-target="#main-slider" data-slide-to="{{$loop->index}}" class="@if($loop->first) active  @endif"></li>

                            @endforeach

                        </ol>
                        <div class="carousel-inner">
                            @foreach(\App\Models\Sliders::orderby('Priority')->get() as $slider)
                                <div class="carousel-item @if($loop->first) active  @endif ">
                                    <a class="main-slider-slide" href="{{rawurldecode($slider->Link)}}">
                                        <img src="{{$slider->ImageUrl}}" alt="" class="img-fluid" style="height: 414px;width: 100%;">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                            <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider" data-slide="next">
                            <i class="mdi mdi-chevron-left"></i>
                        </a>
                    </section>
                    <section id="main-slider-res" class="main-slider carousel slide carousel-fade card d-none show-sm" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach(\App\Models\Sliders::orderby('Priority')->get() as $slider)
                                <li data-target="#main-slider" data-slide-to="{{$loop->index}}" class="@if($loop->first) active  @endif"></li>

                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach(\App\Models\Sliders::orderby('Priority')->get() as $slider)
                                <div class="carousel-item @if($loop->first) active  @endif ">
                                    <a class="main-slider-slide" href="{{rawurldecode($slider->Link)}}">
                                        <img src="{{$slider->ImageUrl}}" alt="" class="img-fluid" style="height: 414px;width: 100%;">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#main-slider-res" role="button" data-slide="prev">
                            <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider-res" data-slide="next">
                            <i class="mdi mdi-chevron-left"></i>
                        </a>
                    </section>
                    <!-- End main-slider -->
                </div>
            </div>
            <!-- End Main-Slider -->
        </div>
        <!-- Start Product-Slider -->
        <section class="slider-section mb-5 amazing-section" style="background: #ef394e">
            <div class="container main-container">
                <div class="row mb-3">
                    <!-- Start Product-Slider -->
                    <div class="col-12">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme">
                            <div class="item">
                                <div class="amazing-product text-center pt-5">
                                    <a href="#">
                                        <img src="/Front/assets/img/theme/amazing-1.png" alt="">
                                    </a>
                                    <a href="#" class="view-all-amazing-btn">
                                        مشاهده همه
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/017.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">کت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">199,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/013.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">135,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/09.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">145,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/010.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">170,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/011.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">185,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/019.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">تیشرت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">54,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Slider -->

                </div>
            </div>
        </section>
        <!-- End Product-Slider -->
        <div class="container main-container">
            <!-- Start Product-Slider -->
            <div class="row">
                <div class="col-xl-10 col-lg-12">
                    <section class="slider-section dt-sl mb-5">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="section-title text-sm-title title-wide no-after-title-wide">
                                    <h2>پر فروش ترینها</h2>
                                    <a href="#">مشاهده همه</a>
                                </div>
                            </div>

                            <!-- Start Product-Slider -->
                            <div class="col-12 px-res-0">
                                <div class="product-carousel carousel-md owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                </div>
                                                <div class="discount">
                                                    <span>20%</span>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="/Front/assets/img/products/07.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">مانتو زنانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                <span class="product-price">157,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="/Front/assets/img/products/017.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">کت مردانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                <span class="product-price">199,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="/Front/assets/img/products/013.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                <span class="product-price">135,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="/Front/assets/img/products/09.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">مانتو زنانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                <span class="product-price">145,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="/Front/assets/img/products/010.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">مانتو زنانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                <span class="product-price">170,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                                <div class="discount">
                                                    <span>20%</span>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="/Front/assets/img/products/011.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">مانتو زنانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                                <span class="product-price">185,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card">
                                            <div class="product-head">
                                                <div class="rating-stars">
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star active"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </div>
                                            </div>
                                            <a class="product-thumb" href="shop-single.html">
                                                <img src="/Front/assets/img/products/019.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">تیشرت مردانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                <span class="product-price">54,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Slider -->

                        </div>
                    </section>
                </div>
                <div class="col-xl-2 col-lg-3 hidden-lg pr-0">
                    <div class="widget-suggestion dt-sn border pt-3 mt-3">
                        <div class="widget-suggestion-title">
                            <img src="/Front/assets/img/theme/suggestion-title.png" alt="">
                        </div>
                        <div id="progressBar">
                            <div class="slide-progress"></div>
                        </div>
                        <div id="suggestion-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="product-card mb-3 shadow-unset">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/07.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">157,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3 shadow-unset">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/017.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">کت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">199,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3 shadow-unset">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/013.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">135,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3 shadow-unset">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/09.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">145,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product-Slider -->
            <!-- Start Banner -->
            <div class="row mt-3 mb-5">
                @foreach(\App\Models\SiteSettings\Banner::whereIn('Position' , [3,4])->get() as $banner)
                    <div class="col-sm-6 col-12 mb-2">
                        <div class="widget-banner">
                            <a href="{{rawurldecode($banner->Link)}}">
                                <img src="{{$banner->ImageUrl}}" alt="" style="width: 610px ; height: 223px">
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- End Banner -->
        </div>
        <!-- Start Product-Slider -->
        <section class="slider-section mb-5 amazing-section" style="background: #304ffe">
            <div class="container main-container">
                <div class="row mb-3">
                    <!-- Start Product-Slider -->
                    <div class="col-12">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme">
                            <div class="item">
                                <div class="amazing-product text-center pt-5">
                                    <a href="#">
                                        <img src="/Front/assets/img/theme/amazing-1.png" alt="">
                                    </a>
                                    <a href="#" class="view-all-amazing-btn">
                                        مشاهده همه
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/017.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">کت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">199,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/013.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">135,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/09.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">145,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/010.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">170,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/011.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">185,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/019.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">تیشرت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">54,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Slider -->

                </div>
            </div>
        </section>
        <!-- End Product-Slider -->
        <div class="container main-container">
            <!-- Start Banner -->
            <div class="row mt-3 mb-5">
                @foreach(\App\Models\SiteSettings\Banner::whereIn('Position' , [5,6,7,8])->get() as $banner)
                    <div class="col-md-3 col-sm-6 col-6 mb-2">
                        <div class="widget-banner">
                            <a href="{{rawurldecode($banner->Link)}}">
                                <img src="{{$banner->ImageUrl}}" alt="" style="width: 209px ; height: 217px">
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>
            <!-- End Banner -->
            <!-- Start Category-Section -->
            <div class="row mt-3 mb-5">
                <div class="col-12">
                    <div class="category-section dt-sn dt-sl border">
                        <div class="category-section-title dt-sl">
                            <h3>بیش از {{ceil(\App\Models\Product::count() / 100) * 100}} کالا در دسته‌بندی‌های مختلف</h3>
                        </div>
                        <div class="category-section-slider dt-sl">
                            <div class="category-slider owl-carousel">
                                @foreach(\App\Models\ProductCategory::where('ParentID' , null)->get() as $category)
                                    <div class="item">
                                        <a href="{{route('Front.Category' , $category->Name)}}" class="promotion-category">
                                            <img src="{{$category->Icon}}" alt="">
                                            <h4 class="promotion-category-name">{{$category->Name}}</h4>
                                            <h6 class="promotion-category-quantity">{{number_format(ceil($category->Products()->count() / 100) * 100 ) }} کالا</h6>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Category-Section -->
            <!-- Start Product-Slider -->
            <section class="slider-section dt-sl mb-5">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <h2>پر فروش ترینها</h2>
                            <a href="#">مشاهده همه</a>
                        </div>
                    </div>

                    <!-- Start Product-Slider -->
                    <div class="col-12">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme">
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/07.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">157,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/017.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">کت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">199,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/013.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">135,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/09.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">145,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/010.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">170,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/011.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">185,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/019.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">تیشرت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">54,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Slider -->

                </div>
            </section>
            <!-- End Product-Slider -->
            <!-- Start Banner -->
            <div class="row mt-3 mb-5">
                @foreach(\App\Models\SiteSettings\Banner::whereIn('Position' , [9])->get() as $banner)
                    <div class="col-12">
                        <div class="widget-banner">
                            <a href="{{rawurldecode($banner->Link)}}">
                                <img src="{{$banner->ImageUrl}}" alt="" style="width: 1250px; height: 159px">
                            </a>
                        </div>
                    </div>


                @endforeach

            </div>
            <!-- End Banner -->
            <!-- Start Product-Slider -->
            <section class="slider-section dt-sl mb-5">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <h2>پر فروش ترینها</h2>
                            <a href="#">مشاهده همه</a>
                        </div>
                    </div>

                    <!-- Start Product-Slider -->
                    <div class="col-12">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme">
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/07.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">157,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/017.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">کت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">199,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/013.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">135,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/09.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">145,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/010.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">170,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/011.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">185,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/Front/assets/img/products/019.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">تیشرت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">54,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Slider -->

                </div>
            </section>
            <!-- End Product-Slider -->
            <!-- Start Feature-Product -->
            <section class="dt-sl dt-sn mb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <h2>پیشنهاد ما</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/017.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/020.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/014.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/016.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/018.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/015.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 pt-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/017.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/020.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-horizontal-product border-bottom rounded-0">
                                    <div class="card-horizontal-product-thumb">
                                        <a href="#">
                                            <img src="/Front/assets/img/products/014.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-horizontal-product-content">
                                        <div class="card-horizontal-product-title">
                                            <a href="#">
                                                <h3>کت مردانه مجلسی مدل k-m-5110</h3>
                                            </a>
                                        </div>
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="card-horizontal-product-price">
                                            <span>199,000 تومان</span>
                                        </div>
                                        <div class="card-horizontal-product-buttons">
                                            <a href="#" class="btn btn-outline-info">جزئیات محصول</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Feature-Product -->
        </div>
    </main>
@endsection

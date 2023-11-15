<header class="main-header">
    <!-- Start ads -->
    <div class="ads-header-wrapper">
        <a href="#" class="ads-header hidden-sm" target="_blank"
           style="background-image: url(/Front/assets/img/banner/large-ads.jpg)"></a>
    </div>
    <!-- End ads -->
    <!-- Start topbar -->
    <div class="container main-container">
        <div class="topbar dt-sl">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="logo-area">
                        <a href="#">
                            <img src="{{asset('images/Logo/Logo.png')}}" style="height: 50px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 hidden-sm">
                    <div class="search-area dt-sl">
                        <form action="" class="search">
                            <input type="text"
                                   placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                            <i class="far fa-search search-icon"></i>
                            <button class="close-search-result" type="button"><i
                                    class="mdi mdi-close"></i></button>
                            <div class="search-result">
                                <ul>
                                    <li>
                                        <a href="#">موبایل</a>
                                    </li>
                                    <li>
                                        <a href="#">مد و پوشاک</a>
                                    </li>
                                    <li>
                                        <a href="#">میکروفن</a>
                                    </li>
                                    <li>
                                        <a href="#">میز تلویزیون</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="col-md-4 col-6 topbar-left">
                    <ul class="nav float-left">
                        @auth()
                            <li class="nav-item account dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span class="label-dropdown">حساب کاربری</span>
                                    <i class="mdi mdi-account-circle-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-account-card-details-outline"></i>پروفایل
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="float-left badge badge-dark">۴</span>
                                        <i class="mdi mdi-comment-text-outline"></i>پیغام ها
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-account-edit-outline"></i>ویرایش حساب کاربری
                                    </a>
                                    <div class="dropdown-divider" role="presentation"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    >
                                        <i class="mdi mdi-logout-variant"></i>خروج
                                    </a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item account ">
                                <a class="nav-link" href="{{route('login')}}" >
                                    <span class="label-dropdown">حساب کاربری</span>
                                    <i class="mdi mdi-account-circle-outline"></i>
                                </a>
                            </li>

                        @endauth

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End topbar -->

    <!-- Start bottom-header -->
    <div class="bottom-header dt-sl mb-sm-bottom-header">
        <div class="container main-container">
            <!-- Start Main-Menu -->
            <nav class="main-menu d-flex justify-content-md-between justify-content-end dt-sl">
                <ul class="list hidden-sm">
                    <li class="list-item category-list">
                        <a href="#"><i class="fal fa-bars ml-1"></i>دسته بندی کالاها</a>
                        <ul>
                            <li>
                                <a href="#">کالای دیجیتال</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">اسپیکر بلوتوث و با سیم</a></li>
                                    <li class="sublist--title"><a href="#">هارد، فلش و SSD</a></li>
                                    <li class="sublist--title"><a href="#">دوربین</a></li>
                                    <li class="sublist--item"><a href="#">دوربین عکاسی دیجیتال</a></li>
                                    <li class="sublist--item"><a href="#">دوربین‌ ورزشی و فیلم برداری</a></li>
                                    <li class="sublist--item"><a href="#">دوربین‌ چاپ سریع</a></li>
                                    <li class="sublist--title"><a href="#">لوازم جانبی دوربین</a></li>
                                    <li class="sublist--item"><a href="#">لنز</a></li>
                                    <li class="sublist--item"><a href="#">کیف</a></li>
                                    <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                    <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                    <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">اسپیکر بلوتوث و با سیم</a></li>
                                    <li class="sublist--title"><a href="#">هارد، فلش و SSD</a></li>
                                    <li class="sublist--title"><a href="#">دوربین</a></li>
                                    <li class="sublist--item"><a href="#">دوربین عکاسی دیجیتال</a></li>
                                    <li class="sublist--item"><a href="#">دوربین‌ ورزشی و فیلم برداری</a></li>
                                    <li class="sublist--item"><a href="#">دوربین‌ چاپ سریع</a></li>
                                    <li class="sublist--title"><a href="#">لوازم جانبی دوربین</a></li>
                                    <li class="sublist--item"><a href="#">لنز</a></li>
                                    <li class="sublist--item"><a href="#">کیف</a></li>
                                    <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                    <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                    <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">خودرو، ابزار و تجهیزات صنعتی</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">مد و پوشاک</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">زیبایی و سلامت</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">خانه و آشپزخانه</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">لنز</a></li>
                                    <li class="sublist--item"><a href="#">کیف</a></li>
                                    <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                    <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                    <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">کتاب، لوازم تحریر و هنر</a>
                                <ul class="row">
                                    <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                    <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                    <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">اسباب بازی، کودک و نوزاد</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">لنز</a></li>
                                    <li class="sublist--item"><a href="#">کیف</a></li>
                                    <li class="sublist--item"><a href="#">کارت حافظه</a></li>
                                    <li class="sublist--item"><a href="#">کاغذ چاپ عکس</a></li>
                                    <li class="sublist--item"><a href="#">دوربین دوچشمی و شکاری</a></li>
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">واقعیت مجازی</a></li>
                                    <li class="sublist--title"><a href="#">مچ‌بند و ساعت هوشمند</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">ورزش و سفر</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--item"><a href="#">پایه نگهدارنده گوشی</a></li>
                                    <li class="sublist--title"><a href="#">گوشی موبایل</a></li>
                                    <li class="sublist--item"><a href="#">سامسونگ</a></li>
                                    <li class="sublist--item"><a href="#">هوآوی</a></li>
                                    <li class="sublist--item"><a href="#">اپل</a></li>
                                    <li class="sublist--item"><a href="#">شیائومی</a></li>
                                    <li class="sublist--item"><a href="#">آنر</a></li>
                                    <li class="sublist--item"><a href="#">نوکیا</a></li>
                                    <li class="sublist--title"><a href="#">هدفون، هدست، هندزفری</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">خوردنی و آشامیدنی</a>
                                <ul class="row">
                                    <li class="sublist--title"><a href="#">لوازم جانبی گوشی</a></li>
                                    <li class="sublist--item"><a href="#">کیف و کاور گوشی</a></li>
                                    <li class="sublist--item"><a href="#">پاور بانک (شارژر همراه)</a></li>
                                    <li class="sublist--title"><a href="#">برندها</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- mega menu 3 column -->
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-3">
                        <a class="nav-link" href="#">بهداشت و سلامت</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">عنوان دسته</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو دو</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو چهار</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو پنج</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو شش</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو هفت</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">عنوان دسته</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i>
                                            زیر منو یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i>
                                            زیر منو دو</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i>
                                            زیر منو سه</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i>
                                            زیر منو چهار</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i>
                                            زیر منو پنج</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i>
                                            زیر منو شش</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><i class="mdi mdi-brightness-percent"></i>
                                            زیر منو هفت</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item">
                                <a href="#">
                                    <img src="./assets/img/theme/mega-menu.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- mega menu 4 column -->
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-4">
                        <a class="nav-link" href="#">ابزار و اداری</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">عنوان دسته</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو دو</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو چهار</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو پنج</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو شش</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو هفت</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو هشت</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو نه</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">عنوان دسته</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو دو</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو چهار</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو پنج</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو شش</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو هفت</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">عنوان دسته</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو دو</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو چهار</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو پنج</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو شش</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">عنوان دسته</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو دو</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو چهار</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- dropdown-menu -->
                    <li class="list-item list-item-has-children menu-col-1">
                        <a class="nav-link" href="#">خانه و آشپزخانه</a>
                        <ul class="sub-menu nav">
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو یک</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو دو</a>
                            </li>
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">زیر منو سه</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه - یک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه - دو</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">زیر منو سه - سه</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">ورزش و سفر</a>
                    </li>
                </ul>
                <div class="nav">
                    <div class="nav-item cart--wrapper">
                        <a class="nav-link" href="#">
                            <span class="label-dropdown">سبد خرید</span>
                            <i class="mdi mdi-cart-outline"></i>
                            <span class="count">2</span>
                        </a>
                        <div class="header-cart-info">
                            <div class="header-cart-info-header">
                                <div class="header-cart-info-count">
                                    3 کالا
                                </div>
                                <a href="#" class="header-cart-info-link">
                                    <span>مشاهده سبد خرید</span>
                                </a>
                            </div>
                            <ul class="header-basket-list do-nice-scroll">
                                <li class="cart-item">
                                    <a href="#" class="header-basket-list-item">
                                        <div class="header-basket-list-item-image">
                                            <img src="./assets/img/cart/1.jpg" alt="">
                                        </div>
                                        <div class="header-basket-list-item-content">
                                            <p class="header-basket-list-item-title">
                                                گوشی موبایل سامسونگ مدل Galaxy A30 SM-A305F/DS دو سیم کارت ظرفیت
                                                64 گیگابایت
                                            </p>
                                            <div class="header-basket-list-item-footer">
                                                <div class="header-basket-list-item-props">
                                                            <span class="header-basket-list-item-props-item">
                                                                1 x
                                                            </span>
                                                    <span class="header-basket-list-item-props-item">
                                                                <div class="header-basket-list-item-color-badge"
                                                                     style="background: #2196f3"></div>
                                                                آبی
                                                            </span>
                                                </div>
                                                <button class="header-basket-list-item-remove">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="cart-item">
                                    <a href="#" class="header-basket-list-item">
                                        <div class="header-basket-list-item-image">
                                            <img src="./assets/img/cart/2.jpg" alt="">
                                        </div>
                                        <div class="header-basket-list-item-content">
                                            <p class="header-basket-list-item-title">
                                                گوشی موبایل هوآوی مدل Y9 2019 JKM-LX1 دو سیم کارت ظرفیت 64
                                                گیگابایت
                                            </p>
                                            <div class="header-basket-list-item-footer">
                                                <div class="header-basket-list-item-props">
                                                            <span class="header-basket-list-item-props-item">
                                                                1 x
                                                            </span>
                                                    <span class="header-basket-list-item-props-item">
                                                                <div class="header-basket-list-item-color-badge"
                                                                     style="background: #212121"></div>
                                                                سفید
                                                            </span>
                                                </div>
                                                <button class="header-basket-list-item-remove">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="cart-item">
                                    <a href="#" class="header-basket-list-item">
                                        <div class="header-basket-list-item-image">
                                            <img src="./assets/img/cart/3.jpg" alt="">
                                        </div>
                                        <div class="header-basket-list-item-content">
                                            <p class="header-basket-list-item-title">
                                                گوشی موبایل سامسونگ مدل Galaxy A70 SM-A705FN/DS دو سیم‌کارت
                                                ظرفیت 128 گیگابایت
                                            </p>
                                            <div class="header-basket-list-item-footer">
                                                <div class="header-basket-list-item-props">
                                                            <span class="header-basket-list-item-props-item">
                                                                1 x
                                                            </span>
                                                    <span class="header-basket-list-item-props-item">
                                                                <div class="header-basket-list-item-color-badge"
                                                                     style="background: #FFFFFF"></div>
                                                                سفید
                                                            </span>
                                                </div>
                                                <button class="header-basket-list-item-remove">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="header-cart-info-footer">
                                <div class="header-cart-info-total">
                                    <span class="header-cart-info-total-text">مبلغ قابل پرداخت:</span>
                                    <p class="header-cart-info-total-amount">
                                                <span class="header-cart-info-total-amount-number">
                                                    9,500,000 <span>تومان</span></span>
                                    </p>
                                </div>

                                <div>
                                    <a href="#" class="header-cart-info-submit">
                                        ثبت سفارش
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-menu">
                    <div class="align align__justify">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="side-menu">
                    <div class="logo-nav-res dt-sl text-center">
                        <a href="#">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="search-box-side-menu dt-sl text-center mt-2 mb-3">
                        <form action="">
                            <input type="text" name="s" placeholder="جستجو کنید...">
                            <i class="mdi mdi-magnify"></i>
                        </form>
                    </div>
                    <ul class="navbar-nav dt-sl">
                        <li class="sub-menu">
                            <a href="#">کالای دیجیتال</a>
                            <ul>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو چهار</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">عنوان دسته</a>
                                </li>
                                <li>
                                    <a href="#">عنوان دسته</a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو چهار</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">بهداشت و سلامت</a>
                            <ul>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو چهار</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">عنوان دسته</a>
                                </li>
                                <li>
                                    <a href="#">عنوان دسته</a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو چهار</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">ابزار و اداری</a>
                            <ul>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو چهار</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">عنوان دسته</a>
                                </li>
                                <li>
                                    <a href="#">عنوان دسته</a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">عنوان دسته</a>
                                    <ul>
                                        <li>
                                            <a href="#">زیر منو یک</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو دو</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو سه</a>
                                        </li>
                                        <li>
                                            <a href="#">زیر منو چهار</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">مد و پوشاک</a>
                        </li>
                        <li>
                            <a href="#">خانه و آشپزخانه</a>
                        </li>
                        <li>
                            <a href="#">ورزش و سفر</a>
                        </li>
                    </ul>
                </div>
                <div class="overlay-side-menu">
                </div>
            </nav>
            <!-- End Main-Menu -->
        </div>
    </div>
    <!-- End bottom-header -->
</header>

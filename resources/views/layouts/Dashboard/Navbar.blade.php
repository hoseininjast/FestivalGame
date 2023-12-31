<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{{route('Dashboard.index')}}" @if(URL::current() == route('Dashboard.index') ) data-active="true" @endif  aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>داشبورد</span>
                    </div>
                </a>
            </li>


            <li class="menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                        <span>محصولات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('Dashboard.Product.Add')}}"> افزودن </a>
                    </li>
                    <li>
                        <a href="{{route('Dashboard.Product.index')}}">مدیریت</a>
                    </li>

                </ul>
            </li>

            <li class="menu">
                <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <span>دسته بندی محصولات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('Dashboard.ProductCategory.Add')}}">افزودن</a>
                    </li>  <li>
                        <a href="{{route('Dashboard.ProductCategory.index')}}">مدیریت</a>
                    </li>

                </ul>
            </li>

            <li class="menu">
                <a href="#blog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="bold"></i>
                        <span>وبلاگ</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="blog" data-parent="#accordionExample">
                    <li>
                        <a href="component_tabs.html">افزودن</a>
                    </li> <li>
                        <a href="component_tabs.html">مدیریت</a>
                    </li>


                </ul>
            </li>


            <li class="menu">
                <a href="#blogcategory" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="list"></i>
                        <span>دسته بندی ها</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="blogcategory" data-parent="#accordionExample">
                    <li>
                        <a href="component_tabs.html"> افزودن</a>
                    </li><li>
                        <a href="component_tabs.html"> مدیریت</a>
                    </li>


                </ul>
            </li>



            <li class="menu">
                <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span>تنظیمات سایت</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('Dashboard.SiteSettings.Sliders.index')}}"> اسلایدر ها </a>
                    </li>
                    <li>
                        <a href="{{route('Dashboard.SiteSettings.Banner.index')}}"> بنر ها </a>
                    </li>
                    <li>
                        <a href="element_avatar.html"> تنظیمات عمومی </a>
                    </li>
                    <li>
                        <a href="element_badges.html"> تنظیمات ظاهری </a>
                    </li>

                    <li>
                        <a href="element_buttons.html"> دکمه ها </a>
                    </li>
                    <li>
                        <a href="element_buttons_group.html"> گروه های دکمه ای </a>
                    </li>
                    <li>
                        <a href="element_color_library.html"> کتابخانه رنگ </a>
                    </li>
                    <li>
                        <a href="element_loader.html"> لودر </a>
                    </li>
                    <li>
                        <a href="element_pagination.html"> صفحه </a>
                    </li>
                    <li>
                        <a href="element_popovers.html"> توضیحات </a>
                    </li>

                    <li>
                        <a href="element_search.html"> جستجو </a>
                    </li>
                    <li>
                        <a href="element_tooltips.html"> نکات راهنمایی </a>
                    </li>

                    <li>
                        <a href="element_typography.html"> تایپوگرافی </a>
                    </li>
                </ul>
            </li>


            <li class="menu">
                <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                        <span>ابزارک ها</span>
                    </div>
                </a>
            </li>





            <li class="menu">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        <span>فرم ها</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                    <li>
                        <a href="form_bootstrap_basic.html"> پایه ای </a>
                    </li>
                    <li>
                        <a href="form_input_group_basic.html"> گروه ورودی </a>
                    </li>
                    <li>
                        <a href="form_layouts.html"> چیدمان </a>
                    </li>
                    <li>
                        <a href="form_validation.html"> اعتبار سنجی </a>
                    </li>
                    <li>
                        <a href="form_input_mask.html"> ماسک ورودی </a>
                    </li>
                    <li>
                        <a href="form_bootstrap_select.html"> انتخاب Bootstrap </a>
                    </li>
                    <li>
                        <a href="form_select2.html"> انتخاب 2 </a>
                    </li>
                    <li>
                        <a href="form_bootstrap_touchspin.html"> چرخش لمسی </a>
                    </li>
                    <li>
                        <a href="form_maxlength.html"> بیشترین طول </a>
                    </li>
                    <li>
                        <a href="form_checkbox_radio.html"> چک باکس ها و ردیو ها </a>
                    </li>
                    <li>
                        <a href="form_switches.html"> سوئیچ ها </a>
                    </li>
                    <li>
                        <a href="form_wizard.html"> مراحل نصب </a>
                    </li>
                    <li>
                        <a href="form_fileupload.html"> بارگذاری پرونده </a>
                    </li>
                    <li>
                        <a href="form_quill.html"> ویرایشگر Quill </a>
                    </li>
                    <li>
                        <a href="form_markdown.html"> ویرایشگر Markdown </a>
                    </li>
                    <li>
                        <a href="form_date_range_picker.html"> تاریخ و دامنه انتخابگر </a>
                    </li>
                    <li>
                        <a href="form_clipboard.html"> کلیپ بورد </a>
                    </li>
                    <li>
                        <a href="form_typeahead.html"> تایپ پد </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>کاربران</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                    <li>
                        <a href="user_profile.html"> پروفایل </a>
                    </li>
                    <li>
                        <a href="user_account_setting.html"> تنظیمات اکانت </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        <span>صفحات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                    <li>
                        <a href="pages_helpdesk.html"> راهنما </a>
                    </li>
                    <li>
                        <a href="pages_contact_us.html"> فرم تماس </a>
                    </li>
                    <li>
                        <a href="pages_faq.html"> سؤالات متداول </a>
                    </li>
                    <li>
                        <a href="pages_faq2.html"> سؤالات متداول 2 </a>
                    </li>
                    <li>
                        <a href="pages_privacy.html"> سیاست های حفظ حریم شخصی </a>
                    </li>
                    <li>
                        <a href="pages_coming_soon.html"> به زودی </a>
                    </li>
                    <li>
                        <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> ارور <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                            <li>
                                <a href="pages_error404.html"> 404 </a>
                            </li>
                            <li>
                                <a href="pages_error500.html"> 500 </a>
                            </li>
                            <li>
                                <a href="pages_error503.html"> 503 </a>
                            </li>
                            <li>
                                <a href="pages_maintenence.html"> نگهداری </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <span>احراز هویت</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                    <li>
                        <a href="auth_login_boxed.html"> جعبه ورود </a>
                    </li>
                    <li>
                        <a href="auth_register_boxed.html"> جعبه ثبت نام </a>
                    </li>
                    <li>
                        <a href="auth_lockscreen_boxed.html"> جعبه بازکردن </a>
                    </li>
                    <li>
                        <a href="auth_pass_recovery_boxed.html"> جعبه بازیابی ID </a>
                    </li>
                    <li>
                        <a href="auth_login.html"> ورود </a>
                    </li>
                    <li>
                        <a href="auth_register.html"> ثبت نام </a>
                    </li>
                    <li>
                        <a href="auth_lockscreen.html"> بازکردن </a>
                    </li>
                    <li>
                        <a href="auth_pass_recovery.html"> بازیابی ID </a>
                    </li>
                </ul>
            </li>



            <li class="menu">
                <a href="map_jvector.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                        <span>نقشه ها</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="charts_apex.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                        <span>نمودار ها</span>
                    </div>
                </a>
            </li>



            <li class="menu">
                <a href="../../../../../sotonshop.ir/demo/cork/go/Docs/Docs-fa/index.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        <span>مستندات</span>
                    </div>
                </a>
            </li>

        </ul>

    </nav>

</div>

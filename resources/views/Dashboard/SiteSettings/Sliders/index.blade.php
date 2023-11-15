@extends('layouts.Dashboard.Master')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/assets/css/forms/theme-checkbox-radio.css')}}">
@endsection
@section('content')
    <div class="row layout-top-spacing">

        <div id="helper_text" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">افزودن اسلایدر</h4>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            <form action="{{route('Dashboard.SiteSettings.Sliders.Create')}}" enctype="multipart/form-data" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Name" >نام</label>
                                            <input type="text" class="form-control"  @if(old('Name')) value="{{old('Name')}}" @endif name="Name" id="Name" aria-describedby="h-text1" placeholder="نام دسته بندی" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="Priority">جایگاه</label>
                                        <input type="number" class="form-control" name="Priority"
                                               @if(old('Priority')) value="{{old('Priority')}}" @endif
                                               id="Priority" aria-describedby="h-text1" placeholder="جایگاه"
                                               required>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <label for="MainImage">عکس اسلایدر</label>
                                        <input type="file" class="form-control-file" name="MainImage" id="MainImage" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState">لینک </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio new-radio-text radio-info">
                                                        <input type="radio" class="new-control-input" id="CategorysLinkto" name="LinkTo" value="Category" onclick="ChangeLinkSelectBox(this.value)" checked="">
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">دسته بندی ها</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio new-radio-text radio-danger" >
                                                        <input type="radio" class="new-control-input" id="ProductsLinkto" name="LinkTo" value="Product" onclick="ChangeLinkSelectBox(this.value)" >
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">محصولات</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <select id="CategoryLinks" name="Link" class="selectpicker form-control" required>
                                            <option disabled selected>انتخاب دسته بندی</option>
                                            @foreach(\App\Models\ProductCategory::all() as $parent)
                                                <option value="{{$parent->id}}">{{$parent->Name}}</option>
                                            @endforeach
                                        </select>
                                        <select id="ProductLinks" name="Link" class="selectpicker form-control" required style="display: none">
                                            <option disabled selected>انتخاب محصول</option>
                                            @foreach(\App\Models\Product::all() as $parent)
                                                <option value="{{$parent->id}}">{{$parent->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <input type="submit" value="ارسال" name="txt" class="mt-4 btn btn-primary">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="row layout-top-spacing">
        <div id="helper_text" class="col-lg-12">
            <div class="seperator-header">
                <h4 class="">مدیریت اسلایدر</h4>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                    <table id="zero-config" class="table table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>تصویر</th>
                            <th>نام</th>
                            <th>جایگاه</th>
                            <th>لینک به</th>
                            <th>عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Sliders as $slider)
                            <tr>
                                <td><img src="{{$slider->ImageUrl}}" style="width: 100px"></td>
                                <td>{{$slider->Name}}</td>
                                <td>{{$slider->Priority}}</td>
                                <td><a href="{{rawurldecode($slider->Link)}}" target="_blank" class="text-info"> {{__($slider->LinkTo , [] , 'fa')}} </a></td>

                                <td>
                                    <button class="btn btn-warning">
                                        <i data-feather="edit" ></i> ویرایش
                                    </button>
                                    <button class="btn btn-danger">
                                        <i data-feather="trash-2" ></i> حذف
                                    </button>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>  دسته بندی مادر  </th>

                            <th>عملیات</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{asset('Dashboard/plugins/table/datatable/datatables.js')}}"></script>
    <script>

        function ChangeLinkSelectBox(NewSelectBox){
            if (NewSelectBox == 'Category'){
                $('#ProductLinks').hide(400);
                $('#CategoryLinks').show(400);
            }else if(NewSelectBox == 'Product'){
                $('#ProductLinks').show(400);
                $('#CategoryLinks').hide(400);
            }
        }

        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو کنید...",
                "sLengthMenu": "نتایج :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });
    </script>
@endsection

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
                <h4 class="">ویرایش بنر</h4>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-auto">
                            <form action="{{route('Dashboard.SiteSettings.Banner.Update' , $Banner->id)}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Name" >نام</label>
                                            <input type="text" class="form-control"  value="{{$Banner->Name}}" name="Name" id="Name" aria-describedby="h-text1" placeholder="نام دسته بندی" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="Position">جایگاه</label>
                                        <input type="number" class="form-control" name="Position"
                                               value="{{$Banner->Position}}" disabled
                                               id="Position" aria-describedby="h-text1" placeholder="جایگاه"
                                               >
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        <label for="MainImage">عکس اسلایدر</label>
                                        <img src="{{$Banner->ImageUrl}}">
                                        <input type="file" class="form-control-file" name="MainImage" id="MainImage" >
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState">لینک </label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio new-radio-text radio-info">
                                                        <input type="radio" class="new-control-input" id="CategorysLinkto" name="LinkTo" value="Category" onclick="ChangeLinkSelectBox(this.value)" @if($Banner->LinkTo == 'Category') checked=""  @endif  >
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">دسته بندی ها</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio new-radio-text radio-danger" >
                                                        <input type="radio" class="new-control-input" id="ProductsLinkto" name="LinkTo" value="Product" onclick="ChangeLinkSelectBox(this.value)"  @if($Banner->LinkTo == 'Product') checked=""  @endif >
                                                        <span class="new-control-indicator"></span><span class="new-radio-content">محصولات</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <select id="CategoryLinks" name="Link" class="selectpicker form-control" required >
                                            <option disabled selected>انتخاب دسته بندی</option>
                                            @foreach(\App\Models\ProductCategory::all() as $parent)
                                                <option value="{{$parent->id}}">{{$parent->Name}}</option>
                                            @endforeach
                                        </select>
                                        <select id="ProductLinks" name="Link" class="selectpicker form-control" required  style="display: none">
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

        ChangeLinkSelectBox('{{$Banner->LinkTo}}')
    </script>
@endsection

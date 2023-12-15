@extends('layouts.Dashboard.Master')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/plugins/bootstrap-select/bootstrap-select.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/tinymce@6.7.0/skins/ui/oxide/content.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/plugins/select2/select2.min.css')}}">
@endsection
@section('content')
    <div class="container">

        <div class="container">
            <div class="row layout-top-spacing">

                <div id="helper_text" class="col-lg-12">
                    <div class="seperator-header">
                        <h4 class="">افزودن محصول</h4>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                    <form action="{{route('Dashboard.Product.Create')}}" enctype="multipart/form-data" method="POST" id="AddProductForm">
                                        @csrf

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif


                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Name">نام محصول</label>
                                                    <input type="text" class="form-control" name="Name" id="Name"
                                                           @if(old('Name')) value="{{old('Name')}}"
                                                           @endif aria-describedby="h-text1" placeholder="نام محصول"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Brand">برند</label>
                                                    <input type="text" class="form-control" name="Brand" id="Brand"
                                                           @if(old('Brand')) value="{{old('Brand')}}"
                                                           @endif aria-describedby="h-text1" placeholder="برند"
                                                           required>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Price">قیمت</label>
                                                    <input type="text" class="form-control" id="Price"
                                                           @if(old('Price')) value="{{old('Price')}}"
                                                           @endif  aria-describedby="h-text1" placeholder="قیمت"
                                                           required>
                                                    <input type="text" class="d-none" name="Price" id="PriceInput">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="PartnerPrice">قیمت همکاری</label>
                                                    <input type="text" class="form-control" id="PartnerPrice"
                                                           @if(old('PartnerPrice')) value="{{old('PartnerPrice')}}"
                                                           @endif aria-describedby="h-text1" placeholder="قیمت همکاری"
                                                           required>
                                                    <input type="text" class="d-none" name="PartnerPrice"
                                                           id="PartnerPriceInput">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Discount">تخفیف</label>
                                                    <input type="text" class="form-control" name="Discount"
                                                           @if(old('Discount')) value="{{old('Discount')}}" @endif
                                                           id="Discount" aria-describedby="h-text1" placeholder="تخفیف"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Count">تعداد</label>
                                                    <input type="number" class="form-control" name="Count" id="Count"
                                                           @if(old('Count')) value="{{old('Count')}}" @endif
                                                           aria-describedby="h-text1" placeholder="تعداد" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Type">نوع</label>
                                                    <select id="Type" name="Type" class="selectpicker form-control">
                                                        <option disabled selected>نوع را انتخاب کنید</option>
                                                        <option @if(old('Type') == 'Digital') selected
                                                                @endif value="Digital">دیحیتال
                                                        </option>
                                                        <option @if(old('Type') == 'Physical') selected
                                                                @endif value="Physical">فیزیکی
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Status">وضعیت</label>
                                                    <select id="Status" name="Status" class="selectpicker form-control">
                                                        <option disabled selected>وضعیت را انتخاب کنید</option>
                                                        <option @if(old('Status') == 'Available') selected
                                                                @endif value="Available">موجود
                                                        </option>
                                                        <option @if(old('Status') == 'NotAvailable') selected
                                                                @endif value="NotAvailable">نا موجود
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Amazing">شگفت انگیز</label>
                                                    <select id="Amazing" name="Amazing" class="selectpicker form-control">
                                                        <option disabled selected>شگفت انگیز؟</option>
                                                        <option @if(old('Amazing') == 'Yes') selected @endif value="Yes">بله</option>
                                                        <option @if(old('Amazing') == 'No') selected @endif value="No">نه </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Status">پیشناهاد ما ؟</label>
                                                    <select id="Type" name="Recommended" class="selectpicker form-control">
                                                        <option disabled selected>پیشناهاد ما ؟</option>
                                                        <option @if(old('Recommended') == 'Yes') selected @endif value="Yes">بله</option>
                                                        <option @if(old('Recommended') == 'No') selected @endif value="No">نه </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Colors">رنگ</label>
                                                    <select class="form-control basic " id="Colors" name="Colors[]">
                                                        <option disabled >رنگ را انتخاب کنید</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="Options">آپشن ها</label>
                                                    <select class="form-control  basic" id="Options" name="Options[]">
                                                        <option disabled >آپشن ها را انتخاب کنید</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Description">توضیحات</label>
                                            <textarea id="Description"
                                                      name="Description">{{old('Description')}}</textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">

                                                <div class="widget-content widget-content-area">
                                                    <label for="MainImage">عکس اصلی محصول</label>
                                                    <input type="file" class="form-control-file" name="MainImage"
                                                           id="MainImage">
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <div class="widget-content widget-content-area">
                                                    <label for="OtherImages">عکس های دیگر</label>
                                                    <input type="file" class="form-control-file" name="OtherImages[]"
                                                           id="OtherImages" multiple>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-row mb-4">

                                            <div class="form-group col-6">
                                                <label for="inputState">دسته بندی مادر</label>
                                                <select id="inputState" name="CategoryID"
                                                        class="selectpicker form-control"
                                                        onchange="GetSubCategorys(this.value)">
                                                    <option disabled selected>دسته بندی مادر</option>
                                                    @foreach($Categorys as $Category)
                                                        <option @if(old('ParentID') == $Category->id) selected
                                                                @endif value="{{$Category->id}}">{{$Category->Name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group col-md-12">
                                                    <label for="SubCategory">دسته بندی </label>
                                                    <select id="SubCategory" name="SubCategoryID"
                                                            class="selectpicker form-control">
                                                        <option disabled selected>دسته بندی مادر</option>

                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <input type="button" onclick="SubmitForm()" value="ارسال" name="txt"
                                               class="mt-4 btn btn-primary">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('Dashboard/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('Assets/TinyMCE/tinymce.min.js')}}"></script>
    <script src="{{asset('Dashboard/plugins/input-mask/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('Dashboard/plugins/input-mask/input-mask.js')}}"></script>
    <script src="{{asset('Dashboard/plugins/select2/select2.min.js')}}"></script>
    <script>
        @if($errors->any())
            @foreach($errors->all() as $err)
            laravelerrors += '{{$err}} <br>'
        @endforeach
        ShowAlert('error' , laravelerrors)

        @endif
        $(document).ready(function () {
            tinymce.init({
                selector: 'textarea',
                language: "fa",
                promotion: false,
                branding: false,
            });

            var ss = $("#Colors").select2({
                tags: true,
                multiple: true,
            });
            var dd = $("#Options").select2({
                tags: true,
                multiple: true,
            });

            // $("#Price").inputmask({
            //     mask: "999,999,999",
            //     numericInput: true,
            //     "placeholder": "0",
            //     showMaskOnHover: true,
            //     greedy: true,
            //     decimal: ".",
            //     negative: false,
            //     scale: 3
            // });
            //
            // $("#PartnerPrice").inputmask({
            //     mask: "999,999,999",
            //     numericInput: true,
            //     "placeholder": "0",
            //     showMaskOnHover: true,
            //     greedy: true,
            //     decimal: ".",
            //     negative: false,
            //     scale: 3
            // });
        });


        function GetSubCategorys(ParentCategory) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                async: false,
                cache: false,
            });
            $.ajax({
                url: '{{route('V1.GetSubCateorys')}}',
                data: {
                    ParentCategory: ParentCategory
                },
                success: function (data) {
                    $(data.SubCategorys).each(function (key, value) {
                        $('#SubCategory').append('<option value="' + value.id + '">' + value.Name + '</option>');
                    });
                    $('.selectpicker').selectpicker('refresh');
                },
            });
        }

        function SubmitForm() {
            var Price = $('#Price').val().replace(/^0+/, '').replace(/^,/, '').replace(/^0+/, '').replace(/^,/, '');
            var PartnerPrice = $('#PartnerPrice').val().replace(/^0+/, '').replace(/^,/, '').replace(/^0+/, '').replace(/^,/, '');
            $('#PriceInput').val(Price)
            $('#PartnerPriceInput').val(parseInt(PartnerPrice))
            $('#AddProductForm').submit()
        }
    </script>
@endsection

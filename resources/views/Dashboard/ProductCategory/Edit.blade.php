@extends('layouts.Dashboard.Master')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/plugins/bootstrap-select/bootstrap-select.min.css')}}">
@endsection
@section('content')
    <div class="container">

        <div class="container">
            <div class="row layout-top-spacing">

                <div id="helper_text" class="col-lg-12">
                    <div class="seperator-header">
                        <h4 class="">ویرایش دسته بندی محصولات</h4>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-6 col-12 mx-auto">
                                    <form action="{{route('Dashboard.ProductCategory.Update' , $Category->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="h-text1" >نام دسته بندی</label>
                                            <input type="text" class="form-control" name="Name" value="{{$Category->Name}}" id="h-text1" aria-describedby="h-text1" placeholder="نام دسته بندی" required>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col-12">
                                                <label for="Icon">عکس دسته بندی</label>
                                                <img src="{{$Category->Icon}}">
                                                <input type="file" class="form-control-file" name="Icon" id="Icon" required>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="inputState">دسته بندی مادر</label>
                                                <select id="inputState" name="ParentID" class="selectpicker form-control">
                                                    <option disabled selected>دسته بندی مادر</option>
                                                    @foreach(\App\Models\ProductCategory::all() as $parent)
                                                        <option value="{{$parent->id}}" @if($Category->ParentID == $parent->id) selected @endif>{{$parent->Name}}</option>
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
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('Dashboard/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection

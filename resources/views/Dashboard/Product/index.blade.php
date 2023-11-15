@extends('layouts.Dashboard.Master')
@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Dashboard/plugins/table/datatable/dt-global_style.css')}}">
@endsection
@section('content')
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                    <table id="zero-config" class="table table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th> قیمت </th>
                            <th> نوع </th>
                            <th> وضعیت </th>
                            <th>عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Products as $product)
                            <tr>
                                <td>{{$product->Name}}</td>
                                <td>{{$product->Price}}</td>
                                <td>{{$product->Type}}</td>
                                <td>{{$product->Status}}</td>

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
                            <th> قیمت </th>
                            <th> نوع </th>
                            <th> وضعیت </th>
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

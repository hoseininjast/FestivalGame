@extends('layouts.Auth.Master')

@section('content')
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="container main-container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 col-12 mx-auto">
                    <div class="logo-area text-center mb-3">
                        <a href="#"><img src="{{asset('images/Logo/Logo.png')}}" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="auth-wrapper form-ui border pt-4">
                        <div class="section-title title-wide mb-1 no-after-title-wide">
                            <h2 class="font-weight-bold">ثبت نام</h2>
                        </div>

                        <form method="POST" action="{{ route('register') }}" id="Registerform">
                            @csrf
                            <div class="form-row-title">
                                <h3>شماره موبایل</h3>
                            </div>
                            <div class="form-row with-icon">
                                <input type="number" id="PhoneNumber" name="PhoneNumber" class="input-ui pr-2" placeholder="شماره موبایل خود را وارد نمایید">
                                <i class="mdi mdi-account-circle-outline"></i>
                            </div>


                            <div id="Step1" style="display: none">
                                <div class="form-row-title">
                                    <h3>کد دریافتی</h3>
                                </div>
                                <div class="form-row with-icon">
                                    <input type="number" id="VerificationCode" name="VerificationCode" class="input-ui pr-2" placeholder="لطفا کد دریفاتی خود را وارد نمایید" required>
                                    <i class="mdi mdi-email"></i>
                                </div>

                                <div class="form-row mt-3" id="CheckCodeButton">
                                    <button type="button" class="btn-primary-cm btn-with-icon mx-auto w-100" onclick="CheckCode()">
                                        <i class="mdi mdi-message-processing"></i>
                                        ثبت کد
                                    </button>
                                </div>


                            </div>




                            <div class="form-row mt-3" id="ReceviveCodeButton">
                                <button type="button" class="btn-primary-cm btn-with-icon mx-auto w-100" onclick="GetVerificationCode()">
                                    <i class="mdi mdi-message-processing"></i>
                                    دریافت کد
                                </button>
                            </div>
                            <div id="Step2" style="display: none">

                                <div class="form-row-title">
                                    <h3>ایمیل</h3>
                                </div>
                                <div class="form-row with-icon">
                                    <input type="email" id="email" name="email" class="input-ui pr-2" placeholder="ایمیل خود را وارد نمایید" required>
                                    <i class="mdi mdi-email"></i>
                                </div>


                                <div class="form-row-title">
                                    <h3>رمز عبور</h3>
                                </div>
                                <div class="form-row with-icon " >
                                    <input type="password" id="password" name="password" class="input-ui pr-2" placeholder="رمز عبور خود را وارد نمایید" required>
                                    <i class="mdi mdi-lock-open-variant-outline"></i>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="custom-control custom-checkbox float-right mt-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" required>
                                        <label class="custom-control-label text-justify" for="customCheck3">
                                            <a href="#">حریم خصوصی</a> و <a href="#">شرایط و قوانین</a> استفاده از سرویس
                                            های {{env('APP_NAME')}} را مطالعه نموده و با کلیه موارد آن موافقم.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <button type="submit" class="btn-primary-cm btn-with-icon mx-auto w-100">
                                        <i class="mdi mdi-account-circle-outline"></i>
                                        ثبت نام در {{env('APP_NAME')}}
                                    </button>
                                </div>
                            </div>


                        </form>
                        <div class="form-footer mt-3">
                            <div>
                                <span class="font-weight-bold">قبلا ثبت نام کرده اید؟</span>
                                <a href="#" class="mr-3 mt-2">وارد شوید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
<script>
    var Code ;


    const form = document.getElementById('Registerform');
    form.addEventListener('keypress', function(e) {
        if (e.keyCode === 13) {
            e.preventDefault();
        }
    });


    function GetVerificationCode(){
        var phonenumber = $('#PhoneNumber').val()
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            async: false,
            cache: false,
        });
        $.ajax({
            url: '{{route('V1.GetVerificationCode')}}',
            data: {
                PhoneNumber : phonenumber
            },
            success: function (data) {
                ShowAlert('success' , data.Message)
                Code = data.Code;
                $('#ReceviveCodeButton').hide(400)
                $('#Step1').show(400);
                $('#PhoneNumber').prop('readOnly' , true)
            },
        });
    }

    function CheckCode(){
        var recevivedCode = $('#VerificationCode').val();
        if (recevivedCode == Code){
            $('#Step2').show(400);
            $('#Step1').hide(400);
        }else {
            ShowAlert('error' , 'کد وارد شده با کد ارسالی همخوانی ندارد')
        }
    }
</script>
@endsection

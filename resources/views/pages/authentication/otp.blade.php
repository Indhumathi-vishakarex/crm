<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/otp by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>OTP - HRMS admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">

                <div class="account-logo">
                    <a href=""><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">OTP</h3>
                        <p class="account-subtitle">Verification your account</p>

                        <form action="https://smarthr.dreamstechnologies.com/laravel/template/public/admin-dashboard">
                            <div class="otp-wrap">
                                <input type="text" placeholder="0" maxlength="1" class="otp-input">
                                <input type="text" placeholder="0" maxlength="1" class="otp-input">
                                <input type="text" placeholder="0" maxlength="1" class="otp-input">
                                <input type="text" placeholder="0" maxlength="1" class="otp-input">
                            </div>
                            <div class="input-block mb-4 text-center">
                                <!-- <button class="btn btn-primary account-btn" type="submit">Enter</button> -->
                                 <a href="{{ route('admin-dashboard') }}" class="btn btn-primary account-btn">Enter</a>
                            </div>
                            <div class="account-footer">
                                <!-- <p>Not yet received? <a href="javascript:void(0);">Resend OTP</a></p> -->
                                 <p>Not yet received? <a href="{{ route('otp') }}">Resend OTP</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/otp by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:15 GMT -->

</html>
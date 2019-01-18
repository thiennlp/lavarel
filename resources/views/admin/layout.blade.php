<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="http://localhost/laravel/bootstrap/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="http://localhost/laravel/bootstrap/vendors/css/vendor.bundle.addons.css">
        <link rel="stylesheet" href="http://localhost/laravel/bootstrap/css/style.css">
        <link rel="shortcut icon" href="http://localhost/laravel/bootstrap/images/favicon.png" />
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    </head>

    <body>
        <div class="container-scroller">
            <!--navbar-->
            @include('admin.nav')
            <!--end_navbar-->
            <div class="container-fluid page-body-wrapper">
                <!--subnavbar-->
                @include('admin.sub_nav')
                <!--end_subnavbar-->
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                    <!--footer-->
                    @include('admin.footer')
                    <!--end_footer-->
                </div>
            </div>
            @yield('modal')
        </div>
        <script src="http://localhost/laravel/bootstrap/vendors/js/vendor.bundle.base.js"></script>
        <script src="http://localhost/laravel/bootstrap/vendors/js/vendor.bundle.addons.js"></script>
    </body>

</html>
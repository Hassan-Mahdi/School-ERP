<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="{{asset('frontend/assets/css/all.min.css')}} " rel="stylesheet">
    <link href="{{asset('frontend/assets/css/bootstrap-icons.css')}} " rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div> --}}
        </div>
        <!-- Spinner End -->


        @include('frontend.layouts.navbar')

        @yield('content')

        @include('frontend.layouts.footer')




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
    <script src="{{asset('frontend/assets/js/jquery-3.4.1.min.js')}} "></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>

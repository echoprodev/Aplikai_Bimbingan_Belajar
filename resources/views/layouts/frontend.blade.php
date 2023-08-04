<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bimbingan Belajar Flash School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front/img/flashschool/favicon.png')}}">
    <!-- Load Require CSS -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{ asset('assets/front/css/boxicon.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/templatemo.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/custom.css')}}">
    <!--

TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
   @include('includes.frontend.body')


    <!-- Bootstrap -->
    <script src="{{ asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{ asset('assets/front/js/jquery.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{ asset('assets/front/js/isotope.pkgd.js')}}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.paket-belajar').isotope({
                itemSelector: '.all',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
     <!--Templatemo -->
    <script src="{{ asset('assets/front/js/templatemo.js')}}"></script>
     <!--Custom -->
    <script src="{{ asset('assets/front/js/custom.js')}}"></script>

</body>

</html>

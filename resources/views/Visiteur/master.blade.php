<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title> Top-Travaux France</title>
    
    <link rel="icon" type="image/x-icon" 
    media="(prefers-color-scheme: light)"
    href="{{asset('/faviconLight.ico')}}">
    <link rel="icon" type="image/x-icon" 
    media="(prefers-color-scheme: dark)" 
    href="{{asset('images/faviconDark.ico')}}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!--Template style -->
    <!--Fav icon-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <!-- datepikar plugin -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <!--fonts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}" />
    <!--font-awesome css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
    <!-- carousal css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />

    {{---popUp --}}
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <!-- shortcode css -->
    <link rel="stylesheet" href="{{asset('css/shortcode.css')}}">

    {{-- mycss --}}
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('css/etole.css')}}">

    

 


</head>

<body>
    @include('Visiteur.header')

    @yield('content')
    @include('Visiteur.footer')

    
    <!-- custom js-->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/shortcode.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="https://cdnexample.com/script.js" 
    integrity="sha384-oqVuAfXRKap7fdgcCY5uykM6+R9GqQ8K/uxy9rx7HNQlGYl1kPzQho1wx4JwY8wC"></script>

    {{-- scripts2 --}}

    <script src="{{asset('js2/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('js2/mmenu.min.js')}}"></script>
    <script src="{{asset('js2/tippy.all.min.js')}}"></script>
    <script src="{{asset('js2/simplebar.min.js')}}"></script>
    <script src="{{asset('js2/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('js2/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js2/snackbar.js')}}"></script>
    <script src="{{asset('js2/clipboard.min.js')}}"></script>
    <script src="{{asset('js2/counterup.min.js')}}"></script>
    {{-- <script src="{{asset('js2/magnific-popup.min.js')}}"></script> --}}
    <script src="{{asset('js2/slick.min.js')}}"></script>
    <script src="{{asset('js2/custom.js')}}"></script>
    
    



</body>

</html>
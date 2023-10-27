@extends('Visiteur.master')
@section('content')
<div class="s-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="s-heading-section">
                    <h2><a href="http://localhost:8000/visiteur/404" 
                        class='text-capitalize fw-bolder'>
                        404 Error Page</a></h2>
                    <ul>
                        <li><a href="http://localhost:8000/visiteur/home">Acceuil</a></li>
                        <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="http://localhost:8000/visiteur/404">404 Error</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-wrapper-content">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12">
                <div class="main_wrapper_three_img">
                    <div class="wheel_img_one_wrapper">
                        <img src="{{asset('images/wheel_img_1.png')}}" class="img-responsive" alt="logo_img">
                    </div>
                    <div class="wheel_img_two_wrapper">
                        <img src="{{asset('images/wheel_img_2.png')}}" class="img-responsive" alt="logo_img">
                    </div>
                    <div class="wheel_img_three_wrapper">
                        <img src="{{asset('images/wheel_img_3.png')}}" class="img-responsive" alt="logo_img">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-xs-12 col-sm-12">
                <div class="main_wrapper_three_content">
                    <h2>
                        <span>4</span>
                        <span>0</span>
                        <span>4</span>
                    </h2>
                    <h3 class="text-capitalize fw-bolder">Désolé, cette page n'est pas disponible :(</h3>
                </div>
            </div>
            
        </div>

    </div>
</div>

@endsection
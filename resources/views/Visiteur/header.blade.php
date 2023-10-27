
    <!-- return-to-top start-->
    <a href="" id="return-to-top"><i class="fas fa-sort-up"></i></a>

    <!-- return-to-top-end -->

    <!-- HEADER START-->
    <div class="main_wrapper">
        {{-- top menu start --}}
        <div class="top-menu ">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-7 col-sm-7  col-6">
                        <div class="sub-top-menu s-menu">
                            <ul class="u-list">
                                {{-- social media icons --}}
                                <li>
                                    <ul class="social-icon ">
                                        <li>
                                            <a href="https://www.facebook.com/speed.livraison.fr">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/livraison_speed">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/speed-livraison-02ab3a232/">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/speed.ivraison/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- phone number/sign in --}}
                                <li class="n-disp">
                                    <a href="tel:0609404704" target="_blank">
                                        <i class="fas fa-phone-alt"></i> 
                                        &nbsp;+33 609404704
                                    </a>
                                </li>
                                <li class="n-border res-pd"><a href="http://localhost:8000/visiteur/404">Sign In</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- top menu end --}}

        <div class="main_menu_wrapper">
            <!-- main_menu_navbar start -->
            <div class="main_menu_navbar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                            <!-- Brand/logo -->
                            <a class="navbar-brand" href="http://localhost:8000/visiteur/home">
                                <img src="{{asset('images/logo_v5.png')}}" 
                                alt="logo d'entreprise" style="height:100px;">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-4 d-block d-lg-none">
                            <div class="navbar-toggler" data-toggle="collapse" role="term"
                            data-target="#sidebar" aria-controls="sidebar" aria-expanded="false"
                            aria-label="Toggle navigation">
                            
                            <ul class="toggle-main-wrapper ">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        </div>

                        {{-- nav links --}}
                        <div class="col-xl-10 col-lg-10 d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <nav class="navbar navbar-expand-sm  justify-content-end d-block text-capitalize z-3">
                                <ul class="navbar-nav ">
                                    <li class="nav-item p-rel  wrap-nav-item">
                                        <a href="http://localhost:8000/visiteur/home" class="nav-link">
                                            Acceuil
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item p-rel  wrap-nav-item">
                                        <a href="http://localhost:8000/visiteur/404" class="nav-link ">
                                            catégorie
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-items">
                                            @foreach($TopCategories as $categ)
                                            <li>
                                                <a href="{{route('search',['categorieId' => $categ->id])}}">
                                                    {{$categ->nom_categorie}}
                                                </a></li>
                                            @endForeach
                                        </ul>
                                        
                                        
                                    </li>
                                    <li class="nav-item p-rel  wrap-nav-item">
                                        <a href="http://localhost:8000/visiteur/404" class="nav-link">
                                            spécialité
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                    
                                        <ul class="dropdown-items mega-menu">
                                            <li class="shortcode-menu">
                                                <ul>
                                                    
                                                    @foreach ($TopSpecialites as $specialite)
                                                            <li class="">
                                                                <a href="{{route('search',['specialityId' => $specialite
                                                                ->id])}}">
                                                                    {{ $specialite->nom_specialite }}
                                                                </a>
                                                            </li>
                                                        
                                                    @endforeach
                                                    
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        
                                    </li>
                                   
                                  <li class="nav-item">
                                        <a href="http://localhost:8000/visiteur/404" 
                                        class="btn btn-outline-dark">s'inscrire</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- main_menu_navbar end -->

        </div>


<!-- mobile_menu_main start -->
    <!-- sidebar start -->
        <div id="sidebar">
            <div class="sidebar_logo">

                <a class="navbar-brand" href="http://localhost:8000/visiteur/home">
                    <img src="{{asset('images/logo_v5.png')}}" alt="logo d'entreprise" style="height:100px;">
                </a>
            </div>
            <div id='cssmenu'>
                <ul>
                    <li ><a href="http://localhost:8000/visiteur/home">Acceuil</a>
                    </li>
                    
                    <li  class='has-sub'>
                        <a href="http://localhost:8000/visiteur/404">catégorie</a>
                            <ul class="m-sub-dropdown">
                                @foreach($TopCategories as $categ)
                                <li>
                                    <a href="">
                                        {{$categ->nom_categorie}}
                                    </a>
                                </li>
                                @endForeach
                            </ul>
                    </li>
                    <li  class='has-sub'>
                        <a href="http://localhost:8000/visiteur/404">spécialité</a>
                            <ul class="m-sub-dropdown">
                                
                                @foreach($TopSpecialites as $specialite)
                                <li>
                                    <a href="">
                                        {{ $specialite->nom_specialite }}
                                    </a>
                                </li>
                                @endForeach
                            </ul>
                    </li>
                </ul>
                
                <ul>                    
                    <li class="m-social-icons">
                        <span>
                            <a href="https://www.facebook.com/speed.livraison.fr">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </span>
                        <span>
                            <a href="https://twitter.com/livraison_speed">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </span>
                        <span>
                            <a href="https://www.linkedin.com/in/speed-livraison-02ab3a232/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </span>
                        <span>
                            <a href="https://www.instagram.com/speed.ivraison">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

<!-- mobile_menu_main end -->


<!--HEADER END-->


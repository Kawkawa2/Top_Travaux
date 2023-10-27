
@extends('Visiteur.master')
@section('content')
    <!-- section1 start -->    
    <div class="map-main-wrapper p-rel">
        {{-- banner wrapper --}}
        <div class="s-banner-wrapper sb_banner_content_wrapper animated-row float_left">
           <div class="container">
              <div class="row">
                    <div class="col-12 ">
                        <div class="s-heading-section">
                            <h2>
                                <a href="">
                                    Top Travaux France 
                                </a>
                            </h2>
                        <h2>
                                <span class="fw-bolder" style="color:#1c73ea">
                                        Cherchez
                                </span>
                                    .....Trouvez !
                        </h2>
                            <h3 class=""> Vous avez des travaux à réaliser ?
                                 Spécifiez-nous votre besoin et réalisez votre projet.</h3>
                        </div>

                    </div>
              </div>
           </div>
           
        </div>
        <!-- section1 end -->  

        {{-- search bar start--}}
        <div class="sb_banner_cont_iner_wrapper float_left">

                    <div class="container">
                        <div class="row">
                                <form action="{{route('search')}}">
                                    @csrf
                                    @method('POST')
                                    <ul class="col-12 justify-content-center" >
                                        <li class="" style="padding-left: 20px">
                                            <span>
                                                <i class="fa fa-institution" aria-hidden="true"></i>  
                                            </span>
                                            <select name="departement" id="selectone" 
                                            class="form-select" style="font-size:smaller">
                                            <option value="departemets"  selected disabled>departements</option>
                                            @foreach ($allDepartments as $item)
                                                <option value={{$item->id}}>{{$item->nom_departement}}</option>

                                            @endforeach
                                            
                                            </select>               
                                        </li>
                                        <li class="" style="padding-left: 20px">
                                            <span>
                                                <i class="fa fa-building" aria-hidden="true"></i></span>
                                            <select name="ville" id="selectone" 
                                            class="form-select" style="font-size:smaller">
                                            <option value="ville"  selected disabled>villes</option>
                                            @foreach ($allVilles as $item)
                                                <option value={{$item->id}}>{{$item->nom_ville}}</option>
                                            @endforeach
                                            
                                            </select>               
                                        </li>
                                    
                                        <li class="" style="padding-left: 20px">
                                            <span>
                                                <i
                                                class="fa fa-server" aria-hidden="true"></i></span>
                                            <select name="categorie" id="selectone" 
                                            class="form-select" style="font-size:smaller">
                                            <option value="categorie" selected disabled>categories</option>
                                            @foreach ($allCategorie as $item)
                                                <option value={{$item->id}}>{{$item->nom_categorie}}</option>
                                            @endforeach
                                            
                                            </select>               
                                        </li>
                                        <li class="" style="padding-left: 20px">
                                            <span>
                                                
                                            <i  class="fa fa-tasks" aria-hidden="true"></i>
                                            </span>
                                            <select name="specialite" id="selectone"
                                             class="form-select" style="font-size:smaller">
                                            <option value="specialite"  selected disabled>specialites</option>
                                            @foreach ($allSpecialites as $item)
                                                <option value={{$item->id}}>{{$item->nom_specialite}}</option>
                                            @endforeach
                                            
                                            </select>               
                                        </li>
                                        <li>
                                            <button type="submit" class="btn btn-primary" >Chercher</button>
                                        </li>
                                    </ul>
                                </form>
                            
                        </div>
                    </div>

        </div>
        {{-- search bar end--}}

    </div>
    {{-- error handling --}}
    @if(session()->has('msg1'))
        <div class="container-fluid row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="alert alert-danger d-flex align-items-center p-1 m-5 fs-6" 
                role="alert" 
                style="background-color:#ef233c;border-radius:10px; position: relative; top:20px">
                <i class="fa fa-warning p-1"aria-hidden="true"></i>
                <div class="text-capitalize text-center">
                    &nbsp; &nbsp; &nbsp;{{session('msg1')}}
                </div>
            </div> 
        </div>
        </div>
    @endif

    
    {{-- top categories start --}}
    <div class="t-dest-wrapper">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center my-5">
                    <h1 style="color:  rgb(69 66 66 / 71% );size:30px;">
                        Liste des entreprises, professionnels et
                        artisans pour votre projet de travaux généraux
                        partout en France </h1>
                    <hr>
                    <br/>
                    <a href="" class="d-block m-auto">NOS CATÉGORIES
                    </a>
                    <br/>
                    <h3 class="fw-bold ">Qui sont nos artisans par activité ?
                    </h3>
                </div> 
                @foreach ($TopSixCategories  as $categorie)
                        @if($loop->first)
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        @elseif($loop->iteration == 2)
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12 m-auto">
                        @else
                            <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">

                        @endif
                            <div class="t-place p-rel">
                                <a href="http://localhost:8000/visiteur/404">
                                    <img src="{{asset('categories/'.$categorie->image_categorie)}}" 
                                    alt="{{$categorie->image_categorie}}"/></a>
                                <div class="t-cont">
                                    <a href="http://localhost:8000/visiteur/404">
                                        <p><span style="color:#0d6efd"><i class="fas fa-thumbtack"></i>
                                        </span> {{$categorie->nom_categorie}} <br/>
                                        <span class="text-capitalize" style="font-style: italic">
                                            {{$categorie->nbSpecPerCateg}}+ specilites
                                        </span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                @endforeach
               
                <div class="col-12 ">
                    <div class="t-center">
                        <a href="http://localhost:8000/visiteur/404" 
                        class="section3_btn btn-sm  fw-bold w-25  btn22" 
                        type="button">Voir plus</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{-- top categories end --}}


    {{-- top specialities start --}}

    <div class="section_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="section5_text_wrapper">
                        <div class="section5_text_heading">
                            <a href="" class="d-block m-auto">NOS CATÉGORIES
                            </a>
                            <br/>
                        </div>
                        <br/>
                        <div class="section5_text_content">
                            <h3 class="fw-bold ">Qui sont nos artisans par activité ?
                            </h3>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="section5_team_slider">
                        <div class="owl-carousel owl-theme">
                            @foreach($TopSpecialites as $specialite)
                                <div class="item">
                                    <div class="section5_main_wrapper">
                                        <div class="section5_slider_image">
                                            <a href="http://localhost:8000/visiteur/404">
                                            <img src="{{asset('specialites/'.$specialite->image_specialite)}}" 
                                            class="img-responsive" 
                                            alt="{{$specialite->image_specialite}}" 
                                            style="width: 264px; height:264px;padding:10px" />
                                            </a>
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                                
                                        </div>
                                        <div class="section5_slider_content">
                                            <h4><a href="http://localhost:8000/visiteur/404">
                                                {{$specialite->nom_specialite}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="t-center">
                        <a href="http://localhost:8000/visiteur/404" 
                        class="section3_btn btn-sm   fw-bold w-25  btn22"
                        type="button">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- top specialities end --}}

    {{-- statistics start --}}

    <div class="counterFour ptb-100 ">
                <div class="container text-center">
                    <div class="row ">
    
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <span class="icon-one"><i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                            <h4><a href="#">NOMBRE D'INSCRITS</a></h4>
                            <div class="count-description">
                                <span class="timer">{{$nbSubscribers}}+</span>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <span class="icon-three"><i class="fa fa-heart"></i></span>
                            <h4><a href="#">SATISFACTION</a></h4>
                            <div class="count-description">
                                <span class="timer">{{$averageRatingPercent}}%</span>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <span class="icon-two"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <h4><a href="#">NOMBRE DE VISITE</a></h4>
                            <div class="count-description">
                                <span class="timer">{{$nbVisits->viewsTrack}}+</span>
                            </div>
                        </div>
    
                        
    
    
                    </div>
                </div>
    </div>

    {{-- statistics end --}}

{{-- scripts for statistics start --}}
<script>
            (function () {
            $('.counterFour').bind('inview', function (event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $(this).find('.timer').each(function () {
                        var $this = $(this);
                        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                    $(this).unbind('inview');
                }
            });

        }());

</script>

{{-- scripts for statistics end --}}






@endsection






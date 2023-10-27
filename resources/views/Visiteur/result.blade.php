@extends('Visiteur.master')
@section('content')


   <div class="map-main-wrapper p-rel">
      {{-- banner wrapper start--}}
      <div class="s-banner-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="s-heading-section">
                     <h2>
                        <a href="#" class="text-capitalize fw-bolder">
                        les meilleurs Artisans et professionnels
                        </a>
                     </h2> 
                     <p class="text-light text-center">
                        Trouver un bon artisan, professionnel ou entreprise est difficile.
                        <strong>Top Travaux France</strong> 
                        vous aide à localiser les meilleures entreprises

                        @if(isset($selectedValues['categorie'])) 
                           de<strong> {{$selectedValues['categorie']['nom_categorie']}} </strong>
                        @endif
                       
                        @if(isset($selectedValues['departement']))
                           à<strong> {{$selectedValues['departement']['nom_departement']}} </strong>
                        @endif
                        afin de raccourcir votre temps de recherche.
                    </p>
                     <ul >
                        <li><a href="http://localhost:8000/visiteur/home">Acceuil</a></li>

                        @if(isset($selectedValues['departement']))
                        <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="">{{$selectedValues['departement']['nom_departement']}}</a></li>
                        @endif

                        @if(isset($selectedValues['ville']))
                        <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="">{{$selectedValues['ville']['nom_ville']}}</a></li>
                        @endif
                        @if(isset($selectedValues['categorie']))
                        <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="">{{$selectedValues['categorie']['nom_categorie']}}</a></li>
                        @endif
                        
                        @if(isset($selectedValues['specialite']))
                        <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="">{{$selectedValues['specialite']['nom_specialite']}}</a></li>
                        @endif
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- banner wrapper end --}}

      {{-- search bar start--}}

      <div class="sb_banner_cont_iner_wrapper float_left">
            <div class="container">
                <form action="{{route('search')}}">
                    @csrf
                    @method('POST')
                   
                     <ul class="col-8 justify-content-center" >
                              <li class="" style="padding-left: 20px">
                                    <span>
                                       <i class="fa fa-institution" aria-hidden="true"></i>  
                                    </span>
                                    <select name="departement" id="selectone" 
                                    class="form-select" style="font-size:smaller">
                                       @isset($selectedValues['departement'])
                                          <option value='departement'disabled>departement</option>
                                          <option value="{{$selectedValues['departement']['id']}}"selected>
                                             {{$selectedValues['departement']['nom_departement']}}</option>
                                       @else
                                          <option value='departement'disabled selected>departement</option>
                                       @endisset
                                       @foreach ($allDepartments as $item)
                                          <option value={{$item->id}}>{{$item->nom_departement}}</option>
                                       @endforeach
                                    
                                    </select>               
                              </li>
                              <li class="" style="padding-left: 20px">
                                    <span>
                                       <i class="fa fa-building" aria-hidden="true"></i></span>
                                    <select name="ville" id="selectone" class="form-select" style="font-size:smaller">
                                       @isset($selectedValues['ville'])
                                          <option value='ville'disabled>ville</option>
                                          <option value="{{$selectedValues['ville']['id']}}"selected>
                                             {{$selectedValues['ville']['nom_ville']}}</option>
                                       @else
                                          <option value='ville'disabled selected>ville</option>
                                       @endisset
                                       
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
                                       @isset($selectedValues['categorie'])
                                          <option value='categorie'disabled>categorie</option>
                                          <option value="{{$selectedValues['categorie']['id']}}"selected>
                                             {{$selectedValues['categorie']['nom_categorie']}}</option>
                                       @else
                                          <option value='categorie'disabled selected>categorie</option>
                                       @endisset
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
                                       @isset($selectedValues['specialite'])
                                          <option value='specialite'disabled>specialite</option>
                                          <option value="{{$selectedValues['specialite']['id']}}"selected>
                                             {{$selectedValues['specialite']['nom_specialite']}}</option>
                                       @else
                                          <option value='specialite'disabled selected>specialite</option>
                                       @endisset
                                       
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
      {{-- search bar end--}}
   </div>
@if(session()->has('msg1'))
   <div class="container-fluid row justify-content-center ">
      <div class="col-lg-8 col-md-10 col-sm-12 ">
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
<div style="clear: both;"></div>

   <!-- result search  start-->
   <div class="grid-map-wrapper">
      <div class="container">
         <div class="row">
            <div class="grid-view-wrapper">
               <div class="row">

                  {{-- sort section start --}}
                  <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                     <div class="fliter-sec">
                        <ul class="nav nav-pills mb-3"  id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link mx-3 active" id="pills-profile-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                 aria-selected="false">
                                 <i class="fas fa-grip-horizontal"></i>
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab1" data-bs-toggle="pill"
                                 data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                 aria-selected="false">
                                 <i class="fas fa-list-ul"></i>
                              </button>
                           </li>
                        </ul>
                     </div>
                  </div>
                  {{-- sort section end --}}

                  {{-- result numbers  section start --}}

                  <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                     <ul id="show-item">
                        <li>
                           <a href="" class="text-capitalize">
                              résultat trouvé: {{$countResult}} 
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               {{-- result number section end --}}

               {{-- result showing start--}}
               <div class="tab-content" id="pills-tabContent">

                     {{-- showing result horisontally --}}
                     <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row">
                              @foreach ($result as $item)
                                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="sub-main">
                                       <div class="img-sec p-rel">
                                          <div class="hover-img p-rel">
                                             <a href="{{route('profile',$item->user_id)}}"> 
                                                <img src="{{ asset('avatar/' .$item->avatar) }}" alt="" 
                                                style="background-color:rgba(211, 211, 211, 0.247); width:200px ; 
                                                height:200px; padding: 20px;background-position: center;"/></a>
                                          </div>
                                          <span>

                                             <a  href="tel:{{$item->tel}}" 
                                                rel="noopener" 
                                                target='_blank' class="text-light popup-with-zoom-anim">Appeler</a>
                                         </span>
                                         
                                       </div>
                                       <div class="slider-content">
                                          <span>
                                             <a href="http://localhost:8000/visiteur/404">
                                             <?php
                                             $roundedAvg=round($item->MoyenneNote,0);
                                             ?>
                                             @for ($i = 0; $i < $roundedAvg; $i++)
                                                      <i class="fas fa-star"></i>
                                             @endfor
                                             @for ($i = $roundedAvg; $i < 5; $i++)
                                                   <i class="far fa-star"></i>    
                                             @endfor
                                             &nbsp;|&nbsp; {{$item->nombreCommentaire}}+Review</a>
                                                
                                          </span>
                                          <h5><a href="{{route('profile',$item->user_id)}}">
                                             {{$item->nom_societe}}</a></h5>
                                          <a href=""> 
                                             <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                                {{$item->nom_departement}},{{$item->code_postal}} {{$item->nom_ville}}
                                             </span></a>
                                       </div>
                                    </div>
                                 </div>
      
                              @endforeach
                           
                        </div>
                     </div>

                     {{-- showing result horisontally --}}


                  {{-- showing result vertically --}}
                     <div class="tab-pane fade" id="pills-contact" >
                        <div class="row">
                           @foreach ($result as $item)
                              <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <div class="list-type">
                                    <div class="list-sub-main">
                                       <div class="img-sec p-rel">
                                          <div class="hover-img p-rel">
                                             <a href="{{route('profile',$item->user_id)}}"> 
                                                <img src="{{ asset('avatar/' .$item->avatar) }}" 
                                                alt="" 
                                                style="background-color:rgba(211, 211, 211, 0.247); 
                                                   width:200px ; height:200px;
                                                   padding:20px;background-position: center;"/>
                                             </a>
                                          </div>
                                          <span>
                                             <a href="#small-dialog" 
                                             class="text-light popup-with-zoom-anim" 
                                             data-company="{{$item->nom_societe}}">Contacter</a>
                                         </span>
                                         
                                       </div>
                                       <div class="slider-content "style="height:200px">
                                          <span>
                                             <a href="http://localhost:8000/visiteur/404">
                                                <?php
                                                $roundedAvg=round($item->MoyenneNote,0);
                                                ?>
                                                @for ($i = 0; $i < $roundedAvg; $i++)
                                                         <i class="fas fa-star"></i>
                                                @endfor
                                                @for ($i = $roundedAvg; $i < 5; $i++)
                                                      <i class="far fa-star"></i>    
                                                @endfor
                                                &nbsp; | &nbsp; {{$item->nombreCommentaire}}+
                                                Review</a>
                                          </span>
                                          <h5><a href="{{route('profile',$item->user_id)}}">
                                             {{$item->nom_societe}}</a></h5>
                                          <a href=""> 
                                             <span class="clr-text">
                                                <i class="fas fa-map-marker-alt"></i>
                                                {{$item->nom_departement}},{{$item->code_postal}} {{$item->nom_ville}}
                                                
                                             </span>
                                          </a>
                                          <p>
                                                {{-- {{$item->description}} --}}
                                          </p>
                                          
                                          
                                 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           @endforeach
                        </div>
                     </div>

                  {{-- showing result vertically --}}

               </div>            
            </div>
         </div>
      </div>

      <!-- pagination start -->
      <div class="row">
         <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center pagination-md">
                  {{$result->appends(request()->except('page'))->links()}}
                  
            </ul>
         </nav>
      </div>
      <!-- pagination end -->
   </div>

   <!-- result search  end-->


<!-- sign up for newlwtters start-->
      <div class="contact-main-wrapper">
         <div class="row align-items-center justify-content-center ">
             <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-0">
                 <div class="form">
                     <h5><a href="" class="text-capitalize">S'inscrire aux Newsletters</a></h5>
                     <p>Inscrivez-vous à notre liste de diffusion pour recevoir les dernières mises à jour et offres</p>
                     <form action="{{route('Visiteur.subscribe')}}" method="POST">
                        @csrf
                        <div class="input-box p-rel">
                            <span><i class="far fa-envelope"></i></span>
                            <input type="text" 
                            placeholder="tapez votre adresse e-mail" 
                            name="email" class="@error('email') input-error @enderror">
                            <button>s'abonner</button>
                        </div>
                        @error('email')
                            <div id='text-danger'class=" text-capitalize">{{$message}}</div>
                        @enderror
                    </form>
                     @if(session()->has('success'))
                        <div class="alert alert-success 
                           d-flex align-items-center  col-lg-8 col-md-8 col-12  p-1 mb-2 fs-6" 
                           role="alert" 
                           style="background-color:#2dc266;border-radius:10px">
                              <i class="fa fa-check-square p-1"aria-hidden="true"></i>
                              <div class="text-capitalize ">
                                    &nbsp; &nbsp; &nbsp;{{session('success')}}
                              </div>
                        </div> 
                     @elseif(session()->has('warning'))
                        <div class="alert alert-warning 
                           d-flex align-items-center  col-lg-8 col-md-8 col-12 p-1 mb-2 fs-6" 
                           role="alert" 
                           style="background-color:#ffcc00e1;border-radius:10px">
                              <i class="fa fa-warning p-1"aria-hidden="true"></i>
                              <div class="text-capitalize ">
                                    &nbsp; &nbsp; &nbsp;{{session('warning')}}
                              </div>
                        </div> 
                     @endif
                 </div>
             </div>

             
         </div>
     </div>
<!-- sign up for newlwtters end-->


<script>
   $(document).ready(function() {
     // Smooth scrolling when clicking on anchor links
     $('a[href^="#"]').on('click', function(event) {
       var target = $(this.getAttribute('href'));
       if (target.length) {
         event.preventDefault();
         $('html, body').stop().animate({
           scrollTop: target.offset().top
         }, 1000);
       }
     });
   });
 </script>

@endsection
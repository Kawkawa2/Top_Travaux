@extends('Visiteur.master')
@section('content')

{{-- banner section start --}}

<div class="s-banner-wrapper">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="s-heading-section">
                <h2><a href="">Découvrez {{$profile->nom_societe}}</a></h2>
                <p class="text-light text-center">
                    Explorez le profil de <strong>{{$profile->nom_societe}}</strong>
                    pour en savoir plus sur leur spécialité et le travail qu'ils 
                    exercent dans leur ville. Découvrez leurs capacités, 
                    leurs réalisations et les services qu'ils fournissent à la communauté.
                </p>
                <ul>
                    <li><a href="http://localhost:8000/visiteur/home">Acceuil</a></li>
                    <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
                   <li><a href="">{{$profile->nom_societe}} | {{$profile->name}}</a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
</div>
 {{-- banner section end --}}


{{-- profile section start --}}

{{-- main section start --}}

<div class="hs-blog-wrapper">
    <div class="container">
           <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">

                        {{-- profile presentation start --}}
                        <div class="hs-blog-content ">
                            <h2><a href="" class="fw-bolder">{{$profile->nom_societe}}</a></h2>
                            <div class="pt-20 ">

                                <div class="row">
                                    <div class="col-4">
                                        
                                            <a href="{{$profile->siteweb}}" class="text-dark"> 
                                                <i class="fas fa-globe"></i>
                                                
                                                <span class="text-primary text-capitalize fs-6 ">Visiter notre site</span>
                                            </a>
                                    </div>
                                    <div class="col-4">
                                        <span>
                                        <a a href="#">
                                            <?php
                                            $roundedAvg=round($roundRating,0);
                                            ?>
                                            @for ($i = 0; $i < $roundedAvg; $i++)
                                                    <i class="fas fa-star"></i>
                                            @endfor
                                            @for ($i = $roundedAvg; $i < 5; $i++)
                                                <i class="far fa-star"></i>    
                                            @endfor
                                    
                                            <span  class="text-primary text-capitalize fs-6 ">
                                                | {{$nombreCommentaire}} + Review</span>
                                        </a>
                                        </span>
                                    </div>
                                        
                                </div>

                                <div class="pt-20 row">
                                    <div  class="col-4 col-lg-2 ">
                                        <a href="tel:{{$profile->tel}}" 
                                            rel="noopener" target='_blank'
                                            class="btn btn-success btn24 w-100 ">Appeler</a>
                                        </a>
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <a href="#petit-dialogue" 
                                        class="btn btn-dark w-100 btn23">Contacter</a>

                                    </div>
                                
                                </div>

                            </div>
                            <div class="pt-5 ">

                                @isset($profile->tel2)

                                    <div class=" row">
                                        <div  class="col-4">
                                            <a href="{{asset('')}}" class="text-dark"> 
                                                <i class="fa fa-mobile-phone" 
                                                aria-hidden="true"></i>                               
                                                <span class=" text-capitalize fs-6">Telephone</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="" 
                                            class="text-primary text-capitalize fs-6 ">
                                            +212 {{str_replace(' ','',$profile->tel2)}}</a> 
                                        </div>
                                        
                                    </div>
                                    
                                @endisset

                                @isset($profile->Fix)
                                    
                                
                                    <div class=" row ">
                                        <div  class="col-4">
                                            <a href="{{asset('')}}" class="text-dark">
                                                <i class="fa fa-phone" aria-hidden="true"></i> 
                                                <span class=" text-capitalize fs-6">Fixe</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="" class="text-primary text-capitalize fs-6 ">{{$profile->Fix}}</a>
                                        </div>
                                        
                                    </div>
                                @endisset

                                <div class=" row">
                                    <div  class="col-4">
                                        <a href="{{asset('')}}" class="text-dark"> 
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span class=" text-capitalize fs-6 ">Adresse</span>
                                    </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="" class="text-primary text-capitalize fs-6 ">{{$profile->adress}}</a>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                        {{-- profile presentation end --}}

                        {{-- content start --}}
                        <div>
                            <p class="pt-20">
                                {{$profile->description}}                        
                            
                        </div>
                        {{-- content end --}}

                        {{-- social media start --}}
                        <div class="bs-social-content mt-30  d-flex flex-column flex-sm-row  justify-content-between">
                            
                                <div class="share-buttons" >
                                    <div class="share-buttons-trigger ">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i> 
                                    </div>
                                    <div class="share-buttons-content">
                                        <div class="d-flex align-items-center">
                                            <span class="text-capitalize z-100 text-truncate ">Intéressante? 
                                                <strong class="text-primary">Partagez-le!</strong>
                                            </span>
                                        </div>
                                        <ul class="share-buttons-icons social-icon ">
                                            <li>
                                                <a 
                                                href="https://plus.google.com/share?url={{$CurrentProfileUrl}}" 
                                                target="_blank">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li>
                                                <a 
                                                href="https://www.facebook.com/share.php?u=={{$CurrentProfileUrl}}"
                                                 target="_blank">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li>
                                                <a 
                                                href="https://www.instagram.com/share?url={{$CurrentProfileUrl}}"
                                                 target="_blank">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li>
                                                <a 
                                                href="https://www.linkedin.com/shareArticle?url={{$CurrentProfileUrl}}" 
                                                target="_blank">
                                                    <i class="fa fa-linkedin-in" aria-hidden="true"></i></a></li>
                
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="">
                                    <ul class="social-icon  ">
                                        <li><a href="{{$profile->google}}" 
                                            rel="noopener" 
                                            target="_blank">
                                            <i class="fa fa-google-plus"aria-hidden="true"></i></a></li>
                                        <li><a href="{{$profile->facebook}}" 
                                            rel="noopener" 
                                            target="_blank">
                                            <i class="fab fa-facebook"></i></a></li>
                                        <li><a href="{{$profile->instagram}}" 
                                            rel="noopener" 
                                            target="_blank">
                                            <i class="fab fa-instagram"></i></a></li>
                                        <li><a href="{{$profile->linkdin}}" 
                                            rel="noopener" 
                                            target="_blank">
                                            <i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            
                        </div>
                        {{-- social media end --}}


                    {{-- rating section start --}}
                    <div class="hs-rating-section">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4><a href="" class="fw-bolder text-capitalize">Classement</a></h4>
                                <div class="total-rating">
                                    <div class="overall-score" >{{$roundRating}}</div>
                                    <div class="overall-info">Note globale de {{$nbRaters}} évaluation des clients</div>
                                </div>
                                <div class="rating-progress-items">
                                    @foreach($nbRating as $count)
                                    <div class="rating-progress-item">
                                        <div class="rating " >
                                            @for ($i = 0; $i < $count->note; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                            @for ($i = $count->note; $i < 5; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor

                                        </div>
                                        <div class="progress">
                                            <?php
                                            $percent = $count->count_comment ? ($count->count_comment / $nombreCommentaire) * 100 : 0;
                                            ?>
                                            <div class="progress-bar" style="width: {{$percent}}%"></div>
                                        </div>
                                        <div class="number">0{{$count->count_comment}}</div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <h4 class="p-0">
                                            <a href="" class="fw-bolder text-capitalize">Votre avis</a>
                                        </h4>
                                    </li>
                                </ul>
                            
                                <form  class="contact-form" action="{{route('Visiteur.store',$profile->id)}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">                                                
                                        <div class="rating" name='note'>
                                            <input type="radio" name="note" value="5" id="5"><label
                                                for="5">☆</label>
                                            <input type="radio" name="note" value="4" id="4"><label
                                                for="4">☆</label>
                                            <input type="radio" name="note" value="3" id="3"><label
                                                for="3">☆</label>
                                            <input type="radio" name="note" value="2" id="2"><label
                                                for="2">☆</label>
                                            <input type="radio" name="note" value="1" id="1"><label
                                                for="1">☆</label>
                                        </div>
                                        @error('note')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <input type="text" 
                                    name="nom"  placeholder="Nom" 
                                    class="w-50 @error('nom') border border-danger @enderror">
                                    @error('nom')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <input type="email" 
                                    name="email"  placeholder="Email" 
                                    class="@error('email') border border-danger @enderror">
                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <textarea 
                                    name="Commentaire" rows="3" 
                                    class="w-100 @error('Commentaire') border border-danger @enderror" placeholder="Commentaire">
                                </textarea>
                                    @error('Commentaire')
                                        <div class="text-danger ">{{$message}}</div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        
                        @if (session()->has('fail'))
                    
                            <div class="alert alert-danger d-flex 
                            align-items-center col-lg-6 col-xl-8 col-md-12 col-12 p-2 mb-2" 
                            role="alert" 
                            style="background-color:#ef233c;border-radius:10px">
            
                                <i class="fa fa-warning" aria-hidden="true"></i>
                                
                                <div class="text-capitalize">
                                    &nbsp; &nbsp;{{session('fail')}}
                                </div>
                            </div>                
                        @endif
                    </div>

                    {{-- rating section end --}}

                    @if(session()->has('success'))
                        <div class="alert alert-success 
                        d-flex align-items-center col-lg-4 col-xl-4 col-md-6 col-12 p-2 mb-2" 
                        role="alert" 
                        style="background-color:#2dc266;border-radius:10px">
                        <i class="fa fa-check-square"aria-hidden="true"></i>
                            <div class="text-capitalize">
                                &nbsp; &nbsp; &nbsp;{{session('success')}}
                            </div>
                        </div>   
                    @endif
                    
                    {{-- comment section start --}}
                    
                    <div class="bs-comment-text p-30 mt-30">    
                        @foreach($commentaires as $commentItem)
                            <div class="bs-cont-wrapper p-30">
                                <div class="row">
                                    <div class="col-2">
                                       <img src="{{asset('avatar/avis.png')}}" alt="avatar">
                                    </div>
                                    <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                                        <div class="sb-commment-text">
                                            <ul>
                                                <li class="">
                                                    <p class="fs-5"><a href="">{{$commentItem->nom}}</a>
                                                        <span>&nbsp; 
                                                            {{$commentItem->created_at->format('H:i A')}}
                                                        </span>
                                                            
                                                    </p>
                                                </li>
                                                <li class="left-side">
                                                    {{$commentItem->created_at->format('F d, Y')}}&nbsp; &nbsp; <span>
                                                        <a href="{{asset('')}}"> 
                                                            @for ($i = 0; $i < $commentItem->note; $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                            @for ($i = $commentItem->note; $i < 5; $i++)
                                                            <i class="far fa-star"></i>    
                                                            @endfor
                                                                
                                                        
                                                        </a>
                                                    </span>
                                                </li>
                                            </ul>
                                            <p class="p-0">{{$commentItem->details_commentaire}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- comment section end --}}

                </div>

                {{-- side bar section start --}}
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="hs-slidebar sb-grid-main-wrapper p-0 ">
                        <div class="row">
                            <div class="footer-menu col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <h4 class="">
                                    <a href="http://localhost:8000/visiteur/404" class="fw-bolder text-capitalize">
                                        Nos specialites
                                    </a>
                                </h4>
                                
                                <ul class="text-capitalize ">
                                    @foreach($ArtSpecialite as $specItem)
                                    <li>
                                        <i class="fas fa-caret-right"></i>
                                        <a href="http://localhost:8000/visiteur/404">
                                            &nbsp; {{$specItem->nom_specialite}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>  
                                
                                
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <h4 class="">
                                    <a href="http://localhost:8000/visiteur/404" 
                                    class="fw-bolder text-capitalize">
                                    Nos zones d'activites
                                </a></h4>
                                
                                @foreach ($FinDept as $deptItem)
                                    <div class="d-flex flex-wrap">
                                        <a href="http://localhost:8000/visiteur/404" 
                                        class="fw-bolde text-capitalize text-primary fs-5">
                                            {{$deptItem->nom_departement}}
                                        </a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="grid-container">
                                            @php
                                                $cityCounter = 0;
                                            @endphp
                                            @foreach ($ArtDepVille as $VilleItem)
                                                @if($deptItem->nom_departement == $VilleItem->nom_departement 
                                                && $cityCounter < 3)
                                                <div class="grid-item">
                                                    <i class="fas fa-caret-right"></i>
                                                    <a href="http://localhost:8000/visiteur/404">
                                                        {{$VilleItem->nom_ville}}
                                                    </a>
                                                </div>
                                                @php
                                                    $cityCounter++;
                                                @endphp
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endForeach

                            </div>
                            
                        </div>
                        
                    </div>

                </div>
                {{-- side bar section end --}}

            </div>
    </div>
    <!-- formOne section start -->
    <div class="formOne ptb-100 mx-5"id="petit-dialogue">
        <div class="container">
            <div class="welcome-text">
                <h3>Discutez de votre projet avec  <i class="text-primary">{{$profile->nom_societe}}</i></h3>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <form method="POST" action="{{route('Visiteur.mailing',$profile->id)}}" class="form">
                        @csrf
                        <div class="row">
                            <div class="form-group ">
                                    
                                <input type="text" name="Nom_Complet"  
                                placeholder="Nom et prénom" 
                                class=" @error('Nom_Complet') border border-danger @enderror text-capitalize">
                                @error('Nom_Complet')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                           
                            <div class="col-lg-6 col-md-12">
                                
                                <div class="form-group">
                                    
                                <input type="text" name="Telephone"  
                                placeholder="Telephone" 
                                class=" @error('Telephone') border border-danger @enderror text-capitalize">
                                </div>
                                @error('Telephone')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" name="Email"  
                                    placeholder="Email Adresse" 
                                    class="@error('Email') border border-danger @enderror text-capitalize">
                                </div>
                                @error('Email')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="text" name="Sujet"  
                                    placeholder="Sujet" 
                                    class="@error('Sujet') border border-danger @enderror text-capitalize">
                                </div>
                                @error('Sujet')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="sr-only">Message</label>
                                    <textarea name="Message" rows="3" 
                                    class="w-100 @error('Message') border border-danger @enderror text-capitalize" 
                                    placeholder="Message"></textarea>
                                </div>
                                @error('Message')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row-->
                        <!-- /.col-md-12 -->
                        <div class="col-md-12">
                            <div class="tb_es_btn_div">
                                <div class="response center"></div>
                                    <input type="hidden" name="form_type" value="contact" />
                                    <button 
                                        class="button margin-top-35 
                                        full-width button-sliding-icon ripple-effect btn-primary" 
                                        type="submit">
                                            Envoyer 
                                        <i class="fa fa-send"aria-hidden="true"></i>
                                    </button>
                            </div>
                        </div>
                        
                    </form>
                    

                </div>
                <!-- /.col-md-8 -->
            </div>
            @if(session()->has('success2'))
            <div class="alert alert-success d-flex 
            align-items-center justify-content-center 
            col-lg-8 col-md-8 col-12 p-1 mb-2 fs-6 
            mx-auto text-center" role="alert" 
            style="background-color:#2dc266; border-radius:10px">
                <i class="fa fa-check-square p-1" aria-hidden="true"></i>
                <div class="text-capitalize">
                    &nbsp; &nbsp; &nbsp;{{ session('success2') }}
                </div>
            </div>
        @endif
        
    
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    
</div>
</div>
{{-- main section end --}}


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
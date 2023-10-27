
   <!-- footer section start -->
    <footer class="footer-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="sb-footer-logo">
                        <a href="http://localhost:8000/visiteur/home" class="f-pd" >
                            <img src="{{asset('images/logo_v7.png')}}" alt="" style="width:150px;">
                        </a>
                        <p class=" fw-bold">
                            Une plate-forme qui vous permet de trouver l'artisan ou 
                            le professionnel pour mener à bien votre projet à proximité en moins de quelques minutes.
                        </p>
                        <ul class="footer-social-icon">
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
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-menu">
                        <h4><a href="http://localhost:8000/visiteur/404"
                             class="f-pd fw-bold text-primary">
                             Les Professionnels Par Département</a></h4>
                        <ul>
                            @foreach($TopDepartements as $DepartementItems)
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('search',['DeptId'=>$DepartementItems->id])}}">
                                    &nbsp; {{$DepartementItems->nom_departement}}
                                    &nbsp;{{$DepartementItems->countVille?'('.$DepartementItems->countVille.')':null}}
                                </a>
                            </li>
                            @endForeach
        
                            <h4>
                                <a 
                                    href="http://localhost:8000/visiteur/404" 
                                    class="f-pd fw-bold text-primary text-capitalize">
                                    voir plus
                                </a>
                                
                            </h4>

                        </ul>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-menu">
                        <h4>
                            <a 
                            href="http://localhost:8000/visiteur/404" 
                            class="f-pd fw-bold text-primary">
                            Les Professionnels Par Ville</a>
                        </h4>
                        <ul>
                            @foreach($TopVilles as $VilleItems)
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('search',['VilleId' => $VilleItems->id])}}">
                                    &nbsp; {{$VilleItems->nom_ville}}
                                </a>
                            </li>
                            @endForeach
                            <h4>
                                <a href="http://localhost:8000/visiteur/404" 
                                class="f-pd fw-bold text-primary text-capitalize">
                                voir plus</a>
                            </h4>

                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </footer>

<!-- bottom footer START-->
   <div class="bottom-footer">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <p>© 2023 Top-Travaux-France. Tous droits réservés
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    Développement et Référencement :
                    <span class="fw-bold text-primary"> 
                        TECHNOLOGIES 4YOU
                    </span>
                </div>
            </div>
        </div>
   </div>

<!-- bottom footer END-->


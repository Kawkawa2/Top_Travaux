@extends('Visiteur.master')
@section('content')

{{-- freelance profile start --}}
<div class="single-page-header freelancer-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side mt-5">
						<div class="header-image freelancer-avatar">
                            <img src="{{asset('images2/user-avatar-big-02.jpg')}}" alt=""></div>
						<div class="header-details">
							<h3>David Peterson <span>iOS Expert + Node Dev</span></h3>
                            
                            <div>
                                <a href="" class="text-color">
                                    <span><i class="fas fa-map-marker-alt text-color"></i></span>
                                    50 Vijay Nagar, Indore, INDIA
                                </a>
                            </div>
                            
                            <br/>
                            <div class="star-rating" data-rating="3.0"></div>
                                <span class="">
                                    <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i>
                                        <i class="far fa-star"></i><i class="far fa-star"></i> <span>| 251 + Review</span>
                                    </a>
                                </span> 
						    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- freelance profile end --}}

{{-- project carouselle --}}
<div class="hs-banner-wrapper ">
    <div class="owl-carousel owl-theme p-rel">
        <div class="item">
            <div>
                <img src="{{asset('images/slider-1.jpg')}}" alt="">
            </div>
        </div>
        <div class="item">
            <div>
                <img src="{{asset('images/slider-2.jpg')}}" alt="">
            </div>
        </div>
        <div class="item">
            <div>
                <img src="{{asset('images/slider-3.jpg')}}" alt="">
            </div>
        </div>
        <div class="item">
            <div>
                <img src="{{asset('images/slider-2.jpg')}}" alt="">
            </div>
        </div>
        <div class="item">
            <div>
                <img src="{{asset('images/slider-3.jpg')}}" alt="">
            </div>
        </div>
        <div class="item">
            <div>
                <img src="{{asset('images/slider-1.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>

{{-- project carouselle end --}}


{{--profile information/rating/comments  start--}}

<div class="hs-blog-wrapper">
    <div class="container">
        <div class="row">
            {{-- sidebare section start --}}
            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 pt-20">
                <div class="hs-slidebar sb-grid-main-wrapper p-0">
                <!-- Profile Overview -->
                <div class="profile-overview">
                    <div class="overview-item"><strong>$35</strong><span>Hourly Rate</span></div>
                    <div class="overview-item"><strong>53</strong><span>Jobs Done</span></div>
                    <div class="overview-item"><strong>22</strong><span>Rehired</span></div>
                </div>   
                				<!-- Button -->
				<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></a>

				<!-- artisan Indicators -->
				<div class="sidebar-widget">
					<div class="freelancer-indicators">

						<!-- Indicator -->
						<div class="indicator">
							<strong>88%</strong>
							<div class="indicator-bar" data-indicator-percentage="88"><span></span></div>
							<span>Job Success</span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>100%</strong>
							<div class="indicator-bar" data-indicator-percentage="100"><span></span></div>
							<span>Recommendation</span>
						</div>
						
						<!-- Indicator -->
						<div class="indicator">
							<strong>90%</strong>
							<div class="indicator-bar" data-indicator-percentage="90"><span></span></div>
							<span>On Time</span>
						</div>	
											
						<!-- Indicator -->
						<div class="indicator">
							<strong>80%</strong>
							<div class="indicator-bar" data-indicator-percentage="80"><span></span></div>
							<span>On Budget</span>
						</div>
					</div>
				</div>
				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Social Profiles</h3>
                    <div class="bs-social-content mt-30">
                        <ul class="social-icon ">
                            <li><a href="{{asset('javascript:;')}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{asset('javascript:;')}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{asset('javascript:;')}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{asset('javascript:;')}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
    
    
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Skills</h3>
					<div class="task-tags">
						<span>iOS</span>
						<span>Android</span>
						<span>mobile apps</span>
						<span>design</span>
						<span>Python</span>
						<span>Flask</span>
						<span>PHP</span>
						<span>WordPress</span>
					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Attachments</h3>
					<div class="attachments-container">
						<a href="#" class="attachment-box ripple-effect"><span>Cover Letter</span><i>PDF</i></a>
						<a href="#" class="attachment-box ripple-effect"><span>Contract</span><i>DOCX</i></a>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Bookmark or Share</h3>

					<!-- Bookmark Button -->
					<button class="bookmark-button margin-bottom-25">
						<span class="bookmark-icon"></span>
						<span class="bookmark-text">Bookmark</span>
						<span class="bookmarked-text">Bookmarked</span>
					</button>

					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
              
                <!-- instagram feed -->
                 <div class="feed-wrapper">
                    <h4><a href="{{asset('javascript:;')}}">Instagram</a></h4>
                    <ul class="footer-feed">
                       <li>
                          <a href="{{asset('javascript:;')}}" class="p-rel"><img src="{{asset('images/f-image-1.jpg')}}" class="p-rel" alt="">
                             <span><i class="fab fa-instagram"></i></span>
                          </a>
                          <a href="{{asset('javascript:;')}}" class="p-rel"><img src="{{asset('images/f-image-2.jpg')}}" class="p-rel" alt="">
                             <span> <i class="fab fa-instagram"></i></span>
                          </a>
                          <a href="{{asset('javascript:;')}}" class="p-rel"><img src="{{asset('images/f-image-3.jpg')}}" class="p-rel" alt="">
                             <span> <i class="fab fa-instagram"></i></span>
                          </a>
                          <a href="{{asset('javascript:;')}}" class="p-rel"><img src="{{asset('images/f-image-4.jpg')}}" class="p-rel" alt="">
                             <span><i class="fab fa-instagram"></i></span>
                          </a>
                          <a href="{{asset('javascript:;')}}" class="p-rel"><img src="{{asset('images/f-image-5.jpg')}}" class="p-rel" alt="">
                             <span> <i class="fab fa-instagram"></i></span>
                          </a>
                          <a href="{{asset('javascript:;')}}" class="p-rel"><img src="{{asset('images/f-image-6.jpg')}}" class="p-rel" alt="">
                             <span> <i class="fab fa-instagram"></i></span>
                          </a>
                       </li>
                    </ul>
                 </div>
                 <!-- holiday section -->
                 <div class="holiday-section p-rel">
                    <img src="{{asset('images/l-sidebar.jpg')}}" alt="" class="">
                    <div>
                       <h3><a href="{{asset('javascript:;')}}">Summar<br>Holiday<br>20% OFF</a></h3>
                       <button type="button" class="btn btn-light">get code</button>
                    </div>
                 </div>
                </div>

            </div>
            {{-- sidebare section end --}}

            {{-- content section start --}}
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="hs-blog-content">

                    {{-- profile content section start --}}
                    <h3 class="">About Me</h3>
                    <p class="pt-20">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                        bibendum auctor, nisi elit consequat as sum, nec sagittis sem nibh id elit. Duis sed odio
                        sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsn sum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor e in elit.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. </p>
                    <div id="hs-list-items">
                        <ul>
                            <li><a href="">-Hotel Timmings</a></li>
                            <li><a href="">-Term & Condition</a></li>
                            <li><a href="">-What kind of foowear is most suitable ? </a></li>
                            <li><a href="">-Can i bring Alcohol top this trip?</a></li>
                        </ul>
                        <ul>
                            <li><a href="">-Hotel Timmings</a></li>
                            <li><a href="">-Term & Condition</a></li>
                            <li><a href="">-What kind of foowear is most suitable ? </a></li>
                            <li><a href="">-Can i bring Alcohol top this trip?</a></li>
                        </ul>
                    </div>
                    <p class="pt-20">
                        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                        ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
                        consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia
                        nostra, per inceptos himenaeos. Mauris in erat justo.
                    </p>
                    {{-- profile content section end --}}
                </div>

                <div class="bs-social-content mt-30">
                    <ul>
                        <li><a href="{{asset('javascript:;')}}"><i class="fas fa-tags"></i></a></li>
                        <li><a href="{{asset('javascript:;')}}">family</a></li>
                        <li><a href="{{asset('javascript:;')}}">fun</a></li>
                        <li><a href="{{asset('javascript:;')}}">holiday</a></li>
                        <li><a href="{{asset('javascript:;')}}">island</a></li>
                        <li><a href="{{asset('javascript:;')}}">package</a></li>
                    </ul>
                    
                </div>
                {{-- best service section start --}}
                <div class="hs-servicer-sec">
                    <h4><a href="">The Best Service</a></h4>
                    <ul>
                        <li class="t-center text-color">
                            <span><i class="fas fa-car"></i></span>
                            <h5><a href="">Convenient<br>
                                    Transport</a></h5>
                        </li>
                        <li class="t-center text-color">

                            <span><i class="fas fa-utensils"></i></span>
                            <h5><a href="">Best<br>
                                    Gastronomy</a></h5>
                        </li>
                        <li class="t-center text-color">
                            <span><i class="fas fa-camera"></i></span>
                            <h5><a href="">Wildlife<br>
                                    Viewing</a></h5>
                        </li>
                        <li class="t-center text-color">
                            <span><i class="fas fa-coffee"></i></span>
                            <h5><a href="">Good<br>
                                    Drinks</a></h5>
                        </li>
                        <li class="t-center ">
                            <span><i class="fas fa-star text-color"></i></span>
                            <h5><a href="">Nice<br>
                                    Interior</a></h5>
                        </li>

                    </ul>
                </div>
                {{-- best dervice section end --}}
                
                {{-- map section start--}}
                <div class="hs-map-sec">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <h4><a href="">Hotel Location</a></h4>
                            <div style="width: 100%; height: 500px;">
                                <div class="with-amp">
                                    <div class="map-view">
                                          <div class="google-map" id="google_map"></div>
                                    </div>  
                                  </div>
                            </div>
                            <div class="hs-box">
                                <div class="row">

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">


                                        <span><i class="fas fa-phone-alt"></i></span>
                                        <div class="f-right">
                                            <a href="">Toll free</a>
                                            <h6><a href="">808 111 9999</a>
                                            </h6>
                                        </div>


                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">


                                        <span><i class="far fa-envelope"></i></span>
                                        <div class="f-right n-border">
                                            <a href="">Email Us</a>
                                            <h6><a href="">listing@example.com</a>
                                            </h6>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  map section end --}}

                {{-- rating section start--}}
                <div class="hs-rating-section">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4><a href="">Rating</a></h4>
                            <div class="total-rating">
                                <div class="overall-score">4.5</div>
                                <div class="overall-info">Overall Rating of 251 guest rating</div>
                            </div>
                            <div class="rating-progress-items">
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 80%"></div>
                                    </div>
                                    <div class="number">03</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:92%"></div>
                                    </div>
                                    <div class="number">05</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:40%"></div>
                                    </div>
                                    <div class="number">02</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:20%"></div>
                                    </div>
                                    <div class="number">01</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:0"></div>
                                    </div>
                                    <div class="number">00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <h4 class="p-0">
                                        <a href="">Your Review</a>
                                    </h4>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </li>
                            </ul>
                            <form  class="contact-form">
                                <input type="text" name="fname" id="fname" placeholder="Name" class="w-50">
                                <input type="email" name="mail" id="mail" placeholder="Email" class="w-50">
                                <input type="text" name="title" id="title" placeholder="Title" class="w-100">
                                <textarea name="message" rows="3" class="w-100">Comments</textarea>
                                <a href="" class="btn btn-primary">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
                {{--rating section end --}}

                {{-- comment section start--}}
                <div class="bs-comment-text p-30 mt-30">
                    <div class="bs-cont-wrapper p-30">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                                <a href=""> <img src="{{asset('images/blog-005.jpg')}}" alt=""></a>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="sb-commment-text">
                                    <ul>
                                        <li>
                                            <h6><a href="{{asset('javascript:;')}}">Liza D'souza</a><span>&nbsp; 10:45
                                                    AM</span></h6>
                                        </li>
                                        <li class="left-side">
                                            April 25, 2020&nbsp; &nbsp; <span>
                                                <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i><i class="far fa-star"></i> </a>
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="p-0">“Nulla facilisi. Nulla ornare condimentum dui, sit amet
                                        condimentum elit rhoncus sit amet. uspendis ctus leo nisi. This is
                                        Photoshop's version of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bs-cont-wrapper p-30">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                                <a href=""> <img src="{{asset('images/blog-006.jpg')}}" alt=""></a>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="sb-commment-text">
                                    <ul>
                                        <li>
                                            <h6><a href="{{asset('javascript:;')}}">Liza D'souza</a><span>&nbsp; 10:45
                                                    AM</span></h6>
                                        </li>
                                        <li class="left-side">
                                            April 25, 2020&nbsp; &nbsp; <span>
                                                <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i><i class="far fa-star"></i> </a>
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="p-0">“Nulla facilisi. Nulla ornare condimentum dui, sit amet
                                        condimentum elit rhoncus sit amet. uspendis ctus leo nisi. This is
                                        Photoshop's version of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bs-cont-wrapper p-30">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                                <a href=""><img src="{{asset('images/blog-007.jpg')}}" alt=""></a>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="sb-commment-text">
                                    <ul>
                                        <li>
                                            <h6><a href="{{asset('javascript:;')}}">Liza D'souza</a><span>&nbsp; 10:45
                                                    AM</span></h6>
                                        </li>
                                        <li class="left-side">
                                            April 25, 2020&nbsp; &nbsp; <span>
                                                <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i><i class="far fa-star"></i> </a>
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="p-0">“Nulla facilisi. Nulla ornare condimentum dui, sit amet
                                        condimentum elit rhoncus sit amet. uspendis ctus leo nisi. This is
                                        Photoshop's version of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bs-cont-wrapper p-30 pb-0 ">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                                <a href=""><img src="{{asset('images/blog-008.jpg')}}" alt=""></a>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="sb-commment-text">
                                    <ul>
                                        <li>
                                            <h6><a href="{{asset('javascript:;')}}">Liza D'souza</a><span>&nbsp; 10:45
                                                    AM</span></h6>
                                        </li>
                                        <li class="left-side">
                                            April 25, 2020&nbsp; &nbsp; <span>
                                                <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i><i class="far fa-star"></i> </a>
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="p-0">“Nulla facilisi. Nulla ornare condimentum dui, sit amet
                                        condimentum elit rhoncus sit amet. uspendis ctus leo nisi. This is
                                        Photoshop's version of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- comment section end --}}
            </div>
            {{-- content section end --}}
        </div>
    </div>
</div>

<!--  profile information/rating/comments end -->

<!-- most popular hotel section start -->

    <div class="slider-wrapper slider1-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4><a href="{{asset('javascript:;')}}">Most Popular Hotels</a></h4>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="sub-main">
                                <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                        <a href="{{asset('javascript:;')}}"> <img src="{{asset('images/blog-1.jpg')}}" alt=""></a>
                                    </div>
                                    <span>$77 / Night</span>
                                </div>
                                <div class="slider-content">
                                    <span>
                                        <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i>
                                            <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp; | &nbsp; 88+
                                            Review</a>
                                    </span>
                                    <h5><a href="{{asset('hotel-single-page.html')}}">hotel sayaji indore</a></h5>
                                    <a href="{{asset('javascript:;')}}"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                            Republic of Cuba,
                                            USA</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-sec p-rel">
                                <div class="hover-img p-rel">
                                    <a href="{{asset('javascript:;')}}"> <img src="{{asset('images/blog-2.jpg')}}" alt=""></a>
                                </div>
                                <span>$50 / Night</span>
                            </div>
                            <div class="slider-content">
                                <span>
                                    <a href="{{asset('javascript:;')}}"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i>
                                        <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp; | &nbsp; 83+
                                        Review</a>
                                </span>
                                <h5><a href="{{asset('hotel-single-page.html')}}">Guru kripa indore</a></h5>
                                <a href="{{asset('javascript:;')}}"><span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                        Republic of Cuba,
                                        USA</span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-sec p-rel">
                                <div class="hover-img p-rel">

                                    <a href="{{asset('javascript:;')}}"> <img src="{{asset('images/blog-3.jpg')}}" alt=""></a>

                                </div>
                                <span>$72 / Night</span>
                            </div>
                            <div class="slider-content">
                                <span>
                                    <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i>
                                        <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp; | &nbsp; 68+
                                        Review</a>
                                </span>
                                <h5><a href="{{asset('hotel-single-page.html')}}"> The Ashoka Hotel</a></h5>
                                <a href="{{asset('javascript:;')}}"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                        Republic of Cuba,
                                        USA</span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-sec p-rel">
                                <div class="hover-img p-rel">
                                    <a href="{{asset('javascript:;')}}"> <img src="{{asset('images/blog-1.jpg')}}" alt=""></a>
                                </div>
                                <span>$65 / Night</span>
                            </div>
                            <div class="slider-content">
                                <span>
                                    <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i>
                                        <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp; | &nbsp; 48+
                                        Review</a>
                                </span>
                                <h5><a href="{{asset('javascript:;')}}"> Hotel New Sunder</a></h5>
                                <a href="{{asset('hotel-single-page.html')}}"><span class="clr-text"><i
                                            class="fas fa-map-marker-alt"></i>
                                        Republic of Cuba,
                                        USA</span></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-sec p-rel">
                                <div class="hover-img p-rel">
                                    <a href="{{asset('javascript:;')}}"> <img src="{{asset('images/blog-2.jpg')}}" alt=""></a>
                                </div>
                                <span>$52 / Night</span>
                            </div>
                            <div class="slider-content">
                                <span>
                                    <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i>
                                        <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp; | &nbsp; 58+
                                        Review</a>
                                </span>
                                <h5><a href="{{asset('hotel-single-page.html')}}">hotel sayaji indore</a></h5>
                                <span class="clr-text"><i class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                    USA</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-sec p-rel">
                                <div class="hover-img p-rel">
                                    <a href="{{asset('javascript:;')}}"> <img src="{{asset('images/blog-3.jpg')}}" alt=""></a>
                                </div>
                                <span>$55 / Night</span>
                            </div>
                            <div class="slider-content">
                                <span>
                                    <a href="{{asset('javascript:;')}}"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i>
                                        <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp; | &nbsp; 88+
                                        Review</a>
                                </span>
                                <h5><a href="{{asset('hotel-single-page.html')}}">Hotel New Sunder</a></h5>
                                <a href="{{asset('javascript:;')}}"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                        Republic of Cuba,
                                        USA</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--  most popular hotel section end -->

<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Make an Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss your project with David</h3>
				</div>
					
				<!-- Form -->
				<form method="post">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name"/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address"/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
						<label class="uploadButton-button ripple-effect" for="upload">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>
			<!-- Login -->
			<div class="popup-tab-content" id="loginn">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss Your Project With Tom</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="make-an-offer-form">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name2" id="name2" placeholder="First and Last Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress2" id="emailaddress2" placeholder="Email Address" required/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" multiple/>
						<label class="uploadButton-button" for="upload-cv">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="make-an-offer-form">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Make an Offer Popup / End -->

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() { 
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        }); 
    }); 
    
    // Snackbar for "place a bid" button
    $('#snackbar-place-bid').click(function() { 
        Snackbar.show({
            text: 'Your bid has been placed!',
        }); 
    }); 
    
    
    // Snackbar for copy to clipboard button
    $('.copy-url-button').click(function() { 
        Snackbar.show({
            text: 'Copied to clipboard!',
        }); 
    }); 
    </script>
    
{{-- -------------------------------------------------------------------- --}}
            {{-- side bar section start --}}
            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="hs-slidebar sb-grid-main-wrapper p-0">
                    <div class="find-us-wrapper pb-0 text-center ">
                        <h4 class=""><a href="javascript:;" class="fw-bolder text-capitalize">Nos specialite</a></h4>
                        <ul class="nav flex-column text-capitalize">
                            <li class="nav-item mb-0"><a href="#" class="nav-link p-0 link-dark">specialite1</a></li>
                            <li class="nav-item mb-0"><a href="#" class="nav-link p-0 link-dark ">specialite2</a></li>
                            <li class="nav-item mb-0"><a href="#" class="nav-link p-0 link-dark ">specialite3</a></li>
                            <li class="nav-item mb-0"><a href="#" class="nav-link p-0 link-dark ">specialite4</a></li>
                          </ul>  
                          <a class="btn btn-primary btn23 m-2">voir plus</a>

                    </div>
                    <div class="find-us-wrapper pb-0 text-center ">
                        <h4 class=""><a href="javascript:;" class="fw-bolder text-capitalize">mes zones d'activites</a></h4>
                        <ul class="nav flex-column text-capitalize">
                            <a href="javascript:;" class="fw-bolder text-capitalize text-danger fs-5">departement</a>

                            <li class="nav-item mb-0"><a href="#" class="nav-link p-0 link-dark">departement1</a></li>
                            <li class="nav-item mb-0"><a href="#" class="nav-link p-0 link-dark ">departement2</a></li>
                            <li class="nav-item mb-0"><a href="#" class="nav-link p-0 link-dark ">departement3</a></li>
                          </ul>  
                          <a class="btn btn-primary btn23 m-2">voir plus</a>

                    </div>
                    <div class="feed-wrapper">
                        <h4><a href="javascript:;">Instagram</a></h4>
                        <ul class="footer-feed">
                            <li>
                                <a href="javascript:;" class="p-rel"><img src="{{asset('images/f-image-1.jpg')}}" class="p-rel"
                                        alt="">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>
                                <a href="javascript:;" class="p-rel"><img src="{{asset('images/f-image-2.jpg')}}" class="p-rel"
                                        alt="">
                                    <span> <i class="fab fa-instagram"></i></span>
                                </a>
                                <a href="javascript:;" class="p-rel"><img src="{{asset('images/f-image-3.jpg')}}" class="p-rel"
                                        alt="">
                                    <span> <i class="fab fa-instagram"></i></span>
                                </a>
                                <a href="javascript:;" class="p-rel"><img src="{{asset('images/f-image-4.jpg')}}" class="p-rel"
                                        alt="">
                                    <span><i class="fab fa-instagram"></i></span>
                                </a>
                                <a href="javascript:;" class="p-rel"><img src="{{asset('images/f-image-5.jpg')}}" class="p-rel"
                                        alt="">
                                    <span> <i class="fab fa-instagram"></i></span>
                                </a>
                                <a href="javascript:;" class="p-rel"><img src="{{asset('images/f-image-6.jpg')}}" class="p-rel"
                                        alt="">
                                    <span> <i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="holiday-section p-rel">
                        <img src="{{asset('images/l-sidebar.jpg')}}" alt="" class="">
                        <div>
                            <h3><a href="javascript:;">Summar<br>Holiday<br>20% OFF</a></h3>
                            <button type="button" class="btn btn-light">get code</button>
                        </div>
                    </div>
                </div>

            </div>

{{-- profile presentation --}}
        <div class="row col-12">
            <div class="">
                <div class="hs-blog-content">
                    <h2><a href="" class="fw-bolder">Hotel Sayaji indore</a></h2>
                    <div class="pt-20 col-12">
                            <div class="row">
                                <div class="col-4">
                                    
                                        <a href="{{asset('javascript:;')}}" class="text-dark"> 
                                            <i class="fas fa-globe"></i>
                                            
                                            <span class="text-primary text-capitalize fs-6 ">Visiter notre site</span>
                                        </a>
                                </div>
                                <div class="col-4"><a href="{{asset('javascript:;')}}" class="text-warning"> 
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span  class="text-primary text-capitalize fs-6 ">| 251 + Review</span>
                                    </a>
                                    
                                </div>
                                    
                            </div>
                            <div class="pt-20 row">
                                <div  class="col-4 col-lg-2 ">
                                    <a href="" class="btn btn-success btn24 w-100 ">Appeler</a>
                                    </a>
                                </div>
                                <div class="col-4 col-lg-2">
                                    <a href="" class="btn btn-dark w-100  btn23">Contacter</a>
                                    </a>
                            </div>
                            
                    </div>
                    <div class="pt-5 col-12 col-lg-8">
                        <div class=" row">
                            <div  class="col-4">
                                <a href="{{asset('javascript:;')}}" class="text-dark"> 
                                    <i class="fa fa-mobile-phone" aria-hidden="true"></i>                               
                                    <span class=" text-capitalize fs-6">Telephone</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="" class="text-primary text-capitalize fs-6 ">+212 0909090</a>
                            </div>
                            
                        </div>
                        <div class=" row ">
                            <div  class="col-4">
                                <a href="{{asset('javascript:;')}}" class="text-dark">
                                    <i class="fa fa-phone" aria-hidden="true"></i> 
                                    <span class=" text-capitalize fs-6">Fixe</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="" class="text-primary text-capitalize fs-6 ">05909090</a>
                            </div>
                            
                        </div>
                        <div class=" row">
                            <div  class="col-4">
                                <a href="{{asset('javascript:;')}}" class="text-dark"> 
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span class=" text-capitalize fs-6 ">Adresse</span>
                            </a>
                            </div>
                            <div class="col-4">
                                <a href="" class="text-primary text-capitalize fs-6 ">50 Vijay Nagar, Indore, INDIA</a>
                            </div>
                            
                        </div>
                        
                        
                    </div>

                </div>

                   
                               
            </div>
                   </div>  
@endsection



               {{-- cards start--}}
               <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                   aria-labelledby="pills-profile-tab">
                   <div class="row">
                         @foreach ($result as $item)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                               <div class="sub-main">
                                  <div class="img-sec p-rel">
                                     <div class="hover-img p-rel">
                                        <a href="javascript:;"> <img src="{{asset('images/blog-1.jpg')}}" alt=""></a>
                                     </div>
                                     <span>
                                        <a href="#small-dialog" class="text-light popup-with-zoom-anim ">Contacter</a>
                                     </span>
                                  </div>
                                  <div class="slider-content">
                                     <span>
                                        <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                              class="fas fa-star"></i>
                                           <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; {{$item->nombreCommentaire}}+
                                           Review</a>
                                     </span>
                                     <h5><a href="hotel-single-page.html">{{$item->nom_societe}}</a></h5>
                                     <a href="javascript:;"> 
                                        <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                           {{$item->nom_departement}},{{$item->codeP}} {{$item->ville}}
                                        </span></a>
                                  </div>
                               </div>
                            </div>
 
                         @endforeach
                      
                   </div>
                </div>


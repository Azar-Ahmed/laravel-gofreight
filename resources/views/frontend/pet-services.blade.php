@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Pet Services')
    @section('container')
    		        
    <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Pet Services (AVI)</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="air-fright-services.html">Air Freight Service</a></li>
                            <li>Pet Services (AVI)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumb section
	    ============================================= -->

        <!-- Start of Details section
	    ============================================= -->
        <section id="ft-thx-faq" class="ft-thx-faq-section position-relative">
            <span class="ft-thx-shape1 position-absolute"><img src="{{asset('frontend_assets/imgs/bg/map.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-thx-faq-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 view">
                            <div class="ft-thx-faq-img">
                                <img src="{{asset('frontend_assets/imgs/about/pet1.png')}}" class="img-shape" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="ft-thx-faq-text">
                                <div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>Pet Services (AVI)</h2>
                                </div>
                                <h6>Pet transport and animal shipping throughout India.</h6><br>
                                <div class="text">Are you looking for a safe, reliable pet transport service because you’re moving house, 
                                    relocating or going to a new forces posting? Are you a breeder, buyer or welfare group that needs pet 
                                    shipping service? Or are you simply looking for a stressfree way to transport your pets to 
                                    your holiday destination?
                                </div><br>
                                <div class="text">Gofreight.in can arrange pet travel by air for you, we can do as much or as little 
                                    of the organisation as you want, to fit with your personal travel plan, your budget, and your 
                                    animal’s needs.
                                </div>
                                
                                <!-- <div class="button-box">
									<a href="#" class="theme-btn btn-style-three">Contact Us <span class="icon fas fa-angle-double-right"></span></a>
								</div> -->
                                  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text"><br>
                                <h6>Documents Required for PET relocation</h6>
                                <div class="pr-an-why-choose-list ul-li-block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <ul>
                                        <li>Fit to fly doctor certificate</li>
									    <li>Vaccination Certificate</li>
									    <li>Indemnity Letter</li>
									    <li>IATA certified cage( pet can sit, turn, rotate )</li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>		
        <!-- End of Details section
	    ============================================= -->


    @endsection
@section('custom_script')
@endsection
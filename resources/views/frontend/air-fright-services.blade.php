@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Air Fright Services')
    @section('container')
    		        
       
        <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Air Freight Services</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="services.html">Services</a></li>
                            <li>Air Freight Services</li>
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
                                <img src="{{asset('frontend_assets/imgs/about/air-freight.jpg')}}" class="img-shape" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="ft-thx-faq-text">
                                <div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>Air Freight <span>Services</span></h2>
                                </div>
                                <div class="text">Our Air Freight Division takes exceptional pride in their performance as they 
                                    have always gone beyond achieving the demands of the clients. Cost effective solutions for heavier, 
                                    non-urgent shipments through out India. Choose the speed and price that fits your budget. 
                                    And we'll keep you fully informed at every stage of the process.
                                </div>
                                <div class="text"><br>
                                    <h6>We deliver the below</h6><br>
									<ul class="service-list">
										<li>Airport-to-Airport</li>
										<li>Door-to-Door</li>
										<li>Airport-to-Door</li>
										<li>Door-to-Airport</li>
										<li>All import and export clearances handled for you</li>
										<li>Ideal for shipments over any wieght or irregular shapes</li>
									</ul>
                                </div> 
                                <div class="button-box">
									<a href="#" class="theme-btn btn-style-three">Contact Us <span class="icon fas fa-angle-double-right"></span></a>
								</div>
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>		
        <!-- End of Details section
	    ============================================= -->

        <!-- Start More Details Two 
        ============================================= -->
        <section id="ft-thx-help" class="ft-thx-help-section position-relative">
            <div class="background_overlay"></div>
            <span class="ft-thx-help-bg position-absolute"><img src="{{asset('frontend_assets/imgs/bg/c-bg.jpg')}}" alt=""></span>
            <div class="container">
                <div class="ft-thx-help-content position-relative">
                    <div class="ft-thx-section-title-3 text-center headline pera-content wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <!-- <span>About Fastrans</span> -->
                        <h3 class="heading">We Provide More Air Frieght Services</h3>
                    </div>
                    <div class="ft-thx-help-content-items">
                        <div class="row">
                            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="ft-thx-help-item d-flex justify-content-between align-items-center">
                                    <div class="ft-thx-help-text headline">
                                        <h3>Pet Service (AVI)</h3>
                                        <div class="ft-thx-btn-2">
                                            <a class="d-flex justify-content-center align-items-center" href="pet-services.html">Know More</a>
                                        </div>
                                    </div>
                                    <div class="ft-thx-help-img">
                                        <img src="{{asset('frontend_assets/imgs/about/pet.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="ft-thx-help-item d-flex justify-content-between align-items-center">
                                    <div class="ft-thx-help-text headline">
                                        <h3>Dangerous Goods</h3>
                                        <div class="ft-thx-btn-2">
                                            <a class="d-flex justify-content-center align-items-center" href="dangerous.html">Know More</a>
                                        </div>
                                    </div>
                                    <div class="ft-thx-help-img">
                                        <img src="{{asset('frontend_assets/imgs/about/DG-goods.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of More Details section
	    ============================================= -->


    @endsection
@section('custom_script')
@endsection
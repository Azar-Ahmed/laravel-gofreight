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
                    <h2>Road Freight Services</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="services.html">Services</a></li>
                            <li>Road Freight Services</li>
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
                                <img src="{{asset('frontend_assets/imgs/about/road.jpg')}}" class="img-shape" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="ft-thx-faq-text">
                                <div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>Road Freight <span>Services</span></h2>
                                </div>
                                <div class="text">Gofreight.in operates one of the largest and most advanced land freight networks 
                                    for cost-effective transport of large shipments by road. Whether you choose a dedicated vehicle 
                                    for point-to-point transport or consolidation, you have the option of collection from multiple 
                                    locations for consolidation and onward delivery.
                                </div>
                                <div class="text"><br>
									<ul class="service-list">
										<li>Cost-effective transport for larger shipments</li>
										<li>Choose between consolidation or your own dedicated vehicle</li>
										<li>Available throughout the country</li>
										<li>Direct, safe and secure delivery</li>
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

    @endsection
@section('custom_script')
@endsection
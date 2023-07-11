@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Train Freight')
    @section('container')
    
    
        <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Train Freight Services</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="services.html">Services</a></li>
                            <li>Train Freight Services</li>
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
                                <img src="{{asset('frontend_assets/imgs/about/Train.jpg')}}" class="img-shape" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="ft-thx-faq-text">
                                <div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>Train Freight <span>Services</span></h2>
                                </div>
                                <div class="text">Excellent quality, easy to use and reasonable price are just few to mention features of 
                                    our highlighted train freight service. We offer a quality-assured and planned as per the client 
                                    preference service and solu- tions. We ensure the highest levels of safety while operations and 
                                    the entire service is customized to give the customer the maximum benefit. We use rail freight 
                                    service so smartly as to seamlessly provide a fully integrated and sustainable transportation and 
                                    logistics service- from source to delivery point
                                </div>
                                <div class="text"><br>
									<ul class="service-list">
										<li>Truck transfer from terminal to train</li>
										<li>Information delivery status to the shipper</li>
										<li>Right rolling stock for all type of freight</li>
										<li>Processing Railway Documents</li>
									</ul>
                                </div>
                                <div class="text"><p>By supporting your Rail Logistics Service, we help to ensure your product 
                                    reach their target market in best time and while at their finest quality.</p>
                                    <p><b>Call us today for a bespoke plan on Railway Freight Service on how to improve Rail Operation.</b></p>
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
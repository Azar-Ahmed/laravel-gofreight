@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Freight Forwarding')
    @section('container')
    		        
    
        <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Freight Forwarding Services</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Freight Forwarding Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumb section
	    ============================================= -->

        <!-- Start of Blog section
	    ============================================= -->
		<section id="ft-blog-3" class="ft-blog-section-3">
            <div class="container">
                <!-- <div class="ft-section-title-3 headline text-center">
                    <h2>Get the latest news, advice &
                    best practice from blog.</h2>
                </div> -->
                <div class="ft-blog-content-3">
                    <div class="blog-slider-3">
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-3 position-relative">
                                <div class="ft-blog-img">
                                    <img src="{{asset('frontend_assets/img/blog/blg2.1.jpg')}}" alt="">
                                </div>
                                <div class="ft-blog-text headline pera-content position-relative">
                                    <h3 class="text-center"><a href="air-fright-services.html">Air Fright Service</a></h3>
                                    <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="air-fright-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-3 position-relative">
                                <div class="ft-blog-img">
                                    <img src="{{asset('frontend_assets/img/blog/blg2.3.jpg')}}" alt="">
                                </div>
                                <div class="ft-blog-text headline pera-content position-relative">
                                    <h3 class="text-center"><a href="road-freight-services.html"></a>Road Freight Service</h3>
                                    <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="road-freight-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-3 position-relative">
                                <div class="ft-blog-img">
                                    <img src="{{asset('frontend_assets/img/blog/train.jpg')}}" alt="">
                                </div>
                                <div class="ft-blog-text headline pera-content position-relative">
                                    <h3 class="text-center"><a href="train-freight-services.html">Train Freight Service</a></h3>
                                    <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="train-freight-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-3 position-relative">
                                <div class="ft-blog-img">
                                    <img src="{{asset('frontend_assets/img/blog/ecom.jpg')}}" alt="">
                                </div>
                                <div class="ft-blog-text headline pera-content position-relative">
                                    <h3 class="text-center"><a href="ecommmerce-services.html">Ecommerce Service</a></h3>
                                    <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="ecommmerce-services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-3 position-relative">
                                <div class="ft-blog-img">
                                    <img src="{{asset('frontend_assets/img/blog/pack.jpg')}}" alt="">
                                </div>
                                <div class="ft-blog-text headline pera-content position-relative">
                                    <h3 class="text-center"><a href="warehouse-packaging.html">Warehouse & Packing</a></h3>
                                    <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="warehouse-packaging.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	
        <!-- End of Blog section
	    ============================================= -->



    @endsection
@section('custom_script')
@endsection
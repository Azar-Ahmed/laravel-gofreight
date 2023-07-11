@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Services')
    @section('container')
    
     <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Services</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumb section
	    ============================================= -->

        <!-- Services Section 
        ============================================= -->
        <section class="ft1-services-section">
			<div class="auto-container" style="padding: 80px 0px 80px 0px;">
				<div class="sec-title">
					<div class="clearfix">
						<div class="text-center">
							<h2>We are optimists who Love <br> to work Together.</h2>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <!-- Service Block -->
					    <div class="ft1-service-block">
						    <div class="inner-box">
							    <div class="content">
								    <h4><a href="freight-forwarding.html">Freight Forwarding Services</a></h4>
								    <div class="text"></div>
								    <!-- Btn Box -->
								    <div class="btn-box">
									    <a href="freight-forwarding.html" class="theme-btn btn-style-one">Explore More <span class="icon fas fa-angle-double-right"></span></a>
								    </div>
							    </div>
							    <div class="side-icon">
								    <img src="{{asset('frontend_assets/images/resource/service-1.png')}}" alt="" />
							    </div>
							    <div class="color-layer"></div>
						    </div>
					    </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <!--Service block-->
                        <div class="ft1-service-block style-two">
                            <div class="inner-box">
                                <div class="content">
                                    <h4><a href="custom-clearence.html">Custom Clearence Services</a></h4>
                                    <div class="text"></div>
                                    <!-- Btn Box -->
                                    <div class="btn-box">
									    <a href="custom-clearence.html" class="theme-btn btn-style-one">Explore More <span class="icon fas fa-angle-double-right"></span></a>
								    </div>
                                </div>
                                <div class="side-icon">
                                    <img src="{{asset('frontend_assets/images/resource/service-2.png')}}" alt="" />
                                </div>
                                <div class="color-layer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
		<!-- End Services Section
        ============================================= -->

        <section id="ft-footer-3" class="ft-footer-section-3" data-background="{{asset('frontend_assets/img/bg/f-bg3.jpg')}}">
            <div  class="ft-newslatter-section-3">
                <div class="container">
                    <div class="ft-newslatter-content-3 d-flex justify-content-between align-items-center">
                        <div class="ft-newslatter-text headline">
                            <h3>Looking for the Best Transport Services?</h3>
                            <span>We love to listen and we are eagerly waiting to talk to you regarding your project.</span>
                        </div>
                        <div class="ft-newslatter-btn position-relative">
                            <a class="d-flex align-items-center justify-content-center text-uppercase" href="#">Get a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
@section('custom_script')
@endsection
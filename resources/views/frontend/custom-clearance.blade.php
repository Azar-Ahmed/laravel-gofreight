@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Custom Clearence')
    @section('container')
    		        
       
    
        <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Custom Clearence Services</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Custom Clearence Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumb section
	    ============================================= -->

        <!-- Start of section
	    ============================================= -->
        <section class="ft1-welcome-section">
			<div class="pattern-layer" style="background-image:url({{asset('frontend_assets/images/background/pattern-1.png')}})"></div>
			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">
					
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<img src="{{asset('frontend_assets/images/resource/custom.jpg')}}" alt="" />
								</div>
							</div>
						</div>
						
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="sec-title">
									<h3>CUSTOMS CLEARANCE SERVICE</h3>
									<div class="text">We undertake the job of Customs Clearance of both import & 
                                        export cargo’s from all the major ports,ICDs of India e.g. JNPT (Mumbai), Kolkata, 
                                        Chennai, Cochin, Delhi ICD etc. As a Custom House Agent well versed with updated 
                                        customs regulations and procedures and backed by experience, we can handle 
                                        clearance of Import / Export shipments with ease and ef- ficiency.
                                    </div>
                                    <div class="text">Our Custom Clearance-related Services includes advice to our 
                                        clients in preparation of final Import / Export related documents, 
                                        completion of appraisement and examination formalities and payments. 
                                        The consignments after completion of custom formalities are either shipped / 
                                        delivered to the client’s warehouse or are dispatched to the upcountry 
                                        destination under our supervision.
                                    </div>
                                    <div class="text">We have experience of handling all sorts of imports whether 
                                        temporary or on permanent basis cleared on payment of duty and taxes or under 
                                        various exemption notifications.
                                    </div>
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
        <!-- End of section
	    ============================================= -->


    @endsection
@section('custom_script')
@endsection
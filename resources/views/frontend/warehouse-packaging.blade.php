@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Warehouse Packaging')
    @section('container')
    
    
   <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Warehouse Packaging</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="services.html">Services</a></li>
                            <li>Warehouse Packaging</li>
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
                        <div class="col-lg-5 col-md-12 col-sm-12 view">
                            <div class="ft-thx-faq-img">
                                <img src="{{asset('frontend_assets/imgs/about/warehouse.png')}}" class="img-shape" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="ft-thx-faq-text">
                                <div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>Warehouse & Packaging</h2>
                                </div>
                                <div class="text"><p>The world is in most desire of gadgets like mobile phones, laptops more of 
                                    electronic items, we really look forward to work for such consignments with utmost care and efficiency. 
                                    we meet the logistics needs of major clients, including many companies and top retail chains operating.</p>
                                    <p>Our freight management system helps us to measure and achieve high-performance standards, and offer 
                                        our clients tailored solutions to achieve better time and monetary management. Gofreight.in 
                                        provides a comprehensive portfolio of logistics solutions throughout India.
                                    </p>
                                    <p>We value our customers the most. We operate with the most actual technology available for your 
                                        operation and service web system, for all of ours valued customers. We manage to place orders 
                                        over internet, query for customer’s inventories balances, queries for orders status, automatics 
                                        email services and more.
                                    </p>
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
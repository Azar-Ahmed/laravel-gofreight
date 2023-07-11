@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Dangerous')
    @section('container')
    		        
       
    
      
        <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Dangerous Goods</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="air-fright-services.html">Air Freight Service</a></li>
                            <li>Dangerous Goods</li>
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
                                <img src="{{asset('frontend_assets/imgs/about/DG-Hazard.png')}}" class="img-shape" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="ft-thx-faq-text">
                                <div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>Dangerous Goods</h2>
                                </div>
                                <div class="ft-why-choose-list-wrapper ul-li-block">
                                    <ul>
                                        <li>Class 1 : Explosives : Forbidden</li>
                                        <li>Class 2 : Gasses</li>
                                        <li>Class 3 : Flammable Liquid</li>
                                        <li>Class 4 : Flammable Solid</li>
                                        <li>Class 5 : Oxidiser & Organic Peroxide</li>
                                        <li>Class 6 : Toxic & InfectiousSubstances</li>
                                        <li>Class 7 : Radioactive : Embargo</li>
                                        <li>Class 8 : Corrosive Material</li>
                                        <li>Class 9 : Miscellaneous</li>
                                    </ul>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text" style="margin-top: 50px;">
                            <h4>HIDDEN DANGEROUS GOODS</h4>
                        </div> 
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="pr-an-why-choose-list ul-li-block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <ul>
                                    <li>AIRCRAFT ON GROUND SPARES.</li>
									<li>AIRCRAFT SPARE PARTS/AIRCRAFT EQUIPMENT</li>
									<li>AUTOMOBILE, AUTOMOBILE PARTS</li>
									<li>BREATHING APPARATUS</li>
                                    <li>CAMPING EQUIPMENT</li>
                                    <li>CARS, CAR PARTS</li>
                                    <li>CHEMICALS</li>
                                    <li>CONSOLIDATED CONSIGNMENTS</li>
                                    <li>CRYOGENIC (LIQUID)</li>
                                    <li>CYLINDERS</li>
                                    <li>DENTAL APPARATUS</li>
                                    <li>DIAGNOSTIC SPECIMEN</li>
                                    <li>DIVING EQUIPMENT</li>
                                    <li>DRILLING AND MINING EQUIPMENT</li>
                                    <li>DRY SHIPPER (VAPOUR SHIPPER)</li>
                                    <li>ELECTRICAL EQUIPMENT</li>
                                    <li>ELECTRICALLY POWERED APPARATUS</li>
                                </ul>
                            </div> 
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="pr-an-why-choose-list ul-li-block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <ul>
                                    <li>EXPEDITIONARY EQUIPMENT</li>
                                    <li>FILM CREW OR MEDIA EQUIPMENT</li>
                                    <li>FROZEN EMBRYOS</li>
                                    <li>FROZEN FRUITS. VEGETABLES. ETC</li>
                                    <li>FUELS</li>
                                    <li>FUEL CONTROL UNITS</li>
                                    <li>HOT AIR BALLON</li>
                                    <li>HOUSEHOLD GOODS</li>
                                    <li>LABORATORY/TESTING EQUIPMENTS</li>
                                    <li>INSTRUMENTS</li>
                                    <li>MACHINERY PARTS</li>
                                    <li>MAGNETS AND OTHER ITEMS OF SIMILAR MATERIAL</li>
                                    <li>MEDICAL SUPPLIES</li>
                                    <li>METAL CONSTRUCTION MATERIAL, METAL FENCING, METAL</li>
                                    <li>PIPING</li>
                                    <li>PARTS OF AUTOMOBILE</li>
                                </ul>
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
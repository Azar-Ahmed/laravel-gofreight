@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Contact')
    @section('container')
      <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Contact</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumb section
	    ============================================= -->

        <!-- Start of contact page section
	    ============================================= -->
        <section id="ft-contact-page" class="ft-contact-page-section page-padding">
            <div class="container">
                <div class="ft-contact-page-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ft-contact-page-text-wrapper">
                                <div class="ft-section-title-2 headline pera-content">
                                    <span class="sub-title">Get in Touch</span>
                                    <h2>Get in Touch And We’ll  Help
                                        Your Business
                                    </h2>
                                </div>
                                <div class="ft-contact-page-contact-info">
                                    <div class="ft-contact-cta-items d-flex">
                                        <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="ft-contact-cta-text headline pera-content">
                                            <h3>Office address</h3>
                                            <p>72/1, 1st main, shabarinagar, 
                                                Bytrayanapura P.O Bangalore- 560092, 
                                                Karnataka, India
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ft-contact-cta-items d-flex">
                                        <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="ft-contact-cta-text headline pera-content">
                                            <h3>Telephone number</h3>
                                            <p><a href="tel:917829773773">+91 78297 73773</p></a>
                                        </div>
                                    </div>
                                    <div class="ft-contact-cta-items d-flex">

                                        <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="ft-contact-cta-text headline pera-content">
                                            <h3>Mail address</h3>
                                            <p><a href="mailto:info@gofreight.in">info@gofreight.in</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ft-contact-page-form-wrapper headline">
                                <h5 class="text-center pb-3">Need any help just send a message via our email address</h5>
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="email" name="email" placeholder="Your Email" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="tel" name="number" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button>Send Mail</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of contact page section
	    ============================================= -->
    @endsection
    @section('custom_script')
    @endsection
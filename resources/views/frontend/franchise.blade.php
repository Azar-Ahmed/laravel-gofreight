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
                    <h2>Franchise</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="">Join Us</a></li>
                            <li>Franchise</li>
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
                        <div class="col-lg-12">
                            <div class="ft-contact-page-form-wrapper headline">
                                <h3>Franchise</h3>
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" name="org-name" placeholder="Organization Name & Address" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="email" name="email" placeholder="Your Email" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="tel" name="number" placeholder="Contact Number" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="designation" placeholder="Designation" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" name="business" placeholder="Business Desired Location" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" name="pincode" placeholder="Pincode" required>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="message" placeholder="Your Message Here"></textarea>
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
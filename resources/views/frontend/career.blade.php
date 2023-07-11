@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Career')
    @section('container')
      <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Career</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="">Join Us</a></li>
                            <li>Career</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumb section
	    ============================================= -->

        <!-- Start of contact page section
	    ============================================= -->
        <section id="ft-thx-about" class="ft-thx-about-section pt-50">
            <div class="container">
                <div class="pr-cor-about-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pr-cor-about-text-wrap">
                                <div class="pr-cor-section-title headline pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <!-- <span class="pr-cor-title-tag">About Our Company</span> -->
                                    <h2>Career</h2>
                                </div>
                                <p>Gofreight.in provides a wide range of career opportunities at different levels throughout India. We believe in hiring quality manpower, which will take the group to insurmountable heights of achievement through a strong focus on their career and growth. Please send a mail to <a href="mailto:career@gofreight.in" style="color:#f3961e">career@gofreight.in</a> and gofreight.in staffing represantative will contact you soon.</p>
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
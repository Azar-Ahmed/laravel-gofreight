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
                    <h2>Restricted & Banned</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="">Resources</a></li>
                            <li>Restricted & Banned</li>
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
            <span class="ft-thx-shape1 position-absolute"><img src="assets/imgs/bg/map.png" alt=""></span>
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
                                    <h2>Restricted & Banned</h2>
                                </div>
                                <div class="pr-an-why-choose-list ul-li-block pt-0">
                                    <h6 class="pb-2">Prohibited Goods</h6>
                                    <ul>
                                        <li>Air guns, replica and imitation firearms</li>
                                        <li>Animal Raw Skins/Furs</li>
                                        <li>Antiques (objects over 100 years old)</li>
                                        <li>APO ( Army Post Office ) / FPO ( Fleet Post Office )/DPO (Diplomatic Post Office) Addresses</li>
                                        <li>Arms & Ammunitions</li>
                                        <li>Asbestos</li>
                                        <li>Biological Substance, Category B</li>
                                        <li>Contraband including, but not limited to, illicit drugs and counterfeit goods</li>
                                        <li>Corrosive items (acids, chemicals), radioactive material such as Aluminium chloride, 
                                            Caustic soda, Corrosive cleaning fluid, Corrosive rust remover/preventative, 
                                            Corrosive paint remover (Nail Polish), Acid (Hydrochloric acid, Nitric acid, Sulphuric acid, etc.)
                                        </li>
                                    </ul>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="text" style="margin-top: 50px;">
                            <h4>HIDDEN DANGEROUS GOODS</h4>
                        </div>  -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="pr-an-why-choose-list ul-li-block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <ul>
                                    <li>Currency, Cheques, Bullion, Payment Cards, Traveller Cheques, Stamps</li>
									<li>Dangerous goods and Hazardous material prohibited or restricted by IATA /ICAO and other Government or Regulatory Agencies</li>
									<li>Drugs - Cocaine, Cannabis resin, LSD, Narcotics, Morphine, Opium, Psychotropic substances, etc.</li>
									<li>Edible Oils, De-oiled groundnut cakes, Fodder and Rice bran</li>
                                    <li>Electronic cigarettes</li>
                                    <li>Endangered species/plants and its parts under CITES (Convention on International Trade in Endangered Species of Wild Fauna and Flora)</li>
                                    <li>Explosives (arms, ammunition, fireworks, flares, gunpowder, airbag inflators)</li>
                                    <li>Fireworks and Other items of an incendiary or Flammable nature</li>
                                    <li>Flammable items (fire crackers, oil cans, adhesives, paint cans)</li>
                                    <li>Gambling devices, lottery tickets</li>
                                    <li>Hazardous Waste, including but not limited to Used Hypodermic Needles and/or Syringes or Medical waste</li>
                                    <li>High capacity batteries such as car batteries, generator batteries</li>
                                    <li>Human and Animal Embryos</li>
                                    <li>Human Corpses, Organs or Body Parts</li>
                                    <li>Hunting (animal) trophies</li>
                                    <li>Indian Postal Articles</li>
                                    <li>Industrial Diamonds</li>
                                    <li>Ivory and ivory products</li>
                                    <li>Ketamine and other Drugs of Illegal Narcotics (contraband) and Psychotropic substances</li>
                                    <li>Knives</li>
                                    <li>Letter of Credit/Bill of Lading</li>
                                    <li>Liquid Chemicals and other liquid products</li>
                                    <li>Lottery tickets and gambling devices where prohibited by law</li>
                                    <li>Magnetized material</li>
                                    <li>Marijuana, including Marijuana intended for medical use</li>
                                    <li>Narcotic drugs and Psychotropic substances</li>
                                    <li>Negotiable Items or documents</li>
                                </ul>
                            </div> 
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="pr-an-why-choose-list ul-li-block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <ul>
                                    <li>Negotiable Currency - Bullion, Money, Fake/Dummy/Collectable Cash, Payment Cards, Traveller Cheques, Passports, IDs, Stamps</li>
                                    <li>Pornographic material</li>
                                    <li>Precious, semi-precious metals or stones in any form including bricks</li>
                                    <li>Radioactive material - Fissile material (Uranium 235, etc.), radioactive waste material, Thorium or Uranium ores etc</li>
                                    <li>Sandalwood and its oils</li>
                                    <li>Sea shells, including polished sea shells and handicrafts</li>
                                    <li>Special Chemicals, Organisms, Materials, Equipment’s & Technologies (SCOMET) items</li>
                                    <li>Sword</li>
                                    <li>Toner (Photocopier)</li>
                                    <li>Wood and wood pulp/products</li>
                                    <li>Restricted Commodities permitted only with prior approval from the Company</li>
                                    <li>Alcoholic beverages</li>
                                    <li>Auto parts with fluids in them</li>
                                    <li>Cannabis for medicinal purposes from bona fide pharmaceutical manufacturers with appropriate licences and where lawful to ship, which must be in tablet or liquid form, may be carried with an approved business case</li>
                                    <li>Carnets</li>
                                    <li>Food stuffs, Perishable Food articles and Beverages requiring refrigeration or other Environmental control</li>
                                    <li>Loose Pearls</li>
                                    <li>Maps and literature where Indian external boundaries have been shown incorrectly</li>
                                    <li>Other Regulated Material (ORM-D) Service</li>
                                    <li>Passports (only with Govt. approval)</li>
                                    <li>Shipments that requires special License or Permit for transportation</li>
                                    <li>Time-sensitive or critical written materials or documents including bids and contract proposals</li>
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
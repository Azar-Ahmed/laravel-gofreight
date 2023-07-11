@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Airline')
    @section('container')

        <!-- Start of Breadcrumb section
	    ============================================= -->
        <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Airline Terminology</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li>Resources</li>
                            <li>Airline Terminology</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumb section
	    ============================================= -->
        
        <!-- Start of handling codes section
    	============================================= -->
        <section id="ft-project-details" class="ft-project-details-section page-padding">
            <div class="container">
                <div class="ft-project-overview-text-wrapper headline pera-content">
                    <div class="ft-section-title-2 headline pera-content">
                        <h2>Special Handling Codes</h2>
                    </div>
                    <div class="ft-project-overview-comment-list">
                        <div class="row">
                            <div class="col-6">
                                <div class="ft-project-overview-list-item ul-li-block">
                                    <ul>
                                        <li style="margin-bottom: 5px;">AOG - Aircraft on Ground</li>
                                        <li style="margin-bottom: 5px;">ATT - Goods attached to Air Waybill</li>
                                        <li style="margin-bottom: 5px;">AVI - Live animal BIG Outsized/Oversized-big packages</li>
                                        <li style="margin-bottom: 5px;">CAO - Cargo aircraft only</li>
                                        <li style="margin-bottom: 5px;">CAT - Cargo Attendant accompanying shipment</li>
                                        <li style="margin-bottom: 5px;">COM - Company Mail</li>
                                        <li style="margin-bottom: 5px;">BIG - A single piece of cargo, to be loaded on an aircraft pallet, where length and / or width exceeds the standard pallet size.</li>
                                        <li style="margin-bottom: 5px;">DGD - Shipper's declaration for dangerous goods</li>
                                        <li style="margin-bottom: 5px;">DIP - Diplomatic mail</li>
                                        <li style="margin-bottom: 5px;">EAT - Foodstuffs</li>
                                        <li style="margin-bottom: 5px;">FIL - Undeveloped/Unexposed film</li>
                                        <li style="margin-bottom: 5px;">FRO - Frozen Goods</li>
                                        <li style="margin-bottom: 5px;">GOH - Garments on Hanger</li>
                                        <li style="margin-bottom: 5px;">HEA - Heavy Cargo, 150 kg and over per piece</li>
                                        <li style="margin-bottom: 5px;">HEG - Hatching eggs</li>
                                        <li style="margin-bottom: 5px;">HUM - Human remains in coffins/cremated (Ashes) Human Remains</li>
                                        <li style="margin-bottom: 5px;">ICE - Dry ice</li>
                                        <li style="margin-bottom: 5px;">LHO - Living human organs/blood</li>
                                        <li style="margin-bottom: 5px;">NDA - No Dimensions available</li>
                                        <li style="margin-bottom: 5px;">NWP - Newspapers, magazines</li>
                                        <li style="margin-bottom: 5px;">OHG - Overhang item</li>
                                        <li style="margin-bottom: 5px;">PEA - Hunting trophies, skin, hide and all articles made from or containing parts of species listed in the CITES</li>
                                        <li style="margin-bottom: 5px;">PEF - Flowers</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ft-project-overview-list-item ul-li-block">
                                    <ul>
                                        <li style="margin-bottom: 5px;">PEM - Meat</li>
                                        <li style="margin-bottom: 5px;">PEP - Fruits and Vegetables</li>
                                        <li style="margin-bottom: 5px;">PER - Perishable cargo</li>
                                        <li style="margin-bottom: 5px;">PES - Fish/Seafood</li>
                                        <li style="margin-bottom: 5px;">QRT - Quick Ramp Transfer</li>
                                        <li style="margin-bottom: 5px;">RCM - Corrosive</li>
                                        <li style="margin-bottom: 5px;">RDS - Diagnostic specimen</li>
                                        <li style="margin-bottom: 5px;">REQ - Excepted quantities of Dangerous Goods</li>
                                        <li style="margin-bottom: 5px;">RFG - Flammable Gas</li>
                                        <li style="margin-bottom: 5px;">RFL - Flammable Liquid</li>
                                        <li style="margin-bottom: 5px;">RFS - Flammable Solid</li>
                                        <li style="margin-bottom: 5px;">RIS - Infectious substance</li>
                                        <li style="margin-bottom: 5px;">RMD - Miscellaneous Dangerous Goods</li>
                                        <li style="margin-bottom: 5px;">RPB - Toxic substance</li>
                                        <li style="margin-bottom: 5px;">RPG - Toxic Gas</li>
                                        <li style="margin-bottom: 5px;">SAL - Surface Mail</li>
                                        <li style="margin-bottom: 5px;">SHL - Save Human Life</li>
                                        <li style="margin-bottom: 5px;">SPF - Laboratory Animals</li>
                                        <li style="margin-bottom: 5px;">VAL - Valuable cargo</li>
                                        <li style="margin-bottom: 5px;">VOL - Volume cargo</li>
                                        <li style="margin-bottom: 5px;">VUN - Vulnerable cargo, including Works of Art</li>
                                        <li style="margin-bottom: 5px;">WET - Shipments of Wet material not packed in watertight containers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of handling codes section
	    ============================================= -->

        <!-- Start of Abbrivation section
    	============================================= -->
        <section id="ft-project-details" class="ft-project-details-section">
            <div class="container">
                <div class="ft-project-overview-text-wrapper headline pera-content">
                    <div class="ft-section-title-2 headline pera-content">
                        <h2>Abbreviation / Definition</h2>
                    </div>
                    <div class="ft-project-overview-comment-list">
                        <div class="row">
                            <div class="col-12">
                                <ul class="service-list">
                                    <li style="margin-bottom: 5px;">Air Waybill (AWB) - Equivalent to the term air consignment note, means the document entitled 'Air Waybill/ Consignment Note' made out by or on behalf of the shipper which evidences the contract between the shipper and carrier (s) for carriage of goods over the routes of the carrier(s).</li>
                                    <li style="margin-bottom: 5px;">Cargo - Equivalent to the term "goods" means, anything carried or to be carried in an aircraft, other than mail and baggage (including personal effects accompanying passenger) or the property of the carrier. Unaccompanied baggage moving under an air waybill is cargo.</li>
                                    <li style="margin-bottom: 5px;">Carriage - Equivalent to the term transportation, means carriage of cargo by air, gratuitously or for reward.</li>
                                    <li style="margin-bottom: 5px;">Carriage Domestic - Carriage in which, according to the contract of carriage, the place of departure and the place of destination are situated within one country.</li>
                                    <li style="margin-bottom: 5px;">Carriage International - Carriage in which, according to the contract of carriage, the place of departure and place of destination are situated in more than one country.</li>
                                    <li style="margin-bottom: 5px;">Carrier - Includes the air carrier issuing the air waybill and all other air carriers that carry or undertake to carry the cargo under AWB or to perform any Other services related to such air carriage.</li>
                                    <li style="margin-bottom: 5px;">Charges Correction Advice(CCA) (International) - Means the document used for the notification of changes to transportation charges or other charges.</li>
                                    <li style="margin-bottom: 5px;">Charges, collect (To pay) CC - Which is equivalent to the term 'freight collect' or 'Charges forward', means the charges entered on the air waybill for collection from the consignee.</li>
                                    <li style="margin-bottom: 5px;">Charges, prepaid (PP) - Means the charges entered on the air waybill are paid by the consignor.</li>
                                    <li style="margin-bottom: 5px;">Consignee - The person/party whose name appears on the air waybill to whom the goods are to be delivered by the carrier.</li>
                                    <li style="margin-bottom: 5px;">Consignment (Shipment) - Means one or more pieces of goods accepted by the carrier from one shipper at one time and at one address, receipted for in one lot and moving on one air waybill to one consignee at one destination address.</li>
                                    <li style="margin-bottom: 5px;">Consignor (Shipper) - Mean the person whose name appears on the air waybill as the party contracting with the carrier (s) for carriage of goods.</li>
                                    <li style="margin-bottom: 5px;">Dangerous goods - Dangerous Goods are articles or substances which are capable of posing a risk to health, safety, property or the environment and which are shown in the list of IATA Dangerous Goods regulations or which are classified according to the IATA DGR.</li>
                                    <li style="margin-bottom: 5px;">Declared value for carriage - The value oF goods declared to the carrier by the consignor for the purpose of fixing the limit of the carrier's liability for loss or damage to cargo. It is also the basis for applicable valuation charges.</li>
                                    <li style="margin-bottom: 5px;">Live Animals - Means all domesticated/undomesticated animals including mammals, birds, reptiles, fish, shell-fish and insects.</li>
                                    <li style="margin-bottom: 5px;">Perishable Cargo - Any cargo which may loose its value due to physical or economic rapid deterioration in condition, such as food stuffs, vegetables, fruits, vaccines, and newspapers.</li>
                                    <li style="margin-bottom: 5px;">Re-delivery - Return of shipment to the consignor who originally handed it to the carrier for shipping it to consignee. Shipper's letter of The document containing written instructions by a shipper Instruction or shipper's agent for preparing Air Waybill for forwarding (Instruction for despatch Of goods).</li>
                                    <li style="margin-bottom: 5px;">Tracer - Message sent by station to locate a mishandled shipment.</li>
                                    <li style="margin-bottom: 5px;">Unaccompanied Baggage - Personal Baggage when carried as cargo.</li>
                                    <li style="margin-bottom: 5px;">Valuable - Valuable cargo means a consignment which contains one or more of the following articles ó</li>
                                    <li style="margin-bottom: 5px;">a. Any article having a declared value of carriage of USD 1000</li>
                                    <li style="margin-bottom: 5px;">b. Gold bullion(including refined and unrefined gold in ingot form),dore bullion, gold specie and gold in the form of grain, sheet, foil, sponge, were, rod, tube, circles, mouldings and castings, platinum, platinum metals (Palladium, iridium, ruthenium, osmium and rhodium) and platinum alloys in the form of grain, sponge, bar, ingot, sheet, rod, wire, gauze, tube and strip (but excluding those radioactive isotopes of the above metals and alloys which are subject to restricted articles labelling requirements);</li>
                                    <li style="margin-bottom: 5px;">c. Legal bank notes, traveller's cheques, securities, shares, share coupons and stamps (excluding mint stamps from United Kingdom) and ready for use bank cards and/or credit cards;</li>
                                    <li style="margin-bottom: 5px;">d. Diamonds(including diamonds for industrial use), rubies, emeralds, sapphires, opals and real pearls (including cultured pearls);</li>
                                    <li style="margin-bottom: 5px;">e. jewellery consisting of diamonds, emeralds, sapphires, opals and real pears (including cultured pearls);</li>
                                    <li style="margin-bottom: 5px;">f. Jewellery and watches made of silver and/or gold and/or platinum;</li>
                                    <li style="margin-bottom: 5px;">g. Articles made of gold and/or platinum, Other than gold and/or platinum plated.</li>
                                    <li style="margin-bottom: 5px;">Valuation Charge - A charge for carriage of goods based on the value, declared for the carriage of such goods.</li>
                                    <li style="margin-bottom: 5px;">Volumetric Charge - A charge for carriage of goods based on their volume.</li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of abbrivation section
	    ============================================= -->

        <!-- Start of terminology section
    	============================================= -->
        <section id="ft-project-details" class="ft-project-details-section page-padding">
            <div class="container">
                <div class="ft-project-overview-text-wrapper headline pera-content">
                    <div class="ft-section-title-2 headline pera-content">
                        <h2>Defination & Terminology</h2>
                    </div>
                    <div class="ft-project-overview-comment-list">
                        <div class="row">
                            <div class="col-12">
                                <div class="ft-project-overview-list-item ul-li-block">
                                    <ul>
                                        <li style="margin-bottom: 5px;">AWB - Air waybill</li>
                                        <li style="margin-bottom: 5px;">CM - Centimeter (s)</li>
                                        <li style="margin-bottom: 5px;">GCR - General Cargo Rate.</li>
                                        <li style="margin-bottom: 5px;">IATA - International Air Transport Association.</li>
                                        <li style="margin-bottom: 5px;">ICAO - International Civil Aviation Organisation in -inch (es).</li>
                                        <li style="margin-bottom: 5px;">Kg (s) - Kilogram (s).</li>
                                        <li style="margin-bottom: 5px;">lb (s) - pound (s).</li>
                                        <li style="margin-bottom: 5px;">NCV - No Commercial Value or No Customs Value.</li>
                                        <li style="margin-bottom: 5px;">NVD - No Value Declared.</li>
                                        <li style="margin-bottom: 5px;">PP - charges Prepaid.</li>
                                        <li style="margin-bottom: 5px;">Q - Rate class code indicating the Quantity 45 kgs and over rate as used in the rate class box of the AWB.</li>
                                        <li style="margin-bottom: 5px;">Rate class code indicating the reduced class rate has been applied as used in the rate class box of AWB.</li>
                                        <li style="margin-bottom: 5px;">S - Rate class code indicating that a surcharged class rate has been applied as used in the rate class box of AWB.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of terminology section
	    ============================================= -->
    @endsection
    @section('custom_script')
    @endsection
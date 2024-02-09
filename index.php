<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include 'head.php';
    ?>
    <title>Premium 2/3 BHK Apartments for Sale in Chengicherla, Uppal - Krishe Pearl</title>
    <meta name="description"
        content="Discover 'Krishe Pearl' by Sri Krishnana Developers in Chengicherla, Uppal, featuring 690 units across 3 Towers with 2 and 3 BHK premium apartments.">
    <!-- slick sliders starts here  -->

    <style>
    .fancybox__footer {
        display: none !important;
    }

    .slider-main .slick-prev {
        position: absolute;
        left: 2%;
        font-size: 3rem;
        z-index: 400;
        width: auto !important;
        height: auto !important;
    }

    .slider-main .slick-next {
        position: absolute;
        right: 2%;
        font-size: 3rem;
        z-index: 400;
    }

    .slider-main .bi-chevron-left::before,
    .slider-main .bi-chevron-right::before {
        color: red !important;
        font-size: 2.7rem;
    }

    .floorplans-main .slick-prev {
        position: absolute;
        left: 1%;
        font-size: 1rem;
        z-index: 400;
    }

    .floorplans-main .slick-next {
        position: absolute;
        right: 5%;
        font-size: 1rem;
        z-index: 400;
    }

    .floorplans-main .bi-chevron-left::before,
    .floorplans-main .bi-chevron-right::before {
        color: black !important;
        font-size: 2rem;
        font-weight: bolder;
    }

    .floorplans-main .slick-dots li button:before {
        font-size: 8px;
    }

    .floorplans-main .slick-dots {
        bottom: -30px;
    }

    .unitplans-main .slick-next {
        right: 2%;
    }

    .bank-partners-right .bi-chevron-left::before,
    .bank-partners-right .bi-chevron-right::before {
        color: black !important;
        font-size: 1.8rem;
    }

    .construction-img-wrapper .bi-chevron-left::before,
    .construction-img-wrapper .bi-chevron-right::before {
        color: black !important;
        font-size: 2rem;
        font-weight: bolder;
    }

    .slick-lightbox-close:before {
        font-size: 45px;
    }

    .slick-lightbox-close {
        right: 30px;
    }

    .construction-img {
        margin: 0.5rem;
    }

    .construction-img-wrapper .slick-next,
    .construction-img-wrapper .slick-prev {
        top: 45% !important;
    }

    .construction-img-wrapper .slick-dots {
        bottom: -35px;
    }

    .button-container {
        text-align: center;
    }

    .button-floor {
        display: inline-block;
        margin: 0 10px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background-color: #3498db;
        border: 2px solid #3498db;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .button-floor:hover {
        background-color: #2980b9;
    }

    .floorplans-tower {
        display: none;
    }


    .button-floor {
        padding: 10px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .dropdown {
        /* position: relative; */
        display: inline-block;
    }

    /* Style for the dropdown content */
    .dropdown-content {
        /* display: none; */
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Style for the dropdown options */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        display: block;
        text-decoration: none;
    }

    /* Style for the dropdown options on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }
    </style>

    </style>
</head>

<body>

    <!-- header starts here  -->
    <?php
    include 'header.php';
    ?>

    <!-- header ends here  -->



    <!-- header ends here  -->

    <!-- sliders starts here  -->
    <section class="slider-main">
        <div class="sliders-container slider-main">
            <!--1-->
            <!-- 1 -->
            <!--<div class="slider">-->
            <!--    <img src="./media/sliders/pearl-desk.jpg" alt="" class="desk-slider">-->
            <!--    <img src="./media/sliders/pearl-mobile.jpg" alt="" class="mobile-slider">-->
            <!--</div>-->
            <!-- 1 -->
            <div class="slider">
                <img src="./media/sliders/desktop-slider.jpg" alt="" class="desk-slider">
                <img src="./media/sliders/mobile-slider.jpg" alt="" class="mobile-slider">
            </div>
            <!-- 2 -->
            <div class="slider">
                <img src="./media/sliders/desk-slider2.jpg" alt="" class="desk-slider">
                <img src="./media/sliders//mobil-slider2.jpg" alt="" class="mobile-slider">
            </div>
            <!-- 3 -->
            <!--<div class="slider">-->
            <!--    <img src="./media/sliders/desk-slider1.png" alt="" class="desk-slider">-->
            <!--    <img src="./media/sliders/mobil-slider-3.png" alt="" class="mobile-slider">-->
            <!--</div>-->
            <!-- 4 -->
            <!--5-->

        </div>
    </section>
    <!-- sliders ends here  -->

    <!-- fixed form starts here  -->
    <section class="fixed-form-main">
        <div class="fixed-form-container p-container">
            <form action="contact-mail.php" class="fixed-form" method="POST" autocomplete="off">
                <input type="text" placeholder="ENTER NAME" name="name" required>
                <input type="tel" onkeypress="isInputNumber(event); if(this.value.length==10) return false;"
                    placeholder="ENTER MOBILE NUMBER" name="mobilenumber" minlength="10" maxlength="10" required>
                <select name="interested" id="" required>
                    <option value="Interested In" selected>Interested In</option>
                    <option value="2BHK Flat">2BHK Flat</option>
                    <option value="3BHK Flat">3BHK Flat</option>
                </select>
                <input type="email" placeholder="ENTER EMAIL ID" name="email" required>
                <input type="text" placeholder="ENTER MESSAGE" name="message" required>
                <input type="submit" value="SUBMIT" class="contact-btn" name="submit-from">
            </form>
        </div>
    </section>
    <!-- fixed form ends here  -->

    <!-- project overview starts here  -->
    <section class="project-overview overflow" id="overview">
        <div class="project-overview-container p-container p-flex">

            <!-- left  -->
            <div class="project-overview-left">
                <!-- 1 -->
                <div class="project-overview-high" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="800">
                    <span><strong>6.1</strong>Acres</span>
                    <p>6.1 + Acres of serene environment</p>
                </div>
                <!-- 2 -->
                <div class="project-overview-high" data-aos="zoom-in" data-aos-delay="150" data-aos-duration="800">
                    <span><strong>G+9</strong>Floors</span>
                    <p>Ensuring a home is built to perfection.</p>
                </div>
                <!-- 3 -->
                <div class="project-overview-high" data-aos="zoom-in" data-aos-delay="250" data-aos-duration="800">
                    <span><strong>690</strong>Units</span>
                    <p>2BHK : 1291 -1349 Sq. ft <br>3BHK : 1677-1770 Sq.ft</p>
                </div>
                <!-- 4 -->
                <div class="project-overview-high" data-aos="zoom-in" data-aos-delay="350" data-aos-duration="800">
                    <span><strong>35+</strong>Amenities</span>
                    <p>Remarkable Amenities integrated part of everyday life.</p>
                </div>
                <!-- 5 -->
            </div>
            <!-- right  -->
            <div class="project-overview-right">
                <h1 data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">PROJECT OVERVIEW</h1>
                <h4 data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">Premium Lifestyle Gated Community In
                    Chengicherla – Uppal</h4>
                <div class="project-overview-video">
                    <iframe width="" height="" src="https://www.youtube.com/embed/f7MwhxET5Cs?si=E06fgOvrmSW9zIdJ&rel=0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="overview-more">
        <div class="overview-container p-container">
            <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">Sri Krishna Developpers “Krishe Pearl” is
                a combination of next-gen design, stylish architecture & world-class amenities crafted to provide your
                loved ones with a life beyond the ordinary. Located in the rapidly developing Chengicherla – Uppal
                corridor, Krishe Pearl is a step above the rest, setting new standards for living. These 2,3 BHK Flats
                in Chengicherla – Uppal has three towers, G+9 floors spanning 690 units.</p>
            <ul class="p-flex">
                <li data-aos="fade-up" data-aos-delay="250" data-aos-duration="800">TS RERA NO. P02200006236</li>
                <li data-aos="fade-up" data-aos-delay="350" data-aos-duration="800"><a href="./#contact-form">DOWNLOAD
                        BROCHURE</a></li>
            </ul>
        </div>
    </section>
    <!-- project overview ends here  -->

    <!-- amenities starts here  -->
    <section class="amenities-main overflow" id="amenities">
        <div class="amenities-container p-container">
            <!-- amenities top  -->
            <section class="amenities-top p-flex">
                <!-- left  -->
                <div class="amenities-top-left">
                    <h3 data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="800">AMENITIES</h3>
                    <p data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="800">We are proud to present a
                        legacy of exceptional amenities that redefine fine living. Nestled in a serene environment and
                        crafted with meticulous attention to detail. Allow us to take you on a journey through the
                        remarkable amenities that will become an integral part of your everyday life.</p>
                </div>
                <!-- right  -->
                <div class="amenities-top-right">
                    <div class="amenities-top-rightwrapper p-flex">
                        <!-- 1 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="50"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/swimming-pool.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Swimming Pool</p>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="100"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/yoga.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Yoga</p>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="150"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/gym.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Gym</p>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="200"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/super-market.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Super Market</p>
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="250"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/skating.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Skating Rink</p>
                            </div>
                        </div>
                        <!-- 6 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="300"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/pharmacy.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Pharmacy</p>
                            </div>
                        </div>
                        <!-- 7 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="350"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/spa.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Spa</p>
                            </div>
                        </div>
                        <!-- 8 -->
                        <div class="amenities-box p-flex" data-aos="zoom-out" data-aos-delay="400"
                            data-aos-duration="800">
                            <!-- image -->
                            <div class="amenities-img">
                                <img src="./media/amenities/banqut-hall.png" alt="">
                            </div>
                            <!-- content -->
                            <div class="amenities-content">
                                <p>Banquet Hall</p>
                            </div>
                        </div>
                        <!-- 9 -->
                        <!-- 10 -->
                        <!-- 11 -->
                        <!-- 12 -->
                    </div>
                </div>
            </section>
            <!-- amenities bottom  -->
            <section class="amenities-bottom overflow p-flex">
                <!-- 1 -->
                <div class="amenities-bottombox" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <ul>
                        <li>Entry Plaza with Security Cabin</li>
                        <li>Pedestrian Entry To Clubhouse</li>
                        <li>Pathway! Jogging Track</li>
                        <li>Bicycle Lane</li>
                        <li>Barbeque Area</li>
                        <li>Tower Entry Plaza</li>
                    </ul>
                </div>
                <!-- 2 -->
                <div class="amenities-bottombox" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <ul>
                        <li>Swimming Pool with kid’s pool</li>
                        <li>Coffee Shop</li>
                        <li>Amphitheatre</li>
                        <li>Temple</li>
                        <li>Butterfly Garden & Therapeutic Garden</li>
                        <li>Cricket Practice Net</li>
                    </ul>
                </div>
                <!-- 3 -->
                <div class="amenities-bottombox" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <ul>
                        <li>Children's Play Area</li>
                        <li>Trampoline Park</li>
                        <li>Floor Games</li>
                        <li>Pet Park</li>
                        <li>Yoga/meditation Deck</li>

                    </ul>
                </div>
                <!-- 4 -->
            </section>
        </div>
    </section>
    <!-- amenities ends here  -->
    <!-- specifications starts here  -->
    <section class="specifications-main overflow" id="specifications">
        <div class="specification-heading">
            <div class="specification-heading-contianer p-container">
                <h4 data-aos="slide-up" data-aos-delay="50" data-aos-duration="800">SPECIFICATIONS</h4>
                <p data-aos="slide-up" data-aos-delay="100" data-aos-duration="800">Uncompromising craftsmanship and
                    superior construction standards define our real estate project, ensuring a home is built to
                    perfection.</p>
            </div>
        </div>
        <div class="specification-container p-container p-flex">
            <!-- left  -->
            <div class="specification-left">
                <!-- 1 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Structure
                    </h5>
                    <div class="specification-content">
                        <p>R.C.C. framed structure</p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Super Structure
                    </h5>
                    <div class="specification-content">
                        <p>RCC Shear Walls / Block Work</p>
                    </div>
                </div>
                <!-- 3 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Entrance
                    </h5>
                    <div class="specification-content">
                        <p>Lobby Well-planned lobbies and corridors</p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Painting
                    </h5>
                    <div class="specification-content">
                        <p><strong>External: </strong>Texture paint</p>
                        <br>
                        <p><strong>Internal : </strong>Smooth putty finish with two coats of premium royal emulsion
                            paint</p>
                    </div>
                </div>
                <!-- 5 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Doors/Windows & Ventilators
                    </h5>
                    <div class="specification-content">
                        <p><strong>Main Door :</strong> Engineered wood frame with flush shutter with Both side veneer
                            polish finish fitted with Dorset /Godrej/Yale or equivalent make hardware</p>
                        <br>
                        <p><strong>Internal Doors :</strong> Engineered wood frame with flush shutter with Both sides
                            with laminated finish fitted with Dorset /Godrej/Yale or equivalent make hardware</p>
                        <br>
                        <p><strong>Toilet Doors :</strong> Engineered wood frame with ISI mark Water proof Flush shutter
                            with Both sides with laminated finish fitted</p>
                        <br>
                        <p><strong>French Doors : </strong>UPVC frames with sliding UPVC panels.</p>
                        <br>
                        <p><strong>Windows : </strong>UPVC frames with sliding panels with provision for mosquito mesh.
                        </p>
                        <br>
                        <p><strong>Flooring : </strong>600x600mm Vitrified Tiles of reputed make for Living Room,
                            Bedrooms & Kitchen</p>
                        <br>
                        <p><strong>Balcony/Toilets/Utility: </strong>Anti-skid vitrified tiles of reputed make.</p>
                        <br>
                        <p><strong>Corridors: </strong>Vitrified tiles.</p>
                        <br>
                        <p><strong>Staircase: </strong>Granite/Kota Flooring/Vitrified Tiles.</p>
                        <br>
                    </div>
                </div>
                <!-- 6 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Tile Cladding
                    </h5>
                    <div class="specification-content">
                        <p><strong>Dadoing in Kitchen: </strong> Vitrified tile dado up to 0.6m height above kitchen
                            platform of reputed make will be handed over at the time of handing over without
                            installation.</p>
                        <br>
                        <p><strong>Bathrooms: </strong> Vitrified tiles dado upto 2.1m height of reputed make.</p>
                        <br>
                        <p><strong>Utility Area: </strong> Vitrified tile dado upto 1.2m height of reputed make.</p>
                        <!--<br>-->
                        <!--<p><strong>Kitchen: </strong>Municipal water provided by HMDA along with treated Manjeera water Provision for fixing of water purifier, exhaust fan and chimney.</p>-->
                        <!--<br>-->
                        <!--<p><strong>Utility: </strong> Provision for washing machine & wet area for vessel washing, etc</p>-->
                    </div>
                </div>
                <!-- 7 -->
            </div>
            <!-- right  -->
            <div class="specification-right">
                <!-- 1 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>CP & Sanitary Fixtures
                    </h5>
                    <div class="specification-content">
                        <p>All Bathrooms are fitted with wall mounted EWC with flush valve of reputed make
                            All C.P. fittings are of reputed make
                            Single lever fixtures with wall mixer cum shower of reputed makes in all the bathrooms
                            Provision for Geysers & Exhaust fans in all Bathrooms
                        </p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Electrical
                    </h5>
                    <div class="specification-content">
                        <p>Concealed Copper wiring of Havells / Polycab / Equivalent make
                            Power outlets for Air Conditioners in MBR, GBR and Living / Drawing Room
                            Modular switches of Anchor/Legrand or equivalent make
                            Three phase power supply for each unit and individual Prepaid Energy Meters
                        </p>
                    </div>
                </div>
                <!-- 3 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Telecommunications, Cable TV & Internet
                    </h5>
                    <div class="specification-content">
                        <p><strong>Telephone Points :</strong> Telephone points in master bed room, drawing / living
                            rooms.</p>
                        <br>
                        <p><strong>Intercom Facility :</strong> Intercom facility to all the units connecting security.
                        </p>
                        <br>
                        <p><strong>Cable TV : </strong>Provision for cable connection in master bed room & living room
                        </p>
                        <br>
                        <p><strong>Internet :</strong> Provision for internet connection in each Flat.</p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Elevators / Lifts
                    </h5>
                    <div class="specification-content">
                        <p>
                            <strong>Passenger Lifts :</strong> High speed automatic passenger lifts with rescue devise
                            with V3F for energy efficiency of reputed make for each tower with CCTV’s inside the lifts.
                        </p>
                        <br>
                        <p><strong>Fire / Service lifts :</strong> High speed automatic passenger cum service lift per
                            block with rescue device with V3F for energy efficiency of reputed make for each tower with
                            CCTV’s inside the lifts</p>

                    </div>
                </div>
                <!-- 5 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Water
                    </h5>
                    <div class="specification-content">
                        <p>
                            <strong>STP (Sewage Treatment Plant) –</strong> Recycled water shall be used for flushing
                            and landscaping works.
                        </p>
                        <br>
                        <p><strong>WTP (Water Treatment Plant) –</strong> Water treatment with softener</p>
                        <br>
                        <p><strong>Water Supply –</strong> Supply through Hydro Pneumatic System for domestic & flushing
                        </p>

                    </div>
                </div>
                <!-- 6 -->
                <div class="specificationbox">
                    <h5 class="specification-btn">
                        <div class="specification-iconbox"><span class="line-1"></span><span class="line-2"></span>
                        </div>Specified Requirements
                    </h5>
                    <div class="specification-content">
                        <p>
                            <strong>Car Charging Point – </strong> EV Charging will be provided with additional cost as
                            per government norms.
                        </p>
                        <br>
                        <p><strong>Car Washing - </strong> Facility Provision for Car Washing.</p>
                        <br>
                        <p><strong>Parking Management - </strong> Entire parking is well designed to suit the number of
                            car parks provided parking signage and equipment at required places to ease the traffic
                            flow.There is no parking level on the ground level.</p>
                        <br>
                        <p><strong>Facilities for Differently abled – </strong> Access ramps at all block entrances
                            shall be provided for differently abled.</p>
                        <br>
                        <p><strong>Centralized Billing – </strong> Billing shall be done for consumption of electricity,
                            water with prepaid meters system.</p>
                        <br>
                        <p><strong>Fire & Safety - </strong> Sprinklers in Basements & wet risers in all floors Shaft &
                            basements (As per Fire Authority regulations)</p>
                        <br>
                        <p><strong>Security / BMS – </strong> Sophisticated round-the-clock security / Surveillance
                            System. Surveillance cameras at the main security and entrance of each block to monitor
                            Panic button and intercom is provided in the lifts connected to the security room.</p>
                        <br>
                        <p><strong>Generator - </strong>100% DG back up for common areas and 3KW for each flat</p>
                        <br>
                        <p><strong>Garbage Disposal – </strong> Garbage Disposal System through door to door collection.
                        </p>
                    </div>
                </div>
                <!-- 7 -->
            </div>
        </div>
    </section>
    <!-- specifications ends here  -->
    <!-- masterplan starts here  -->
    <section class="pearl-masterplan overflow" id="masterplan">
        <div class="pear-masterplan-container p-container p-flex">
            <!-- left  -->
            <div class="pearl-masterplan-left" data-aos="slide-right" data-aos-delay="100" data-aos-duration="800">
                <a data-fancybox="master" href="./media/masterplan/master-plan-new.jpg">
                    <img src="./media/masterplan/master-plan-new.jpg" alt="">
                </a>
            </div>
            <!-- right  -->
            <div class="pearl-masterplan-right" data-aos="slide-left" data-aos-delay="200" data-aos-duration="800">
                <div class="pearl-masterplan-rightcontent">
                    <h4>MASTER PLAN</h4>
                    <p>A finesse that redefines fine living curated in a land parcel of 6.1 acres with 3 imposing
                        towers, 9 floors, and more than 70% open space – what can be grander than residing in a green
                        paradise with amenities par excellence? </p>
                </div>
            </div>
        </div>
    </section>

    <!-- masterplan ends here  -->

    <!-- floorplans starts here  -->
    <section class="floorplans-main overflow" id="floorplan">
        <div class="floorplans-main-container p-container">
            <div class="dropdown">
                <button class="button-floor dropdown-btn" onclick="toggleDropdown()">Floor Plan</button>
                <button class="button-floor dropdown-btn" onclick="toggleUtilityDropdown()">Utility Plans</button>
                <button id="siteProgressButton" class="button-floor dropdown-btn"
                    onclick="showConstructionImages()">Site Progress</button>


                <div id="dropdownContainer" style="margin-top: 2rem;">
                    <select name="interested" id="interestedSelect" required onchange="showSelectedOption(this)"
                        class="dropdown-content">
                        <option value="towerA" selected>Tower-A</option>
                        <option value="towerB">Tower-B</option>
                        <option value="towerC">Tower-C</option>
                    </select>
                </div>
                <div id="utilityDropdownContainer" style="margin-top: 2rem; display: none;">
                    <select name="utilityPlans" id="utilitySelect" required onchange="showUtilityPlanOption(this)"
                        class="dropdown-content">
                        <option value="utility2D" selected>2D Plans</option>
                        <option value="utility3D">3D Plans</option>
                    </select>
                </div>
            </div>
        </div>

        <div id="towerA" class="floorplans-towerA">
            <h5 data-aos="slide-up" data-aos-delay="150" data-aos-duration="800">TOWER - A</h5>
            <!-- <div class="floorplans-tower-wrapper floorplans"> -->
            <div class="construction-img-wrapper">
                <!-- 1 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-a-new/tower-a-4.jpg">
                        <img src="./media/floorplans/tower-a-new/tower-a-4.jpg" alt="">
                    </a>
                </div>
                <!-- 2 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-a-new/tower-a-2.jpg">
                        <img src="./media/floorplans/tower-a-new/tower-a-2.jpg" alt="">
                    </a>
                </div>
                <!-- 3 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-a-new/tower-a-3.jpg">
                        <img src="./media/floorplans/tower-a-new/tower-a-3.jpg" alt="">
                    </a>
                </div>
                <!-- 4 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-a-new/tower-a-1.jpg">
                        <img src="./media/floorplans/tower-a-new/tower-a-1.jpg" alt="">
                    </a>
                </div>
                <!-- 5 -->
                <!-- 6 -->
            </div>
        </div>
        <!-- tower b -->
        <div id="towerB" class="floorplans-towerB">
            <h5 data-aos="slide-up" data-aos-delay="250" data-aos-duration="800">TOWER - B</h5>
            <div class="floorplans-tower-wrapper floorplans" data-aos="zoom-in" data-aos-delay="200"
                data-aos-duration="800">
                <!-- 1 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-b-new/tower-b-1.jpg">
                        <img src="./media/floorplans/tower-b-new/tower-b-1.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- tower c -->
        <div id="towerC" class="floorplans-towerC">
            <h5>TOWER - C</h5>
            <!-- <div class="floorplans-tower-wrapper floorplans"> -->
            <div class="construction-img-wrapper">
                <!-- 1 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-c-new/tower-c-1.jpg">
                        <img src="./media/floorplans/tower-c-new/tower-c-1.jpg" alt="">
                    </a>
                </div>
                <!-- 2 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-c-new/tower-c-2.jpg">
                        <img src="./media/floorplans/tower-c-new/tower-c-2.jpg" alt="">
                    </a>
                </div>
                <!-- 3 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-c-new/tower-c-3.jpg">
                        <img src="./media/floorplans/tower-c-new/tower-c-3.jpg" alt="">
                    </a>
                </div>
                <!-- 4 -->
                <div class="floorplans-slider-img">
                    <a data-fancybox="gallery" href="./media/floorplans/tower-c-new/tower-c-4.jpg">
                        <img src="./media/floorplans/tower-c-new/tower-c-4.jpg" alt="">
                    </a>
                </div>
                <!-- 5 -->
                <!-- 6 -->
            </div>
        </div>
    </section>

    <div class="floorplans-main-container p-container">
        <!-- <h4 data-aos="slide-up" data-aos-delay="50" data-aos-duration="800">UNIT PLANS</h4> -->
        <div class="floorplans-main-wrapper p-flex">
            <!-- tower a  -->
            <div class="unitplan" data-aos="slide-up" data-aos-delay="150" data-aos-duration="800">
                <div class="floorplans-towerA-wrapper unit-plans-wrappercomplete">
                    <!--2D PLANS -->

                    <div class="two-d-unitplans" style="display: none;">
                        <h5>2D PLANS</h5>
                        <!-- <div class="2d-unitplans-wrapper unitplans"> -->
                        <div class="construction-img-wrapper">
                            <!-- 1 -->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-2d" href="./media/unitplans/u-1.jpg">
                                    <img src="./media/unitplans/u-1.jpg" alt="">
                                </a>
                            </div>
                            <!-- 2 -->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-2d" href="./media/unitplans/u-2.jpg">
                                    <img src="./media/unitplans/u-2.jpg" alt="">
                                </a>
                            </div>
                            <!-- 3 -->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-2d" href="./media/unitplans/u-3.jpg">
                                    <img src="./media/unitplans/u-3.jpg" alt="">
                                </a>
                            </div>
                            <!-- 4 -->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-2d" href="./media/unitplans/u-4.jpg">
                                    <img src="./media/unitplans/u-4.jpg" alt="">
                                </a>
                            </div>
                            <!-- 5 -->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-2d" href="./media/unitplans/u-5.jpg">
                                    <img src="./media/unitplans/u-5.jpg" alt="">
                                </a>
                            </div>
                            <!-- 6 -->
                            <!-- 7 -->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-2d" href="./media/unitplans/u-7.jpg">
                                    <img src="./media/unitplans/u-7.jpg" alt="">
                                </a>
                            </div>
                            <!-- 8 -->
                            <!--9-->
                            <!--10-->
                        </div>
                    </div>

                    <!--3D PLANS-->
                    <div class="three-d-unitplans" style="display: none;">
                        <h5>3D PLANS</h5>
                        <!-- <div class="3d-unitplans-wrapper unitplans"> -->
                        <div class="construction-img-wrapper">
                            <!--1-->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-3d" href="./media/unitplans/3d/3d-2-1.jpg">
                                    <img src="./media/unitplans/3d/3d-2-1.jpg" alt="">
                                </a>
                            </div>
                            <!--2-->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-3d" href="./media/unitplans/3d/3d-2-2.jpg">
                                    <img src="./media/unitplans/3d/3d-2-2.jpg" alt="">
                                </a>
                            </div>
                            <!--3-->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-3d" href="./media/unitplans/3d/3d-2-3.jpg">
                                    <img src="./media/unitplans/3d/3d-2-3.jpg" alt="">
                                </a>
                            </div>
                            <!--4-->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-3d" href="./media/unitplans/3d/3d-3-1.jpg">
                                    <img src="./media/unitplans/3d/3d-3-1.jpg" alt="">
                                </a>
                            </div>
                            <!--5-->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-3d" href="./media/unitplans/3d/3d-3-2.jpg">
                                    <img src="./media/unitplans/3d/3d-3-2.jpg" alt="">
                                </a>
                            </div>
                            <!--6-->
                            <div class="floorplans-slider-img">
                                <a data-fancybox="plans-3d" href="./media/unitplans/3d/3d-3-3.jpg">
                                    <img src="./media/unitplans/3d/3d-3-3.jpg" alt="">
                                </a>
                            </div>
                            <!--7-->
                            <!--8-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- floorplans ends here  -->

    <!-- Constration starts here  -->

    <div class="construction-img-container p-container" style="display: none;">
        <h4 data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">Construction Progress - December 2023</h4>
        <span data-aos="fade-up" data-aos-delay="250" data-aos-duration="800">Tower A PCC Work In Progress. All Towers
            Escalation Completed</span>
        <div class="construction-img-wrapper" data-aos="fade-up" data-aos-delay="550" data-aos-duration="800">
            <div class="construction-img">
                <a data-fancybox="construction" href="./media/construction/c-4.jpg">
                    <img src="./media/construction/c-4.jpg">
                </a>
            </div>
            <div class="construction-img">
                <a data-fancybox="construction" href="./media/construction/c-5.jpg">
                    <img src="./media/construction/c-5.jpg">
                </a>
            </div>
            <div class="construction-img">
                <a data-fancybox="construction" href="./media/construction/c-7.jpg">
                    <img src="./media/construction/c-7.jpg">
                </a>
            </div>
            <div class="construction-img">
                <a data-fancybox="construction" href="./media/construction/c-1.jpg">
                    <img src="./media/construction/c-1.jpg">
                </a>
            </div>
        </div>
    </div>






    <!-- unitplans ends here  -->

    <!-- location advatages starts here  -->
    <section class="location-adv-main overflow">
        <div class="location-adv-container p-container p-flex">
            <!-- left  -->
            <div class="location-adv-left">
                <div class="location-adv-left-content">
                    <h4 data-aos="zoom-out" data-aos-delay="150" data-aos-duration="800">KRISHE PEARL CONNECTIVITY
                    </h4>
                    <ul data-aos="zoom-in" data-aos-delay="150" data-aos-duration="800">
                        <li><i class="bi bi-cursor-fill"></i> 1 Minute from Meridian School, Chengicherla</li>
                        <li><i class="bi bi-cursor-fill"></i> 2 Minutes from HYD - Warangal Highway</li>
                        <li><i class="bi bi-cursor-fill"></i> 8 Minutes from Infosys Campus</li>
                        <li><i class="bi bi-cursor-fill"></i> 10 Minutes from Decathlon, Uppal</li>
                        <li><i class="bi bi-cursor-fill"></i> 16 minutes from Metro Station , Uppal</li>
                        <li><i class="bi bi-cursor-fill"></i> 17 Minutes from Genpact, Uppal</li>
                        <li><i class="bi bi-cursor-fill"></i> 17 minutes from RGI Stadium, Uppal</li>
                        <li><i class="bi bi-cursor-fill"></i> 19 Minutes from Outer Ring Road</li>
                    </ul>
                </div>
            </div>
            <!-- right  -->
            <div class="location-adv-right" id="location" data-aos="zoom-out" data-aos-delay="250"
                data-aos-duration="800">
                <a data-fancybox="location" href="./media/Location-adv-map.jpg">
                    <img src="./media/Location-adv-map.jpg" alt="">
                </a>
            </div>
        </div>
    </section>




    <!--construction images ends here -->

    <section class="bank-partners-main overflow">
        <div class="bank-partners-container p-container p-flex">
            <!-- left  -->
            <div class="bank-patners-left">
                <h5 data-aos="zoom-out" data-aos-delay="150" data-aos-duration="800">Home Loan Partners</h5>
            </div>
            <!-- right  -->
            <div class="bank-partners-right">
                <!-- <img src="./media/bank-patners.svg" alt=""> -->
                <div class="bank-partners-wrapper bank-partners">
                    <!-- 1 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/HDFC.png" alt="">
                    </div>
                    <!-- 2 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/sbi.png" alt="">
                    </div>
                    <!-- 3 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/AXIS.png" alt="">
                    </div>
                    <!-- 4 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/KOTAK.png" alt="">
                    </div>
                    <!-- 5 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/PNB.png" alt="">
                    </div>
                    <!-- 6 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/BANK OF MAHARASTRA.png" alt="">
                    </div>
                    <!-- 7 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/bajaj.png" alt="">
                    </div>
                    <!-- 8 -->
                    <div class="bank-partners-box">
                        <img src="./media/bank-partners/NAVI.png" alt="">
                    </div>
                    <!-- 9 -->
                </div>
            </div>
        </div>
    </section>

    <!-- bank partners ends here  -->

    <!-- contact section starts here  -->
    <section class="contact-main overflow" id="contact">
        <div class="contact-container p-container p-flex">
            <!-- left  -->
            <div class="contact-left">
                <h4 data-aos="slide-up" data-aos-delay="50" data-aos-duration="800">CONTACT US</h4>
                <p data-aos="slide-up" data-aos-delay="150" data-aos-duration="800">We will get in touch with you
                    soon</p>
                <div class="contact-details">
                    <ul>
                        <li data-aos="slide-up" data-aos-delay="250" data-aos-duration="800"><i
                                class="bi bi-telephone-fill"></i><a href="tel:96940 89694">96940 89694</a></li>
                        <li data-aos="slide-up" data-aos-delay="250" data-aos-duration="850"><i
                                class="bi bi-telephone-fill"></i><a href="tel:9888736464"> 98887 36464</a></li>
                        <li data-aos="slide-up" data-aos-delay="350" data-aos-duration="900"><i
                                class="bi bi-envelope-fill"></i><a
                                href="mailto:info@srikrishnadeveloppers.com">info@srikrishnadeveloppers.com</a></li>
                    </ul>
                </div>
                <div class="contact-map" data-aos="zoom-out" data-aos-delay="400" data-aos-duration="800">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15227.11207112179!2d78.6028125!3d17.4224375!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x28abcc223e95f7cf%3A0x44a3b866437fea36!2sKrishe%20Pearl!5e0!3m2!1sen!2sin!4v1698387712985!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- right  -->
            <div class="contact-right">
                <form action="contact-mail.php" id="contact-form" method="POST" autocomplete="off">
                    <input type="text" placeholder="ENTER NAME" name="name" required>
                    <input type="tel" onkeypress="isInputNumber(event); if(this.value.length==10) return false;"
                        placeholder="ENTER MOBILE NUMBER" name="mobilenumber" minlength="10" maxlength="10" required>
                    <select name="interested" id="" required>
                        <option value="Interested In" selected>Interested In</option>
                        <option value="2BHK Flat">2BHK Flat</option>
                        <option value="3BHK Flat">3BHK Flat</option>
                    </select>
                    <input type="email" placeholder="ENTER EMAIL ID" name="email" required>
                    <input type="text" placeholder="ENTER MESSAGE" name="message" required>
                    <input type="submit" value="SUBMIT" class="contact-btn" name="submit-from">
                </form>
            </div>
        </div>
    </section>

    <!-- contact section ends here  -->
    <!-- enquire form starts here  -->


    <!-- enquire form ends here  -->

    <!-- location advantages ends here  -->

    <section class="main-popup">
        <div class="main-popup-container s-container">
            <div class="close-popup">
                <i class="bi bi-x-circle-fill"></i>
            </div>
            <img src="./media/skd-popup.jpg">
        </div>
    </section>

    <!-- footer starts here  -->
    <?php
    include 'footer.php';
    ?>
    <!--footer ends here -->
    <script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);

        if (!/^[0-9]$/.test(ch)) {
            evt.preventDefault();
        }
    }
    </script>
    <script src="sliders.js"></script>
</body>

</html>
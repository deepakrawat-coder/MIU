@extends('web.layouts.main')
@section('title', '| About ')
@section('description',
    'Glocal University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
    <link rel="stylesheet" href="/web-assets/css/about.css?=4.0">
@endsection
@section('content')
    <!-- Start Main Slider -->
    <section class="main-slider style1 nav-style2">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/web-image/banner1.jpg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>Welcome to Manipur <br> International University</h2>
                            </div>
                            <div class="text">
                                <p>Empowering minds, shaping futures through excellence in education and research</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">
                                        Read More
                                    </span>
                                </a>
                                <a class="btn-one style2" href="campus-life.html">
                                    <span class="txt">
                                        Campus Life
                                    </span>
                                </a>
                            </div>
                            <div class="video-gallery-btns-box">
                                {{-- <a class="video-popup" title="Video Gallery"
                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                            <span class="icon-play"></span>
                                        </a> --}}
                                <p>
                                    <a class="video-popup" title="Video Gallery"
                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                        360<span style="font-size: 20px;">&#176;</span> Campus Tour
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/web-image/banner2.jpeg)">
                    </div>
                    <div class="auto-container">
                        <div class="content middle text-center">
                            <div class="big-title">
                                <h2>Best University<br> of Manipur</h2>
                            </div>
                            <div class="text">
                                <p>Victory for Resilience: Manipur International University Honored as ‘Best University of
                                    Manipur’ at Grand Vijay Diwas Celebrations in New Delhi</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">
                                        Read More
                                    </span>
                                </a>
                                <a class="btn-one style2" href="#">
                                    <span class="txt">
                                        Download
                                    </span>
                                </a>
                            </div>
                            <div class="video-gallery-btns-box">
                                <a class="video-popup" title="Video Gallery"
                                    href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                    <span class="icon-play"></span>
                                </a>
                                <p>
                                    <a class="video-popup" title="Video Gallery"
                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                        360<span style="font-size: 20px;">&#176;</span> Campus Tour
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/web-image/banner3.jpeg)">
                    </div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>World-Class<br> Education</h2>
                            </div>
                            <div class="text">
                                <p>Discover innovative programs designed for the leaders of tomorrow</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">
                                        Read More
                                    </span>
                                </a>
                                <a class="btn-one style2" href="departments.html">
                                    <span class="txt">
                                        Departments
                                    </span>
                                </a>
                            </div>
                            <div class="video-gallery-btns-box">
                                <a class="video-popup" title="Video Gallery"
                                    href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                    <span class="icon-play"></span>
                                </a>
                                <p>
                                    <a class="video-popup" title="Video Gallery"
                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                        360<span style="font-size: 20px;">&#176;</span> Campus Tour
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="teaching-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="teaching-content">
                        <div class="sec-title">
                            <h2>Excellence in Teaching<br> and Learning </h2>
                            <div class="sub-title">
                                <p>The Manipur International University (MIU) is an Autonomous Statutory International
                                    University established, recognized, and institutionally accredited by the State
                                    Government of Manipur. The university operates under the Manipur International
                                    University Act, 2018 (Manipur Act No. 2 of 2019), which was approved by Her Excellency
                                    the Governor of Manipur on 23rd January 2019.
                                </p>
                                <p>MIU is duly approved and listed by the University Grants Commission (UGC), Ministry of
                                    Education, Government of India under section 2(f) of UGC Act, 1956 as a State Private
                                    University. The university is empowered to award degrees under section 22 of the UGC
                                    Act, 1956, ensuring that all degrees conferred by MIU hold national recognition and
                                    validity.</p>
                                <p>
                                    As an Autonomous University, MIU stands as a beacon of educational innovation and
                                    excellence. The university operates as an aspiring research-oriented institution under
                                    the National Education Policy (NEP) 2020, focusing on interdisciplinary learning, skill
                                    development, and cutting-edge research across various domains.
                                </p>
                                <p>
                                    MIU's autonomous status allows it to design innovative curricula, establish
                                    international collaborations, conduct independent research, and implement progressive
                                    academic policies that align with global standards while addressing regional and
                                    national needs.
                                </p>
                            </div>
                        </div>

                        {{-- <div class="inner-title">
                            <div class="border-line"></div>
                            <h3>Provide Endless Opportunities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="dot-box"></div>
                                A higher education qualification
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Better career prospects
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Valuable employability skills
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Personal development time
                            </li>
                        </ul> --}}
                        <div class="btns-box">
                            <a class="btn-one" href="about.html">
                                <span class="txt">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="teaching-img-box">
                        <div class="teaching-img-box__bg"
                            style="background-image: url(assets/images/web-image/about--image.jpg);"></div>
                        <div class="teaching-img-box__content-bg"></div>
                        <div class="teaching-img-box__content aos-init aos-animate" data-aos="fade-left">
                            <div class="border-line"></div>
                            <h3> “At Manipur International University, we empower
                                minds through quality education, impactful research,
                                and a vision for a better global future.”
                            </h3>
                            {{-- <div class="authorized-person">
                                <div class="signature">
                                     <img src="assets/images/resources/signature.png" alt=""> 
                                </div>
                                <h4>Dr. [President Name]</h4>
                                <p>[ President ]</p> 
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Main Slider -->
    <!--Start Essentials Area-->
    {{-- <section class="essentials-area">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="features-style1-content">
                                <ul>
                                    <li>
                                        <div class="single-features-style1">
                                            <div class="text-box">
                                                <h2><a href="#">Our<br> Community</a></h2>
                                                <p><span>*</span> Story About educamb</p>
                                            </div>
                                            <div class="img-box">
                                                <img src="assets/images/resources/features-style1-img-1.jpg"
                                                    alt="">
                                                <div class="overlay-content">
                                                    <a href="#">
                                                        <span class="icon-top"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-features-style1">
                                            <div class="text-box">
                                                <h2><a href="#">Global<br> Campuses</a></h2>
                                                <p><span>*</span> Story About educamb</p>
                                            </div>
                                            <div class="img-box">
                                                <img src="assets/images/resources/features-style1-img-2.jpg"
                                                    alt="">
                                                <div class="overlay-content">
                                                    <a href="#">
                                                        <span class="icon-top"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="essentials-content-box">
                                <ul>
                                    <li>
                                        <div class="single-essentials-box">
                                            <div class="icon">
                                                <span class="icon-learning">
                                                    <span class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span><span class="path6"></span><span
                                                        class="path7"></span><span class="path8"></span><span
                                                        class="path9"></span><span class="path10"></span><span
                                                        class="path11"></span><span class="path12"></span><span
                                                        class="path13"></span><span class="path14"></span><span
                                                        class="path15"></span><span class="path16"></span><span
                                                        class="path17"></span><span class="path18"></span><span
                                                        class="path19"></span><span class="path20"></span><span
                                                        class="path21"></span>
                                                </span>
                                            </div>
                                            <h3><a href="#">Admission &<br> Records</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-essentials-box">
                                            <div class="icon">
                                                <span class="icon-study"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span><span class="path7"></span><span
                                                        class="path8"></span><span class="path9"></span><span
                                                        class="path10"></span><span class="path11"></span><span
                                                        class="path12"></span><span class="path13"></span><span
                                                        class="path14"></span><span class="path15"></span><span
                                                        class="path16"></span><span class="path17"></span><span
                                                        class="path18"></span><span class="path19"></span><span
                                                        class="path20"></span><span class="path21"></span><span
                                                        class="path22"></span><span class="path23"></span><span
                                                        class="path24"></span><span class="path25"></span><span
                                                        class="path26"></span><span class="path27"></span><span
                                                        class="path28"></span><span class="path29"></span><span
                                                        class="path30"></span></span>
                                            </div>
                                            <h3><a href="#">Register for<br> Classes</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-essentials-box">
                                            <div class="icon">
                                                <span class="icon-speech"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span><span class="path7"></span><span
                                                        class="path8"></span><span class="path9"></span><span
                                                        class="path10"></span><span class="path11"></span><span
                                                        class="path12"></span><span class="path13"></span><span
                                                        class="path14"></span><span class="path15"></span><span
                                                        class="path16"></span><span class="path17"></span><span
                                                        class="path18"></span><span class="path19"></span><span
                                                        class="path20"></span><span class="path21"></span><span
                                                        class="path22"></span></span>
                                            </div>
                                            <h3><a href="#">Board<br> Agendas</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-essentials-box">
                                            <div class="icon">
                                                <span class="icon-career"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span><span class="path7"></span><span
                                                        class="path8"></span><span class="path9"></span><span
                                                        class="path10"></span><span class="path11"></span><span
                                                        class="path12"></span><span class="path13"></span><span
                                                        class="path14"></span><span class="path15"></span><span
                                                        class="path16"></span><span class="path17"></span><span
                                                        class="path18"></span><span class="path19"></span><span
                                                        class="path20"></span><span class="path21"></span><span
                                                        class="path22"></span><span class="path23"></span><span
                                                        class="path24"></span></span>
                                            </div>
                                            <h3><a href="#">Career<br> Interviews</a></h3>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section> --}}
    <!--End Essentials Area-->
    <!--Start Departments Area-->
    <section class="departments-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Study at Educamb</h2>
                <div class="sub-title">
                    <p>How all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-3">
                    <!--Start Single Departments Box-->
                    <div class="single-departments-box marginbottom text-center wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.1s">
                        <div class="icon">
                            <span class="icon-budget"></span>
                            <div class="round-box"></div>
                        </div>
                        <div class="text-holder">
                            <a href="#">Accounting</a>
                            <div class="text">
                                <p>To take a trivial example which of us
                                    ever undertakes laborious physical exercise
                                    to obtain some advantage.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Departments Box-->
                    <!--Start Single Departments Box-->
                    <div class="single-departments-box text-center wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div class="icon">
                            <span class="icon-keyboard"></span>
                            <div class="round-box"></div>
                        </div>
                        <div class="text-holder">
                            <a href="#">Computer</a>
                            <div class="text">
                                <p>Indignation and dislike men who
                                    are so beguileds and demoralized by that
                                    of pleasure of the moment.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Departments Box-->

                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="departments-img-box">
                        <img src="assets/images/resources/departments-img.jpg" alt="">
                        <div class="departments-img-box__content">
                            <ul>
                                <li>
                                    <h3><a href="#">Under Graduate</a></h3>
                                    <p>Minor / Major</p>
                                </li>
                                <li>
                                    <h3><a href="#">Post Baccalaureate</a></h3>
                                    <p>Major</p>
                                </li>
                                <li>
                                    <h3><a href="#">Graduate</a></h3>
                                    <p>Master of Science</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-3">
                    <!--Start Single Departments Box-->
                    <div class="single-departments-box marginbottom text-center wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.1s">
                        <div class="icon">
                            <span class="icon-portfolio"></span>
                            <div class="round-box"></div>
                        </div>
                        <div class="text-holder">
                            <a href="#">Business</a>
                            <div class="text">
                                <p>Indignation and dislike men who
                                    are so beguileds and demoralized by that
                                    of pleasure of the moment.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Departments Box-->
                    <!--Start Single Departments Box-->
                    <div class="single-departments-box text-center wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div class="icon">
                            <span class="icon-test-tube"></span>
                            <div class="round-box"></div>
                        </div>
                        <div class="text-holder">
                            <a href="#">Health Sciences</a>
                            <div class="text">
                                <p>To take a trivial example which of us
                                    ever undertakes laborious physical exercise
                                    to obtain some advantage.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Departments Box-->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="btn-box">
                        <a href="departments.html">View All Departments</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Departments Area-->
    <!--Start Explore Future Area-->
    <section class="explore-future-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="explore-future-tab">
                        <div class="row">

                            <div class="col-xl-4">
                                <div class="explore-future-tab__button">
                                    <div class="sec-title">
                                        <h2>Explore the Future</h2>
                                        <div class="sub-title">
                                            <p>Our power of choice is untrammelled & when
                                                nothing prevents.</p>
                                        </div>
                                    </div>
                                    <ul class="tab-btns clearfix">
                                        <li data-tab="#students" class="tab-btn active-btn">
                                            <h3>Fresh Students</h3>
                                            <div class="round-box"></div>
                                        </li>
                                        <li data-tab="#graduate" class="tab-btn">
                                            <h3>Graduate</h3>
                                            <div class="round-box"></div>
                                        </li>
                                        <li data-tab="#transfer" class="tab-btn">
                                            <h3>Transfer to Educamb</h3>
                                            <div class="round-box"></div>
                                        </li>
                                        <li data-tab="#research" class="tab-btn">
                                            <h3>Research</h3>
                                            <div class="round-box"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="col-xl-8">
                                <div class="pr-content">
                                    <!--Tab-->
                                    <div class="pr-tab active-tab" id="students">
                                        <div class="explore-future-tab__content">
                                            <div class="img-holder">
                                                <img src="assets/images/resources/explore-future-img-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="text-holder">
                                                <h2><a href="#">Fresh Students</a></h2>
                                                <p>Obligations of business it frequently occur that pleasures
                                                    have to be repudiated and annoyances accepted. The wise
                                                    man therefore always holds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                    <div class="pr-tab" id="graduate">
                                        <div class="explore-future-tab__content">
                                            <div class="img-holder">
                                                <img src="assets/images/resources/explore-future-img-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="text-holder">
                                                <h2><a href="#">Graduate</a></h2>
                                                <p>Obligations of business it frequently occur that pleasures
                                                    have to be repudiated and annoyances accepted. The wise
                                                    man therefore always holds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                    <div class="pr-tab" id="transfer">
                                        <div class="explore-future-tab__content">
                                            <div class="img-holder">
                                                <img src="assets/images/resources/explore-future-img-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="text-holder">
                                                <h2><a href="#">Transfer to Educamb</a></h2>
                                                <p>Obligations of business it frequently occur that pleasures
                                                    have to be repudiated and annoyances accepted. The wise
                                                    man therefore always holds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tab-->
                                    <div class="pr-tab" id="research">
                                        <div class="explore-future-tab__content">
                                            <div class="img-holder">
                                                <img src="assets/images/resources/explore-future-img-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="text-holder">
                                                <h2><a href="#">Research</a></h2>
                                                <p>Obligations of business it frequently occur that pleasures
                                                    have to be repudiated and annoyances accepted. The wise
                                                    man therefore always holds.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Explore Future Area-->
    <!--Start Fact Counter Area-->
    <section class="fact-counter-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Most Interesting Facts</h2>
                <div class="sub-title">
                    <p>To take a trivial example which of us ever undertakes laborious physical exercise.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <ul class="fact-counter-box">
                        <!--Start Single Fact Counter-->
                        <li class="single-fact-counter">
                            <div class="title-holder">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="2500">0</span>
                                </div>
                                <h3>History of High Achievers</h3>
                            </div>
                            <div class="icon-holder">
                                <span class="icon-online"><span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span></span>
                            </div>
                        </li>
                        <!--End Single Fact Counter-->
                        <!--Start Single Fact Counter-->
                        <li class="single-fact-counter single-fact-counter--style2">
                            <div class="title-holder">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="1870">0</span>
                                </div>
                                <h3>Total Acres of the Land</h3>
                            </div>
                            <div class="icon-holder">
                                <span class="icon-office-building"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span><span class="path5"></span><span
                                        class="path6"></span><span class="path7"></span><span
                                        class="path8"></span><span class="path9"></span><span
                                        class="path10"></span><span class="path11"></span><span
                                        class="path12"></span><span class="path13"></span><span
                                        class="path14"></span><span class="path15"></span><span
                                        class="path16"></span><span class="path17"></span><span
                                        class="path18"></span><span class="path19"></span><span
                                        class="path20"></span><span class="path21"></span><span
                                        class="path22"></span><span class="path23"></span><span
                                        class="path24"></span><span class="path25"></span><span
                                        class="path26"></span><span class="path27"></span><span
                                        class="path28"></span><span class="path29"></span><span
                                        class="path30"></span><span class="path31"></span><span
                                        class="path32"></span><span class="path33"></span><span
                                        class="path34"></span><span class="path35"></span><span
                                        class="path36"></span><span class="path37"></span><span
                                        class="path38"></span><span class="path39"></span><span
                                        class="path40"></span><span class="path41"></span><span
                                        class="path42"></span><span class="path43"></span><span
                                        class="path44"></span><span class="path45"></span><span
                                        class="path46"></span><span class="path47"></span><span
                                        class="path48"></span><span class="path49"></span><span
                                        class="path50"></span><span class="path51"></span><span
                                        class="path52"></span><span class="path53"></span><span
                                        class="path54"></span><span class="path55"></span><span
                                        class="path56"></span><span class="path57"></span><span
                                        class="path58"></span><span class="path59"></span><span
                                        class="path60"></span><span class="path61"></span><span
                                        class="path62"></span><span class="path63"></span></span>
                            </div>
                        </li>
                        <!--End Single Fact Counter-->
                    </ul>

                    <ul class="fact-counter-box bottom">
                        <!--Start Single Fact Counter-->
                        <li class="single-fact-counter pdt50 pdb0">
                            <div class="title-holder">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="3.9">0</span>
                                </div>
                                <h3>Kilometres of Bookshelves</h3>
                            </div>
                            <div class="icon-holder">
                                <span class="icon-book"><span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span><span class="path18"></span><span
                                        class="path19"></span><span class="path20"></span><span
                                        class="path21"></span><span class="path22"></span><span
                                        class="path23"></span><span class="path24"></span><span
                                        class="path25"></span><span class="path26"></span><span
                                        class="path27"></span><span class="path28"></span><span
                                        class="path29"></span><span class="path30"></span><span
                                        class="path31"></span><span class="path32"></span><span
                                        class="path33"></span><span class="path34"></span></span>
                            </div>
                        </li>
                        <!--End Single Fact Counter-->
                        <!--Start Single Fact Counter-->
                        <li class="single-fact-counter single-fact-counter--style2 pdt50 pdb0">
                            <div class="title-holder">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="164">0</span>
                                </div>
                                <h3>Awards & Achivements</h3>
                            </div>
                            <div class="icon-holder">
                                <span class="icon-browser"><span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span><span class="path18"></span><span
                                        class="path19"></span><span class="path20"></span><span
                                        class="path21"></span><span class="path22"></span><span
                                        class="path23"></span></span>
                            </div>
                        </li>
                        <!--End Single Fact Counter-->
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!--End Fact Counter Area-->
    <!--Start Teaching Area-->
    <section class="teaching-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="teaching-content">
                        <div class="sec-title">
                            <h2>Excellence in Teaching<br> and Learning </h2>
                            <div class="sub-title">
                                <p>Welcomed every pain avoided but in certain circumstances owing to the claims of
                                    duty or the obligations of business it will frequently occurs that pleasures.
                                </p>
                            </div>
                        </div>

                        <div class="inner-title">
                            <div class="border-line"></div>
                            <h3>Provide Endless Opportunities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="dot-box"></div>
                                A higher education qualification
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Better career prospects
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Valuable employability skills
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Personal development time
                            </li>
                        </ul>
                        <div class="btns-box">
                            <a class="btn-one" href="about.html">
                                <span class="txt">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="teaching-img-box">
                        <div class="teaching-img-box__bg"
                            style="background-image: url(assets/images/resources/teaching-img.jpg);"></div>
                        <div class="teaching-img-box__content-bg"></div>
                        <div class="teaching-img-box__content" data-aos="fade-left">
                            <div class="border-line"></div>
                            <h3>“We’re globally
                                recognised for delivering
                                impactful research that
                                drives positive change.”
                            </h3>
                            <div class="authorized-person">
                                <div class="signature">
                                    <img src="assets/images/resources/signature.png" alt="">
                                </div>
                                <h4>Richard Nicholas</h4>
                                <p>[ President ]</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Teaching Area-->
    <!--Start Statements Area-->
    <section class="statements-area">
        <div class="auto-container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="statements-img-box">
                        <div class="statements-img-box__bg"
                            style="background-image: url(assets/images/resources/statements-img.jpg);"></div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="statements-content-box">
                        <div class="sec-title">
                            <h2>Statement of Educamb<br> University</h2>
                        </div>
                        <div class="statements-content-box__inner">
                            <div class="theme_carousel statements-carousel owl-theme owl-carousel owl-nav-style-one"
                                data-options='{
                                    "loop": false, 
                                    "margin": 0, 
                                    "autoheight":true, 
                                    "lazyload":true, 
                                    "nav": true, 
                                    "dots": true, 
                                    "autoplay": true, 
                                    "autoplayTimeout": 5000, 
                                    "smartSpeed": 500, 
                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                    "<span class=\"right icon-right-arrow-1\"></span>"], 
                                    "responsive":{ 
                                    "0" :{ "items": "1" }, 
                                    "600" :{ "items" : "1" }, 
                                    "768" :{ "items" : "1" }, 
                                    "992":{ "items" : "1" }, 
                                    "1200":{ "items" : "1" }
                                }
                                }'>
                                <div class="item">
                                    <div class="single-statements-item">
                                        <div class="icon"></div>
                                        <div class="text">
                                            <h3>Mission Statement</h3>
                                            <p>The same as saying through shrinking from toil & pain
                                                these cases are perfectly simple and easy distinguish
                                                in a free hour when our power.</p>
                                        </div>
                                    </div>
                                    <div class="single-statements-item">
                                        <div class="icon"></div>
                                        <div class="text">
                                            <h3>Vision Statement</h3>
                                            <p>Lirinking from toil & pain these cases are perfectly in
                                                simple easy distinguish.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-statements-item">
                                        <div class="icon"></div>
                                        <div class="text">
                                            <h3>Mission Statement</h3>
                                            <p>The same as saying through shrinking from toil & pain
                                                these cases are perfectly simple and easy distinguish
                                                in a free hour when our power.</p>
                                        </div>
                                    </div>
                                    <div class="single-statements-item">
                                        <div class="icon"></div>
                                        <div class="text">
                                            <h3>Vision Statement</h3>
                                            <p>Lirinking from toil & pain these cases are perfectly in
                                                simple easy distinguish.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Statements Area-->
    <!--Start Research Area-->
    <section class="research-area">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Research & Innovation</h2>
                <div class="sub-title">
                    <p>Business it will frequently occur that pleasures have to repudiated and accepted.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="theme_carousel research-carousel owl-theme owl-carousel owl-dot-style1"
                        data-options='{
                                    "loop": true, 
                                    "margin": 30, 
                                    "autoheight":true, 
                                    "lazyload":true, 
                                    "nav": false, 
                                    "dots": true, 
                                    "autoplay": true, 
                                    "autoplayTimeout": 5000, 
                                    "smartSpeed": 500, 
                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                    "<span class=\"right icon-right-arrow-1\"></span>"], 
                                    "responsive":{ 
                                    "0" :{ "items": "1" }, 
                                    "600" :{ "items" : "1" }, 
                                    "768" :{ "items" : "1" }, 
                                    "1200":{ "items" : "2" }, 
                                    "1800":{ "items" : "3" }
                                }
                            }'>

                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-1.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-research"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-research"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Culture<br> & Creativity</a></h3>
                                </div>
                                <div class="text">
                                    <p>Through shrinking from at toil & pain
                                        these cases are perfectly...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->
                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-2.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-test-tube"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-test-tube"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Health<br> & Medicine</a></h3>
                                </div>
                                <div class="text">
                                    <p>Foresee the pain that are bound to ensue and equal blame...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->
                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-3.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-web"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-web"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Science<br> & Technology</a></h3>
                                </div>
                                <div class="text">
                                    <p>Prevents our being able to do what
                                        we like best every pleasure...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->

                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-1.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-research"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-research"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Culture<br> & Creativity</a></h3>
                                </div>
                                <div class="text">
                                    <p>Through shrinking from at toil & pain
                                        these cases are perfectly...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->
                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-2.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-test-tube"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-test-tube"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Health<br> & Medicine</a></h3>
                                </div>
                                <div class="text">
                                    <p>Foresee the pain that are bound to ensue and equal blame...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->
                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-3.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-web"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-web"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Science<br> & Technology</a></h3>
                                </div>
                                <div class="text">
                                    <p>Prevents our being able to do what
                                        we like best every pleasure...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->

                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-1.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-research"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-research"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Culture<br> & Creativity</a></h3>
                                </div>
                                <div class="text">
                                    <p>Through shrinking from at toil & pain
                                        these cases are perfectly...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->
                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-2.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-test-tube"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-test-tube"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Health<br> & Medicine</a></h3>
                                </div>
                                <div class="text">
                                    <p>Foresee the pain that are bound to ensue and equal blame...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->
                        <!--Start Single Research Box-->
                        <div class="single-research-box">
                            <div class="img-holder">
                                <img src="assets/images/resources/research-3.jpg" alt="">
                                <div class="icon">
                                    <span class="icon-web"></span>
                                </div>
                                <div class="overlay-icon">
                                    <span class="icon-web"></span>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="inner-title">
                                    <h3><a href="#">Science<br> & Technology</a></h3>
                                </div>
                                <div class="text">
                                    <p>Prevents our being able to do what
                                        we like best every pleasure...</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Research Box-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Research Area-->
    <!--Start Virtual Store Area-->
    <section class="virtual-store-area">
        <div class="virtual-store-area__bg"
            style="background-image: url(assets/images/parallax-background/virtual-store-area__bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="virtual-store__content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="icon">
                            <span class="icon-download"></span>
                        </div>
                        <div class="sec-title">
                            <h2>Get Ready to<br> Study With Virtual Store</h2>
                            <div class="sub-title">
                                <p>For a customized list of course materials, use our course
                                    materials finder.
                                </p>
                            </div>
                        </div>
                        <div class="virtual-store-form-box">
                            <form class="virtual-store-form" action="#">
                                <input type="text" name="topics-search" placeholder="Search by topics...">
                                <button class="btn-one" type="submit">
                                    <span class="txt"><span class="icon-zoom"></span></span>
                                </button>
                            </form>
                            <div class="btns-box">
                                <a class="btn-one" href="about.html">
                                    <span class="txt">Download</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Virtual Store Area-->
    <!--Start Events Style1 Area-->
    <section class="event-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>What's Coming up?</h2>
                <div class="sub-title">
                    <p>Business it will frequently occur that pleasures have to repudiated and accepted.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="event-style1-img-box">
                        <img src="assets/images/resources/event-style1-img.jpg" alt="">
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="event-style1-content-box">
                        <ul>
                            <li>
                                <div class="overlay-icon">
                                    <span class="icon-play-button-1"></span>
                                </div>
                                <div class="single-event-box-style1">
                                    <div class="date-box">
                                        <h2>01</h2>
                                        <p>Apr, 2022</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="event-time">
                                            <span class="icon-clock"></span>
                                            <p>10.00 am - 01.00 pm</p>
                                        </div>
                                        <h3>
                                            <a href="events-details.html">
                                                Women's Basketball at National<br> Indoor Court
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="overlay-icon">
                                    <span class="icon-play-button-1"></span>
                                </div>
                                <div class="single-event-box-style1 single-event-box-style1--style2">
                                    <div class="date-box">
                                        <h2>24</h2>
                                        <p>May, 2022</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="event-time">
                                            <span class="icon-clock"></span>
                                            <p>08.00 am - 09.00 pm</p>
                                        </div>
                                        <h3>
                                            <a href="events-details.html">
                                                Twenty Minutes Still Meditation<br> in Bond
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="overlay-icon">
                                    <span class="icon-play-button-1"></span>
                                </div>
                                <div class="single-event-box-style1">
                                    <div class="date-box">
                                        <h2>17</h2>
                                        <p>Oct, 2022</p>
                                    </div>
                                    <div class="title-box">
                                        <div class="event-time">
                                            <span class="icon-clock"></span>
                                            <p>03.00 pm - 05.00 pm</p>
                                        </div>
                                        <h3>
                                            <a href="events-details.html">
                                                Student Art Exhibit - Chairs by<br> Interior Design Students
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Events Style1 Area-->
    <!--Start Testimonial Style1 Area-->
    <section class="testimonial-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1__title">
                        <div class="sec-title">
                            <h2>Hear Our Students Words</h2>
                            <div class="sub-title">
                                <p>
                                    Trouble that are bound to ensue; and equal blame belongs to those who fail.
                                </p>
                            </div>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="#">
                                <span class="txt">More Reviews</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="theme_carousel testimonial-carousel owl-theme owl-carousel"
                            data-options='{
                                    "loop": true, 
                                    "margin": 30, 
                                    "autoheight":true, 
                                    "lazyload":true, 
                                    "nav": false, 
                                    "dots": false, 
                                    "autoplay": true, 
                                    "autoplayTimeout": 5000, 
                                    "smartSpeed": 500, 
                                    "navText": ["<span class=\"left icon-next\"></span>",
                                    "<span class=\"right icon-next\"></span>"], 
                                    "responsive":{ 
                                    "0" :{ "items": "1" }, 
                                    "600" :{ "items" : "1" }, 
                                    "768" :{ "items" : "1" }, 
                                    "992":{ "items" : "2" }, 
                                    "1200":{ "items" : "3" }
                                }
                            }'>

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="border-box"></div>
                                <div class="top-box">
                                    <div class="quote-iocn-box">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-1.jpg" alt="">
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>It was my immense luck and fortune to be the part of Educamb
                                            University where I can grow. The entire faculty & department leaves
                                            no stone unturned to shape one\'s future my four years.</p>
                                    </div>
                                </div>
                                <div class="client-name">
                                    <h3>Nora Penelope</h3>
                                    <span>B.Tech (CSE) , 2017-2022</span>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="border-box"></div>
                                <div class="top-box">
                                    <div class="quote-iocn-box">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-2.jpg" alt="">
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Hi, During my study of four years in Educamb, I came across various
                                            people of different country and. ifferent country and different I had
                                            received a lot of opportunities to groom myself, I
                                            thanks to my mentors.</p>
                                    </div>
                                </div>
                                <div class="client-name">
                                    <h3>Silverster Scott</h3>
                                    <span>B.Tech-IT , 2017-2022</span>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="border-box"></div>
                                <div class="top-box">
                                    <div class="quote-iocn-box">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-3.jpg" alt="">
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>I had the opportunity to meet with the dynamic & distinguished
                                            faculties, who are highly qualified & friendly patients. With their
                                            assist & guidance I have who are highly been qualified to become a true
                                            professional.</p>
                                    </div>
                                </div>
                                <div class="client-name">
                                    <h3>Arlo Sebastian</h3>
                                    <span>B.Tech-Civil , 2017-2022</span>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="border-box"></div>
                                <div class="top-box">
                                    <div class="quote-iocn-box">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-1.jpg" alt="">
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>It was my immense luck and fortune to be the part of Educamb
                                            University where I can grow. The entire faculty & department leaves
                                            no stone unturned to shape one\'s future my four years.</p>
                                    </div>
                                </div>
                                <div class="client-name">
                                    <h3>Nora Penelope</h3>
                                    <span>B.Tech (CSE) , 2017-2022</span>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="border-box"></div>
                                <div class="top-box">
                                    <div class="quote-iocn-box">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-2.jpg" alt="">
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>Hi, During my study of four years in Educamb, I came across various
                                            people of different country and. ifferent country and different I had
                                            received a lot of opportunities to groom myself, I
                                            thanks to my mentors.</p>
                                    </div>
                                </div>
                                <div class="client-name">
                                    <h3>Silverster Scott</h3>
                                    <span>B.Tech-IT , 2017-2022</span>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="border-box"></div>
                                <div class="top-box">
                                    <div class="quote-iocn-box">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="assets/images/testimonial/testimonial-v1-3.jpg" alt="">
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="icon-favourite">
                                                        <span class="path1"></span><span class="path2"></span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <p>I had the opportunity to meet with the dynamic & distinguished
                                            faculties, who are highly qualified & friendly patients. With their
                                            assist & guidance I have who are highly been qualified to become a true
                                            professional.</p>
                                    </div>
                                </div>
                                <div class="client-name">
                                    <h3>Arlo Sebastian</h3>
                                    <span>B.Tech-Civil , 2017-2022</span>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Style1 Area-->
    <!--Start Blog Style1 Area-->
    <section class="blog-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Latest From Our Blog</h2>
                <div class="sub-title">
                    <p>
                        Business it will frequently occur that pleasures have to repudiated and accepted.
                    </p>
                </div>
            </div>
            <div class="row">

                <!--Start Single Blog Style1-->
                <div class="col-xl-4 col-lg-12">
                    <div class="single-blog-style1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/blog/blog-v1-1.jpg" alt="">
                            </div>
                            <div class="category-box">
                                <div class="dot-box"></div>
                                <p>Awards</p>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3><a href="blog-single.html">University of Educamb Award
                                    4 Honorary Degrees</a></h3>
                            <div class="text">
                                <p>Duty obligations of business frequently
                                    occur pleasures enjoy...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="btn-box">
                                    <a href="blog-single.html">
                                        <span class="icon-right-arrow-1"></span>Read More
                                    </a>
                                </div>
                                <div class="meta-info">
                                    <ul>
                                        <li><span class="icon-calendar"></span><a href="#">Nov 25,
                                                2022</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Style1-->

                <div class="col-xl-4 col-lg-12">
                    <div class="blog-style1-img-box wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                        <img src="assets/images/blog/blog-style1-img.jpg" alt="">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12">
                    <!--Start Single Blog Style1 in Style2-->
                    <div class="single-blog-style1 single-blog-style1--in-style2 wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.1s">
                        <div class="text-holder">
                            <div class="category-box">
                                <div class="dot-box"></div>
                                <p>Academics</p>
                            </div>
                            <h3><a href="blog-single.html">A Core Commitment to Liberal
                                    Arts and Sciences</a></h3>
                            <div class="bottom-box">
                                <div class="btn-box">
                                    <a href="blog-single.html">
                                        <span class="icon-right-arrow-1"></span>Read More
                                    </a>
                                </div>
                                <div class="meta-info">
                                    <ul>
                                        <li><span class="icon-calendar"></span><a href="#">Nov 25,
                                                2022</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog Style1 in Style2-->
                    <!--Start Single Blog Style1 in Style2-->
                    <div class="single-blog-style1 single-blog-style1--in-style2 wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div class="text-holder">
                            <div class="category-box">
                                <div class="dot-box"></div>
                                <p>Foundation</p>
                            </div>
                            <h3>
                                <a href="blog-single.html">
                                    University College Appoints Dean of Humanities
                                </a>
                            </h3>
                            <div class="bottom-box">
                                <div class="btn-box">
                                    <a href="blog-single.html">
                                        <span class="icon-right-arrow-1"></span>Read More
                                    </a>
                                </div>
                                <div class="meta-info">
                                    <ul>
                                        <li><span class="icon-calendar"></span><a href="#">Nov 25,
                                                2022</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog Style1 in Style2-->
                </div>

            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->
    <!--Start social activity Area-->
    <section class="social-activity-area">
        <div class="auto-container">
            <div class="social-activity-content">

                <div class="single-social-activity-box width40">
                    <!--Start Single Social Activity Box Inner-->
                    <div class="single-social-activity-box__inner">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="img-box-outer">
                                    <div class="img-box"
                                        style="background-image: url(assets/images/resources/social-activity-1.jpg);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="text-box">
                                    <div class="top-box">
                                        <div class="social-link">
                                            <a href="#">
                                                <span class="icon-facebook"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span></span>
                                            </a>
                                        </div>
                                        <div class="date-box">
                                            <p>Nov 14, 2022</p>
                                        </div>
                                    </div>
                                    <div class="inner-title">
                                        <h3><a href="#">@educamb.co.in</a></h3>
                                    </div>
                                    <div class="text">
                                        <p>
                                            On the other hand we denounced with #righteous indignation dislikes
                                            men who are so... <a href="#">Read More</a>
                                        </p>
                                    </div>
                                    <div class="post-info">
                                        <ul>
                                            <li>
                                                <span class="icon-heart-1"></span><a href="#">10</a>
                                            </li>
                                            <li>
                                                <span class="icon-chat"></span><a href="#">06</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Social Activity Box Inner-->
                    <!--Start Single Social Activity Box Inner-->
                    <div class="single-social-activity-box__inner">
                        <div class="single-social-activity-box__inner-img-bg"
                            style="background-image: url(assets/images/resources/social-activity-2.jpg);"></div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="text-box text-box--style3">
                                    <div class="top-box">
                                        <div class="social-link">
                                            <a href="#">
                                                <span class="icon-twitter"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span>
                                            </a>
                                        </div>
                                        <div class="date-box">
                                            <p>Sep 06, 2022</p>
                                        </div>
                                    </div>
                                    <div class="inner-title">
                                        <h3><a href="#">@educamb.co.in</a></h3>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Blinded by desire, that they cannot foresee <a
                                                href="#">http://e.camb/ely</a> pain and trouble that bound
                                            to ensue.
                                        </p>
                                    </div>
                                    <div class="post-info">
                                        <ul>
                                            <li>
                                                <span class="icon-heart-1"></span><a href="#">26</a>
                                            </li>
                                            <li>
                                                <span class="icon-chat"></span><a href="#">17</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Social Activity Box Inner-->
                </div>

                <!--Start Single Social Activity Box-->
                <div class="single-social-activity-box width20">
                    <div class="single-social-activity-box__inner">
                        <div class="img-box-outer heigh302">
                            <div class="img-box"
                                style="background-image: url(assets/images/resources/social-activity-3.jpg);">
                            </div>
                        </div>
                        <div class="text-box text-box--style2">
                            <div class="top-box">
                                <div class="social-link">
                                    <a href="#">
                                        <span class="icon-twitter"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></span>
                                    </a>
                                </div>
                                <div class="date-box">
                                    <p>Aug 21, 2022</p>
                                </div>
                            </div>
                            <div class="inner-title">
                                <h3><a href="#">@educamb.co.in</a></h3>
                            </div>
                            <div class="text">
                                <p>
                                    Blinded by desire, that they cannot foresee <a href="#">http://e.camb/ely</a>
                                    pain and trouble that bound to ensue.
                                </p>
                            </div>
                            <div class="post-info">
                                <ul>
                                    <li>
                                        <span class="icon-heart-1"></span><a href="#">26</a>
                                    </li>
                                    <li>
                                        <span class="icon-chat"></span><a href="#">17</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Social Activity Box-->


                <div class="single-social-activity-box width40">
                    <!--Start Single Social Activity Box Inner-->
                    <div class="single-social-activity-box__inner">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="text-box text-box--style4">
                                    <div class="top-box">
                                        <div class="social-link">
                                            <a href="#">
                                                <span class="icon-twitter"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span>
                                            </a>
                                        </div>
                                        <div class="date-box">
                                            <p>Aug 21, 2022</p>
                                        </div>
                                    </div>
                                    <div class="inner-title">
                                        <h3><a href="#">@educamb.co.in</a></h3>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Blinded by desire, that they cannot foresee <a
                                                href="#">http://e.camb/ely</a> pain and trouble that bound
                                            to ensue.
                                        </p>
                                    </div>
                                    <div class="post-info">
                                        <ul>
                                            <li>
                                                <span class="icon-heart-1"></span><a href="#">10</a>
                                            </li>
                                            <li>
                                                <span class="icon-chat"></span><a href="#">06</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="img-box-outer">
                                    <div class="img-box"
                                        style="background-image: url(assets/images/resources/social-activity-4.jpg);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start Single Social Activity Box Inner-->
                    <!--Start Single Social Activity Box Inner-->
                    <div class="single-social-activity-box__inner">
                        <div class="single-social-activity-box__inner-img-bg style2"
                            style="background-image: url(assets/images/resources/social-activity-5.jpg);"></div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="text-box text-box--style5">
                                    <div class="top-box">
                                        <div class="social-link">
                                            <a href="#">
                                                <span class="icon-facebook"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span></span>
                                            </a>
                                        </div>
                                        <div class="date-box">
                                            <p>Sep 06, 2022</p>
                                        </div>
                                    </div>
                                    <div class="inner-title">
                                        <h3><a href="#">@educamb.co.in</a></h3>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Blinded by desire, that they cannot foresee <a
                                                href="#">http://e.camb/ely</a> pain and trouble that bound
                                            to ensue.
                                        </p>
                                    </div>
                                    <div class="post-info">
                                        <ul>
                                            <li>
                                                <span class="icon-heart-1"></span><a href="#">26</a>
                                            </li>
                                            <li>
                                                <span class="icon-chat"></span><a href="#">17</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Social Activity Box Inner-->
                </div>


            </div>
        </div>
    </section>
    <!--End social activity Area-->

    <!--Start Partner Area-->
    <section class="partner-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Top Companies are Hiring</h2>
                <div class="sub-title">
                    <p>
                        Business it will frequently occur that pleasures have to repudiated and accepted.
                    </p>
                </div>
            </div>
            <div class="row">
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-1.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-2.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-3.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-4.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->

                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-5.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-6.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-7.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-8.png" alt="Awesome Image"></a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
            </div>

            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="btns-box">
                        <a class="btn-one" href="about.html">
                            <span class="txt">All Companies</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Partner Area-->
    <!--Start Slogan Style1 Area-->
    <section class="slogan-style1-area">
        <div class="auto-container">
            <div class="slogan-style1">
                <div class="slogan-style1__bg1"
                    style="background-image: url(assets/images/resources/slogan-style1-bg-1.jpg);"></div>
                <div class="slogan-style1__bg2"
                    style="background-image: url(assets/images/resources/slogan-style1-bg-2.jpg);"></div>
                <div class="container">
                    <div class="slogan-style1__inner">
                        <div class="title">
                            <h2><span>Register!..</span> to study in Next Academic Year 2022.</h2>
                        </div>
                        <div class="button-box">
                            <a class="btn-one" href="#"><span class="txt">Register Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan Style1 Area-->

    <!-- search-popup end -->




@endsection
@section('scripts')
@endsection

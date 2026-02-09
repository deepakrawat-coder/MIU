@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')
    <style>
        .custom-container {
            max-width: 90%;
            max-height: 80%
        }
    </style>
@endsection
@section('content')
    <section class="enterprise-plan-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="enterprise-plan__content">
                        <div class="enterprise-plan__content-bg"
                            style="background-image: url({{ asset('assets/images/web-image/anti-ragging.jpg') }});">
                        </div>

                        <div class="enterprise-plan__content__inner">
                            <div class="sec-title-style3">
                                <div class="sub-title">
                                    <h5>Anti-Ragging Policy</h5>
                                </div>
                                <h2>
                                    <span>Zero Tolerance</span><br>
                                    Towards Ragging at MIU
                                </h2>
                            </div>

                            <ul>
                                <li>Strict prohibition of ragging in any form on campus</li>
                                <li>UGC-compliant Anti-Ragging Committee & Squad</li>
                                <li>Immediate action on complaints with confidentiality</li>
                            </ul>

                            <div class="btns-box">
                                <a class="btn-one btn-one--style4" href="{{ url('/contact-us') }}">
                                    <span class="txt">
                                        <i class="icon-right-arrow-1"></i>
                                        Report Ragging
                                    </span>
                                </a>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quick-contact-info-area">
    <div class="container">
        <div class="row">

            <!-- Left Content -->
            <div class="col-xl-6">
                <div class="quick-contact-info-title">
                    <div class="sec-title">
                        <h2>National Anti-Ragging<br> Support & Assistance</h2>
                        <div class="sub-title">
                            <p>
                                Manipur International University strictly follows the UGC Anti-Ragging
                                Regulations. Students can report any incident of ragging confidentially
                                through the National Anti-Ragging Helpline available 24×7.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Helpline Call -->
            <div class="col-xl-3">
                <div class="quick-contact-info-single-box">
                    <div class="icon">
                        <span class="icon-phone"></span>
                    </div>
                    <div class="text">
                        <h3>Anti-Ragging Helpline</h3>
                        <p>Report ragging incidents anytime.
                            Toll-free & confidential.</p>
                        <a href="tel:18001805522">1800-180-5522</a>
                        <small>Available 24×7</small>
                    </div>
                </div>
            </div>

            <!-- Helpline Email -->
            <div class="col-xl-3">
                <div class="quick-contact-info-single-box">
                    <div class="icon">
                        <span class="icon-send-1"></span>
                    </div>
                    <div class="text">
                        <h3>Email Support</h3>
                        <p>Submit complaints or seek guidance
                            via official email.</p>
                        <a href="mailto:helpline@antiragging.in">
                            helpline@antiragging.in
                        </a>
                        <br>
                        <a href="https://www.antiragging.in" target="_blank">
                            www.antiragging.in
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="blog-style4-area">
    <div class="container">
        <div class="sec-title-style5 text-center">
            <h2>Anti-Ragging Awareness & Updates</h2>
            <div class="sub-title">
                <div class="line left"></div>
                <p>Latest notices, guidelines & student safety initiatives</p>
                <div class="line right"></div>
            </div>
        </div>

        <div class="row">

            <!-- Anti Ragging Policy -->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style4">
                    <div class="single-blog-style4__inner">
                        <div class="category-box">
                            <div class="dot-box"></div>
                            <p>Policy</p>
                        </div>
                        <h3 class="blog-title">
                            <a href="#">
                                IES Zero-Tolerance Anti-Ragging Policy
                            </a>
                        </h3>
                        <div class="text">
                            <p>
                                IES strictly prohibits ragging in any form and follows UGC
                                Anti-Ragging Regulations to ensure a safe campus.
                            </p>
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="btn-box">
                            <a href="#">
                                <span class="icon-right-arrow-1"></span>Read More
                            </a>
                        </div>
                        <div class="meta-info">
                            <ul>
                                <li>
                                    <span class="icon-calendar"></span>
                                    <a href="#">Updated 2025</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Awareness Program -->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style4">
                    <div class="single-blog-style4__inner">
                        <div class="category-box">
                            <div class="dot-box"></div>
                            <p>Awareness</p>
                        </div>
                        <h3 class="blog-title">
                            <a href="#">
                                Anti-Ragging Awareness Programs at IES
                            </a>
                        </h3>
                        <div class="text">
                            <p>
                                Regular orientation sessions and workshops are conducted
                                to educate students about anti-ragging laws and ethics.
                            </p>
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="btn-box">
                            <a href="#">
                                <span class="icon-right-arrow-1"></span>Read More
                            </a>
                        </div>
                        <div class="meta-info">
                            <ul>
                                <li>
                                    <span class="icon-calendar"></span>
                                    <a href="#">Current Session</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Helpline & Support -->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style4">
                    <div class="single-blog-style4__inner">
                        <div class="category-box">
                            <div class="dot-box"></div>
                            <p>Support</p>
                        </div>
                        <h3 class="blog-title">
                            <a href="#">
                                Student Support & Anti-Ragging Helpline
                            </a>
                        </h3>
                        <div class="text">
                            <p>
                                Students can report ragging incidents through the IES
                                Anti-Ragging Committee or the National Anti-Ragging Helpline.
                            </p>
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="btn-box">
                            <a href="#">
                                <span class="icon-right-arrow-1"></span>Read More
                            </a>
                        </div>
                        <div class="meta-info">
                            <ul>
                                <li>
                                    <span class="icon-calendar"></span>
                                    <a href="#">24×7 Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="features" class="specialization-features anti-ragging-features">
    <div class="container">

        <!-- Section Heading -->
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="sec-title">
                    <h2>Anti-Ragging Policy & Safety Measures</h2>
                    <p class="sub-title mt-3">
                        Manipur International University ensures a safe, respectful and
                        ragging-free campus environment in accordance with UGC norms.
                    </p>
                </div>
            </div>
        </div>

        <!-- Feature Cards -->
        <div class="row">

            <!-- Legal Status -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-balance-scale"></i>
                    </div>
                    <h5 class="font-weight-bold text-center mb-3">Legal Status</h5>
                    <p class="text-center mb-0">
                        Ragging is a serious criminal offence and is strictly prohibited
                        under UGC regulations and Indian law.
                    </p>
                </div>
            </div>

            <!-- Zero Tolerance -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-ban"></i>
                    </div>
                    <h5 class="font-weight-bold text-center mb-3">Zero Tolerance</h5>
                    <p class="text-center mb-0">
                        MIU follows a zero-tolerance policy against any form of ragging
                        inside or outside the campus.
                    </p>
                </div>
            </div>

            <!-- Support System -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <h5 class="font-weight-bold text-center mb-3">Student Support</h5>
                    <p class="text-center mb-0">
                        Anti-Ragging Committee and squad members are available 24×7
                        to support and protect students.
                    </p>
                </div>
            </div>

            <!-- Strict Action -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-gavel"></i>
                    </div>
                    <h5 class="font-weight-bold text-center mb-3">Strict Action</h5>
                    <p class="text-center mb-0">
                        Immediate disciplinary and legal action is taken against anyone
                        found guilty of ragging.
                    </p>
                </div>
            </div>

        </div>

        <!-- Info Boxes (UGC / Helpline Reference) -->
        <div class="row mt-5">

            <div class="col-lg-4 col-md-12 mb-4">
                <div class="stat-box">
                    <div class="stat-number">
                        <i class="fa fa-university"></i>
                    </div>
                    <h5 class="font-weight-bold mb-2">UGC Monitoring Agency</h5>
                    <p class="mb-0 text-muted">
                        Centre for Youth (C4Y) monitors implementation of
                        Anti-Ragging Regulations across universities.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-4">
                <div class="stat-box">
                    <div class="stat-number">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h5 class="font-weight-bold mb-2">National Helpline</h5>
                    <p class="mb-0 text-muted">
                        1800-180-5522 <br>
                        Available 24×7 (Toll Free)
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-4">
                <div class="stat-box">
                    <div class="stat-number">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h5 class="font-weight-bold mb-2">Online Support</h5>
                    <p class="mb-0 text-muted">
                        helpline@antiragging.in <br>
                        www.antiragging.in
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>


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
@endsection
@section('scripts')
@endsection

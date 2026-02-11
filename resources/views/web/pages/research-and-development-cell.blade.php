@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')
@section('styles')
    <style>
        .nep-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .research-card {
            background: #17345a;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            /* border-top: 5px solid #007bff; */
            /* Professional Blue Accent */
        }

        .icon-box {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .content-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
            text-align: justify;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 25px;
            color: #222;
            text-align: start;
        }

        .mission-vision-img-box__inner img {
            width: 100%;
            border-radius: 50%;
            height: 396px;
        }

        /* Research Committee - Complete Redesign */

        /* Card Hover Effects */
        .research-committee-section .card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .research-committee-section .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 50px rgba(23, 52, 90, 0.08) !important;
        }

        /* Chairman Card Specific */
        .research-committee-section .bg-gradient-dark {
            transition: all 0.4s ease;
        }

        .research-committee-section .bg-gradient-dark:hover {
            transform: translateY(-5px);
            box-shadow: 0 40px 60px rgba(23, 52, 90, 0.3) !important;
        }

        /* Timeline Animation */
        .timeline-left div {
            transition: all 0.3s ease;
        }

        .structure-timeline .d-flex:hover .timeline-left div {
            transform: scale(1.1);
        }

        /* Program Cards */
        .program-grid .d-flex {
            transition: all 0.3s ease;
        }

        .program-grid .d-flex:hover {
            transform: translateX(8px);
            border-color: rgba(228, 161, 27, 0.3) !important;
            box-shadow: 0 10px 25px rgba(228, 161, 27, 0.1) !important;
        }

        /* Badge Animations */
        .section-badge,
        .academic-year-badge {
            animation: slideInRight 0.8s ease;
        }

        /* Title Icon Animation */
        .title-icon {
            animation: rotateIn 0.8s ease;
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #17345a, #0f2a3f);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 15px 25px rgba(23, 52, 90, 0.15);
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes rotateIn {
            from {
                opacity: 0;
                transform: rotate(-15deg) scale(0.8);
            }

            to {
                opacity: 1;
                transform: rotate(0) scale(1);
            }
        }

        /* Responsive Breakpoints */
        @media (max-width: 992px) {
            .display-4 {
                font-size: 2.5rem !important;
            }

            .chairman-avatar {
                margin-right: 20px !important;
            }

            .chairman-avatar div {
                width: 80px !important;
                height: 80px !important;
            }

            .chairman-avatar i {
                font-size: 3.5rem !important;
            }

            .chairman-info h2 {
                font-size: 1.6rem !important;
            }
        }

        @media (max-width: 768px) {
            .display-4 {
                font-size: 2rem !important;
            }

            .section-title-wrapper .d-flex {
                flex-direction: column;
                text-align: center;
            }

            .title-icon {
                margin-right: 0 !important;
                margin-bottom: 15px;
            }

            .chairman-info {
                text-align: center;
            }

            .chairman-avatar {
                margin-right: 0 !important;
                margin-bottom: 15px;
            }

            .academic-year-badge {
                width: 100%;
            }

            .structure-timeline .d-flex {
                flex-direction: column;
                align-items: center !important;
                text-align: center;
            }

            .timeline-left {
                margin-right: 0 !important;
                margin-bottom: 15px;
            }

            .timeline-left div {
                margin: 0 auto;
            }

            .timeline-left div:last-child {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .display-4 {
                font-size: 1.6rem !important;
            }

            .lead {
                font-size: 1.1rem !important;
            }

            .chairman-info h2 {
                font-size: 1.3rem !important;
            }

            .btn {
                width: 100%;
            }
        }

        /* Glassmorphism Effects */
        .bg-white-10 {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        /* Custom Scrollbar */
        .research-committee-section ::-webkit-scrollbar {
            width: 5px;
        }

        .research-committee-section ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .research-committee-section ::-webkit-scrollbar-thumb {
            background: #d1143e;
            border-radius: 10px;
        }

        /* Gradient Text Effect */
        .gradient-text {
            background: linear-gradient(135deg, #17345a, #2a5a7a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* .mission-vision-area {
                                                            background: #d1143e14;
                                                        } */
        /* Simple & Clean Research Programs Section */
        .research-programs-section .card {
            transition: all 0.2s ease;
        }

        .research-programs-section .card:hover {
            box-shadow: 0 8px 25px rgba(23, 52, 90, 0.06) !important;
        }

        .research-programs-section .d-flex:hover div:first-child {
            transform: scale(1.05);
            transition: transform 0.2s ease;
        }

        @media (max-width: 768px) {
            .research-programs-section h2 {
                font-size: 1.5rem !important;
            }

            .research-programs-section .col-md-4 {
                margin-bottom: 15px;
            }

            .research-programs-section .col-md-4:last-child {
                margin-bottom: 0;
            }
        }

        @media (max-width: 576px) {
            .research-programs-section .d-flex {
                justify-content: center;
            }
        }

        /* PhD Research Disciplines - Custom Icons */
        .marketplace-categories-content ul {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
            padding: 0;
            list-style: none;
        }

        .marketplace-categories-content ul li {
            flex: 0 0 calc(20% - 20px);
            margin: 0 10px 20px;
            transition: all 0.3s ease;
        }

        .single-categories-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
            border: 1px solid rgba(23, 52, 90, 0.03);
        }

        .single-categories-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(23, 52, 90, 0.06);
            border-color: rgba(228, 161, 27, 0.2);
        }

        .single-categories-box .text h3 {
            font-size: 15px;
            margin-bottom: 0;
            font-weight: 600;
            color: #17345a;
        }

        .single-categories-box .text h3 a {
            color: #17345a;
            text-decoration: none;
        }

        .single-categories-box .text h3 a:hover {
            color: var(--thm-base);
        }

        .single-categories-box .icon i {
            transition: all 0.3s ease;
        }

        .single-categories-box:hover .icon i {
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .marketplace-categories-content ul li {
                flex: 0 0 calc(25% - 20px);
            }
        }

        @media (max-width: 992px) {
            .marketplace-categories-content ul li {
                flex: 0 0 calc(33.33% - 20px);
            }
        }

        @media (max-width: 768px) {
            .marketplace-categories-content ul li {
                flex: 0 0 calc(50% - 20px);
            }

            .single-categories-box {
                padding: 12px 15px;
            }
        }

        @media (max-width: 480px) {
            .marketplace-categories-content ul li {
                flex: 0 0 calc(100% - 20px);
            }
        }

        /* Recent Publications Section */
        .recent-publications-section {
            background: #fafbfc;
        }

        .publication-item {
            transition: all 0.3s ease;
            border: 1px solid rgba(23, 52, 90, 0.03);
        }

        .publication-item:hover {
            transform: translateX(5px);
            box-shadow: 0 8px 25px rgba(23, 52, 90, 0.06) !important;
            background: #fff;
        }

        .publication-item h5 {
            position: relative;
            padding-bottom: 8px;
            border-bottom: 1px solid rgba(228, 161, 27, 0.15);
        }

        .publication-item a:hover {
            text-decoration: underline;
            color: #17345a !important;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .recent-publications-section h2 {
                font-size: 1.5rem !important;
            }

            .publication-item {
                padding: 20px !important;
            }

            .publication-item h5 {
                font-size: 1rem !important;
            }

            .publication-item p {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .recent-publications-section .d-flex {
                flex-direction: column;
                text-align: center;
            }

            .recent-publications-section .d-flex div:first-child {
                margin-right: 0 !important;
                margin-bottom: 15px;
            }

            .publication-item {
                padding: 18px !important;
            }
        }
        .Faculty-badge{
            background: #d1143e; color: white; border-radius: 50px; font-weight: 600;
        }
    </style>
@endsection
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Research And Development Cell</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Research And Development Cell</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nep-section bg-white">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="research-card text-center">
                        {{-- <div class="icon-box">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div> --}}

                        <h2 class="section-title text-start w-100 text-white">National Education Policy 2020</h2>

                        <p class="content-text text-white">
                            The National Education Policy 2020 provides the roadmap to boost quality research in higher
                            education.
                            As research serves as the backbone in improving the learning offered by Higher Education
                            Institutions,
                            our nation is on the front gear to tackle its societal challenges with robust higher education
                            that
                            focuses on research and innovation along with technology development.
                        </p>

                        <div class="mt-4 text-white">
                            <i class="fa fa-flask mr-2" style="color: white;"></i>
                            <strong>Research & Innovation Focus</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mission-vision-area">
        <div class="mission-vision-area-shape" style="background-image: url(assets/images/shape/thm-shape-1.png);">
        </div>
        <div class="container">
            <!-- Row 1: Our Institution -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="mission-vision-content-box">
                        <div class="sec-title-style2">
                            <div class="sub-title">
                                <h5>Our Institution</h5>
                            </div>
                            <h2>Manipur International<br> University</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top-text">
                                <div class="quote-icon">
                                    <span class="icon-quote-2"></span>
                                </div>
                                <div class="text">
                                    <p>Established as a research oriented institution with a strong ambition to augment the
                                        research turf that compliments and provide the required thrust to the numerous
                                        scholars who lack logistics support.
                                    </p>
                                </div>
                            </div>
                            <div class="bottom-text">
                                <p>Our vision is well aligned with the idea postulated by <strong>NEP 2020</strong>.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mission-vision-img-box">
                        <div class="mission-vision-img-box__inner">
                            <img src="{{ asset('/assets/images/web-image/about--image.jpg') }}"
                                alt="Manipur International University">
                        </div>
                        <div class="icon">
                            <span class="icon-mountains"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="mission-vision-space-box">
                        <div class="dotted-line">
                            <img src="assets/images/icon/dotted-line.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Vision -->
            <div class="row">
                <div class="col-xl-6 order-2">
                    <div class="mission-vision-img-box mission-vision-img-box--style2">
                        <div class="mission-vision-img-box__inner mission-vision-img-box__inner--style2">
                            <img src="{{ asset('/assets/images/web-image/about--image.jpg') }}" alt="Research Vision">
                        </div>
                        <div class="icon">
                            <span class="icon-vision"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-1">
                    <div class="mission-vision-content-box">
                        <div class="sec-title-style2">
                            <div class="sub-title">
                                <h5>Our Vision</h5>
                            </div>
                            <h2>Research<br> Excellence</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text1">
                                <p>To put in place a robust mechanism for developing and strengthening the research
                                    ecosystem within HEIs, aligned with the provisions of NEP-2020.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="mission-vision-space-box">
                        <div class="dotted-line">
                            <img src="{{ asset('/assets/images/icon/vision.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3: Mission -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="mission-vision-content-box">
                        <div class="sec-title-style2">
                            <div class="sub-title">
                                <h5>Our Mission</h5>
                            </div>
                            <h2>Strategic<br> Goals</h2>
                        </div>
                        <div class="inner-content">
                            <ul class="mt-3">
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow-3"></span>
                                    </div>
                                    <p>To create a conducive environment for enhanced research productivity.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow-3"></span>
                                    </div>
                                    <p>To encourage collaboration across industry, government, community-based
                                        organizations, and agencies at local, national and international levels.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow-3"></span>
                                    </div>
                                    <p>To facilitate greater access to research through mobilization of resources and
                                        funding.</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mission-vision-img-box">
                        <div class="mission-vision-img-box__inner">
                            <img src="{{ asset('/assets/images/web-image/mission.jpg') }}" alt="Research Mission">
                        </div>
                        <div class="icon">
                            <span class="icon-target"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="research-committee-section py-5">
        <div class="container">
            <!-- Section Header with Modern Badge -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="section-title-wrapper mb-3 mb-md-0">
                            <div class="d-flex align-items-center">
                                <div class="title-icon me-3 mr-3" style="">
                                    <i class="fa fa-flask fa-3x text-white"></i>
                                </div>
                                <div>
                                    <h1 class="section-title text-start w-100 text-dark">Research Committee</h1>
                                    <div class="d-flex align-items-center mt-2">
                                        <span class="badge Faculty-badge mr-2 px-4 py-2"
                                            style="">
                                            <i class="fa fa-check-circle"></i> Faculty Research Committee
                                        </span>
                                        <span class="badge px-4 py-2"
                                            style="background: rgba(23,52,90,0.08); color: #17345a; border-radius: 50px; font-weight: 500;">
                                            <i class="fa fa-university"></i> Pro VC Office
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="academic-year-badge">
                            <div class="px-4 py-3 text-center"
                                style="background: #f8f9fc; border-radius: 15px; border: 1px dashed #17345a;">
                                <small class="text-muted d-block">Academic Session</small>
                                <span class="font-weight-bold" style="color: #17345a; font-size: 1.2rem;">2025-26</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="row">
                <!-- Left Column - Main Description & Chairman Card -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="row">
                        <!-- Description Card -->
                        <div class="col-12 mb-4">
                            <div class="card border-0 h-100"
                                style="border-radius: 30px; background: linear-gradient(145deg, #ffffff, #f9fbff); box-shadow: 0 20px 40px rgba(0,0,0,0.03);">
                                <div class="card-body p-4 p-xl-5">
                                    <!-- Quote Icon -->
                                    <div class="mb-4">
                                        <span
                                            style="font-size: 3rem; color: rgba(228,161,27,0.15); font-family: serif;">"</span>
                                    </div>

                                    <p class="lead mb-4"
                                        style="font-size: 1.3rem; line-height: 1.7; color: #2c3e50; font-weight: 400;">
                                        The overall progression of research works falls strictly under the purview of
                                        <span class="font-weight-bold px-3 py-1"
                                            style="background: rgba(228,161,27,0.12); color: #17345a; border-radius: 50px; display: inline-block; margin: 0 2px;">
                                            FRC (Faculty Research Committee)
                                        </span>
                                        headed by the Chairman who also serves as the Pro VC of the University.
                                    </p>

                                    <div class="d-flex align-items-center mt-4 pt-3 border-top"
                                        style="border-color: rgba(23,52,90,0.05) !important;">
                                        <div class="mr-4 pr-4" style="border-right: 2px solid rgba(228,161,27,0.3);">
                                            <i class="fa fa-users fa-2x" style="color: #d1143e;"></i>
                                        </div>
                                        <p class="mb-0 font-weight-medium" style="color: #17345a; font-size: 1.1rem;">
                                            Other committee members are represented by the Deans of respective schools of
                                            the University.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chairman Card - Hero Style -->
                        <div class="col-12">
                            <div class="card border-0"
                                style="border-radius: 30px; background: linear-gradient(135deg, #17345a, #1f4468); box-shadow: 0 30px 50px rgba(23,52,90,0.25); overflow: hidden;">
                                <!-- Decorative Wave -->
                                <div
                                    style="position: absolute; top: 0; right: 0; width: 200px; height: 200px; background: rgba(228,161,27,0.1); border-radius: 50%; transform: translate(50%, -50%);">
                                </div>

                                <div class="card-body p-4 p-xl-5 position-relative" style="z-index: 2;">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="d-flex align-items-center">

                                                <div class="chairman-info">
                                                    <small class="text-white-50 d-block mb-2"
                                                        style="letter-spacing: 2px;">CHAIRMAN, FRC</small>
                                                    <h2 class="text-white font-weight-bold mb-2"
                                                        style="font-size: 2rem; text-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                                                        Prof. Potsangbam Kumar Singh
                                                    </h2>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <span class="badge mr-2 mb-2 px-4 py-2"
                                                            style="background: #d1143e; color: white; border-radius: 50px; font-weight: 700; font-size: 0.95rem;">
                                                            <i class="fa fa-trophy"></i> Pro Vice-Chancellor
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-4 mt-md-0">
                                            <div class="text-md-right">
                                                <div class="d-inline-block p-3"
                                                    style="background: rgba(255,255,255,0.05); border-radius: 20px; backdrop-filter: blur(10px);">
                                                    <span class="text-white-50 d-block small">Since</span>
                                                    <span class="text-white font-weight-bold"
                                                        style="font-size: 1.5rem;">2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Right Column - Committee Structure & Programs -->
                <div class="col-lg-4">
                    <div class="row">
                        <!-- Committee Structure Card -->
                        <div class="col-12 mb-4">
                            <div class="card border-0 h-100"
                                style="border-radius: 30px; background: #ffffff; box-shadow: 0 20px 40px rgba(0,0,0,0.03); border: 1px solid rgba(23,52,90,0.03);">
                                <div class="card-body p-4 p-xl-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="mr-3"
                                            style="width: 50px; height: 50px; background: rgba(228,161,27,0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa fa-sitemap fa-2x" style="color: #d1143e;"></i>
                                        </div>
                                        <h3 class="font-weight-bold mb-0" style="color: #17345a; font-size: 1.5rem;">
                                            Committee Structure</h3>
                                    </div>

                                    <!-- Timeline Style Structure -->
                                    <div class="structure-timeline mt-4">
                                        <!-- Leadership Item -->
                                        <div class="d-flex mb-4">
                                            <div class="timeline-left mr-4">
                                                <div
                                                    style="width: 40px; height: 40px; background: #17345a; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="fa fa-star text-white"></i>
                                                </div>
                                                <div
                                                    style="width: 2px; height: 40px; background: rgba(23,52,90,0.1); margin-left: 19px; margin-top: 8px;">
                                                </div>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block mb-1">Leadership</small>
                                                <span class="font-weight-bold"
                                                    style="color: #17345a; font-size: 1.1rem;">Chairman (Pro VC)</span>
                                            </div>
                                        </div>

                                        <!-- Members Item -->
                                        <div class="d-flex mb-4">
                                            <div class="timeline-left mr-4">
                                                <div
                                                    style="width: 40px; height: 40px; background: #d1143e; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="fa fa-users text-white"></i>
                                                </div>
                                                <div
                                                    style="width: 2px; height: 40px; background: rgba(23,52,90,0.1); margin-left: 19px; margin-top: 8px;">
                                                </div>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block mb-1">Members</small>
                                                <span class="font-weight-bold"
                                                    style="color: #17345a; font-size: 1.1rem;">Deans of respective
                                                    schools</span>
                                            </div>
                                        </div>

                                        <!-- Scope Item -->
                                        <div class="d-flex">
                                            <div class="timeline-left mr-4">
                                                <div
                                                    style="width: 40px; height: 40px; background: rgba(23,52,90,0.6); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="fa fa-eye text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block mb-1">Scope</small>
                                                <span class="font-weight-bold"
                                                    style="color: #17345a; font-size: 1.1rem;">Overall research progression
                                                    oversight</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Research Programs Card -->
                        {{-- <div class="col-12">
                        <div class="card border-0" style="border-radius: 30px; background: linear-gradient(145deg, #fff9ed, #ffffff); border: 1px solid rgba(228,161,27,0.15);">
                            <div class="card-body p-4 p-xl-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="mr-3" style="width: 50px; height: 50px; background: #d1143e; border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px rgba(228,161,27,0.25);">
                                        <i class="fa fa-graduation-cap fa-2x text-white"></i>
                                    </div>
                                    <h3 class="font-weight-bold mb-0" style="color: #17345a; font-size: 1.5rem;">Research Programs</h3>
                                </div>

                                <p class="text-muted mb-4" style="font-size: 1.05rem; line-height: 1.6;">
                                    The main research program is formally open for:
                                </p>

                                <div class="program-grid">
                                    <!-- Post-doctoral Program -->
                                    <div class="d-flex align-items-center mb-3 p-3" style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); border: 1px solid rgba(23,52,90,0.05);">
                                        <div class="mr-3">
                                            <span style="width: 45px; height: 45px; background: rgba(228,161,27,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa fa-certificate fa-lg" style="color: #d1143e;"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="font-weight-bold d-block" style="color: #17345a;">Post-doctoral program</span>
                                            <small class="text-muted">Advanced research fellowship</small>
                                        </div>
                                    </div>

                                    <!-- Doctoral Program -->
                                    <div class="d-flex align-items-center p-3" style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); border: 1px solid rgba(23,52,90,0.05);">
                                        <div class="mr-3">
                                            <span style="width: 45px; height: 45px; background: rgba(23,52,90,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fa fa-flask fa-lg" style="color: #17345a;"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="font-weight-bold d-block" style="color: #17345a;">Doctoral program</span>
                                            <small class="text-muted">PhD in multiple disciplines</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Stats -->
                                <div class="mt-4 pt-3 text-center">
                                    <span class="badge px-4 py-2" style="background: #17345a; color: white; border-radius: 50px; font-size: 0.9rem;">
                                        <i class="fa fa-clock-o"></i> Applications Open 2025-26
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card border-0"
                        style="border-radius: 30px; background: #1e436726; border: 1px solid rgba(228,161,27,0.15);">
                        <div class="card-body p-4 p-xl-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="mr-3"
                                    style="width: 50px; height: 50px; background: #d1143e; border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px rgba(228,161,27,0.25);">
                                    <i class="fa fa-graduation-cap fa-2x text-white"></i>
                                </div>
                                <h3 class="font-weight-bold mb-0" style="color: #17345a; font-size: 1.5rem;">
                                    Research
                                    Programs</h3>
                            </div>

                            <p class="text-muted mb-4" style="font-size: 1.05rem; line-height: 1.6;">
                                The main research program is formally open for:
                            </p>

                            <div class="program-grid">
                                <!-- Post-doctoral Program -->
                                <div class="d-flex align-items-center mb-3 p-3"
                                    style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); border: 1px solid rgba(23,52,90,0.05);">
                                    <div class="mr-3">
                                        <span
                                            style="width: 45px; height: 45px; background: rgba(228,161,27,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa fa-certificate fa-lg" style="color: #d1143e;"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold d-block" style="color: #17345a;">Post-doctoral
                                            program</span>
                                        <small class="text-muted">Advanced research fellowship</small>
                                    </div>
                                </div>

                                <!-- Doctoral Program -->
                                <div class="d-flex align-items-center p-3"
                                    style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); border: 1px solid rgba(23,52,90,0.05);">
                                    <div class="mr-3">
                                        <span
                                            style="width: 45px; height: 45px; background: rgba(23,52,90,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                            <i class="fa fa-flask fa-lg" style="color: #17345a;"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold d-block" style="color: #17345a;">Doctoral
                                            program</span>
                                        <small class="text-muted">PhD in multiple disciplines</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Stats -->
                            <div class="mt-4 pt-3 text-center">
                                <span class="badge px-4 py-2"
                                    style="background: #17345a; color: white; border-radius: 50px; font-size: 0.9rem;">
                                    <i class="fa fa-clock-o"></i> Applications Open 2025-26
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Academic Info Bar -->

        </div>
    </section>
    <section class="research-programs-section py-5 mb-5">
        <div class="container">
            <!-- Simple Section Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div
                            style="width: 50px; height: 50px; background: #17345a; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fa fa-graduation-cap fa-2x text-white"></i>
                        </div>
                        <div>
                            <h2 class="font-weight-bold mb-0" style="">
                                Research Programs & Disciplines
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post-doctoral Programs Card - Simple & Clean -->
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card border-0" style="border-radius: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                        <!-- Card Header -->
                        <div class="card-header bg-transparent border-0 pt-4 px-4">
                            <div class="d-flex align-items-center">
                                <span class="badge mr-3 px-3 py-2"
                                    style="background: var(--thm-base); color: white; font-weight: 600; border-radius: 50px;">
                                    <i class="fa fa-certificate"></i> Post-doctoral Programs
                                </span>
                                <span class="small text-muted">Doctoral Fellowships</span>
                            </div>
                        </div>

                        <!-- Card Body - Programs List -->
                        <div class="card-body px-4 pb-4">
                            <div class="row">
                                <!-- Doctor of Science -->
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <div
                                            style="width: 40px; height: 40px; background: rgba(23,52,90,0.05); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                                            <i class="fa fa-flask" style="color: #17345a;"></i>
                                        </div>
                                        <div>
                                            <span class="d-block font-weight-bold" style="color: #17345a;">D.Sc.</span>
                                            <small class="text-muted">Doctor of Science</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Doctor of Literature -->
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <div
                                            style="width: 40px; height: 40px; background: rgba(228,161,27,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                                            <i class="fa fa-book" style="color: var(--thm-base);"></i>
                                        </div>
                                        <div>
                                            <span class="d-block font-weight-bold" style="color: #17345a;">D.Litt.</span>
                                            <small class="text-muted">Doctor of Literature</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Doctor of Law -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div
                                            style="width: 40px; height: 40px; background: rgba(23,52,90,0.05); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                                            <i class="fa fa-balance-scale" style="color: #17345a;"></i>
                                        </div>
                                        <div>
                                            <span class="d-block font-weight-bold" style="color: #17345a;">LL.D.</span>
                                            <small class="text-muted">Doctor of Law</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Simple Divider -->
                            <hr class="my-3" style="border-color: rgba(0,0,0,0.05);">

                            <!-- Footer Info -->
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fa fa-clock-o" style="color: var(--thm-base);"></i> Duration: 2-3 Years
                                </small>
                                <small class="text-muted">
                                    <i class="fa fa-check-circle" style="color: #17345a;"></i> UGC Approved
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="marketplace-categories-area bg-white">
        <div class="container">
            <div class="marketplace-categories__top-title">
                <div class="sec-title-style5 text-left">
                    <h2>PhD Research Disciplines</h2>
                    <div class="sub-title">
                        <div class="line left"></div>
                        <p>Our comprehensive PhD programs span across multiple disciplines, offering extensive research
                            opportunities in both scientific and humanities fields.</p>
                    </div>
                </div>
                {{-- <div class="btns-box">
                <a class="btn-one" href="#">
                    <span class="txt">All Disciplines</span>
                </a>
            </div> --}}
            </div>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Group A - Sciences & Technology -->
                    <div class="row mb-5">
                        <div class="col-12">
                            <h3 class="mb-4 font-weight-bold"
                                style="color: #17345a; border-left: 5px solid var(--thm-base); padding-left: 15px;">
                                <i class="fa fa-flask"></i> Group A - Sciences & Technology
                            </h3>
                        </div>
                        <div class="col-xl-12">
                            <div class="marketplace-categories-content">
                                <ul>
                                    <li class="wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Agriculture</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-leaf"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Bio-Chemistry</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-flask" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Biotechnology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-eyedropper"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Botany</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-pagelines" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Computer Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-desktop"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Chemistry</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-beaker" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Food Technology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-cutlery"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Zoology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-paw" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Environmental Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-tree"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1000ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Geology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-mountain" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Geography</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-globe"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Home Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-home" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Microbiology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-bug" style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Physics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-rocket" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Health Sciences</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-heartbeat"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Group B - Arts, Humanities & Social Sciences -->
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mb-4 font-weight-bold"
                                style="color: #17345a; border-left: 5px solid var(--thm-base); padding-left: 15px;">
                                <i class="fa fa-book"></i> Group B - Arts, Humanities & Social Sciences
                            </h3>
                        </div>
                        <div class="col-xl-12">
                            <div class="marketplace-categories-content">
                                <ul>
                                    <li class="wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Anthropology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-users" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Commerce</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-line-chart"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Disaster Management</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-exclamation-triangle"
                                                    style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Education</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-graduation-cap"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">English</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-language" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Economics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-usd" style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Fine Arts</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-paint-brush" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Fashion Technology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-scissors"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Journalism & Mass Comm</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-newspaper-o" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1000ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Hindi</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-pencil"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">History</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-clock-o" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Indian Languages</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-comment"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Law</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-gavel" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Library Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-book"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Linguistics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-language" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Mathematics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-calculator"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Management</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-briefcase" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Physical Education</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-futbol-o"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Performing Arts</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-music" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2000ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Political Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-university"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Psychology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-heart" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Philosophy</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-question-circle"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Statistics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-bar-chart" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Social Work</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-handshake-o"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Sociology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-group" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Theatre</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-film"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Tourism</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-plane" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Visual Arts</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-picture-o"
                                                    style="color: var(--thm-base); font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Yoga</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-smile-o" style="color: #17345a; font-size: 24px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recent-publications-section py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div
                            style="width: 50px; height: 50px; background: #17345a; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fa fa-file-text-o fa-2x text-white"></i>
                        </div>
                        <div>
                            <h2 class="font-weight-bold mb-0" style="color: #17345a; font-size: 1.8rem;">
                                Recent Publications
                            </h2>
                            <p class="text-muted mb-0 small">Peer-Reviewed Research Outputs</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publications List -->
            <div class="row">
                <div class="col-lg-10 col-xl-10">
                    <div class="publications-wrapper">

                        <!-- Publication 1 -->
                        <div class="publication-item mb-4 p-4"
                            style="background: #fff; border-radius: 12px; border-left: 4px solid var(--thm-base); box-shadow: 0 3px 12px rgba(0,0,0,0.03);">
                            <h5 class="font-weight-bold mb-2" style="color: #17345a; font-size: 1.1rem;">
                                Lajpharkapm Pinky Chanu, Ngangbam, A.K.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                Lakshmikanta Khundrakpam, Bijayalakshmi Devi Nongmaithem, Lenin Laishram, and Hanvinder Kaur
                                Sidhu.
                                <span class="font-italic">2025. Biochemical Characterization of Xanthomonas campestris pv.
                                    vesicatoria in Chilli Pepper (Capsicum chinense). Ecology, Environment and
                                    Conservation.</span>
                                31: S45-S50, ISSN (Print): 0971-765X, DOI:
                                <a href="http://doi.org/10.53550/EEC.2025.v31i02s.008" target="_blank"
                                    style="color: var(--thm-base); word-break: break-all;">
                                    http://doi.org/10.53550/EEC.2025.v31i02s.008
                                </a>
                            </p>
                        </div>

                        <!-- Publication 2 -->
                        <div class="publication-item mb-4 p-4"
                            style="background: #fff; border-radius: 12px; border-left: 4px solid #17345a; box-shadow: 0 3px 12px rgba(0,0,0,0.03);">
                            <h5 class="font-weight-bold mb-2" style="color: #17345a; font-size: 1.1rem;">
                                Moirangthem, M., Thokchom, R. and Singh, P. K.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                In vitro mass propagation of Cymbium eburneum from immature seed pods, Propagation of
                                Ornamental Plants, www.journal-pop.org
                                <span class="font-italic">ISSN 1311-9109, Impact Factor for 2024: 0.600, Scopus Database of
                                    Elsevier (Accepted)</span>
                            </p>
                        </div>

                        <!-- Publication 3 -->
                        <div class="publication-item mb-4 p-4"
                            style="background: #fff; border-radius: 12px; border-left: 4px solid var(--thm-base); box-shadow: 0 3px 12px rgba(0,0,0,0.03);">
                            <h5 class="font-weight-bold mb-2" style="color: #17345a; font-size: 1.1rem;">
                                Senthilkumar, S., Singh, P.K. and Rani, C.K.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                Thin layer chromatography (TLC) and antioxidant activity of ethanolic extract of <span
                                    class="font-italic">Acalypha indica</span> linn, International Journal of Science and
                                Research Archive, 15(01): 1600-1606, DOI:
                                <a href="https://doi.org/10.30574/ijsra.2025.15.1.1265" target="_blank"
                                    style="color: var(--thm-base); word-break: break-all;">
                                    https://doi.org/10.30574/ijsra.2025.15.1.1265
                                </a>
                            </p>
                        </div>

                        <!-- Publication 4 -->
                        <div class="publication-item mb-4 p-4"
                            style="background: #fff; border-radius: 12px; border-left: 4px solid #17345a; box-shadow: 0 3px 12px rgba(0,0,0,0.03);">
                            <h5 class="font-weight-bold mb-2" style="color: #17345a; font-size: 1.1rem;">
                                Awungashi Samshokwo Varekan, Harikumar Pallathadka and Yuhlung Cheithou Charles.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                2025. A Review on Traditional Indigenous Agricultural Practices of North East: With Special
                                Reference to Manipur and Nagaland, in <span class="font-italic">International Journal of
                                    Creative Research Thoughts (IJCRT), An International Open Access Peer-Reviewed, Refereed
                                    journal</span>, 13 (4), ISSN: 2320-2882.
                                <a href="http://www.ijcrrt.org" target="_blank" style="color: var(--thm-base);">
                                    www.ijcrrt.org
                                </a>
                            </p>
                        </div>

                        <!-- Publication 5 -->
                        <div class="publication-item mb-4 p-4"
                            style="background: #fff; border-radius: 12px; border-left: 4px solid var(--thm-base); box-shadow: 0 3px 12px rgba(0,0,0,0.03);">
                            <h5 class="font-weight-bold mb-2" style="color: #17345a; font-size: 1.1rem;">
                                Awungashi Samshokwo Varekan, Harikumar Pallathadka and Yuhlung Cheithou Charles.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                2025. A Review on Traditional Indigenous Agricultural Practices of North East: With Special
                                Reference to Manipur and Nagaland, in <span class="font-italic">International Journal of
                                    Creative Research Thoughts (IJCRT), An International Open Access Peer-Reviewed, Refereed
                                    journal</span>, 13 (4), ISSN: 2320-2882.
                                <a href="http://www.ijcrrt.org" target="_blank" style="color: var(--thm-base);">
                                    www.ijcrrt.org
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- View All Button -->
                    <div class="text-center mt-4">
                        <a href="#" class="btn px-5 py-2"
                            style="background: transparent; border: 2px solid #17345a; color: #17345a; border-radius: 50px; font-weight: 600;">
                            <i class="fa fa-arrow-circle-down"></i> View All Publications
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection

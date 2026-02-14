@extends('web.layouts.main')
@section('title', '| Blog')
@section('description', 'Blog')

@section('styles')
    <style>
        .custom-image {
            background-position: center;
        }

        .messageimage {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: -55px !important;
        }

        .text-start {
            text-align: start;
        }
    </style>
@endsection
@section('content')


    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url(/assets/images/about/about.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Recent Blogs </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> MIU Scholarship Policy </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <section class="blog-page-two">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="blog-page-two__content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-blog-style2">
                                    <div class="single-blog-style2__img-holder">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/blog/blog-v3-1.jpg') }}" class="img-fluid"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="single-blog-style2__text-holder">
                                        <div class="top">
                                            <div class="category-box">
                                                <div class="dot-box"></div>
                                                <p>Manipur International University</p>
                                            </div>
                                        </div>
                                        <h3 class="blog-title">
                                            <a
                                                href="/why-manipur-international-university-is-emerging-as-a-top-choice-for-higher-education-in-northeast-india">
                                                Why Manipur International University is Emerging...
                                            </a>
                                        </h3>
                                        <div class="text">
                                            <p>Choosing the right university is one of the most important decisions in a
                                                student’s life. With
                                                increasing competition and rapidly changin...</p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a
                                                    href="/why-manipur-international-university-is-emerging-as-a-top-choice-for-higher-education-in-northeast-india">
                                                    <span class="icon-right-arrow-1"></span>Read More
                                                </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li>
                                                        <span class="icon-calendar"></span>
                                                        <a
                                                            href="/why-manipur-international-university-is-emerging-as-a-top-choice-for-higher-education-in-northeast-india">Feb
                                                            14, 2026</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-blog-style2">
                                    <div class="single-blog-style2__img-holder">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/blog/blog-v3-1.jpg') }}" class="img-fluid"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="single-blog-style2__text-holder">
                                        <div class="top">
                                            <div class="category-box">
                                                <div class="dot-box"></div>
                                                <p>Awards</p>
                                            </div>
                                        </div>
                                        <h3 class="blog-title">
                                            <a href="/blog-details">
                                                Lorem ipsum dolor sit amet consectetur adipisicing...
                                            </a>
                                        </h3>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, impedit
                                                culpa dicta alias consequatur aspernatur...</p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a href="/blog-details">
                                                    <span class="icon-right-arrow-1"></span>Read More
                                                </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li>
                                                        <span class="icon-calendar"></span>
                                                        <a href="/blog-details">Nov 25, 2022</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-blog-style2">
                                    <div class="single-blog-style2__img-holder">
                                        <div class="inner">
                                            <img src="{{ asset('assets/images/blog/blog-v3-1.jpg') }}" class="img-fluid"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="single-blog-style2__text-holder">
                                        <div class="top">
                                            <div class="category-box">
                                                <div class="dot-box"></div>
                                                <p>Awards</p>
                                            </div>
                                        </div>
                                        <h3 class="blog-title">
                                            <a href="/blog-details">
                                                Lorem ipsum dolor sit amet consectetur adipisicing...
                                            </a>
                                        </h3>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, impedit
                                                culpa dicta alias consequatur aspernatur ex...</p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a href="/blog-details">
                                                    <span class="icon-right-arrow-1"></span>Read More
                                                </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li>
                                                        <span class="icon-calendar"></span>
                                                        <a href="/blog-details">Nov 25, 2022</a>
                                                    </li>
                                                </ul>
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


@endsection
@section('scripts')
@endsection

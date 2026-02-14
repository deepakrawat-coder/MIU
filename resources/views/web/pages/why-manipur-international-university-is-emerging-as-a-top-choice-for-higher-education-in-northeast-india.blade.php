 @extends('web.layouts.main')
@section('title', '| Why Manipur International University is Emerging as a Top Choice for Higher Education in Northeast India')
@section('description', 'Why Manipur International University is Emerging as a Top Choice for Higher Education in Northeast India')

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

        .breadcrumb-area-bg:before {
    opacity: 0.6 !important;
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
                            <h3 class="h3 text-white"> Why Manipur International University is Emerging as a Top Choice for Higher Education in Northeast India </h3>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Manipur International University  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Blog Details Page -->
    <section class="blog-details-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-9">
                    <div class="blog-details-page__content">
                        <div class="blog-details-page__content__inner">
                            <div class="blog-details-page__img-box">
                                <img src="{{ asset('assets/images/blog/blog-v3-1.jpg') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="my-4">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus assumenda doloribus
                                    reprehenderit architecto vitae natus soluta facere culpa! Sapiente, ipsam!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start Thm Sidebar Box-->
                <div class="col-xl-3 col-lg-5">
                    <div class="thm-sidebar-box">
                        <div class="single-sidebar-box">
                            <div class="sidebar-title">
                                <div class="dot-box"></div>
                                <h3>Popular Posts</h3>
                            </div>
                            <div class="sidebar-blog-post">
                                <ul class="blog-post">
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/images/blog/blog-v3-1.jpg') }}" class="img-fluid"
                                                    alt="image">
                                                <div class="overlay-content">
                                                    <a href="/blog-details">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <div class="post-date">
                                                    <span class="icon-date"></span> Nov 25, 2022
                                                </div>
                                                <h4>
                                                    <a href="/blog-details">
                                                        University of Educamb Award 4 ...
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/images/blog/blog-v3-1.jpg') }}" class="img-fluid"
                                                    alt="image">
                                                <div class="overlay-content">
                                                    <a href="/blog-details">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <div class="post-date">
                                                    <span class="icon-date"></span> Nov 14, 2022
                                                </div>
                                                <h4>
                                                    <a href="/blog-details">
                                                        A Core Commitment to Liberal Arts ...
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/images/blog/blog-v3-1.jpg') }}" class="img-fluid"
                                                    alt="image">
                                                <div class="overlay-content">
                                                    <a href="/blog-details">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <div class="post-date">
                                                    <span class="icon-date"></span> Sep 10, 2022
                                                </div>
                                                <h4>
                                                    <a href="/blog-details">
                                                        Top 10 Educamb Accomblishments ...
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Thm Sidebar Box-->

            </div>
        </div>
    </section>
    <!--End Blog Details Page -->


@endsection
@section('scripts')
@endsection

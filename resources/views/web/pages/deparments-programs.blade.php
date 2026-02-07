@extends('web.layouts.main')
@section('title', '| Departments')
@section('description', 'Manipur International University – Departments & Programs')

@section('styles')
    <style>
        /* Tabs */
        .pr-tab {
            display: none;
        }

        .pr-tab.active-tab {
            display: block;
        }

        /* ===== STICKY SIDEBAR ===== */
        @media (min-width: 992px) {

            .testimonial-style1-area,
            .testimonial-style1-area .row {
                overflow: visible !important;
            }

            .dept-col {
                position: relative;
            }

            .sticky-department {
                position: sticky;
                top: 120px;
                /* header height */
                z-index: 5;
            }
        }

        @media (max-width: 991px) {
            .sticky-department {
                position: static;
            }
        }
    </style>
@endsection

@section('content')

    <!-- BREADCRUMB -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url(assets/images/about/about.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Deparments and Programs</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Deparments and Programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DEPARTMENTS -->
    <section class="testimonial-style1-area py-5">
        <div class="container">
            <div class="row">

                <!-- LEFT SIDEBAR -->
                <div class="col-xl-3 col-lg-4 col-md-12 dept-col">
                    <div class="explore-future-tab__button sticky-department">

                        <div class="sec-title mb-3">
                            <h2>Our Departments</h2>
                            <p>Explore academic departments and their programs.</p>
                        </div>

                        <ul class="tab-btns list-unstyled">
                            <li class="tab-btn active-btn" data-tab="#students">
                                <h3>Arts & Humanities</h3>
                                <div class="round-box"></div>
                            </li>

                            <li class="tab-btn" data-tab="#graduate">
                                <h3>Science</h3>
                                <div class="round-box"></div>
                            </li>

                            <li class="tab-btn" data-tab="#transfer">
                                <h3>Commerce & Management</h3>
                                <div class="round-box"></div>
                            </li>

                            <li class="tab-btn" data-tab="#research">
                                <h3>Research & Doctoral</h3>
                                <div class="round-box"></div>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="pr-content">

                        <!-- TAB 1 -->
                        <div class="pr-tab active-tab" id="students">
                            <div class="row">
                                @for ($i = 1; $i <= 20; $i++)
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                                        <div class="single-program-box-style1">
                                            <div class="img-holder">
                                                <img src="assets/images/programs/program-1.jpg" class="img-fluid"
                                                    alt="">
                                                <div class="overlay-content">
                                                    <div class="inner">
                                                        <p>UG / PG</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-holder text-center">
                                                <h3>Animation</h3>
                                                <p>Arts & Performance</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- TAB 2 -->
                        <div class="pr-tab" id="graduate">
                            <p>Science department programs will appear here.</p>
                        </div>

                        <!-- TAB 3 -->
                        <div class="pr-tab" id="transfer">
                            <p>Commerce & Management programs listed here.</p>
                        </div>

                        <!-- TAB 4 -->
                        <div class="pr-tab" id="research">
                            <p>PhD & Research programs listed here.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const tabBtns = document.querySelectorAll(".tab-btn");
            const tabs = document.querySelectorAll(".pr-tab");

            tabBtns.forEach(btn => {
                btn.addEventListener("click", function() {

                    tabBtns.forEach(b => b.classList.remove("active-btn"));
                    tabs.forEach(t => t.classList.remove("active-tab"));

                    this.classList.add("active-btn");
                    document.querySelector(this.dataset.tab)
                        .classList.add("active-tab");
                });
            });

        });
    </script>
@endsection

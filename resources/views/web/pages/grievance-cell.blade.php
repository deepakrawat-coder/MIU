@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')
    <style>
        .page-header {
            background: #0d6efd;
            color: #fff;
            padding: 40px 0;
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 26px;
            font-weight: 600;
        }

        .info-boxss {
            border: 1px solid #dee2e6;
            padding: 25px;
            border-radius: 6px;
            background: #f8f9fa;
        }

        .info-boxss h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .download-btn {
            margin: 20px 0;
        }

        table thead th {
            background: #f1f3f5;
            font-weight: 600;
        }

        .page-header {
            background: linear-gradient(135deg, #083d77, #d1143e);
            padding: 70px 0 60px;
            color: #fff;
            position: relative;
        }

        .page-header::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 120px;
            height: 4px;
            background: #ffc107;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .page-title {
            font-size: 34px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .page-title span {
            font-weight: 400;
            font-size: 26px;
            display: block;
        }

        .term-text {
            font-size: 16px;
            margin-bottom: 8px;
            opacity: 0.95;
        }

        .approval-text {
            font-size: 14px;
            opacity: 0.9;
            max-width: 700px;
            /* margin: 0 auto; */
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 26px;
            }

            .page-title span {
                font-size: 20px;
            }
        }

        .cutompadding {
            padding-top: 70px;
        }

        .blog-style4-area {
            background: white;
        }

        table {
            border-collapse: separate;
        }

        table thead tr th {
            background: #d21841;
            color: white;
        }

        table tbody tr td {
            background: #17345a29;
            color: black;
        }
    </style>
@endsection
@section('content')
    <section class="page-header">
        <div class="container text-start cutompadding">

            <span class="badge badge-light mb-3 d-inline-block px-3 py-2">
                Student Support
            </span>

            <h1 class="page-title text-white">
                STUDENT GRIEVANCE REDRESSAL COMMITTEE
            </h1>

            <p class="approval-text text-white mt-3">
                Welcome to the Grievance Cell of Manipur International University.
                Our mission is to provide a fair and transparent mechanism for
                addressing and resolving grievances and complaints from students,
                faculty and staff.
            </p>

            <p class="approval-text text-white">
                The Grievance Cell is committed to upholding the principles of
                justice and ensuring that all grievances are handled with integrity
                and respect.
            </p>

        </div>
    </section>
@endsection
@section('scripts')
@endsection

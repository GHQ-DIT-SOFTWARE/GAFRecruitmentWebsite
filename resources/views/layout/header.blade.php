<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>GAF | Recruitment</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Car Outlet</a>
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>info@gafrecruitment.mil.gh</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> Print Summary</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i>Officer Cardets</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> SMI</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Recruits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1> -->
                    <img src="logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>

    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle {{ Request::is('about') ? 'active' : '' }}" data-bs-toggle="dropdown">
            Read More
        </a>
        <div class="dropdown-menu m-0">
            <a href="{{ url('/about') }}" class="dropdown-item {{ Request::is('about') ? 'active' : '' }}">How to Apply</a>
        </div>
    </div>

    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle {{ Request::is('officer-*') ? 'active' : '' }}" data-bs-toggle="dropdown">
            Officer Cadets
        </a>
        <div class="dropdown-menu m-0">
            <a href="{{ url('/officer-general-elegibility') }}" class="dropdown-item {{ Request::is('officer-general-elegibility') ? 'active' : '' }}">General Eligibility</a>
            <a href="{{ url('/regular-commision') }}" class="dropdown-item {{ Request::is('regular-commision') ? 'active' : '' }}">Regular Commission</a>
            <a href="{{ url('/short-service-commision') }}" class="dropdown-item {{ Request::is('short-service-commision') ? 'active' : '' }}">Short Service Commission</a>
            <a href="{{ url('/officer-phases') }}" class="dropdown-item {{ Request::is('officer-phases') ? 'active' : '' }}">Phases</a>
        </div>
    </div>

    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle {{ Request::is('smi-*') ? 'active' : '' }}" data-bs-toggle="dropdown">
            Special Medical Intake
        </a>
        <div class="dropdown-menu m-0">
            <a href="{{ url('/smi-general-elegibility') }}" class="dropdown-item {{ Request::is('smi-general-elegibility') ? 'active' : '' }}">General Eligibility</a>
            <a href="{{ url('/smi-entry-requirement') }}" class="dropdown-item {{ Request::is('smi-entry-requirement') ? 'active' : '' }}">Entry Requirement</a>
            <a href="{{ url('/smi-phases') }}" class="dropdown-item {{ Request::is('smi-phases') ? 'active' : '' }}">Phases</a>
        </div>
    </div>

    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle {{ Request::is('recruit-*') ? 'active' : '' }}" data-bs-toggle="dropdown">
            Recruits
        </a>
        <div class="dropdown-menu m-0">
            <a href="{{ url('/recruit-general-elegibility') }}" class="dropdown-item {{ Request::is('recruit-general-elegibility') ? 'active' : '' }}">General Eligibility</a>
            <a href="{{ url('/recruit-army-requirement') }}" class="dropdown-item {{ Request::is('recruit-army-requirement') ? 'active' : '' }}">Army Requirement</a>
            <a href="{{ url('/recruit-navy-requirement') }}" class="dropdown-item {{ Request::is('recruit-navy-requirement') ? 'active' : '' }}">Navy Requirement</a>
            <a href="{{ url('/recruit-airforce-requirement') }}" class="dropdown-item {{ Request::is('recruit-airforce-requirement') ? 'active' : '' }}">Airforce Requirement</a>
            <a href="{{ url('/recruit-medical-corp') }}" class="dropdown-item {{ Request::is('recruit-medical-corp') ? 'active' : '' }}">Medical Corp</a>
            <a href="{{ url('/recruit-phases') }}" class="dropdown-item {{ Request::is('recruit-phases') ? 'active' : '' }}">Phases</a>
        </div>
    </div>

    <a href="{{ url('/card-outline') }}" class="nav-item nav-link {{ Request::is('card-outline') ? 'active' : '' }}">Card Outlet</a>
    <a href="#" class="nav-item nav-link">My Application</a>
</div>

                    <a href="#" class="btn btn-danger rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Apply</a>
                </div>
            </nav>
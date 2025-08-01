@include('layout.header')
<style>
    .styled-underline {
                display: inline-block;
                position: relative;
                font-size: 1.8rem;
                color: #d49120; /* optional: primary text color */
                transition: all 0.3s ease;
            }
        
            .styled-underline::after {
                content: "";
                position: absolute;
                width: 60%;
                height: 4px;
                left: 20%;
                bottom: -8px;
                background-color: #d49120; /* Bootstrap Primary */
                border-radius: 2px;
                transition: all 0.3s ease;
            }
        
            .styled-underline:hover::after {
                width: 100%;
                left: 0;
            }
</style>


            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Recruit General Elegibility</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-primary">Recruit General Elegibility</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5 bg-light">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- Text Content -->
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h2 class="display-10 mb-4 styled-underline">Who is a Recruit?</h2>
                            <p class="lead text-secondary">
                                A <strong>recruit</strong> is an individual undergoing basic military training to become a soldier. Recruit training in the Ghana Armed Forces spans <strong>six (6) months</strong> and is both physically and psychologically intensive, aimed at transforming civilians into disciplined and mission-ready personnel.
                            </p>
        
                            <h5 class="mt-4 fw-semibold">Arms of Service:</h5>
                            <ul class="list-unstyled ps-3">
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> Army</li>
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> Navy</li>
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> Air Force</li>
                            </ul>
        
                            <h5 class="mt-4 fw-semibold">Recruit Training Covers:</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled ps-3">
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Physical Training</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Drill</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Skill at Arms</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Navigation</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled ps-3">
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Watermanship</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Military Tactics</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Field Craft</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Voice Procedure</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Image Section -->
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded shadow overflow-hidden border border-2 border-primary">
                            <img src="SELECTED PICTURES/DSC_6214.jpg" class="img-fluid w-100" alt="Recruit Training Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="SELECTED PICTURES/523D4389.jpg" class="img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h1 class="display-10 mb-4 styled-underline">General Elegibility</h1>
                            <p class="mb-4">
                                Eligible applicant must:

                                <br>a. Be a Ghanaian citizen by birth.
                                <br>b. Be of good character.
                                <br>c. Be not less than 18 years of age and not more than 29 years of age by 31 December 2021.
                                <br>d. Be medically fit by Armed Forces standards.
                                <br>e. Be not bonded.
                                <br>f. Be of minimum height of 1.68m (5’6”) for males and 1.60m (5’4”) for females.
                                <br>g. Have six (6) Credits (not less than Grade 6)at BECE including English and Mathematics.
                                <br>h. For Diploma categories, at least, C6 (WASSCE) or D(SSSCE) in 6 subjects including Core English and Core Mathematics .
                                <br>i. For Certificate categories, at least, D7 (WASSCE) or E(SSSCE) in 6 subjects including Core English and Core Mathematics .
                                <br>j. Must have completed the mandatory National Service or Internship. At least, one year post National Service or Internship/Rotation work experience is an added advantage.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- About End -->


      @include('layout.footer')

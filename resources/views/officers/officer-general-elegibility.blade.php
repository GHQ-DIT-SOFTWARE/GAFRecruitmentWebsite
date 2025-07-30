@include('layout.header')


            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Officer General Elegibility</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-primary">Officer General Elegibility</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h1 class="display-5 mb-4">Who is an officer cadet?</h1>
                            <p class="mb-4">
                                  An officer cadet is any person enlisted into the Ghana Military Academy to be trained to hold a position of leadership and command; "an officer is responsible for the lives of his men".
                                  <br>
                                  An officer cadet is a subordinate Officer. "Subordinate officer" means-
                                  <br>
                                      <br>Army Cadet
                                      <br>Naval Cadet
                                      <br>Flight Cadet
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="SELECTED PICTURES/r10.jpg" class="img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <style>
            .justify-text {
                text-align: justify;
            }
        </style>

        <!-- Features Start -->
        <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-5 mb-4">General Elegibility</h1>
                </div>
                <div class="row g-4">
                    <!-- General Criteria -->
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-university fa-4x text-primary"></i>
                            </div>
                            <h4>General Criteria</h4>
                            <p class="mb-4 justify-text">
                                ✔️ Be a Ghanaian citizen by birth <br>
                                ✔️ Be of good character <br>
                                ✔️ Age: 18 - 26 years by 06 June 2019 (Regular) or 02 May 2019 (SSC) <br>
                                ✔️ Medically fit by GAF standard <br>
                                ✔️ Not bonded <br>
                                ✔️ Not married (for Regular Officer only) <br>
                                ✔️ Height: Min. 1.68m (5’6”) males, 1.60m (5’4”) females
                            </p>
                        </div>
                    </div>

                    <!-- Academic Requirements -->
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-file-alt fa-4x text-primary"></i>
                            </div>
                            <h4>Academic Requirements</h4>
                            <p class="mb-4 justify-text">
                                ✔️ BECE: Six (6) Passes including English and Mathematics <br>
                                ✔️ WASSCE: Six (6) Credits (Not less than C6) incl. Core English & Core Mathematics <br>
                                ✔️ SSSCE: Six (6) Credits (Not less than D) incl. Core English & Core Mathematics <br>
                                ✔️ GCE ‘O’ Level: Five (5) Credits (Not less than 6) incl. English & Mathematics <br>
                                ✔️ GCE ‘A’ Level: Three (3) Credits (Not less than D) incl. General Paper <br>
                                ✔️ DEGREE: First Degree (Not below Second Class Lower) from a recognised University
                            </p>
                        </div>
                    </div>
                
                    <!-- Military Police Height -->
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-user fa-4x text-primary"></i>
                            </div>
                            <h4>Military Police Height</h4>
                            <p class="mb-4 justify-text">
                                ✔️ Males: Minimum height of 1.75m (5’9”) <br>
                                ✔️ Females: Minimum height of 1.70m (5’7”)
                            </p>
                        </div>
                    </div>
                
                </div>

            </div>
        </div>
        <!-- Features End -->

      @include('layout.footer')

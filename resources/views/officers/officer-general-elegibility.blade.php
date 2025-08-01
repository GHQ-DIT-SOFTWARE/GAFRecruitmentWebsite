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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Officer Cadet</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Officer Cadet</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- About Section -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h2 class="display-10 mb-4 styled-underline">Who is an Officer Cadet?</h2>
                    <p class="mb-4">
                        An officer cadet is any person enlisted into the Ghana Military Academy to be trained to hold a position of leadership and command; "an officer is responsible for the lives of his men".<br><br>
                        An officer cadet is a subordinate Officer. "Subordinate officer" means:
                        <br><br>✔️ Army Cadet
                        <br>✔️ Naval Cadet
                        <br>✔️ Flight Cadet
                    </p>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded overflow-hidden">
                    <img src="SELECTED PICTURES/New-Banner-2-max.jpg" class="img-fluid rounded w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Eligibility Tabs Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h2 class="display-10 mb-4 styled-underline">General Eligibility</h2>
        </div>

        <!-- Tab navigation -->
        <ul class="nav nav-tabs mb-4 justify-content-center" id="eligibilityTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="criteria-tab" data-bs-toggle="tab" data-bs-target="#criteria" type="button" role="tab">General Criteria</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="academic-tab" data-bs-toggle="tab" data-bs-target="#academic" type="button" role="tab">Academic Requirements</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="police-tab" data-bs-toggle="tab" data-bs-target="#police" type="button" role="tab">Military Police Height</button>
            </li>
        </ul>

        <style>
            .justify-text {
    text-align: justify;
}

        </style>

        <!-- Tab content -->
<!-- Tab content -->
<div class="tab-content" id="eligibilityTabContent">
    <!-- General Criteria -->
    <div class="tab-pane fade show active" id="criteria" role="tabpanel">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 justify-text">
                <h4 class="mb-3 text-center">General Criteria</h4>
                <ul class="list-unstyled mt-3">
                    <li>✔️ Be a Ghanaian citizen by birth</li>
                    <li>✔️ Be of good character</li>
                    <li>✔️ Age: 18 - 26 years by 06 June 2019 (Regular) or 02 May 2019 (SSC)</li>
                    <li>✔️ Medically fit by GAF standard</li>
                    <li>✔️ Not bonded</li>
                    <li>✔️ Not married (for Regular Officer only)</li>
                    <li>✔️ Height: Minimum 1.68m (5’6”) males, 1.60m (5’4”) females</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Academic Requirements -->
    <div class="tab-pane fade" id="academic" role="tabpanel">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 justify-text">
                <h4 class="mb-3 text-center">Academic Requirements</h4>
                <ul class="list-unstyled mt-3">
                    <li>✔️ BECE: Six (6) Passes including English and Mathematics</li>
                    <li>✔️ WASSCE: Six (6) Credits (C6 or better) incl. Core English & Core Mathematics</li>
                    <li>✔️ SSSCE: Six (6) Credits (Not less than D) incl. Core English & Core Mathematics</li>
                    <li>✔️ GCE ‘O’ Level: Five (5) Credits incl. English & Mathematics</li>
                    <li>✔️ GCE ‘A’ Level: Three (3) Credits incl. General Paper</li>
                    <li>✔️ DEGREE: First Degree (Not below Second Class Lower) from a recognised university</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Military Police Height -->
    <div class="tab-pane fade" id="police" role="tabpanel">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 justify-text">
                <h4 class="mb-3 text-center">Military Police Height Requirements</h4>
                <ul class="list-unstyled mt-3">
                    <li>✔️ Males: Minimum height of 1.75m (5’9”)</li>
                    <li>✔️ Females: Minimum height of 1.70m (5’7”)</li>
                </ul>
            </div>
        </div>
    </div>
</div>


    </div>
</div>

@include('layout.footer')

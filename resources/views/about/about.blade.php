@include('layout.header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">How To Apply</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">How To Apply</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Offer Start -->
<div class="container-fluid offer-section py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">How To Apply</h1>
            <p class="mb-0"> All applicants are required to carefully read through the entry requirements before applying. Take note of all the steps below.</p>
        </div>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs mb-4 justify-content-center" id="applyTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab">Getting Started</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab">Preparing to Apply</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab">Filling the Application</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab">Submission & Confirmation</button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="applyTabContent">
            <!-- Step 1-3 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                <div class="row g-4">
                    {{-- <div class="col-md-7">
                        <img src="SELECTED PICTURES/r1.jpg" class="img-fluid w-100 rounded" alt="">
                    </div> --}}
                    <div class="col-md-5">
                        <h2 class="mb-4">Getting Started</h2>
                        <ol>
                            <li>Acquire a scratch card at GH₵100.00 from selected post offices nationwide.</li>
                            <li>Scratch gently to reveal the “PIN” code. The scratch card can be used up to three times until a record is successfully submitted.</li>
                            <li>Log on to the recruitment portal at <a href="http://www.gafrecruitment.mil.gh" target="_blank">gafrecruitment.mil.gh</a> using Google Chrome or Mozilla Firefox.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Step 4-6 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel">
                <div class="row g-4">
                    {{-- <div class="col-md-7">
                        <img src="SELECTED PICTURES/r2.jpg" class="img-fluid w-100 rounded" alt="">
                    </div> --}}
                    <div class="col-md-5">
                        <h2 class="mb-4">Preparing to Apply</h2>
                        <ol>
                            <li>Read through the entry requirements thoroughly.</li>
                            <li>Ensure your phone’s Cell Broadcast Message Service is turned ON:
                                <ul>
                                    <li>Go to Messages &gt; Settings &gt; Cell Broadcast/Broadcast Message/CB Activation.</li>
                                    <li>Activate and set all channels to “RECEIVE”.</li>
                                </ul>
                            </li>
                            <li>Click the “Apply Now” tab on the portal to open the authentication page.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Step 7-9 -->
            <div class="tab-pane fade" id="tab3" role="tabpanel">
                <div class="row g-4">
                    {{-- <div class="col-md-7">
                        <img src="SELECTED PICTURES/r3.jpg" class="img-fluid w-100 rounded" alt="">
                    </div> --}}
                    <div class="col-md-5">
                        <h2 class="mb-4">Filling the Application</h2>
                        <ol>
                            <li>Enter your card Serial Number, PIN, and select your preferred Arm of Service and commission type, then click “Next”.</li>
                            <li>Fill in personal details:
                                <ul>
                                    <li><strong>Page 1:</strong> Choose desired vacancy and provide required info.</li>
                                    <li><strong>Page 2:</strong> Upload passport photo (170x150 pixels), provide valid email and phone.</li>
                                    <li><strong>Page 3:</strong> Provide core WASSCE results (Math & English), index number, and upload certificates (JPEG, max 1MB each).</li>
                                </ul>
                            </li>
                            <li>Click “Preview” to review your entries. Edit if needed before submission.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Step 10-11 -->
            <div class="tab-pane fade" id="tab4" role="tabpanel">
                <div class="row g-4">
                    {{-- <div class="col-md-7">
                        <img src="SELECTED PICTURES/r4.jpg" class="img-fluid w-100 rounded" alt="">
                    </div> --}}
                    <div class="col-md-5">
                        <h2 class="mb-4">Submission & Confirmation</h2>
                        <ol>
                            <li>Click “Submit” to complete your application. You’ll receive an instant SMS and email with a unique ID number.</li>
                            <li>Print and keep the final report. If lost, go to the portal, click “Print Summary,” and use your ID number to reprint.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

@include('layout.footer')

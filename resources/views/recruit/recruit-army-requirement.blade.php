@include('layout.header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Army Recruitment</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Army Recruitment</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <h1 class="display-5 mb-4">Army Recruitment</h1>

                <ul class="nav nav-tabs mb-3" id="armyTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab">General & Pay Corps</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="engineer-tab" data-bs-toggle="tab" data-bs-target="#engineer" type="button" role="tab">Engineer Corps</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="eme-tab" data-bs-toggle="tab" data-bs-target="#eme" type="button" role="tab">EME Corps</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signals-tab" data-bs-toggle="tab" data-bs-target="#signals" type="button" role="tab">Signals & IT</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab">Support Services</button>
                    </li>
                </ul>

                <div class="tab-content" id="armyTabsContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                        <p><strong>a. Infantry/Armour/Artillery/Military Police.</strong> In addition to the General Eligibility applicants must have 6 passes at WASSCE including English and Mathematics.</p>
                        <p><strong>b. Pay Corps.</strong> In addition to the General Eligibility applicants must have any of the following:</p>
                        <ul>
                            <li>Six Passes (not less than Grade E8 including English and Mathematics) at WASSCE with Accounting or Business options.</li>
                            <li>RSA Stage III in Accounting.</li>
                            <li>Diploma in Business Studies (Accounting Option).</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="engineer" role="tabpanel">
                        <p><strong>c. Engineer Corps.</strong> In addition to the General Eligibility applicants must have qualifications in:</p>
                        <ul>
                            <li>Electrical Works (GES, COTVET, City & Guilds)</li>
                            <li>Plant Mechanics/Fitters (GES, COTVET, City & Guilds)</li>
                            <li>Surveying (GES, COTVET, GSSM)</li>
                            <li>Painting/Sign Writing</li>
                            <li>Plumbing, Masonry, Carpentry</li>
                            <li>Welding, Steel Bending</li>
                            <li>Topo/Architectural Drawing</li>
                            <li>Plant Operators</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="eme" role="tabpanel">
                        <p><strong>d. Electrical and Mechanical Engineers Corps (EME).</strong></p>
                        <ul>
                            <li>Vehicle Mechanics</li>
                            <li>Electronics/Auto Electrician</li>
                            <li>Refrigeration and Air-Conditioning Technology</li>
                            <li>Metal Smith & Weapon Fitters</li>
                            <li>Office Machine & Industrial Mechanic</li>
                            <li>Driver Recovery Mechanics</li>
                            <li>Carpenter/Sprayer</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="signals" role="tabpanel">
                        <p><strong>e. Signals Corps</strong> and <strong>f. Information Technology (IT)</strong></p>
                        <ul>
                            <li>Operations Group</li>
                            <li>Radio Technician</li>
                            <li>Line Technician</li>
                            <li>Network, Database Admin</li>
                            <li>Programming, Web Design</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="support" role="tabpanel">
                        <p><strong>g. Supply and Transport Corps</strong> to <strong>k. Education Corps</strong></p>
                        <ul>
                            <li>Drivers, Storemen, Firemen</li>
                            <li>Photographers, PR Officers</li>
                            <li>Tailors, Ammunition Technicians</li>
                            <li>Clerks, Education Officers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('layout.footer')

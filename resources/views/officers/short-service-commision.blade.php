@include('layout.header')

<!-- Breadcrumb -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Short Service Requirements</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Short Service Requirements</li>
        </ol>    
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Main Content -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Tabs Content -->
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <h2 class="mb-4">Army / Navy / Air Force Roles</h2>

                <!-- Tab Navigation -->
                <ul class="nav nav-tabs mb-4" id="requirementTabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="eme-tab" data-bs-toggle="tab" data-bs-target="#eme" type="button" role="tab">EME Corps</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="legal-tab" data-bs-toggle="tab" data-bs-target="#legal" type="button" role="tab">Legal</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical" type="button" role="tab">Medical</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="chaplain-tab" data-bs-toggle="tab" data-bs-target="#chaplain" type="button" role="tab">Chaplains</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="imam-tab" data-bs-toggle="tab" data-bs-target="#imam" type="button" role="tab">Imams</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="requirementTabsContent">
                    <!-- EME -->
                    <div class="tab-pane fade show active" id="eme" role="tabpanel">
                        <h5>Electrical and Mechanical Engineers (EME Corps)</h5>
                        <p>Must not be more than 30 years by 02 May 2019. Requires First & Master’s Degree/Postgraduate Diploma in:</p>
                        <ul>
                            <li>Agricultural Engineering</li>
                            <li>Material Engineering</li>
                            <li>Technology (Automobile)</li>
                            <li>Electrical Engineering</li>
                            <li>Electronics Engineering</li>
                            <li>Mechanical Engineering</li>
                        </ul>
                    </div>

                    <!-- Legal -->
                    <div class="tab-pane fade" id="legal" role="tabpanel">
                        <h5>Legal Officers</h5>
                        <p>Must not be more than 30 years by 02 May 2019. Required qualifications:</p>
                        <ul>
                            <li>LLB (Bachelor of Laws)</li>
                            <li>BL (Barrister at Law) Certificate</li>
                            <li>3 years post-call work experience and Pupilage</li>
                        </ul>
                    </div>

                    <!-- Medical -->
                    <div class="tab-pane fade" id="medical" role="tabpanel">
                        <h5>Medical & Health Professionals</h5>
                        <ul>
                            <li><strong>Medical Specialist</strong>: MB ChB/BDS + Fellowship (GCPS/WACS/WACP). Max age: 40-45</li>
                            <li><strong>Medical Officer / Dental Surgeon</strong>: MB ChB/BDS + 1 year experience. Max age: 35</li>
                            <li><strong>Midwifery Officer</strong>: BSc Midwifery + 3 years experience. Max age: 33</li>
                            <li><strong>Physician Assistant</strong>: BSc PA + 3 years experience. Max age: 33</li>
                            <li><strong>Audiologist</strong>: MSc Audiology + 1 year experience. Max age: 33</li>
                            <li><strong>Specialized Nurses</strong>: RGN + Cert in Critical/Surgical/etc. + 2 years experience</li>
                            <li><strong>Nursing Tutor</strong>: MSc/MPhil Nursing + Teaching cert. Max age: 35</li>
                        </ul>
                    </div>

                    <!-- Chaplain -->
                    <div class="tab-pane fade" id="chaplain" role="tabpanel">
                        <h5>Chaplains</h5>
                        <ul>
                            <li>BA in Theology/Religion</li>
                            <li>Ordained Minister (Methodist, Presbyterian, etc.)</li>
                            <li>4 years pastoral experience</li>
                            <li>Fluency in English and a local language</li>
                            <li>Max age: 35</li>
                        </ul>
                    </div>

                    <!-- Imam -->
                    <div class="tab-pane fade" id="imam" role="tabpanel">
                        <h5>Imams</h5>
                        <ul>
                            <li>Degree in Islamic Theology</li>
                            <li>Alim Phedeen qualification</li>
                            <li>Fluent in Arabic & English (spoken and written)</li>
                            <li>4 years of recognized Islamic service</li>
                            <li>Max age: 35</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

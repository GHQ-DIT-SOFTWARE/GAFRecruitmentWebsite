@include('layout.header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Navy Recruitment</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Navy Recruitment</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-start">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <h1 class="display-5 mb-4">Navy Recruitment</h1>

                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs mb-4" id="navyTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="exec-tab" data-bs-toggle="tab" data-bs-target="#executive" type="button" role="tab">Executive Branch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="supply-tab" data-bs-toggle="tab" data-bs-target="#supply" type="button" role="tab">Supply & Secretarial</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tech-tab" data-bs-toggle="tab" data-bs-target="#technical" type="button" role="tab">Technical Branch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pt-tab" data-bs-toggle="tab" data-bs-target="#physical" type="button" role="tab">Physical Training</button>
                    </li>
                </ul>

                <!-- Tabs Content -->
                <div class="tab-content" id="navyTabContent">
                    <!-- Executive -->
                    <div class="tab-pane fade show active" id="executive" role="tabpanel">
                        <p><strong>Executive Branch</strong></p>
                        <ul>
                            <li>Boatswains Mate</li>
                            <li>Radar Plotters</li>
                            <li>Wireless Telegraphist</li>
                        </ul>
                    </div>

                    <!-- Supply & Secretarial -->
                    <div class="tab-pane fade" id="supply" role="tabpanel">
                        <p><strong>Writer (General Duties)</strong></p>
                        <ul>
                            <li>6 Credits at WASSCE incl. English & Maths</li>
                            <li>Ghana Commercial Exam Cert Stage II</li>
                            <li>Diploma in MS Office</li>
                            <li>Stenographer GD II</li>
                        </ul>
                        <p><strong>Writer (Pay)</strong></p>
                        <ul>
                            <li>6 Credits incl. English, Maths (Accounting or Business)</li>
                            <li>RSA III in Accounting</li>
                            <li>Diploma in Business Studies (Accounting)</li>
                        </ul>
                        <p><strong>Stores</strong>, <strong>Cooks/Stewards</strong>, <strong>Tailors</strong> - Similar breakdowns...</p>
                    </div>

                    <!-- Technical -->
                    <div class="tab-pane fade" id="technical" role="tabpanel">
                        <p><strong>General Requirement:</strong> Certificate in Computing/IT from recognized institution</p>

                        <p><strong>Engineering Artificers & Mechanics</strong></p>
                        <ul>
                            <li>WASSCE Science Option, Credit in English & Maths</li>
                            <li>HND Mechanical Engineering</li>
                            <li>Marine Engine Mechanics Cert</li>
                            <li>City & Guilds / GES Certs in Mech. Eng.</li>
                        </ul>

                        <p><strong>Electrical & Weapon Artificers</strong></p>
                        <p><strong>Shipwrights</strong>, <strong>Radio Artificers</strong>, <strong>Technicians</strong>... continue similarly</p>
                    </div>

                    <!-- Physical Training -->
                    <div class="tab-pane fade" id="physical" role="tabpanel">
                        <ul>
                            <li>6 Credits at WASSCE incl. English & Mathematics</li>
                            <li>Skilled sportsman in at least two sports</li>
                            <li>Must show participation at district/regional level</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('layout.footer')

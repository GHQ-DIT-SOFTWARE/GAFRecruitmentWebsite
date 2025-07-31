@include('layout.header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Officer Regular Commission</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Officer Regular Commission</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Officer Commission Details -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp">
            <h1 class="display-5">Army Branches & Qualifications</h1>
            <p>All applicants must meet general eligibility and possess the following academic qualifications specific to each corps.</p>
        </div>

        <!-- Tabs Nav -->
        <ul class="nav nav-tabs mb-4 justify-content-center" id="armyTab" role="tablist">
            @php
                $tabs = [
                    'infantry' => 'Infantry/Armour/Artillery/MP',
                    'signal' => 'Signal Corps',
                    'engineer' => 'Engineer Corps',
                    'eme' => 'EME Corps',
                    'ordnance' => 'Ordnance Service',
                    'supply' => 'Supply & Transport',
                    'pay' => 'Forces Pay Corps',
                    'it' => 'Information Technology',
                    'education' => 'Education Corps',
                    'pr' => 'Public Relations',
                    'pt' => 'Physical Training',
                    'band' => 'Band',
                    'records' => 'Records Office',
                ];
            @endphp
            @foreach ($tabs as $key => $label)
                <li class="nav-item" role="presentation">
                    <button class="nav-link @if ($loop->first) active @endif" id="{{ $key }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $key }}" type="button" role="tab">
                        {{ $label }}
                    </button>
                </li>
            @endforeach
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="armyTabContent">
            <div class="tab-pane fade show active" id="infantry" role="tabpanel">
                <h4>Infantry, Armour, Artillery, Military Police</h4>
                <p>In addition to general eligibility, applicants must have a First Degree from a recognized university.</p>
            </div>

            <div class="tab-pane fade" id="signal" role="tabpanel">
                <h4>Signal Corps</h4>
                <p>Applicants must have a First Degree (Second Class Lower or better) in:
                    <ul>
                        <li>Telecommunication Engineering</li>
                        <li>Computer Engineering</li>
                        <li>Electronics Engineering</li>
                        <li>Physics</li>
                        <li>Mathematics</li>
                    </ul>
                </p>
            </div>

            <div class="tab-pane fade" id="engineer" role="tabpanel">
                <h4>Engineer Corps</h4>
                <ul>
                    <li>Civil Engineering (Structural or Water/Sanitation)</li>
                    <li>Electrical Engineering</li>
                    <li>Mechanical Engineering with Building Services</li>
                    <li>Building Technology</li>
                    <li>Construction Management</li>
                    <li>Geomatic Engineering</li>
                    <li>Geological Engineering</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="eme" role="tabpanel">
                <h4>Electrical and Mechanical Engineers (EME Corps)</h4>
                <ul>
                    <li>Physics</li>
                    <li>Mechanical Engineering</li>
                    <li>BTech (Automobile)</li>
                    <li>Electrical or Electronics Engineering</li>
                    <li>Material Engineering</li>
                    <li>Chemistry</li>
                    <li>Agricultural Engineering</li>
                    <li>Mathematics</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="ordnance" role="tabpanel">
                <h4>Ordnance Service</h4>
                <ul>
                    <li>Chemistry / Biochemistry</li>
                    <li>Logistics and Supply Chain Management</li>
                    <li>Procurement and Supply Chain Management</li>
                    <li>Economics</li>
                    <li>Publishing</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="supply" role="tabpanel">
                <h4>Supply and Transport Corps</h4>
                <ul>
                    <li>Logistics & Supply Chain Management</li>
                    <li>Administration</li>
                    <li>Port & Shipping Administration</li>
                    <li>Management Studies / Commerce</li>
                    <li>Procurement and Supply Chain Management</li>
                    <li>Economics</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="pay" role="tabpanel">
                <h4>Forces Pay Corps</h4>
                <p>Applicants must have a First Degree in Accounting (Second Class Lower or better).</p>
            </div>

            <div class="tab-pane fade" id="it" role="tabpanel">
                <h4>Information Technology</h4>
                <ul>
                    <li>Computer Science</li>
                    <li>Computer Engineering</li>
                    <li>Information Technology</li>
                    <li>Computer Security</li>
                    <li>Network Engineering</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="education" role="tabpanel">
                <h4>Education Corps</h4>
                <ul>
                    <li>Education</li>
                    <li>Librarianship</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="pr" role="tabpanel">
                <h4>Public Relations</h4>
                <ul>
                    <li>Communication</li>
                    <li>Public Relations</li>
                    <li>Fine Arts (NAFTI)</li>
                    <li>Journalism</li>
                </ul>
            </div>

            <div class="tab-pane fade" id="pt" role="tabpanel">
                <h4>Physical Training & Sports</h4>
                <p>Applicants must hold a First Degree in Physical Education.</p>
            </div>

            <div class="tab-pane fade" id="band" role="tabpanel">
                <h4>Band</h4>
                <p>Applicants must hold a First Degree in Music (Second Class Lower or better).</p>
            </div>

            <div class="tab-pane fade" id="records" role="tabpanel">
                <h4>Records Office</h4>
                <ul>
                    <li>Actuarial Science</li>
                    <li>Administration</li>
                    <li>Statistics</li>
                    <li>Management Information Systems</li>
                </ul>
            </div>
        </div>

        <!-- Right-side image stack -->
        {{-- <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h5 class="mb-3">GAF Army Training in Pictures</h5>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <img src="Army_011 (1).png" class="img-fluid rounded" style="max-width: 200px;" alt="">
                    <img src="SELECTED PICTURES/r11.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                    <img src="SELECTED PICTURES/r10.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                    <img src="SELECTED PICTURES/r9.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                </div>
            </div>
        </div> --}}
    </div>
</div>


<!-- Navy Start -->
<div class="container-fluid about py-5 bg-light">
    <div class="container py-5">
        <h1 class="display-5 mb-4 text-center">Navy</h1>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs mb-4 justify-content-center" id="navyTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="executive-tab" data-bs-toggle="tab" data-bs-target="#executive"
                    type="button" role="tab">Executive Branch</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="technical-tab" data-bs-toggle="tab" data-bs-target="#technical"
                    type="button" role="tab">Technical Branch</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="supply-tab" data-bs-toggle="tab" data-bs-target="#supply"
                    type="button" role="tab">Supply & Secretarial Branch</button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="navyTabsContent">
            <!-- Executive Branch -->
            <div class="tab-pane fade show active" id="executive" role="tabpanel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7">
                        <p>
                            In addition to the general eligibility, applicants must have a First Degree not below
                            Second Class Lower in any of the following from a recognized University/Institution:
                        </p>
                        <ul>
                            <li>Nautical Science</li>
                            <li>Mathematics</li>
                            <li>Physics</li>
                            <li>Geography</li>
                            <li>Statistics</li>
                            <li>Computer Science</li>
                            <li>Oceanography</li>
                            <li>Geomatic Engineering</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Technical Branch -->
            <div class="tab-pane fade" id="technical" role="tabpanel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7">
                        <p>
                            In addition to the general eligibility, applicants must have a First Degree not below
                            Second Class Lower in any of the following from a recognized University/Institution:
                        </p>
                        <ul>
                            <li>Marine Engineering</li>
                            <li>Mechanical Engineering</li>
                            <li>Electrical Engineering</li>
                            <li>Marine Electrical/Electronic Engineering</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Supply & Secretarial Branch -->
            <div class="tab-pane fade" id="supply" role="tabpanel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7">
                        <p>
                            In addition to the general eligibility, applicants must have a First Degree not below
                            Second Class Lower from a recognized University or equivalent Professional Institution in:
                        </p>
                        <ul>
                            <li>Administration (HR/Accounting/Marketing/Banking & Finance)</li>
                            <li>Logistics and Supply Chain Management</li>
                            <li>Port and Shipment Administration</li>
                            <li>Management Studies</li>
                            <li>Procurement and Supply Chain Management</li>
                            <li>Economics</li>
                        </ul>

                        <p class="fw-bold">Preference will be given to applicants with additional certificates in the following:</p>
                        <ul>
                            <li>Institute of Chartered Secretaries & Administration (ICSA) – Final Part</li>
                            <li>Chartered Institute of Purchasing and Supply (CIPS) – Level 5</li>
                            <li>Chartered Institute of Logistics and Transport (CILT) – Final Part</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right-side image stack -->
            {{-- <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <h5 class="mb-3">GAF Navy Training in Pictures</h5>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <img src="Navy 1.png" class="img-fluid rounded" style="max-width: 200px;" alt="">
                        <img src="SELECTED PICTURES/r1.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                        <img src="SELECTED PICTURES/r2.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                        <img src="SELECTED PICTURES/r3.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Navy End -->


<!-- Air Force Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <h1 class="display-5 mb-4 text-center">Air Force</h1>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs mb-4 justify-content-center" id="airForceTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pilot-tab" data-bs-toggle="tab" data-bs-target="#pilot"
                    type="button" role="tab">Pilots / ATC Ops</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="supply-tab" data-bs-toggle="tab" data-bs-target="#air-supply"
                    type="button" role="tab">Supply Branch</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="admin-tab" data-bs-toggle="tab" data-bs-target="#air-admin"
                    type="button" role="tab">Administration Branch</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="engineering-tab" data-bs-toggle="tab" data-bs-target="#engineering"
                    type="button" role="tab">Engineering Branch</button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="airForceTabsContent">
            <!-- Pilots / ATC Ops -->
            <div class="tab-pane fade show active" id="pilot" role="tabpanel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7">
                        <p>In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in any of the following:</p>
                        <ul>
                            <li>Physics</li>
                            <li>Mathematics</li>
                            <li>Chemistry</li>
                            <li>Geography</li>
                            <li>Statistics</li>
                            <li>Computer Science</li>
                            <li>Aeronautical Engineering</li>
                            <li>Agricultural Engineering</li>
                            <li>Private/Commercial/Air Transport Pilot License</li>
                            <li>Other Pilot Certification from a recognized institution</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Supply Branch -->
            <div class="tab-pane fade" id="air-supply" role="tabpanel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7">
                        <p>In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in:</p>
                        <ul>
                            <li>Finance and Accounting</li>
                            <li>Logistics and Supply Chain Management</li>
                            <li>Marketing and Procurement</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Administration Branch -->
            <div class="tab-pane fade" id="air-admin" role="tabpanel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-7">
                        <p>In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in:</p>
                        <ul>
                            <li>Administration (HR/Public Administration)</li>
                            <li>Arts or Social Science</li>
                            <li>Management Studies</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Engineering Branch -->
            <div class="tab-pane fade" id="engineering" role="tabpanel">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-6">
                        <h5>Mechanical</h5>
                        <p>In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in:</p>
                        <ul>
                            <li>Aerospace Engineering</li>
                            <li>Mechanical Engineering</li>
                            <li>Aeronautical Engineering</li>
                            <li>Agricultural Engineering</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5>Avionics</h5>
                        <p>In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in:</p>
                        <ul>
                            <li>Electrical/Electronic Engineering</li>
                            <li>Computer Engineering</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Right-side image stack -->
            {{-- <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <h5 class="mb-3">GAF Navy Training in Pictures</h5>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <img src="Army_011 (2).png" class="img-fluid rounded" style="max-width: 200px;" alt="">
                        <img src="SELECTED PICTURES/r4.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                        <img src="SELECTED PICTURES/r5.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                        <img src="SELECTED PICTURES/r6.jpg" class="img-fluid rounded" style="max-width: 280px;" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Air Force End -->


@include('layout.footer')

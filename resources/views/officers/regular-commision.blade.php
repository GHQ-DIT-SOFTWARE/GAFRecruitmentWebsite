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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Regular Commission</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Regular Commission</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Officer Commission Details -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp">
            <h2 class="display-10 mb-4 styled-underline">Regular Commission</h2>
            <p>All applicants must meet general eligibility and possess the following academic qualifications specific to each corps.</p>
        </div>

        <!-- Tabs Nav -->
        <ul class="nav nav-tabs mb-4 justify-content-center" id="armyTab" role="tablist">
            @php
                $tabs = [
                    'army' => 'Army',
                    'navy' => 'Navy',
                    'airforce' => 'Airforce',
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
            <div class="tab-pane fade show active" id="army" role="tabpanel">
    <div class="mx-auto" style="max-width: 900px; text-align: justify;">
        <h4 class="text-center mb-4">Army</h4>
        <p>
            Infantry/Armour/Artillery/Military Police. In addition to the general eligibility, applicants must have a First Degree from a recognized University.<br><br>

            <strong>Signal Corps.</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University in any of the following:<br>
            (1) Telecommunication Engineering.<br>
            (2) Computer Engineering.<br>
            (3) Electronics Engineering.<br>
            (4) Physics.<br>
            (5) Mathematics.<br><br>

            <strong>Engineer Corps</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University in any of the following:<br>
            (1) Civil Engineering (Structural or Water/Sanitation Engineer).<br>
            (2) Electrical Engineering.<br>
            (3) Mechanical Engineer with Building Service Option.<br>
            (4) Building Technology.<br>
            (5) Construction Management.<br>
            (6) Geomatic Engineer.<br>
            (7) Geological Engineer.<br><br>

            <strong>Electrical and Mechanical Engineers (EME Corps).</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University/Institution in any of the following:<br>
            (1) Physics.<br>
            (2) Mechanical Engineering.<br>
            (3) BTech (Automobile).<br>
            (4) Electrical Engineering.<br>
            (5) Electronics Engineering.<br>
            (6) Materiel Engineering.<br>
            (7) Chemistry.<br>
            (8) Agricultural Engineering.<br>
            (9) Mathematics.<br><br>

            <strong>Ordnance Service.</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University/Institution in:<br>
            (1) Chemistry/Biochemistry.<br>
            (2) Logistics and Supply Chain Mgt.<br>
            (3) Procurement and Supply Chain Mgt.<br>
            (4) Economics.<br>
            (5) Publishing.<br><br>

            <strong>Supply and Transport Corps.</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University/Institution in:<br>
            (1) Logistics and Supply Chain Management.<br>
            (2) Administration.<br>
            (3) Port and Shipping Administration.<br>
            (4) Management Studies/Commerce.<br>
            (5) Procurement and Supply Chain Management.<br>
            (6) Economics.<br><br>

            <strong>Forces Pay Corps.</strong> Applicants must have a First Degree in Accounting not below Second Class Lower from a recognized University/Institution.<br><br>

            <strong>Information Technology.</strong> Applicants must have a First Degree not below Second Class Lower in:<br>
            (1) Computer Science.<br>
            (2) Computer Engineering.<br>
            (3) Information Technology.<br>
            (4) Computer Security.<br>
            (5) Network Engineering.<br><br>

            <strong>Education Corps.</strong> First Degree not below Second Class Lower in:<br>
            (1) Education.<br>
            (2) Librarianship.<br><br>

            <strong>Public Relations.</strong> Applicants must have a First Degree (BA, BFA, BSc, etc.) not below Second Class Lower in:<br>
            (1) Communication.<br>
            (2) Public Relations.<br>
            (3) Fine Arts (NAFTI).<br>
            (4) Journalism.<br><br>

            <strong>Physical Training (PT) and Sports.</strong> First Degree not below Second Class Lower in Physical Education from a recognized University/Institution.<br><br>

            <strong>Band.</strong> First Degree not below Second Class Lower in Music from a recognized University/Institution.<br><br>

            <strong>Records.</strong> First Degree not below Second Class Lower in:<br>
            (1) Actuarial Science.<br>
            (2) Administration.<br>
            (3) Statistics.<br>
            (4) Management Information Studies.<br>
        </p>
    </div>
</div>


            <div class="tab-pane fade" id="navy" role="tabpanel">
    <div class="mx-auto" style="max-width: 900px; text-align: justify;">
        <h4 class="text-center mb-4">Navy</h4>
        <p>
            <strong>Executive Branch.</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in any of the following from a recognized University/Institution:<br>
            (1) Nautical Science.<br>
            (2) Mathematics, Physics, Geography, Statistics.<br>
            (3) Computer Science.<br>
            (4) Oceanography or Geomatic Engineering.<br><br>

            <strong>Technical Branch.</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in any of the following from a recognized University/Institution:<br>
            (1) Marine Engineering.<br>
            (2) Mechanical Engineering.<br>
            (3) Electrical Engineering.<br>
            (4) Marine Electrical/Electronic Engineering.<br><br>

            <strong>Supply and Secretarial Branch.</strong> In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University or equivalent Professional Institution in any of the following:<br>
            (1) Administration (HR/Accounting/Marketing/Banking & Finance).<br>
            (2) Logistics and Supply Chain Management.<br>
            (3) Port and Shipment Administration.<br>
            (4) Management Studies.<br>
            (5) Procurement and Supply Chain Management.<br>
            (6) Economics.<br><br>

            <strong>Preference will be given to applicants with additional certificates in the following:</strong><br>
            (a) Institute of Chartered Secretaries & Administration (ICSA) – Final Part.<br>
            (b) Chartered Institute of Purchasing and Supply (CIPS) – Level 5.<br>
            (c) Chartered Institute of Logistics and Transport (CILT) – Final Part.<br>
        </p>
    </div>
</div>


            <div class="tab-pane fade" id="airforce" role="tabpanel">
    <div class="mx-auto" style="max-width: 900px; text-align: justify;">
        <h4 class="text-center mb-4">Air Force</h4>
        <p>
            <strong>Pilots / ATC Operations.</strong><br>
            In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in any of the following from a recognized University/Institution:
        </p>
        <ul>
            <li>Physics</li>
            <li>Mathematics</li>
            <li>Chemistry</li>
            <li>Geography</li>
            <li>Statistics</li>
            <li>Computer Science</li>
            <li>Aeronautical Engineering</li>
            <li>Agricultural Engineering</li>
            <li>Private/Commercial/Air Transport Pilot License or any other Pilot certificate</li>
        </ul>

        <p>
            <strong>Supply Branch.</strong><br>
            In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in any of the following from a recognized University or equivalent professional institution:
        </p>
        <ul>
            <li>Finance and Accounting</li>
            <li>Logistics and Supply Chain Management</li>
            <li>Marketing and Procurement</li>
        </ul>

        <p>
            <strong>Administration Branch.</strong><br>
            In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower in any of the following from a recognized University or equivalent professional institution:
        </p>
        <ul>
            <li>Administration (HR / Public Administration)</li>
            <li>Arts or Social Science</li>
            <li>Management Studies</li>
        </ul>

        <p>
            <strong>Engineering Branch:</strong>
        </p>

        <p><u>Mechanical</u><br>
        In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University in the following:</p>
        <ul>
            <li>Aerospace Engineering</li>
            <li>Mechanical Engineering</li>
            <li>Aeronautical Engineering</li>
            <li>Agricultural Engineering</li>
        </ul>

        <p><u>Avionics</u><br>
        In addition to the general eligibility, applicants must have a First Degree not below Second Class Lower from a recognized University in the following:</p>
        <ul>
            <li>Electrical/Electronic Engineering</li>
            <li>Computer Engineering</li>
        </ul>
    </div>
</div>

        </div>
    </div>
</div>



@include('layout.footer')

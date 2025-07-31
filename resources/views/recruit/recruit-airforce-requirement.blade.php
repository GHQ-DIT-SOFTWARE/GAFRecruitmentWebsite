@include('layout.header')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Airforce Recruitment</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Airforce Recruitment</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-start">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <h1 class="display-5 mb-4">Airforce Recruitment</h1>
                <ul class="nav nav-tabs mb-3" id="airforceTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button" role="tab">Administration Branch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="supply-tab" data-bs-toggle="tab" data-bs-target="#supply" type="button" role="tab">Supply Branch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="engineering-tab" data-bs-toggle="tab" data-bs-target="#engineering" type="button" role="tab">Engineering Branch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="air-tab" data-bs-toggle="tab" data-bs-target="#air" type="button" role="tab">Air Branch</button>
                    </li>
                </ul>
                <div class="tab-content" id="airforceTabContent">
                    <div class="tab-pane fade show active" id="admin" role="tabpanel">
                        <p>
                            <strong>(1) Air Force Police:</strong> 6 credits (not less than C6) at WASSCE including English and Mathematics.<br>
                            <strong>(2) General Duties Clerk:</strong>
                            <ul>
                                <li>6 credits (not less than C6) at WASSCE including English and Mathematics</li>
                                <li>RSA Stage III in secretarial duties and credit in typing</li>
                                <li>Typist Grade I and II Certificate from Government Secretarial School</li>
                                <li>Stenographer Grade II Certificate</li>
                                <li>DBS (Secretarial Option)</li>
                            </ul>
                            <strong>(3) General Duties:</strong> 6 credits (not less than C6) at WASSCE including English and Mathematics.<br>
                            <strong>(4) Hospitality & Catering Management:</strong>
                            <ul>
                                <li>6 credits (not less than C6) at WASSCE (Home Economics Option) including English and Mathematics</li>
                                <li>GES Intermediate Certificate in Hospitality and Catering Management</li>
                                <li>GES or COTVET Certificate II in Hospitality and Catering Management</li>
                            </ul>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="supply" role="tabpanel">
                        <p>
                            <strong>(1) Storeman/Supplier:</strong>
                            <ul>
                                <li>6 credits (not less than C6) at WASSCE (Business Option) including English and Mathematics</li>
                                <li>City and Guilds or GES certificate in storekeeping/purchasing and supply</li>
                            </ul>
                            <strong>(2) Cobblers/Leather Works & Tailor:</strong>
                            <ul>
                                <li>GES Intermediate Certificate in any of the above</li>
                                <li>GES or COTVET Certificate II in any of the above</li>
                            </ul>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="engineering" role="tabpanel">
                        <p>
                            <strong>(1) Technical Trades (Airframe, Engines, Radio, etc.):</strong>
                            <ul>
                                <li>6 credits (not less than C6) at WASSCE (Science or Technical Option) including English and Mathematics</li>
                                <li>City and Guilds Part I/II or GES Intermediate/Final Certificate in related technical disciplines</li>
                            </ul>
                            <strong>(2) Trades (Plumbers, Welders, etc.):</strong> GES or City and Guilds Intermediate Certificate in the related field.<br>
                            <strong>(3) Safety and Surface:</strong> 6 credits at WASSCE including English, Mathematics and Graphics and Design or Fine Art.<br>
                            <strong>(4) Vehicle Mechanic:</strong> City and Guilds Intermediate or GES Certificate in Auto Mechanics/Auto Electrician + class C Driver’s Licence.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="air" role="tabpanel">
                        <p>
                            <strong>(1) Air Traffic Controller/Operations Clerks:</strong> 6 credits (not less than C6) at WASSCE including English, Mathematics and Integrated Science.<br>
                            <strong>(2) Aero Firemen:</strong> 6 credits (not less than C6) at WASSCE including English and Mathematics + Class D Driver’s Licence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('layout.footer')

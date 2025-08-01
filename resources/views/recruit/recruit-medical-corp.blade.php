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
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Medical Corps Recruitment</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Medical Corps Recruitment</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-start">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <h1 class="display-10 mb-4 styled-underline">Medical Corps Recruitment</h1>
                <ul class="nav nav-tabs mb-3" id="medicalTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nursing-tab" data-bs-toggle="tab" data-bs-target="#nursing" type="button" role="tab">Nursing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="technical-tab" data-bs-toggle="tab" data-bs-target="#technical" type="button" role="tab">Technical Officers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab">Support Staff</button>
                    </li>
                </ul>
                <div class="tab-content" id="medicalTabContent">
                    <div class="tab-pane fade show active" id="nursing" role="tabpanel">
                        <p>General Nurses, Psychiatry/Mental Nurses, Public Health Nurses, Midwives – All require a Diploma in respective fields and must be in good standing with the Nursing & Midwifery Council of Ghana.</p>
                    </div>
                    <div class="tab-pane fade" id="technical" role="tabpanel">
                        <p>Technical Officers in Dental, Radiology, Nutrition, Health Promotion, Disease Control, Medical Lab, Physiotherapy, Orthotics, Informatics, Biostatistics, Veterinary, Biomedical Engineering, Environmental Health. Must have Diploma or Certificate in the field and be registered with the relevant council.</p>
                    </div>
                    <div class="tab-pane fade" id="support" role="tabpanel">
                        <p>HR Assistants, Records Officers, Stenographers, Caterers, Supply Officers, Drivers, Physiotherapy and Lab Assistants – Must have relevant Certificate, Diploma or HND and registration where required.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@include('layout.footer')

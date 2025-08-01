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
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">SMI Entry Requirement</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-primary">SMI Entry Requirement</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                 <h2 class="display-10 mb-4 styled-underline">Medical & Para-Medical Eligibility Requirements</h2>
             
                 <!-- Tab Nav -->
                 <ul class="nav nav-tabs mb-4" id="medicalTabs" role="tablist">
        @php
            $tabs = [
                'medical-specialist' => 'Medical Specialist',
                'medical-officer' => 'Medical Officer & Dental Surgeon',
                'veterinary-officer' => 'Veterinary Officer',
                'clinical-psychologist' => 'Clinical Psychologist',
                'general-nurse' => 'General Nurse',
                'nursing-tutor' => 'Nursing Tutor',
                'specialized-nurses' => 'Specialized Nurses',
                'midwifery-officer' => 'Midwifery Officer',
                'biomedical-scientist' => 'Biomedical Scientist',
                'pharmacist' => 'Pharmacist',
                'radiographer' => 'Radiographer',
                'physiotherapist' => 'Physiotherapist',
                'health-services-admin' => 'Health Services Administrator',
                'biomedical-engineer' => 'Biomedical Engineer',
                'audiologist' => 'Audiologist',
                'public-health-officer' => 'Public Health Officer',
                'physician-assistant' => 'Physician Assistant (Medical)',
                'anaesthetist' => 'Certified Registered Anaesthetist',
            ];
        @endphp
        @foreach ($tabs as $id => $label)
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $id }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $id }}" type="button" role="tab">
                    {{ $label }}
                </button>
            </li>
        @endforeach
                 </ul>
             
                 <!-- Tab Content -->
                 <div class="tab-content" id="medicalTabContent">
                     <!-- Medical Specialist -->
                     <div class="tab-pane fade show active" id="medical-specialist" role="tabpanel">
                         <p> Applicant must have MB ChB/BDS or its equivalent from an accredited institution plus a relevant post-graduate qualification to the level of Membership/Fellowship (GCPS/WACS/WACP) or its equivalent from an accredited College. Dental Specialists of the following categories: Oral and Maxillofacial Surgeon, Periodontist, Dental Restorative Specialist, Oral and Maxillofacial Pathologist, Oral Medicine Specialist, Oral and Maxillofacial Radiologist, and Prosthodontist are eligible. Must have a permanent registration with the Ghana Medical and Dental Council and not more than 40 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="medical-officer" role="tabpanel">
                        <P> Applicant must have MB ChB/BDS or its equivalent from an accredited institution. Must have a permanent registration with the Ghana Medical and Dental Council. At least, one (1) year working experience in a recognized health facility and not more than 35 years of age by 10 January 2019.</P>
                     </div>
             
                     <div class="tab-pane fade" id="veterinary-officer" role="tabpanel">
                        <P> Applicants must have Doctor of Veterinary Medicine (DVM) or its equivalent from an accredited institution. At least, one (1) year working experience as a Veterinary Officer in an accredited health institution. Must be registered with the Veterinary Council of Ghana and not more than 35 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="clinical-psychologist" role="tabpanel">
                        <p>Applicants must have an Msc/MPil in Clinical Psychology from an accredited institution plus one (1) year internship in Clinical practice with at least one year working experience in a recognized health facility. He/she must be fully registered with the Ghana Clinical Psychological Council (GPC) and must be 33 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="general-nurse" role="tabpanel">
                         <p>Applicants with BSc/BA degree in Nursing from an accredited institution of higher learning who have completed the mandatory clinical rotation or national service and practiced for at least three (3) years are eligible to apply. Applicants with BSc/BA degree in Nursing with RGN basic Diploma who have practiced for at least two (2) years are eligible. All must be registered with the Nursing & Midwifery Council of Ghana and not more than 33 years of age by 10 January 2019. .</p>
                     </div>
             
                     <div class="tab-pane fade" id="nursing-tutor" role="tabpanel">
                         <p>Applicant must have MPhil in Nursing/Midwifery or MSc/MA in Nursing/Midwifery with a postgraduate certificate in Education. Must be registered with the Nursing & Midwifery Council of Ghana. At least, one (1) year teaching experience in an accredited Nursing/Midwifery institution is required and not more than 35 years of age by 10 January 2019..</p>
                     </div>
             
                     <div class="tab-pane fade" id="specialized-nurses" role="tabpanel">
                         <p>Applicants must be a Registered General Nurse and must have a certificate in any of the following specialties: Critical Care, ENT, Peri-operative, Emergency Care, Plastics & Burns, Paediatrics and Ophthalmic Nursing. At least two (2) years working experience in a recognized health facility is required. Must be registered with the Nursing and Midwifery Council of Ghana and not more than 33 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="midwifery-officer" role="tabpanel">
                         <p>Applicants with BSc degree in Midwifery from an accredited institution who have completed the mandatory clinical rotation and have practiced for at least Three (3) years are eligible to apply. Applicants with Registered Midwifery (RM) certificate plus additional BSc degree in Midwifery from an accredited institution who have practiced for at least two (2) years could apply. All must be registered with the Nursing & Midwifery Council of Ghana and not more than 33 years of age by 10 January 2019. </p>
                     </div>
             
                     <div class="tab-pane fade" id="biomedical-scientist" role="tabpanel">
                         <p>Applicant must have a BSc degree in Medical Laboratory Science from an accredited institution. At least, two (2) years working experience as a Biomedical Scientist in a reputable medical laboratory facility is required. Must be registered with the Allied Health Professions Council and not more than 30 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="pharmacist" role="tabpanel">
                         <p>Applicant must have a Bachelor of Pharmacy degree (BPharm) from an accredited institution. At least, two (2) years working experience as a Pharmacist in an accredited health facility. Must be registered with the Pharmacy Council and the Pharmaceutical Society of Ghana and not more than 33 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="radiographer" role="tabpanel">
                         <p>Applicant must have a BSc degree in Radiology or its equivalent plus One (1) year post-qualification internship. At least, two (2) years working experience as a Radiographer in an accredited health facility is required. Must be registered with the Allied Health Professions Council and not more than 33 years of age by 10 January 2019..</p>
                     </div>
             
                     <div class="tab-pane fade" id="physiotherapist" role="tabpanel">
                         <p>Applicant must have a BSc degree in Physiotherapy or its equivalent plus one (1) year mandatory internship or national service. At least, two (2) years working experience as a Physiotherapist in a recognized health facility. Must be registered with the Allied Health Professions Council and not more than 30 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="health-services-admin" role="tabpanel">
                         <p>Applicant must have a BSc degree in Administration (Health Services option) from an accredited institution and must have completed the mandatory national service. At least Two (2) years working experience as a Health Services Administrator in a recognized health facility. Must be registered with the Association of Health Services Administrators of Ghana (AHSAG) and not more than 30 years of age by 10 January 2019..</p>
                     </div>
             
                     <div class="tab-pane fade" id="biomedical-engineer" role="tabpanel">
                         <p>Applicants must have a BSc degree in Biomedical Engineering with good knowledge in Information Technology and Computer Science and must have completed the mandatory national service and registered with the Allied Health Professions Council. At least, two (2) years working experience in an accredited health facility is required and not more than 30 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="audiologist" role="tabpanel">
                         <p>Applicant must have an MSc degree in Audiology or its equivalent. At least one (1) year working experience as an audiologist. Must be registered with the Allied Health Professions Council and not more than 33 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="public-health-officer" role="tabpanel">
                         <p> Applicants must have a BSc degree in Public Health (Environmental Health or Disease Control Option) from an accredited institution plus one year post-qualification internship. Must be registered with the Allied Health Professions Council and not more than 33 years of age by 10 January 2019.</p>
                     </div>
             
                     <div class="tab-pane fade" id="physician-assistant" role="tabpanel">
                         <p>Applicants must have BSc degree in Physician Assistantship or its equivalent from an accredited institution with at least one (1) year working experience in an accredited health facility. Must have a permanent registration with the Ghana Medical and Dental Council and not more than 33 years of age by 10 January 2019.</p>
             
                     <div class="tab-pane fade" id="anaesthetist" role="tabpanel">
                         <p> Applicants must have BSc degree in Anaesthesia from an accredited institution with at least two (2) years working experience in an accredited health facility. Must have a permanent registration with the Ghana Medical and Dental Council and not more than 33 years of age by 10 January 2019.</p>
                     </div>
                 </div>
             </div>

        </div>
        <!-- About End -->



      @include('layout.footer')

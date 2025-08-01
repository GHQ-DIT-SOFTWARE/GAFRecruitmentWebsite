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


<!-- Breadcrumb -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Short Service Commission</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Short Service Commission</li>
        </ol>    
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Main Content -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Tabs Content -->
            <div class="text-center mx-auto" style="max-width: 1000px;">
            <!-- Centered Section Title -->
            <h2 class="display-10 mb-4 styled-underline">Army / Navy / Air Force Roles</h2>

            <!-- Tab Navigation -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="requirementTabs" role="tablist">
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
                       <div class="mx-auto" style="max-width: 800px; text-align: justify;">
                           <h5 class="text-center mb-3">Electrical and Mechanical Engineers (EME Corps)</h5>
                           <p>
                               In addition to the general eligibility, applicants must not be more than 30 years by 02 May 2019 and must have a First Degree and Masters Degree/Post Graduate Diploma from a recognized University/Institution in any of the following:
                           </p>
                           <ul>
                               <li>Agricultural Engineering</li>
                               <li>Material Engineering</li>
                               <li>Technology (Automobile)</li>
                               <li>Electrical Engineering</li>
                               <li>Electronics Engineering</li>
                               <li>Mechanical Engineering</li>
                           </ul>
                       </div>
                    </div>


                    <!-- Legal -->
                    <div class="tab-pane fade" id="legal" role="tabpanel">
                        <div class="mx-auto" style="max-width: 800px; text-align: justify;">
                            <h5 class="text-center mb-3">Legal Officers</h5>
                            <p>
                                In addition to the general eligibility, applicants must not be more than 30 years by 02 May 2019 and must have a First Degree from a recognized University or Professional Institution in any of the following:
                            </p>
                            <ul>
                                <li>LLB (Bachelor of Laws)</li>
                                <li>BL (Barrister at Law) Certificate</li>
                                <li>3 years post-call work experience and Pupilage</li>
                            </ul>
                        </div>
                    </div>


                    <!-- Medical -->
<div class="tab-pane fade" id="medical" role="tabpanel">
    <div class="mx-auto" style="max-width: 900px; text-align: justify;">
        <h5 class="text-center mb-3">Medical & Health Professionals</h5>
        <p>
            In addition to the general eligibility, applicants must have any of the following from a recognized University or equivalent Professional Institution:
        </p>

        <p><strong>Medical Specialist:</strong> Applicant must have MB ChB/BDS or its equivalent from an accredited institution plus a relevant post-graduate qualification to the level of Membership/Fellowship (GCPS/WACS/WACP or its equivalent). Dental Specialists such as Oral and Maxillofacial Surgeon, Periodontist, Dental Restorative Specialist, Oral and Maxillofacial Pathologist, Oral Medicine Specialist, Oral and Maxillofacial Radiologist, and Prosthodontist are eligible. Specialist Anaesthesiologists are also encouraged to apply. All must have permanent registration with the Ghana Medical and Dental Council and must not be more than 40 years of age by 02 May 2019. Fellows must not be more than 45 years.</p>

        <p><strong>Medical Officer & Dental Surgeon:</strong> Must have MB ChB/BDS or its equivalent from an accredited institution. Must have permanent registration with the Ghana Medical and Dental Council and at least one (1) year post-registration working experience. Maximum age is 35 years by 02 May 2019.</p>

        <p><strong>Midwifery Officer:</strong> Must have a BSc degree in Midwifery from an accredited institution, completed mandatory clinical rotation, and practiced for at least three (3) years post permanent registration. Applicants with RM certificate in addition to the BSc must have at least two (2) years post-registration experience. Must be registered with the Nursing & Midwifery Council of Ghana and not more than 33 years old by 02 May 2019.</p>

        <p><strong>Physician Assistant (Medical):</strong> Must have a BSc degree in Physician Assistantship or equivalent from an accredited institution with at least three (3) years post-registration experience. Alternatively, applicants with BSc and Advanced Diploma in Community Medicine & Health with two (2) years post-registration may apply. Must have permanent registration with the Ghana Medical and Dental Council. Maximum age: 33 years by 02 May 2019.</p>

        <p><strong>Audiologist:</strong> Must have an MSc in Audiology or its equivalent, with at least one (1) year post-registration experience. Must be registered with the Allied Health Professions Council and not more than 33 years by 02 May 2019.</p>

        <p><strong>Specialized Nurses:</strong> Must be a Registered General Nurse with a certificate in one or more of the following: Critical Care, ENT, Peri-operative, Emergency Care, Plastic & Burns, Paediatrics, or Ophthalmic Nursing. At least two (2) years post-registration experience is required. Must be registered with the Nurses and Midwives Council of Ghana. Maximum age: 33 years by 02 May 2019.</p>

        <p><strong>Nursing Tutor:</strong> Must have an MPhil or MSc/MA in Nursing/Midwifery with a postgraduate certificate in Education. Registered with the Nursing & Midwifery Council of Ghana and have at least one (1) year teaching experience post-registration in an accredited institution. Must not be more than 35 years of age by 02 May 2019.</p>
    </div>
</div>


                    <!-- Chaplain -->
<div class="tab-pane fade" id="chaplain" role="tabpanel">
    <div class="mx-auto" style="max-width: 900px; text-align: justify;">
        <h5 class="text-center mb-3">Chaplains</h5>
        <p>In addition to the general eligibility, applicants must meet the following requirements:</p>

        <ul>
            <li>First Degree (BA) in Theology or Religion from a recognized University, Theological Seminary, or College.</li>
            <li>Must be an ordained minister of one of the following churches: Methodist, Presbyterian, Evangelical Presbyterian, SDA, or the Church of Pentecost.</li>
            <li>Must be recommended for commissioning into the Ghana Armed Forces by the Head of the respective Church.</li>
            <li>A minimum of four (4) years pastoral working experience including probation/internship, with at least two (2) years of post-ordination pastoral service.</li>
            <li>Must be fluent in English and at least one major Ghanaian language.</li>
            <li>Must not be more than 35 years of age by Thursday, 02 May 2019.</li>
        </ul>
    </div>
</div>


                   <!-- Imam -->
<div class="tab-pane fade" id="imam" role="tabpanel">
    <div class="mx-auto" style="max-width: 900px; text-align: justify;">
        <h5 class="text-center mb-3">Imams</h5>
        <p>In addition to the general eligibility, applicants must meet the following requirements:</p>

        <ul>
            <li>First Degree in Islamic Theology or Religion from a recognized University, Theological Seminary, or College.</li>
            <li>Must be an Alim Phedeen (Islamic Theologian).</li>
            <li>Fluent in spoken Arabic and English.</li>
            <li>Ability to read and write proficient Arabic and English.</li>
            <li>Must have practiced as an Imam for four (4) years, recognized by an Islamic Religious Institution or Body in Ghana.</li>
            <li>Must be recommended for commission into the Ghana Armed Forces by the Head of a recognized Islamic body in Ghana.</li>
            <li>Must not be more than 35 years of age by Thursday, 02 May 2019.</li>
        </ul>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

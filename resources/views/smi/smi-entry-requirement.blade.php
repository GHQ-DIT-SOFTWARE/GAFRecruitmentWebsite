@include('layout.header')


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
                 <h2 class="mb-4">Medical & Para-Medical Eligibility Requirements</h2>
             
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
                         <p>MB ChB/BDS or equivalent + Fellowship (GCPS/WACS/WACP). Eligible Dental Specialists: Oral Surgeon, Periodontist, Prosthodontist, etc. Must be registered with the Ghana Medical & Dental Council. Max age: 40 (by 10 Jan 2019).</p>
                     </div>
             
                     <div class="tab-pane fade" id="medical-officer" role="tabpanel">
                         <p>MB ChB/BDS + 1 year experience + Permanent registration with Medical & Dental Council. Max age: 35.</p>
                     </div>
             
                     <div class="tab-pane fade" id="veterinary-officer" role="tabpanel">
                         <p>DVM + 1 year experience + Registration with Veterinary Council of Ghana. Max age: 35.</p>
                     </div>
             
                     <div class="tab-pane fade" id="clinical-psychologist" role="tabpanel">
                         <p>MSc/MPhil in Clinical Psychology + Internship + 1 year experience. Registered with Ghana Clinical Psychology Council. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="general-nurse" role="tabpanel">
                         <p>BSc/BA in Nursing + 2–3 years experience. Registered with Nursing & Midwifery Council. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="nursing-tutor" role="tabpanel">
                         <p>MPhil or MSc/MA in Nursing/Midwifery + Teaching cert + 1 year teaching. Max age: 35.</p>
                     </div>
             
                     <div class="tab-pane fade" id="specialized-nurses" role="tabpanel">
                         <p>RGN + Certificate in specialties (ENT, Peri-op, etc.) + 2 years experience. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="midwifery-officer" role="tabpanel">
                         <p>BSc in Midwifery + 2–3 years practice. RM + BSc combo also allowed. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="biomedical-scientist" role="tabpanel">
                         <p>BSc in Medical Laboratory Science + 2 years experience. Registered with Allied Health Professions Council. Max age: 30.</p>
                     </div>
             
                     <div class="tab-pane fade" id="pharmacist" role="tabpanel">
                         <p>BPharm + 2 years experience. Must be registered with Pharmacy Council & PSG. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="radiographer" role="tabpanel">
                         <p>BSc in Radiology + 1 year internship + 2 years experience. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="physiotherapist" role="tabpanel">
                         <p>BSc in Physiotherapy + 1-year national service + 2 years work. Max age: 30.</p>
                     </div>
             
                     <div class="tab-pane fade" id="health-services-admin" role="tabpanel">
                         <p>BSc in Admin (Health option) + National service + 2 years experience. Max age: 30.</p>
                     </div>
             
                     <div class="tab-pane fade" id="biomedical-engineer" role="tabpanel">
                         <p>BSc Biomedical Engineering + IT/CS knowledge + 2 years experience. Max age: 30.</p>
                     </div>
             
                     <div class="tab-pane fade" id="audiologist" role="tabpanel">
                         <p>MSc in Audiology + 1 year experience. Registered with Allied Health Professions Council. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="public-health-officer" role="tabpanel">
                         <p>BSc Public Health (Env. or Disease Control) + 1-year internship. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="physician-assistant" role="tabpanel">
                         <p>BSc in PAship + 1-year experience. Permanent registration with Medical & Dental Council. Max age: 33.</p>
                     </div>
             
                     <div class="tab-pane fade" id="anaesthetist" role="tabpanel">
                         <p>BSc in Anaesthesia + 2 years experience. Permanent registration required. Max age: 33.</p>
                     </div>
                 </div>
             </div>

        </div>
        <!-- About End -->



      @include('layout.footer')

@include('layout.header')


            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">SMI General Elegibility</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-primary">SMI General Elegibility</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h1 class="display-5 mb-4">Who is an SMI?</h1>
                            <p class="mb-4">
                                SMI means Special Medical Intake

                                <br>Persons with the following expertise can apply for the SMI provided they meet all the requirements as stated in the Entry Requirements:
                                
                                    <div class="container py-5">
                                      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">                                  

                                          <!-- Start of Card Loop -->
                                          @php
                                              $roles = [
                                                  ['icon' => 'fa-user-md', 'title' => 'Medical Specialist'],
                                                  ['icon' => 'fa-stethoscope', 'title' => 'Medical Officer & Dental Surgeon'],
                                                  ['icon' => 'fa-dog', 'title' => 'Veterinary Officer'],
                                                  ['icon' => 'fa-user-nurse', 'title' => 'General Nurse'],
                                                  ['icon' => 'fa-chalkboard-teacher', 'title' => 'Nursing Tutor'],
                                                  ['icon' => 'fa-notes-medical', 'title' => 'Specialized Nurses'],
                                                  ['icon' => 'fa-syringe', 'title' => 'Nurse Anesthetist'],
                                                  ['icon' => 'fa-microscope', 'title' => 'Biomedical Scientist'],
                                                  ['icon' => 'fa-pills', 'title' => 'Pharmacist'],
                                                  ['icon' => 'fa-x-ray', 'title' => 'Radiographer'],
                                                  ['icon' => 'fa-apple-alt', 'title' => 'Dietician'],
                                                  ['icon' => 'fa-running', 'title' => 'Physiotherapist'],
                                                  ['icon' => 'fa-chart-line', 'title' => 'Health Planner'],
                                                  ['icon' => 'fa-cogs', 'title' => 'Biomedical Engineer'],
                                                  ['icon' => 'fa-deaf', 'title' => 'Audiologist'],
                                                  ['icon' => 'fa-shield-virus', 'title' => 'Public Health Officer'],
                                                  ['icon' => 'fa-brain', 'title' => 'Clinical Psychologist'],
                                                  ['icon' => 'fa-users', 'title' => 'Social Psychologist'],
                                                  ['icon' => 'fa-truck-loading', 'title' => 'Logistics Officer'],
                                                  ['icon' => 'fa-user-cog', 'title' => 'Health Services Administrator'],
                                                  ['icon' => 'fa-user-check', 'title' => 'Physician Assistant (Medical)']
                                              ];
                                          @endphp                                  

                                          @foreach ($roles as $role)
                                          <div class="col">
                                              <div class="card h-100 shadow-sm border-0">
                                                  <div class="card-body d-flex align-items-start">
                                                      <div class="me-3">
                                                          <i class="fas {{ $role['icon'] }} fa-2x text-primary"></i>
                                                      </div>
                                                      <div>
                                                          <h6 class="card-title mb-0">{{ $role['title'] }}</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          @endforeach
                                          <!-- End of Card Loop -->                                  

                                      </div>
                                    </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="SELECTED PICTURES/r11.jpg" class="img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h1 class="display-5 mb-4">General Elegibility</h1>
                            <p class="mb-4">
                                Eligible applicant should:

                                <br>    Be a Ghanaian citizen by birth.
                                <br>    Be of good character.
                                <br>    Not less than 18 years and not more than 40 years for Medical Specialists, 35 years for Medical/Dental Officers, 33 years for Nurses and 30 years for Paramedical personnel by 10 January 2019, or as otherwise specified.
                                <br>    Be medically fit by Ghana Armed Forces Standard.
                                <br>    Be not bonded.
                                <br>    Be of minimum height of 1.68m (5` 6“) for males and 1.57m (5` 2“) for females.
                                <br>    Must have the following:
                                <br>(1)       BECE. Must have six (6) Passes at BECE including English and Mathematics.
                                <br>(2)       Six credits. (Not less than C6) including Core English, Core Mathematics and Core Science at WASSCE.
                                <br>                                                                         Or
                                <br>(3)       Six credits. (Not less than D) including Core English, Core Mathematics and Core Science at SSSCE.
                                <br>                                                                         Or
                                <br>(4)       Five credits. (Not less than 6) including English, Mathematics and Science at GCE ‘O’ Level and not less than D in three subjects at GCE ‘A’ Level.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- About End -->


      @include('layout.footer')

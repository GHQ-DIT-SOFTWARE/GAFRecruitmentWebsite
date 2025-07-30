@include('layout.header')

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Card Outlet</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-primary">Card Outlet</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <!-- Locations by Region -->
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary mb-4">Card Outlet by Region</h4>
                        <div class="accordion" id="locationAccordion">
                            @php
                                $locations = [
                                    'Greater Accra' => [
                                        'Burma Camp', 'Accra North', 'GPO', 'Cantonments', 'Dansoman', 'Legon', 'Madina',
                                        'TUC', 'Kaneshie', 'Ministries', 'Mamprobi', 'New Achimota', 'Tema Community 1', 'Tema Community 11'
                                    ],
                                    'Central Region' => [
                                        'Cape Coast', 'Agona Swedru', 'Saltpond', 'Dunkwa-On-Offin',
                                        'Winneba', 'Elmina', 'Apam'
                                    ],
                                    'Northern Region' => [
                                        'Tamale', 'Education Ridge', 'Yendi', 'Walewale', 'Damongo'
                                    ],
                                    'Upper West Region' => [
                                        'Wa', 'Lawra', 'Tumu'
                                    ],
                                    'Upper East Region' => [
                                        'Bawku', 'Navrongo', 'Bolgatanga'
                                    ],
                                    'Ashanti Region' => [
                                        'Kumasi Main', 'KNUST', 'Ashanti-Mampong', 'Bekwai-Ashanti', 'Konongo', 'Obuasi',
                                        'Offinso', 'Ejura', 'Juaso', 'Akrokeri', 'Ejisu', 'Agogo'
                                    ],
                                    'Brong–Ahafo Region' => [
                                        'Sunyani', 'Berekum', 'Techiman', 'Bechem',
                                        'Atebubu', 'Kintampo', 'Dormaa Ahenkro', 'Duayaw-Nkwanta'
                                    ],
                                    'Eastern Region' => [
                                        'Koforidua', 'Nkawkaw', 'Mpraeso', 'Suhum', 'Akim Oda', 'Aburi',
                                        'Asamankese', 'Akropong-Akuapem', 'Somanya', 'Akosombo', 'Nsawam'
                                    ],
                                    'Western Region' => [
                                        'Takoradi', 'Sekondi', 'Tarkwa', 'Enchi', 'Sefwi-Wiawso', 'Axim'
                                    ],
                                    'Volta Region' => [
                                        'Ho', 'Anloga', 'Keta', 'Hohoe', 'Kpando',
                                        'Denu', 'Peki', 'Sogakope', 'Jasikan', 'Kadjebi'
                                    ],
                                ];
                            @endphp

        
                            @foreach($locations as $region => $towns)
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-{{ Str::slug($region) }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ Str::slug($region) }}" aria-expanded="false"
                                            aria-controls="collapse-{{ Str::slug($region) }}">
                                            {{ $region }}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{ Str::slug($region) }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading-{{ Str::slug($region) }}" data-bs-parent="#locationAccordion">
                                        <div class="accordion-body">
                                            <div class="row row-cols-1 row-cols-md-2 g-3">
                                                @foreach($towns as $town)
                                                    <div class="col">
                                                        <div class="card border-0 shadow-sm h-100">
                                                            <div class="card-body">
                                                                <h6 class="card-title mb-2">{{ $town }}</h6>
                                                                <a href="#" class="btn btn-dark btn-sm rounded-pill">view Map</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
        
                    <!-- Ghana Map -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded h-100">
                            <iframe class="rounded w-100 h-100" style="min-height: 600px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4046783.8148070388!2d-3.672857182493536!3d7.901617610971971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfd75acda8dad6c7%3A0x54d7f230d093d236!2sGhana!5e0!3m2!1sen!2sgh!4v1753883327896!5m2!1sen!2sgh" 
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Contact End -->

       @include('layout.footer');
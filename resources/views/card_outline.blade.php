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
                            <!-- Ghana Map -->
                            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                                <div id="ghanaMap" class="rounded w-170 h-100" style="min-height: 700px;"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_Bk3tFVjjrdsT-wIj8xVM0IDCrYhNcTA&callback=initMap" async defer></script>

        <script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("ghanaMap"), {
            zoom: 6.5,
            center: { lat: 7.9465, lng: -1.0232 }, // Center of Ghana
        });

        const locations = [
            { name: "Burma Camp", lat: 5.5656, lng: -0.1647 },
            { name: "Cape Coast", lat: 5.1053, lng: -1.2466 },
            { name: "Tamale", lat: 9.4071, lng: -0.8539 },
            { name: "Wa", lat: 10.0607, lng: -2.5019 },
            { name: "Bolgatanga", lat: 10.7852, lng: -0.8514 },
            { name: "Kumasi Main", lat: 6.6885, lng: -1.6244 },
            { name: "Sunyani", lat: 7.3395, lng: -2.3268 },
            { name: "Koforidua", lat: 6.0941, lng: -0.2591 },
            { name: "Takoradi", lat: 4.8961, lng: -1.7594 },
            { name: "Ho", lat: 6.6008, lng: 0.4713 },
            { name: "Tema Community 1", lat: 5.6694, lng: -0.0166 },
            { name: "New Achimota", lat: 5.6077, lng: -0.2325 },
            { name: "Ministries", lat: 5.5560, lng: -0.1989 },
            { name: "Elmina", lat: 5.0847, lng: -1.3509 },
            { name: "Bawku", lat: 11.0601, lng: -0.2417 },
            { name: "Sogakope", lat: 5.9981, lng: 0.6001 },
        ];

        locations.forEach(loc => {
            const marker = new google.maps.Marker({
                position: { lat: loc.lat, lng: loc.lng },
                map,
                title: loc.name,
            });
        });
    }
</script>


       @include('layout.footer');
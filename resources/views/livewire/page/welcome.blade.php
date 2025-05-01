<div>
    {{-- Image Main --}}
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/IMG_5472.webp') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Welcome to Angola</span>
                    <h1 class="mb-4">Explore the Wonders of Angola with Us</h1>
                    <p class="caps">Travel through the most beautiful corners of the country with ease</p>
                </div>
                <a href="https://www.youtube.com/watch?v=ouTWfsddFa0"
                    class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>
    {{-- Section form form search locatiopn and  Hotel --}}

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                        href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                        aria-selected="true">Search Tour</a>

                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">

                                <div class="tab-content" id="v-pills-tabContent">
                                    {{-- Viajem com a gente --}}
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                        aria-labelledby="v-pills-nextgen-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <!-- Origin -->
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="origin">Origin</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-map-marker"></span>
                                                            </div>
                                                            <select name="origin" id="origin" class="form-control"
                                                                wire:model='origin'>
                                                                <option value="" disabled selected>Select origin
                                                                    province</option>
                                                                @foreach ($provincias as $provincia)
                                                                    <option value="{{ $provincia->id }}">
                                                                        {{ $provincia->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Destination -->
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="destination">Destination</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <select name="destination" id="destination"
                                                                class="form-control" wire:model='destination'>
                                                                <option value="" disabled selected>Select
                                                                    destination province</option>
                                                                @foreach ($provincias as $provincia)
                                                                    <option value="{{ $provincia->id }}">
                                                                        {{ $provincia->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Check-in -->
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="checkin_date">Check-in Date</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkin_date"
                                                                id="checkin_date" placeholder="Check-in Date"
                                                                wire:model='checkin_date'>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Price Limit -->
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="price_limit">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="price_limit" id="price_limit"
                                                                    class="form-control">
                                                                    <option value="">100</option>
                                                                    <option value="">$10,000</option>
                                                                    <option value="">$50,000</option>
                                                                    <option value="">$100,000</option>
                                                                    <option value="">$200,000</option>
                                                                    <option value="">$300,000</option>
                                                                    <option value="">$400,000</option>
                                                                    <option value="">$500,000</option>
                                                                    <option value="">$600,000</option>
                                                                    <option value="">$700,000</option>
                                                                    <option value="">$800,000</option>
                                                                    <option value="">$900,000</option>
                                                                    <option value="">$1,000,000</option>
                                                                    <option value="">$2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="button" value="Search"
                                                                wire:click='search_viajem'
                                                                class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                        aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row no-gutters">
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="destination">Destination</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span>
                                                            </div>
                                                            <select name="destination" id="destination"
                                                                class="form-control">
                                                                <option value="" disabled selected>Select
                                                                    destination province</option>
                                                                @foreach ($provincias as $provincia)
                                                                    <option value="{{ $provincia->id }}">
                                                                        {{ $provincia->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Check-in date</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkin_date"
                                                                placeholder="Check In Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Check-out date</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-calendar"></span>
                                                            </div>
                                                            <input type="text" class="form-control checkout_date"
                                                                placeholder="Check Out Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="" id=""
                                                                    class="form-control">
                                                                    <option value="">$100</option>
                                                                    <option value="">$10,000</option>
                                                                    <option value="">$50,000</option>
                                                                    <option value="">$100,000</option>
                                                                    <option value="">$200,000</option>
                                                                    <option value="">$300,000</option>
                                                                    <option value="">$400,000</option>
                                                                    <option value="">$500,000</option>
                                                                    <option value="">$600,000</option>
                                                                    <option value="">$700,000</option>
                                                                    <option value="">$800,000</option>
                                                                    <option value="">$900,000</option>
                                                                    <option value="">$1,000,000</option>
                                                                    <option value="">$2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search"
                                                                class="align-self-stretch form-control btn btn-primary p-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @if ($search)
        <section class="ftco-section services-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        {{-- Verificação de resultados --}}
                        @if (empty($results))
                            <div class="text-center py-5 bg-light rounded-3">
                                <i class="bi bi-compass fs-1 text-muted"></i>
                                <h3 class="mt-3 text-secondary">No results found</h3>
                                <p class="text-muted">Try adjusting your search criteria</p>
                            </div>
                        @else
                            @php
                                $lowestPrice = $results->min('preco');
                            @endphp

                            <div class="row g-4"> {{-- Grid gap adicionado --}}
                                @foreach ($results as $result)
                                    <div class="col-xl-3 col-lg-4 col-md-6"> {{-- Colunas mais detalhadas --}}
                                        <div
                                            class="card h-100 shadow-sm position-relative
                                            border-hover-primary @if ($result->preco == $lowestPrice) border-success border-2 @else border @endif">

                                            {{-- Badge de menor preço --}}
                                            @if ($result->preco == $lowestPrice)
                                                <div class="position-absolute top-0 start-0 m-2">
                                                    <span class="badge bg-success bg-opacity-90 text-white">
                                                        <i class="bi bi-tag-fill me-1"></i>Cheapest
                                                    </span>
                                                </div>
                                            @endif

                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h5 class="card-title mb-0 text-truncate pe-2">
                                                        {{ $this->getProvianciaName($result->origem_id) }} →
                                                        {{ $this->getProvianciaName($result->destino_id) }}
                                                    </h5>
                                                    <i class="bi bi-bus-front fs-5 text-primary"></i>
                                                </div>

                                                <div class="row g-2 mt-auto">
                                                    <div class="col-md-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-building me-2 text-muted"></i>
                                                            <div>
                                                                <div class="text-muted small">Transport Company</div>
                                                                <div class="h6 text-primary mb-0">
                                                                    {{ $result->transportadora_nome }}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="text-end">
                                                            <div class="text-muted small">Total Price</div>
                                                            <div class="h3 text-success fw-bolder mb-0">
                                                                @if (is_numeric($result->preco))
                                                                    {{ number_format($result->preco, 2, ',', ' ') }}
                                                                    <small class="fs-6">Kz</small>
                                                                @else
                                                                    <span class="text-danger fs-6">N/A</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer bg-transparent py-2">
                                                <div class="d-flex justify-content-between small text-muted">
                                                    <span>
                                                        <i class="bi bi-calendar3 me-1"></i>
                                                        @if ($result->departure_date)
                                                            {{ \Carbon\Carbon::parse($result->departure_date)->format('d M Y') }}
                                                        @else
                                                            Flexible
                                                        @endif
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-clock me-1"></i>
                                                        {{ $result->duration ?? '--:--' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Section  for Abou My Angola --}}
    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Welcome to Angola</span>
                        <h2 class="mb-4">It's time to start your adventure in Angola</h2>
                        <p>A land of rich culture, stunning landscapes, and untold stories, Angola invites you to
                            explore its hidden gems and vibrant traditions.</p>
                        <p>From the golden beaches of Benguela to the majestic Kalandula Falls, and the wild beauty of
                            Kissama National Park — every corner holds a new adventure. Experience the warmth of Angolan
                            hospitality and discover a destination like no other in the heart of Africa.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Explore Destinations</a></p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img"
                                style="background-image: url(images/catarata-ruacana-angola-namibia-africa-web-1170-768.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-paragliding"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Nature & Adventure</h3>
                                    <p>Explore breathtaking natural wonders such as the Kalandula Falls, Tundavala Gap,
                                        and the Namib Desert in southern Angola.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img"
                                style="background-image: url(images/igma.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-route"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Safari & Wildlife</h3>
                                    <p>Enjoy an unforgettable experience at Kissama National Park, home to elephants,
                                        giraffes, and other iconic African wildlife.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img"
                                style="background-image: url(images/Angola-20101118-184022-12269-1240x827.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-tour-guide"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Culture & History</h3>
                                    <p>Discover Angola's rich heritage through its monuments, museums, and traditions.
                                        Don't miss the iconic Moon Viewpoint and National Museum of Anthropology.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-4 d-block img"
                                style="background-image: url(images/sehr-schon.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-map"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Tropical Beaches</h3>
                                    <p>Relax on the crystal-clear waters of Blue Bay, Praia Morena, and Cabo Ledo —
                                        perfect for swimming, surfing, and unforgettable sunsets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    {{-- List main --}}
    <section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Pacific Provide Places</span>
                    <h2 class="mb-4">Select Your Destination</h2>
                </div>
            </div>
        </div>
        <div class="container container-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-destination owl-carousel ftco-animate">
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/place-1.jpg);">
                                    <div class="text">
                                        <h3>Philippines</h3>
                                        <span>8 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/place-2.jpg);">
                                    <div class="text">
                                        <h3>Canada</h3>
                                        <span>2 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/place-3.jpg);">
                                    <div class="text">
                                        <h3>Thailand</h3>
                                        <span>5 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/place-4.jpg);">
                                    <div class="text">
                                        <h3>Autralia</h3>
                                        <span>5 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/place-5.jpg);">
                                    <div class="text">
                                        <h3>Greece</h3>
                                        <span>7 Tours</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

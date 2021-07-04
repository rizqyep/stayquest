@extends('layouts.app')


@section('title')
    {{ $package->name }}

@endsection

@section('content')
    </header>
    <!-- /header -->
    <div class="hidden" id="city">
        {{ $package->city }}
    </div>
    <div class="hidden" id="duration">
        {{ $package->duration }}
    </div>
    <main>
        <section class="hero_in hotels_detail" style="background:url('/storage/{{ $package->image }}')">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>{{ $package->name }}</h1>
                </div>
                <span class="magnific-gallery">
                    <a href="/storage/{{ $package->image }}" class="btn_photos" title="Photo title"
                        data-effect="mfp-zoom-in">View Photo</a>
                </span>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#description" class="active">Description</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                        <li><a href="#sidebar">Booking</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card mb-3" style="background:hsl(0, 100%, 92%)">
                            <div class="card-body" style="color: black">
                                <h4 class="mb-3">
                                    <span class="text-danger">
                                        <i class="fa fa-fw fa-info-circle" aria-hidden="true"></i>
                                    </span>
                                    COVID-19 Related Information
                                </h4>

                                <ul class="bullets">
                                    <li>
                                        All facilities in this resort/hotel are highly higened with proper cleaning
                                        protocol.
                                    </li>
                                    <li>
                                        This Object is located at {{ $package->province }} Province ,
                                        {{ $package->city }}
                                        City , which according to Indonesian's Public COVID 19 Data is Categorized as :
                                        <span id="covidZone" class="font-weight-bold">

                                        </span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                        <section id="description">
                            <h2>Description</h2>
                            <p>{{ $package->description }}</p>

                            <h2>Quests Included in this Package</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="mt-3 mb-3">
                                        @foreach ($package->quests as $quest)
                                            <li>
                                                <div class="d-flex justify-content-start">
                                                    <img src="/storage/{{ $quest->icon }}" alt="" class="mr-3"
                                                        style="width:80px;">
                                                    {{ $quest->name }}
                                                </div>
                                            </li>
                                            <hr>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                            <!-- /row -->
                            <hr>

                            <h3>Pictures from our users</h3>
                            <div class="pictures_grid magnific-gallery clearfix">
                                <figure><a href="/img/detail_gallery/detail_1.jpg" title="Photo title"
                                        data-effect="mfp-zoom-in"><img src="/img/detail_gallery/detail_1.jpg" alt=""></a>
                                </figure>
                            </div>
                            <!-- /pictures -->

                            <hr>

                            <h2>Room Included in this Package</h2>
                            <hr>
                            <h4 class="mt-3">{{ $package->accommodation->name }}</h4>
                            <p><i class="fa fa-fw fa-user mr-2"></i> {{ $package->accommodation->capacity }}
                                person max</p>
                            <ul class="hotel_facilities">
                                <li><img src="/img/hotel_facilites_icon_2.svg" alt="">Single Bed</li>
                                <li><img src="/img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
                                <li><img src="/img/hotel_facilites_icon_5.svg" alt="">Shower</li>
                                <li><img src="/img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
                                <li><img src="/img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
                            </ul>

                            <!-- /row -->


                            <!-- /rom_type -->
                            <hr>
                            <h3>Location</h3>
                            <div id="map" class="map map_single add_bottom_30"></div>
                            <!-- End Map -->
                        </section>
                        <!-- /section -->

                        <section id="reviews">
                            <h2>Reviews</h2>
                            <div class="reviews-container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div id="review_summary">
                                            <strong>8.5</strong>
                                            <em>Superb</em>
                                            <small>Based on 4 reviews</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%"
                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 20%"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div class="col-lg-10 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>

                            <hr>

                            <div class="reviews-container">

                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/img/avatar1.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Admin – April 03, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar
                                                hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/img/avatar2.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Ahsan – April 01, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar
                                                hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb"><img src="/img/avatar3.jpg" alt="">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <i class="icon-star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star"></i>
                                        </div>
                                        <div class="rev-info">
                                            Sara – March 31, 2016:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar
                                                hendrerit. Cum sociis natoque penatibus et magnis dis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /review-box -->
                            </div>
                            <!-- /review-container -->
                        </section>
                        <!-- /section -->
                        <hr>

                        <div class="add-review">
                            <h5>Leave a Review</h5>
                            @guest
                                <h4 class="text-center mt-5 text-muted">You need to be logged in to leave a review</h4>
                                <a href="{{ route('login') }}" class="text-center">Login Here</a>
                            @else
                                <form action="{{ url('/packages/review/' . $package->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Rating </label>
                                            <div class="custom-select-form">
                                                <select name="rating" id="rating" class="wide">
                                                    <option value="1">1 (lowest)</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected>5 (medium)</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10 (highest)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Your Review</label>
                                            <textarea name="text" id="text" class="form-control"
                                                style="height:130px;"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 add_top_20">
                                            <input type="submit" value="Submit" class="btn_1" id="submit-review">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /col -->
                    @endguest
                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <span>{{ $package->idrPrice() }}</span>
                                <div class="score"><span>Good<em>{{ $package->reviews->count() }}
                                            Reviews</em></span><strong>{{ $package->rating() }}</strong>
                                </div>
                            </div>
                            <form action="{{ url('carts') }}" method="POST">
                                @csrf
                                <input type="hidden" name="package_id" value="{{ $package->id }}">
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input class="form-control" type="date" name="start_date" id="start_date"
                                        placeholder="When..">
                                </div>

                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input class="form-control" type="date" name="end_date" id="end_date"
                                        placeholder="Select starting date">
                                </div>


                                <div class="form-group">
                                    <label for="guest">Guests (max for this
                                        package:{{ $package->accommodation->capacity }} )</label>
                                    <input type="number" name="guest" id="guest" class="form-control"
                                        max="{{ $package->accommodation->capacity }}" min="1" value="1">
                                </div>

                                <button class=" add_top_30 btn_1 full-width purchase">Proceed to Booking</button>
                            </form>

                            {{-- <ul class="share-buttons">
                            <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                            <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                            <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                        </ul> --}}
                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
    <script>
        function loadJSON(path, success, error) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        if (success)
                            success(JSON.parse(xhr.responseText));
                    } else {
                        if (error)
                            error(xhr);
                    }
                }
            };
            xhr.open("GET", path, true);
            xhr.send();
        }


        window.addEventListener('load', () => {
            let city = document.getElementById('city').innerText;
            loadJSON('/json/covid19.json', (data) => {
                data.data.forEach((covidData) => {
                    if (covidData.kota.includes(city)) {
                        let covidZone = document.getElementById('covidZone');
                        covidZone.innerText = "";
                        covidZone.className = "";
                        if (covidData.hasil == "RESIKO SEDANG") {
                            covidZone.classList.add('text-warning');
                            covidZone.innerText = "Moderate Risk Zone";
                        }
                        if (covidData.hasil == "RESIKO RENDAH") {
                            covidZone.classList.add('text-primary');
                            covidZone.innerText = "Low Risk Zone";
                        }
                        if (covidData.hasil == "RESIKO Tinggi") {
                            covidZone.classList.add('text-red');
                            covidZone.innerText = "High Risk Zone";
                        }
                        if (covidData.hasil == "TIDAK TERDAMPAK") {
                            covidZone.classList.add('text-success');
                            covidZone.innerText = "Safe Zone due to no Covid Case here.";
                        }
                    }
                })
            })
        })

        let startDate = document.getElementById('start_date');

        startDate.addEventListener('change', () => {
            let splittedStart = startDate.value.split("-");
            console.log(splittedStart);
            let startValue = new Date();
            startValue.setFullYear(parseInt(splittedStart[0]));
            startValue.setDate(parseInt(splittedStart[2]));
            startValue.setMonth(parseInt(splittedStart[1] - 1));
            console.log(startValue);
            let duration = parseInt(document.getElementById('duration').innerText);
            let endValue = new Date(startValue);
            endValue.setDate(startValue.getDate() + duration + 1);
            let endDate = document.getElementById('end_date');
            endDate.value = endValue.toISOString().split('T')[0];
        })
    </script>
@endsection

@extends('layouts.app')

@section('title')
    Home
@endsection


@section('content')
    <!-- Remove this class to disable datepicker full on mobile -->

    <div id="page">
        <main>
            <section class="hero_single version_2">
                <div class="wrapper">
                    <div class="container">
                        <h3>Book unique experiences</h3>
                        <p>Explore top rated staycation packages with maximum safety and experience!</p>
                        <a href="{{url('/register')}}" class="mt-3 btn_1">
                            Start Now
                        </a>
                    </div>
                </div>
            </section>
            <!-- /hero_single -->

            <div class="container container-custom margin_80_0">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Recommended Staycation Packages</h2>
                </div>
                <div id="reccomended" class="owl-carousel owl-theme">
                    @foreach ($recommendedPackages as $package)
                        <div class="item">
                            <div class="box_grid">
                                <figure>
                                    <a href="#0" class="wish_bt"></a>
                                    <a href="{{ url('packages/' . $package->id) }}"><img
                                            src="/storage/{{ $package->image }}" class="img-fluid" alt="" width="800"
                                            height="533">
                                        <div class="read_more"><span>Read more</span></div>
                                    </a>

                                </figure>
                                <div class="wrapper">
                                    <h3><a href="{{ url('packages/' . $package->id) }}">{{ $package->name }}</a></h3>
                                    <p>{{ $package->description }}
                                    </p>
                                    <span class="price">From <strong>{{ $package->idrPrice() }}</strong> </span>
                                    <p>Room Capacity : {{ $package->accommodation->capacity }} person</p>
                                </div>
                                <ul>
                                    <li><i class="icon_clock_alt"></i> {{ $package->duration }} days</li>
                                    <li>
                                        <div class="score"><span><em>{{ $package->reviews->count() }}
                                                    Reviews</em></span><strong>{{ $package->rating() }}</strong></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item -->

                    @endforeach
                    <!-- /item -->
                </div>
                <!-- /carousel -->
                <p class="btn_home_align"><a href="{{ url('/packages') }}" class="btn_1 rounded">View all Packages</a>
                </p>
                <hr class="large">
            </div>
            <!-- /container -->


    </div>
    <!--/call_section-->
    </main>
    <!-- /main -->


@endsection

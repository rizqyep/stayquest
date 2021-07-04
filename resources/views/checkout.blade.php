@extends('layouts.app')

@section('title')
    Finish Checkout
@endsection


@section('content')



    <main>
        <div class="hero_in cart_section last">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix">
                        <div class="bs-wizard-step">
                            <div class="text-center bs-wizard-stepnum">Your cart</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="bs-wizard-dot"></a>
                        </div>

                        <div class="bs-wizard-step">
                            <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>

                        <div class="bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum">Finish!</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#0" class="bs-wizard-dot"></a>
                        </div>
                    </div>
                    <!-- End bs-wizard -->
                    <div id="confirm">
                        <h4>Order completed, your package has been successfully booked!</h4>
                        <a class="btn btn-warning text-black text-center mt-3" href="{{ url('/user/bookings') }}">See
                            Booking
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/hero_in-->
    </main>
    <!--/main-->

@endsection

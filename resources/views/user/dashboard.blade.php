@extends('layouts.user')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <h2>Hello , {{ Auth::user()->name }}!</h2>
            <p class="mb- 3">Your Points : {{ Auth::user()->profile->points }} pts</p>

            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-suitcase"></i>
                            </div>
                            <div class="mr-5">
                                <h5>Your Bookings</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ url('/user/bookings') }}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-question-circle-o"></i>
                            </div>
                            <div class="mr-5">
                                <h5>Active Quests</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ url('/user/quests') }}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /cards -->
    <h2></h2>

@endsection

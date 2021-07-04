@extends('layouts.admin')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-suitcase"></i>
                    </div>
                    <div class="mr-5">
                        <h5>Packages Data</h5>
                    </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ url('/admin/packages') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>

    </div>
    <!-- /cards -->
    <h2></h2>

@endsection

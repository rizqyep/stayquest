@extends('layouts.user')

@section('title')
    Your Bookings
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Your Bookings</li>
            </ol>
            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block">All Your Bookings</h2>

                </div>
                <div class="list_general">
                    <ul>
                        @foreach ($bookings as $booking)
                            <li>
                                <figure><img src="/storage/{{ $booking->package->image }}" alt=""></figure>
                                <h3>{{ $booking->package->name }}</h3>

                                <h5 class="mb-3 text-muted">Booking Code : {{ $booking->code }}</h5>
                                <p>Date : {{ $booking->start_date }} - {{ $booking->end_date }}</p>
                                <p class="text-primary font-weight-bold">
                                    This Package Includes
                                    {{ $booking->package->quests->count() }}
                                    Quests
                                </p>
                            </li>
                            <hr class="mb-3">
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

@endsection

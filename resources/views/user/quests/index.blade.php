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
                <li class="breadcrumb-item active">Active Quests</li>
            </ol>
            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block">All Active Quests</h2>
                </div>
@if($noActive)

<h4 class="mt-5 mb-5 text-center">
    No Active Quest
</h4>

@else
                @foreach ($quests as $quest)

                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="d-flex justify-content-center">
                                        <img src="/storage/{{ $quest->icon }}" alt="Quest Image" style="width:20vw;"
                                            class="mr-0 mr-md-3 mb-3 ">
                                    </div>
                                </div>

                                <div class="col-md-8 text-center text-md-left">
                                    <h4 class="font-weight-bold">
                                        {{ $quest->name }}
                                    </h4>

                                    <p class="text-primary">
                                        <i class="fa fa-fw fa-map pin mr-3">

                                        </i>{{ $quest->location }}
                                    </p>

                                    @if ($quest->isCompleted(Auth::user()->id))
                                        <p class="text-success font-weight-bold">You Have Completed This Quest!</p>
                                    @else
                                        <p>Complete this quest by doing the related activity, the tenant will give you
                                            the
                                            QR Code Completion in the end of activity!</p>
                                    @endif


                                </div>
                            </div>


                        </div>
                    </div>

                @endforeach

@endif
            </div>
        </div>
    </div>
@endsection

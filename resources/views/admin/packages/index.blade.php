@extends('layouts.admin')

@section('title')
    All packages
@endsection


@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Packages</li>
            </ol>
            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block">Packages</h2>

                </div>
                <div class="list_general">
                    <ul>
                        @foreach ($packages as $package)
                            <li>
                                <figure><img src="/storage/{{ $package->image }}" alt=""></figure>

                                <h4>{{ $package->name }}</h4>
                                <p>
                                    {{ $package->description }}
                                </p>

                                <p class="text-dark font-weight-bold">
                                    <i class="fa fa-fw fa-question-circle-o mr-2"></i> {{ $package->quests->count() }}
                                    Quests
                                </p>

                                <ul class="buttons">
                                    <li>
                                        <a href="{{ url('/admin/packages/quests/' . $package->id) }}"
                                            class="btn_1  wishlist_close"><i class="fa fa-fw fa-question"></i>
                                            Show Quests</a>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{ $packages->links() }}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin');


@section('title')
    Package's Quests
@endsection


@section('content')


    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items baseline">
                <h4>Quests on This Package</h4>
                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#addQuestModal"><i
                        class="fa fa-fw fa-plus"></i> Add New
                    Quest</button>

                <!-- Modal Add Quest -->
                <div class="modal fade" id="addQuestModal" tabindex="-1" role="dialog" aria-labelledby="addQuestModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addQuestModalLabel">Add New Quest</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/admin/packages/quests/' . $package->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="icon">Icon</label>
                                        <input type="file" name="icon" id="icon" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Quest's Title</label>
                                        <input class="form-control" type="text" name="name" id="name"
                                            placeholder="E.g. : Chill at The Cafe">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Quest's Location</label>
                                        <input class="form-control" type="text" name="location" id="location"
                                            placeholder="E.g. : Resort's Cafe">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Quest's Description</label>
                                        <input class="form-control" type="text" name="description" id="description"
                                            placeholder="E.g: Use your included voucher for the Resort's Cafe and get the point reward!">
                                    </div>



                                    <div class="form-group">
                                        <label for="points">Points Rewarded</label>
                                        <input type="number" min="10" max="500" value="10" step="5" id="points"
                                            name="points" class="form-control">
                                    </div>

                                    <button class="btn_1 w-100">Add Quest</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Quest -->
            </div>


            @foreach ($quests as $quest)
                <hr class="mt-3 mb-3">
                <div class="d-flex justify-content-start align-items-center ">
                    <div style="width:22vw;" class="d-flex justify-content-center mr-5">
                        <img src="/storage/{{ $quest->icon }}" alt="" style="width:20vw">
                    </div>
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <h4>{{ $quest->name }}</h4>
                            <form action="{{ url('/admin/packages/quests/' . $package->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $quest->id }}">
                                <button class=" btn btn-danger btn-sm"><i class="fa fa-fw fa-trash text-white"></i></button>
                            </form>
                        </div>
                        <p>{{ $quest->descrition }}</p>
                        <p><i class="fa fa-fw fa-money mr-2"></i>{{ $quest->points }} Points </p>
                        <p><i class="fa fa-fw fa-map-pin mr-2"></i>{{ $quest->location }}</p>

                        <button class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#questQRCodeModal{{ $loop->iteration }}">
                            <i class="fa fa-fw fa-plus"></i> Show
                            Completion QR
                        </button>

                        <!-- Modal QRCode -->
                        <div class="modal fade" id="questQRCodeModal{{ $loop->iteration }}" tabindex="-1" role="dialog"
                            aria-labelledby="questQRCodeModal{{ $loop->iteration }}Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="questQRCodeModal{{ $loop->iteration }}Label">QR Code
                                            For Completion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body pt-3 pb-3">
                                        <div class="d-flex justify-content-center">
                                            {!! QrCode::size(300)->generate(env('WEB_URL') . '/quests/completion/' . $quest->completion->random_id) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal QRCode -->
                    </div>
                </div>
            @endforeach
            <hr class="mt-3 mb-3">
        </div>
    </div>
@endsection

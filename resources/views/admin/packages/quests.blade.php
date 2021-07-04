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
                                <form action="{{ url('/admin/package/quests/' . $package->id) }}" method="post"
                                    enctype="multipart/form-data">
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

        </div>
    </div>
@endsection

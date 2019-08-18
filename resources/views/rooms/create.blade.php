@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Add New Room</p>
                </div>
                <div class="card-body">
                    <form action="{{route('rooms.store')}}" method="POST">
                        {{csrf_field()}}

                        <div class="md-form">
                            <i class="fa fa-text-height prefix"></i>
                            <label class="form-check-label" for="description">
                                Description
                            </label>
                            <input type="text" id="description" name="description" class="form-control" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form">

                                    <label class="form-check-label active" for="bedType">
                                        Bed Type
                                    </label>
                                   <select class="form-control" id="bedType" name="bedtype">
                                       <option value="Single Bed">Single bed</option>
                                       <option value="Double Bed">Double bed</option>
                                       <option value="King Size">King Size</option>
                                       <option value="Queen Size">Queen Size</option>
                                   </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form">

                                    <i class="fa fa-money prefix"></i>
                                    <label class="form-check-label active" for="amount_perDay">
                                        Price Per Day
                                    </label>
                                    <input type="number" class="form-control" id="amount_perDay" required name="amount_perDay">

                                </div>
                            </div>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-info-circle prefix"></i>
                            <label class="form-check-label" for="info">More Info.</label>
                            <textarea class="form-control md-textarea" name="info" id="info" required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert bg-warning"><h4>Please add attractive photos of this room</h4></div>

                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="card hoverable">
                                    <div class="card-body p-5 align-content-center">

                                        <i class="fa fa-plus-circle fa-2x text-muted"> Add Image</i>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card hoverable">
                                    <div class="card-body p-5 align-content-center">

                                        <i class="fa fa-plus-circle fa-2x text-muted"> Add Image</i>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card hoverable">
                                    <div class="card-body p-5 align-content-center">

                                        <i class="fa fa-plus-circle fa-2x text-muted"> Add Image</i>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="card hoverable">
                                    <div class="card-body p-5 align-content-center">

                                        <i class="fa fa-plus-circle fa-2x text-muted"> Add Image</i>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card hoverable">
                                    <div class="card-body p-5 align-content-center">

                                        <i class="fa fa-plus-circle fa-2x text-muted"> Add Image</i>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card hoverable">
                                    <div class="card-body p-5 align-content-center">

                                        <i class="fa fa-plus-circle fa-2x text-muted"> Add Image</i>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <ul class="list-group list-group-flush">

                <li class="list-group-item">
                    <a href="{{route("rooms.index")}}" class="btn btn-primary btn-sm btn-block"><i class="fa fa-long-arrow-left"></i> Back to Rooms</a>
                </li>


            </ul>

        </div>
    </div>
</div>

@endsection

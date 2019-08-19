@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Edit this room</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('rooms.update',$getroom->id)}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="md-form">
                                <i class="fa fa-text-height prefix"></i>
                                <label class="form-check-label" for="description">
                                    Description
                                </label>
                                <input type="text" id="description" name="description" class="form-control" value="{{$getroom->description}}" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form">

                                        <label class="form-check-label active" for="bedType">
                                            Bed Type
                                        </label>
                                        <select class="form-control" id="bedType" name="bedtype">
                                            <option {{$getroom->bedType == 'Single Bed' ? 'selected':''}} value="Single Bed">Single bed</option>
                                            <option {{$getroom->bedType == 'Double Bed' ? 'selected':''}} value="Double Bed">Double bed</option>
                                            <option {{$getroom->bedType == 'King Size'  ? 'selected':''}} value="King Size">King Size</option>
                                            <option {{$getroom->bedType == 'Queen Size' ? 'selected':''}} value="Queen Size">Queen Size</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form">

                                        <i class="fa fa-money prefix"></i>
                                        <label class="form-check-label active" for="amount_perDay">
                                            Price Per Day
                                        </label>
                                        <input type="number" class="form-control" id="amount_perDay" value="{{$getroom->price_perday}}" required name="amount_perDay">

                                    </div>
                                </div>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-info-circle prefix"></i>
                                <label class="form-check-label" for="info">More Info.</label>
                                <textarea class="form-control md-textarea" name="info" id="info" required>{{$getroom->info}}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert bg-warning"><h4>Please add attractive photos of this room</h4></div>
                                </div>
                            </div>
                            <div class="row">
                                @if($getroom->images)

                                @foreach($getroom->images as $image)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{asset($image->url)}}" class="img card-img" alt="{{$getroom->description}}">
                                            <input type="file" class="form-control form-control-file" value="" name="photos[]">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>

                            <button class="btn btn-primary mt-3" type="submit">Update</button>
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


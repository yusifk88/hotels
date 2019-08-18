@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{$getroom->description}}
                    </h3>
                    <p class="text-muted">
                        {{$getroom->info}}
                    </p>
                    <small class="text-primary m-3">
                        <strong>Bed Type</strong> {{$getroom->bedType}}
                    </small>
                    <small class="text-primary m-3">
                        <strong>Created</strong> {{$getroom->created_at->diffForHumans()}}
                    </small>

                </div>

            </div>

            <h2>Images</h2>

        </div>
        <div class="col-md-3">
            <ul class="list-group list-group-flush">
               <li class="list-group-item">
                   <a href="" class="btn btn-primary btn-sm btn-block"> <i class="fa fa-history"></i> Reservation History</a>
               </li>

                <li class="list-group-item">
                   <a href="" class="btn btn-primary btn-sm btn-block"> <i class="fa fa-edit"></i>Edit</a>
               </li>
                <li class="list-group-item">
                   <a href="{{route("rooms.index")}}" class="btn btn-primary btn-sm btn-block"><i class="fa fa-long-arrow-left"></i> Back to Rooms</a>
               </li>
                <li class="list-group-item">
                   <a href="" class="btn btn-danger btn-sm btn-block"> <i class="fa fa-remove"></i> Delete</a>
               </li>

                <li class="list-group-item mt-2">
                   <a href="{{route('rooms.create')}}" class="btn btn-outline-primary btn-sm btn-block"> <i class="fa fa-pencil"></i> Add a Room</a>
               </li>

            </ul>

        </div>
    </div>

</div>

@endsection

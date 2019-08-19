@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
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
                        <div class="col-md-4">
                            <span class="border border-primary p-3 text-primary">
                               GHs {{$getroom->price_perday}} Per Day
                            </span>

                        </div>

                    </div>


                </div>

            </div>
         <h2>Images</h2>

            @if($getroom->images)
                @foreach($getroom->images as $image)
                    <div class="col-md-4">
                        <img src="{{asset('public/storage/'.$image->url)}}" class="img img-thumbnail img-fluid">
                    </div>
                @endforeach

            @endif


            @if($getroom->reservations)

                <h2>Reservation History</h2>





             @endif

        </div>
        <div class="col-md-3">
            <ul class="list-group list-group-flush">
               <li class="list-group-item">
                   <a href="" class="btn btn-primary btn-sm btn-block"> <i class="fa fa-history"></i> Reservation History</a>
               </li>

                <li class="list-group-item">
                   <a href="{{route('rooms.edit',$getroom->id)}}" class="btn btn-primary btn-sm btn-block"> <i class="fa fa-edit"></i>Edit</a>
               </li>
                <li class="list-group-item">
                   <a href="{{route("rooms.index")}}" class="btn btn-primary btn-sm btn-block"><i class="fa fa-long-arrow-left"></i> Back to Rooms</a>
               </li>
                <li class="list-group-item">
                    <form action="{{route('rooms.destroy',$getroom->id)}}" method="post" onsubmit="return confirm('Do you want to delete this room?')">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onclick="delete_room()" type="submit" class="btn btn-danger btn-sm btn-block"> <i class="fa fa-remove"></i> Delete</button>
                    </form>
               </li>

                <li class="list-group-item mt-2">
                   <a href="{{route('rooms.create')}}" class="btn btn-outline-primary btn-sm btn-block"> <i class="fa fa-pencil"></i> Add a Room</a>
               </li>

            </ul>

        </div>
    </div>

</div>


@endsection

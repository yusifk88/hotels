@extends('layouts.app')

@section('content')
<div class="row col-md-12 bg-secondary m-0 p-3">
    <a href="{{route('rooms.create')}}" class="btn btn-sm">Add New <i class="fa fa-plus"></i></a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-2">
            {{$rooms->links()}}
            <div class="table-responsive-sm">
                <table class="table table-striped table-hover">
                    <thead >
                    <tr class="border-bottom border-primary">
                        <th>Description</th>
                        <th>Bed Type</th>
                        <th>Price</th>
                        <th>Other Info</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr class="hoverable">
                            <td>
                                <a class="text-primary" href="{{route('rooms.show',$room->id)}}">
                                    {{$room->description}}
                                </a>
                            </td>

                            <td>
                                {{$room->bedType}}
                            </td>
                            <td>
                                {{$room->price_perday}}
                            </td>
                            <td>
                                {{$room->info}}
                            </td>
                            <td>

                                    <i class="fa fa-ellipsis-v fa-2 text-primary waves-effect waves-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenuButton"></i>
                                    <div class="dropdown" >
                                    <div class="dropdown-menu animated fadeInDown" style="transition: 0.05s ease-in-out !important;" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('rooms.show',$room->id)}}">View Details</a>
                                        <a class="dropdown-item" href="{{route('rooms.edit',$room->id)}}">Edit</a>
                                        <li class="dropdown-item text-danger">
                                            <form action="{{route('rooms.destroy',$room->id)}}" method="post" onsubmit="return confirm('Do you want to delete this room?')">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button onclick="delete_room()" type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </li>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$rooms->links()}}
        </div>
    </div>
</div>

    @endsection()


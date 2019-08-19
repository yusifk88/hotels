<?php

namespace App\Http\Controllers;
use App\Room;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()){
            return view('auth.login');
        }else{
            $rooms = Room::Paginate(10);
        }

        return view('rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::user()){
            return view('auth.login');
        }else{

            return view("rooms.create");
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::user()) {
            $create_room = Room::create([
                'description' => $request['description'],
                'bedType' => $request['bedtype'],
                'price_perDay' => $request['amount_perDay'],
                'info' => $request['info']
            ]);

            if ($create_room) {
                $this->uploadImg($request, $create_room);

                return redirect()->route('rooms.show',$create_room->id);
//                return back()->with('success', 'Room Saved Successfully');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        if (!Auth::user()){
            return view('auth.login');
        }else{

            $getroom = Room::find($room->id);
            return view('rooms.show',compact('getroom'));

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        if(!Auth::user()){
            return view('auth.login');
        }else{
            $getroom = Room::find($room->id);
            return view('rooms.edit',compact('getroom'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {

        $update_room = Room::where('id',$room->id)->update([
            'description' => $request['description'],
            'bedType'     => $request['bedtype'],
            'price_perday'=> $request['amount_perDay'],
            'info'        => $request['info']
    ]);

        if($update_room){

            return redirect()->route('rooms.show',$room->id)->with('success','Room updated Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if(Auth::user()){

            $delroom = Room::find($room->id);
            if($delroom){
                $delroom->delete();
                return redirect()->route('rooms.index');
            }
        }
    }


    public function uploadImg($r, $room){
        if($r->files){
           foreach ($r->file('photos') as $photo){
               $path = Storage::putFile('photos', $photo);
              if($path){

                  Image::create([
                     'url'=> $path,
                      'room_id' => $room->id
                  ]);
              }
           }
        }
    }



}

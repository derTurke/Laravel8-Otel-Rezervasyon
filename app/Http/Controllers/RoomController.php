<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hotel_id)
    {
        $data = Hotel::find($hotel_id);
        $rooms= DB::table('rooms')->where('hotel_id','=',$hotel_id)->get();
        return view('home.user_room_add',['data' => $data,'rooms' => $rooms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$hotel_id)
    {
        $data = new Room;
        $data->hotel_id = $hotel_id;
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('hotel/'.$hotel_id,$request->file('image'));
        $data->price = $request->input('price');
        $data->adet = $request->input('adet');
        $data->type = $request->input('type');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('user_room_add',['hotel_id' => $hotel_id])->with('success','');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room,$id,$hotel_id)
    {
        $data = Room::find($id);
        return view('home.user_room_edit',['data' => $data, "hotel_id" => $hotel_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room,$id,$hotel_id)
    {
        $data = Room::find($id);
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        if($request->file('image') != null) {
            $data->image = Storage::putFile('hotel/' . $hotel_id, $request->file('image'));
        }
        $data->price = $request->input('price');
        $data->adet = $request->input('adet');
        $data->type = $request->input('type');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('user_room_add',['hotel_id' => $hotel_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room,$id,$hotel_id)
    {
        $data = Room::find($id);
        $data->delete();
        return redirect()->route('user_room_add',['hotel_id' => $hotel_id]);
    }
}

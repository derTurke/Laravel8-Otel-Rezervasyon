<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Livewire\str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user_profile');
    }

    public function mycomments(){
        $dataList = Comment::where('user_id','=',Auth::id())->where('status','True')->orWhere('status','New')->get();
        return view('home.user_comments',['dataList' => $dataList]);
    }

    public function destroymycomment(Comment $comment, $id){
        $data = Comment::find($id);
        $data->delete();
        return redirect()->back()->with('success','Comment Deleted');
    }

    public function reservation(Reservation $reservation){
        $dataList = Reservation::where('user_id','=',Auth::id())->get();
        $setting = HomeController::getSetting();
        return view('home.user_myreservation',['dataList' => $dataList, 'setting' => $setting]);

    }

    public function new_reservation(Reservation $reservation,$hotel_id,$room_id){

        $setting = HomeController::getSetting();
        $hotel = Hotel::find($hotel_id);
        $room = Room::find($room_id);
        $days = $_REQUEST["days"];
        $checkin = $_REQUEST["checkin"];
        $checkout = strtotime($checkin);
        $checkout = strtotime("+$days day",$checkout);
        $checkout = date("Y-m-d",$checkout);
        $total = $days * $room->price;


        $data = [
            'setting' => $setting,
            'hotel' => $hotel,
            'room' => $room,
            'total' => $total,
            'checkin' => $checkin,
            'checkout' => $checkout,
            'days' => $days

        ];
        return view("home.user_reservation",$data);

    }
    public function store_reservation(Request $request,$hotel_id, $room_id){
        $room = Room::find($room_id);
        $data = new Reservation;
        $data->user_id = Auth::id();
        $data->hotel_id = $hotel_id;
        $data->room_id = $room_id;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->days = $request->input('days');
        $data->checkin = $request->input('checkin');
        $days = $request->input('days');
        $checkout = strtotime($request->input('checkin'));
        $checkout = strtotime("+$days day",$checkout);
        $checkout = date("Y-m-d",$checkout);
        $data->checkout = $checkout;
        $data->total = $room->price * $days;
        $data->ip = $_SERVER["REMOTE_ADDR"];
        $data->note = $request->input('note');
        $data->save();
        return redirect()->route('user_reservation');
    }

    public function detail_reservation($id){
        $data = Reservation::where('user_id',Auth::id())->find($id);
        $setting = HomeController::getSetting();
        return view('home.user_detail_reservation',['data' => $data, 'setting' => $setting]);

    }
}

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
        $setting = HomeController::getSetting();
        return view('home.user_comments',['dataList' => $dataList , 'setting' => $setting]);
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
        $adults = $_REQUEST["adults"];
        $children = $_REQUEST["children"];
        $checkout = strtotime($checkin);
        $checkout = strtotime("+$days day",$checkout);
        $checkout = date("Y-m-d",$checkout);
        $total = 0;
        if ($children == 0){
            $total = $days * $room->price * $adults;
        } else {
            $total_1 = $days * $room->price * $adults;
            $total_2 = $days * $children * ($room->price * 0.4);
            $total = $total_1 + $total_2;
        }




        $data = [
            'setting' => $setting,
            'hotel' => $hotel,
            'room' => $room,
            'total' => $total,
            'checkin' => $checkin,
            'checkout' => $checkout,
            'days' => $days,
            'adults' => $adults,
            'children' => $children

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
        $data->adults = $request->input('adults');
        $data->children = $request->input('children');
        $days = $request->input('days');
        $checkout = strtotime($request->input('checkin'));
        $checkout = strtotime("+$days day",$checkout);
        $checkout = date("Y-m-d",$checkout);
        $data->checkout = $checkout;
        $total = 0;
        if ($data->children == 0){
            $total = $days * $room->price * $data->adults;
        } else {
            $total_1 = $days * $room->price * $data->adults;
            $total_2 = $days * $data->children * ($room->price * 0.4);
            $total = $total_1 + $total_2;
        }
        $data->total = $total;
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

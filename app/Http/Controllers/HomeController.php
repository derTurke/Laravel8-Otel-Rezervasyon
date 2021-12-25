<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Message;
use App\Models\Room;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getSetting(){
        return Setting::first();
    }
    public static function countcomment($id){
        return Comment::where("hotel_id",$id)->count();
    }
    public static function avgcomment($id){
        return Comment::where('hotel_id',$id)->average('rate');
    }
    public function index(){
        $setting = self::getSetting();
        $slider = Hotel::select('id','title','image')->limit(7)->get();
        $daily = Hotel::select('id','title','image')->limit(7)->inRandomOrder()->get();
        $last = Hotel::select('id','title','image')->limit(7)->orderByDesc('id')->get();
        $picked = Hotel::select('id','title','image')->limit(7)->inRandomOrder()->get();
        $data = [
                    'setting' => $setting,
                    'slider' => $slider,
                    'daily' => $daily,
                    'last' => $last,
                    'picked' => $picked
                ];
        return view('home.index',$data);
    }
    public function aboutus(){
        $setting = self::getSetting();
        return view('home.about',["setting" => $setting]);
    }
    public function hotels(){
        return view('home.hotels');
    }
    public function references(){
        $setting = self::getSetting();
        return view('home.references',["setting" => $setting]);
    }
    public function faq(){
        $dataList = Faq::all();
        $setting = self::getSetting();
        return view('home.faq',["dataList" => $dataList, "setting" => $setting]);
    }
    public function contact(){
        $setting = self::getSetting();
        return view('home.contact',["setting" => $setting]);
    }
    public function sendmessage(Request $request){
        $data = new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();
        return redirect()->route('contact')->with('success','Your message has been received. We thank you.');

    }

    public function hotel($id){
        $setting = self::getSetting();
        $data = Hotel::find($id);
        $image = Image::where('hotel_id',"=",$id)->get();
        $comments = Comment::where('hotel_id',"=",$id)->get();
        $rooms = Room::where('hotel_id',$id)->get();
        return view('home.hotel_detail',['setting' => $setting, 'data' => $data,"image" => $image,"comments" => $comments,"rooms" => $rooms]);
    }

    public function categoryhotel($id){
        $dataList = Hotel::where('category_id',$id)->get();
        $setting = self::getSetting();
        return view('home.category_hotels',['setting' => $setting,'dataList' => $dataList]);
    }
    public function getHotel(Request $request){
        $search = $request->input('search');
        $count = Hotel::where('title', 'like' , '%'.$search.'%')->get()->count();
        if($count == 1){
            $data = Hotel::where('title','like','%'.$search.'%')->first();
            return redirect()->route('hotel',["id" => $data->id]);
        } else {
          return redirect()->route('hotelList',['search' => $search]);
        }
    }
    public function hotelList($search){
        $setting = self::getSetting();
        $dataList = Hotel::where('title','like','%'.$search.'%')->get();
        return view('home.search_hotels',['search' => $search, 'dataList' => $dataList,'setting' => $setting]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

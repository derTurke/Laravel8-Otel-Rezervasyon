<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Message;
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
    public function index(){
        $setting = self::getSetting();
        $slider = Hotel::select('id','title','image')->limit(7)->get();
        $data = [
                    'setting' => $setting,
                    'slider' => $slider,
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
        return view('home.faq');
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
        $data = Hotel::find($id);
        print_r($data);
        exit();
    }

    public function categoryhotel($id){
        $dataList = Hotel::where('category_id',$id)->get();
        $setting = self::getSetting();
        return view('home.category_hotels',['setting' => $setting,'dataList' => $dataList]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

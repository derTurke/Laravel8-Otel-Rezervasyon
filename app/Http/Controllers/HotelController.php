<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Hotel::where("user_id",Auth::id())->get();
        $setting = HomeController::getSetting();
        return view('home.user_hotel',['dataList' => $dataList, 'setting' => $setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataList = Category::with('children')->get();
        $setting = HomeController::getSetting();
        return view('home.user_hotel_add',['dataList' => $dataList,'setting' => $setting]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Hotel;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('images',$request->file('image'));
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->star = $request->input('star');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        $data->user_id = Auth::id();
        $data->status = "False";
        $data->save();
        return redirect()->route('user_hotel')->with('success','Hotel Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel,$id)
    {
        $data = Hotel::find($id);
        $dataList = Category::with('children')->get();
        $setting = HomeController::getSetting();
        return view('home.user_hotel_update',['data'=> $data,'dataList'=>$dataList, 'setting' => $setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel,$id)
    {
        $data = Hotel::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if($request->file('image') != null){
            $data->image = Storage::putFile('images',$request->file('image'));
        }
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->star = $request->input('star');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        $data->user_id = Auth::id();
        $data->status = "False";
        $data->save();
        return redirect()->route('user_hotel')->with('success','Hotel Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel,$id)
    {
        $data = Hotel::find($id);
        $data->delete();
        return redirect()->route('user_hotel')->with('success','Hotel Deleted Successfully');

    }
}

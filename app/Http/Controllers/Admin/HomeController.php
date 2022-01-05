<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $new = Reservation::where('status','New')->get()->count();
        $accepted = Reservation::where('status','Accepted')->get()->count();
        $canceled = Reservation::where('status','Canceled')->get()->count();
        $completed = Reservation::where('status','Completed')->get()->count();
        $total = Reservation::where('status','New')->sum('total');
        $total_2 = Reservation::where('status','Accepted')->sum('total');
        $total_3 = Reservation::where('status','Canceled')->sum('total');
        $total_4 = Reservation::where('status','Completed')->sum('total');
        return view('admin.index',[
            'new' => $new,
            'accepted' => $accepted,
            'canceled' => $canceled,
            'completed' => $completed,
            'total' => $total,
            'total_2' => $total_2,
            'total_3' => $total_3,
            'total_4' => $total_4,
        ]);
    }
    public function login(){
        return view('admin.login');
    }
    public function logincheck(Request $request){
        if($request->isMethod("POST")){
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);

        } else {
            return view('admin.login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = User::all();
        return view('admin.user',['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $data = User::find($id);
        $dataList = Role::all()->sortBy('name');
        return view('admin.user_detail',['data' => $data, 'dataList' => $dataList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $data = User::find($id);
        return view('admin.user_update',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        if($request->file('profile_photo_path') != null){
            $data->profile_photo_path = Storage::putFile('images',$request->file('profile_photo_path'));
        }
        $data->save();
        return redirect()->route('admin_user')->with('success','Updated User Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admin_user')->with('success','Updated User Deleted');
    }

    public function user_roles(User $user,$id){
        $data = User::find($id);
        $dataList = Role::all()->sortBy('name');
        return view('admin.user_roles',['data' => $data, 'dataList' => $dataList]);
    }
    public function user_role_store(Request $request,User $user,$id){
        $user = User::find($id);
        $role_id = $request->input('role_id');
        $user->roles()->attach($role_id);
        return redirect()->back()->with('success','Role added to user');
    }
    public function user_role_delete(Request $request,User $user,$user_id,$role_id){
        $user = User::find($user_id);
        $user->roles()->detach($role_id);
        return redirect()->back()->with('success','Role deleted to user');
    }
}

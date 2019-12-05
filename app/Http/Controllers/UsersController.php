<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/add_admin');
    }

    public function list(){
        return view('admin/list_house');
    }

<<<<<<< Updated upstream
    public function report(){
        return view('admin/view_report');
=======
        foreach($user as $role){
            if($role->is_admin == 'admin'){
                $admin = User::select('users')->select('id', 'name', 'phone_no', 'email', 'is_admin')->where('is_admin','admin')->get();

                return view('admin.index', ['admin' => $admin]);
            }else{
                return view('user.index');
            }
        }
>>>>>>> Stashed changes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $finduser = User::find( $user->id );
        if($finduser->delete()){
            return redirect()->route('admin.index')->with('success', 'Deleted Successfully');
        }
        
        return back()->withInput()->with('errors', 'Deletion unsuccessful');
        
    }
}

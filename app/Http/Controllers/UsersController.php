<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('id', $id)->get();

        foreach($user as $role){
            if($role->is_admin == 'admin'){
                return view('admin.index');
            }else{
                return view('user.index');
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $admin = User::create([
                'name' => $request->input('inputNameAdmin'),
                'password' => Hash::make($request->input('inputPasswd')),
                'email' => $request->input('inputEmail'),
                'phone_no' => $request->input('inputPhoneNumber'),
                'is_admin' => $request->input('inputRole'),
            ]);

            if($admin){
                return redirect()->route('admin.index');
            }
        }
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
        $user = User::find($user->id);
        return view('admin.edit', ['user'=>$user]);
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
        $id = Auth::id();
        $users = User::where('id', $id)->first();

        if($request->hasFile('fileName')){
            $picture = $request->file('fileName');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            if(Auth::user()->is_admin == 'admin'){
                $users->name = $request->input('updateNameAdmin');
                $users->phone_no = $request->input('updatePhoneNumber');
                $users->email = $request->input('updateEmail');
                $users->picture = $filename;
                $users->save();
    
                if($users){
                    return view('admin.index');
                }
    
            }else{
                // user perspective
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function is_admin()
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('id', $id)->get();

        return view('welcome', compact('user'));
        
    }
}

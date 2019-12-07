<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use Auth;
use DB;
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
                $properties = DB::table('users')
                    ->join('properties', 'users.id', '=', 'properties.user_id')
                    ->select('properties.picture', 'description', 'address', 'price', 'status', 'name')
                    ->get();

                return view('admin.index', compact('properties'));
            }else{
                return view('properties.index');
            }
        }
    }

    public function adminList()
    {
        $admin = User::select('users')->select('id', 'name', 'phone_no', 'email', 'is_admin')->where('is_admin','admin')->get();
        return view('admin.listadmin', compact('admin'));
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
        $admin = User::find($user->id);
        return view('admin.show', compact('admin'));
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
        $users = User::find($id);

        if($request->hasFile('fileName')){
            $picture = $request->file('fileName');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            if(Auth::user()->is_admin == 'admin'){
                $users->name = $request->input('updateName');
                $users->phone_no = $request->input('updatePhoneNumber');
                $users->email = $request->input('updateEmail');
                $users->picture = $filename;
                $users->save();
    
                if($users){
                    return redirect()->route('users.index')->with('success','new properties successfuly addded');
                }
    
            }else{
                $users->name = $request->input('updateName');
                $users->phone_no = $request->input('updatePhoneNumber');
                $users->email = $request->input('updateEmail');
                $users->picture = $filename;
                $users->save();

                if($users){
                    return redirect()->route('properties.index')->with('success','new properties successfuly addded');
                }
            }
        }else{
            if(Auth::user()->is_admin == 'admin'){
                $users->name = $request->input('updateName');
                $users->phone_no = $request->input('updatePhoneNumber');
                $users->email = $request->input('updateEmail');
                $users->save();
    
                if($users){
                    return redirect()->route('users.index')->with('success','new properties successfuly addded');
                }
    
            }else{
                $users->name = $request->input('updateName');
                $users->phone_no = $request->input('updatePhoneNumber');
                $users->email = $request->input('updateEmail');
                $users->save();
                
                if($users){
                    return redirect()->route('properties.index');
                }
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
        $finduser = User::find( $user->id );

        if($finduser->delete()){
            return redirect()->route('users.index')->with('success', 'User deleted Successfully');
        }
        
        return back()->withInput()->with('errors', 'Property could not be deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use Auth;
use Image;
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

<<<<<<< Updated upstream
    }

    public function add(){
        return view('admin/add_admin');
    }

    public function indexAdmin(){
        return view('admin.create');
    }

    public function report(){
        return view('admin/view_report');
=======
        foreach($user as $role){
<<<<<<< Updated upstream
            if($role->is_admin == 'admin'){
                $properties = Property::all();
=======
            if($role->is_admin == 'admin'|| 'superadmin'){
                $properties = DB::table('users')
                    ->join('properties', 'users.id', '=', 'properties.user_id')
                    ->select('properties.picture', 'description', 'address', 'price', 'status', 'name')
                    ->get();
>>>>>>> Stashed changes

                return view('admin.index', compact('properties'));
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
<<<<<<< Updated upstream
        //
=======
        if(Auth::check()){
            $admin = User::create([
                'name' => $request->input('inputNameAdmin'),
                'password' => Hash::make($request->input('inputPasswd')),
                'email' => $request->input('inputEmail'),
                'phone_no' => $request->input('inputPhoneNumber'),
                'is_admin' => $request->input('inputRole'),
            ]);

            if($admin){
                return redirect()->route('users.index');
                //return view('admin.index');
            }
        }
>>>>>>> Stashed changes
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
        $users = User::find($id);

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
                
            }
        }else{
            if(Auth::user()->is_admin == 'admin'){
                $users->name = $request->input('updateNameAdmin');
                $users->phone_no = $request->input('updatePhoneNumber');
                $users->email = $request->input('updateEmail');
                $users->save();
    
                if($users){
                    return view('admin.index');
                }
    
            }else{

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
        
        return back()->withInput()->with('errors', 'User could not be deleted');
    }

    public function is_admin()
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('id', $id)->get();

        return view('welcome', compact('user'));
        
    }

    public function list()
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('is_admin', 'user')->get();

        foreach($user as $list){
            if($list->is_admin == 'user'){
                $users = User::all();

                return view('admin.list', compact('users'));
            }else{
                return view('user.index');
            }
        }
    }
}

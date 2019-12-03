<?php

namespace App\Http\Controllers;

use DB;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/user-index');
    }

<<<<<<< Updated upstream
    public function report(){
        return view('user/user-report');
    }

    public function add(){
        return view('user/add-property');
=======
        foreach($user as $role){
            if($role->is_admin == 'admin'){
                return view('admin.index');
            }else{
                return view('properties.index');
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
        
        $img = $request->file('picture');
$desc = $request->input('description');
$address = $request->input('address');
$price = $request->input('price');

$data=array('picture'=>$img,"description"=>$desc,"address"=>$address,"price"=>$price,'user_id'=>auth()->id(),'detail_id'=>auth()->id());
DB::table('properties')->insert($data);
echo "Record inserted successfully.<br/>";
echo '<a href = "/insert">Click Here</a> to go back.';
    }

public function insertreport(Request $request)
{
    protected $fillable = ['description','user_id'];
    $report=$request->validate('description');
    DB::table('reports')->insert(['description'=>$report,'user_id'=>auth()->id()]);
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/insert">Click Here</a> to go back.';

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
<<<<<<< Updated upstream
        //
=======
        if(Auth::user()->is_admin == 'admin'){
            $user = User::find($user->id);
            return view('admin.edit', ['user'=>$user]);
        }else{
            $user = User::find($user->id);
            return view('user.edit', ['user'=>$user]);
        }
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        //
    }
=======
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
            }

            else{
            $users->name = $request->input('updateNameUser');
            $users->phone_no = $request->input('PhoneNumber');
            $users->email = $request->input('Email');
            $users->picture = $filename;
            $users->save();

            if($users){
                return redirect()->route('properties.index');

            }

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
            }

            else{
               $users->name = $request->input('updateNameUser');
               $users->phone_no = $request->input('PhoneNumber');
               $users->email = $request->input('Email');
               $users->save();

               if($users){
                 return redirect()->route('properties.index');

             }
        }
     }

 }
   

>>>>>>> Stashed changes

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
}

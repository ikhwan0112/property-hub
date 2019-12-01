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

    public function report(){
        return view('user/user-report');
    }

    public function add(){
        return view('user/add-property');
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
        //
    }
}

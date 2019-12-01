<?php

namespace App\Http\Controllers;

use App\Property;
use Auth;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = property::latest()->paginate(5);
        return view('property.index',compact('properties'))
        ->with('i',(request()->input('page,1')-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'description' => 'required',
<<<<<<< Updated upstream
            'address' => 'required',
            'price' => 'required'
        ]);

        property::create($request->all());
        return redirect()->route('property.index')
                         ->with('success','new properties successfuly addded');
=======
            'address' => 'optional',
            'price' => 'required'
        ]);

        if(Auth::check()){
            $property = Property::create([
                'picture' => $request->input('pic'),
                'description' => $request->input('description'),
                'address' => $request->input('address_address'),
                'price' => $request->input('price'),
                'status' => "Available",
                'lng' => $request->input('address_longitude'),
                'lat' => $request->input('address_latitude'),
                'user_id' => Auth::id()
            ]);

            if($property){
                return  redirect()->route('property.index')->with('success','new properties successfuly addded');
            }
        }
        
>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
<<<<<<< Updated upstream
        //
=======
        return view('user/add_property');
>>>>>>> Stashed changes
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}

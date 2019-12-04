<?php

namespace App\Http\Controllers;

use App\Property;
use Auth;
use Image;
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
        
        $properties = Property::where('user_id', Auth::id())->get();
        return view('property.index', compact('properties'));
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

        if(Auth::check() && $request->hasFile('pic')){

            $picture = $request->file('pic');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(300, 300)->save(public_path('/uploads/properties/' . $filename));

            $property = Property::create([
                'picture' => $filename,
                'description' => $request->input('description'),
                'address' => $request->input('address_address'),
                'price' => $request->input('price'),
                'status' => "Available",

            ]);

            if($property){
                return  redirect()->route('properties.index')->with('success','New properties successfuly addded');
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
    public function show($id)
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        //
=======
        return view('user/add_property');
>>>>>>> Stashed changes
=======
        $property= Property::find($id);
        return view('property.detail',compact('property'));
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
         $property = Property::find($property->id);
        return view('property.edit', ['property'=>$property]);
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
        $id = Auth::id();
        $properties = Property::find($property->id);

        if($request->hasFile('pic')){
            $picture = $request->file('pic');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(300, 300)->save(public_path('/uploads/properties/' . $filename));

            if(Auth::check()){

                $properties->picture = $filename;
                $properties->description = $request->input('description');
                $properties->address = $request->input('address_address');
                $properties->price = $request->input('price');
                $properties->status = $request->input('status');

            }
            if($properties){
                return  redirect()->route('properties.index')->with('success',' Properties successfuly altered');
            }
        }else{
            if(Auth::check()){

                $properties->description = $request->input('description');
                $properties->address = $request->input('address_address');
                $properties->price = $request->input('price');
                $properties->status = $request->input('status');

            }

            if($properties){
                return  redirect()->route('properties.index')->with('success',' Properties successfuly altered');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
         $findproperty = Property::find( $property->id );
        if($findproperty->delete()){
            return redirect()->route('properties.index')->with('success', 'Property deleted Successfully');
        }
        
        return back()->withInput()->with('errors', 'Property could not be deleted');
    }
}

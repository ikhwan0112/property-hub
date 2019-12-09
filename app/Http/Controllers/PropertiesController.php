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
<<<<<<< Updated upstream
=======
        // $check = Property::whereNull('detail_id')->get();
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======

    public function listhouse()
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('id', $id)->get();

        $properties = DB::table('properties')
                    ->join('users', 'users.id', '=', 'properties.user_id')
                    ->join('details', 'details.id', '=', 'properties.detail_id')
                    ->select('name', 'price', 'address', 'properties.picture','status', 'properties.id', 'bedroom', 'area', 'bathroom')
                    ->get();
        return view('listhouse', compact('properties', 'user'));
    }

    public function singlehouse($idProp)
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('id', $id)->get();

        $properties = DB::table('details')
                    ->join('properties', 'details.id', '=', 'properties.detail_id')
                    ->join('users', 'properties.user_id', '=', 'users.id')
                    ->select('properties.picture', 'name', 'price', 'type', 'bedroom', 'bathroom', 'area', 'address', 'description', 'email', 'phone_no', 'users.picture as userPic', 'lat', 'lng', 'address')
                    ->where('properties.id', $idProp)
                    ->get();

        return view('singlehouse', compact('user', 'properties'));
    }
    public function welcomeHouse()
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('id', $id)->get();

        $properties = DB::table('properties')
                    ->join('users', 'users.id', '=', 'properties.user_id')
                    ->join('details', 'properties.detail_id', '=', 'details.id')
                    ->select('name', 'price', 'address', 'properties.picture','status', 'properties.id', 'bedroom', 'bathroom', 'area')
                    ->take(3)
                    ->get();

        return view('welcome', compact('user', 'properties'));
    }

      public function showFull($idP)
    {
        $properties = DB::table('properties')
                    ->join('details', 'details.id', '=', 'properties.detail_id')
                    ->select('properties.picture', 'price', 'type', 'bedroom', 'bathroom', 'area', 'address', 'description', 'lat', 'lng', 'address','status','facility')
                    ->where('details.id', $idP)
                    ->get();
        return view('property.detail',compact('properties'));
    }

    public function search(Request $request)
    {
        $id = Auth::id();
        $user = User::select('is_admin')->where('id', $id)->get();

        $search = $request->get('search');
        $properties = DB::table('properties')
                    ->join('users', 'users.id', '=', 'properties.user_id')
                    ->join('details', 'details.id', '=', 'properties.detail_id')
                    ->select('name', 'price', 'address', 'properties.picture','status', 'properties.id', 'bedroom', 'area', 'bathroom')
                    -> where('address','LIKE' ,'%'. $search .'%')->get();
        return view('listhouse', compact('user', 'properties'));        
    }
>>>>>>> Stashed changes
}

<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Property;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::where('property_id', $property->id);
        return view('details.index', compact('detail'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Property $id)
    {

        $property = $id;
        return view('detail.create', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Property $id)
    {
         $request->validate
        ([
            'area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'facility' => 'required'
        ]);

        // detail::create($request->all());
        // return redirect()->route('property.index')
        //                  ->with('success','new details successfuly addded');

         $detail = Detail::create([
                'area' => $request->input('area'),
                'bedroom' => $request->input('bedroom'),
                'bathroom' => $request->input('bathroom'),
                'facility' => $request->input('facility'),
                'property_id' => $id,
                'type' => $request->input('type'),
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        
    }
}

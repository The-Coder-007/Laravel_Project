<?php

namespace App\Http\Controllers;

use App\Models\property;
use App\Models\property_detail;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = property::all();
        $propertyDetails = property_detail::all();
        return view('website.properties', ["property" => $property],["propertyDetails" => $propertyDetails]);
    }
    public function home()
    {
        $property = property::all();
        $propertyDetails = property_detail::all();
        return view('website.index', ["property" => $property],["propertyDetails" => $propertyDetails]);
    }
    public function homer()
    {
        $property = property::all();
        $propertyDetails = property_detail::all();
        return view('website.index', ["property" => $property],["propertyDetails" => $propertyDetails]);
    }
    public function manage()
    {
        $props = property::all();
        return view('admin.manage_property', ['props' => $props]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_properties');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
          
            'property_type' => 'required'
            
        ]); 


        $data = new property;

        $data->property_type = $request->property_type;
       


        $data->save();
        Alert::success('Success Title', 'Property Added Success!');
        return redirect('/add_property');
    }

    /**
     * Display the specified resource.
     */
    public function show(property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = property::find($id);
       

        $data->delete();


        Alert::warning('Warning Title', 'Property Deleted');
        return redirect('/manage_property');

    }
}

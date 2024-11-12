<?php

namespace App\Http\Controllers;

use App\Models\property_detail;
use App\Models\property;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PropertyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.property-details');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property_arr = property_detail::all();

        return view('admin.manage_propertyDetails',['property_arr' => $property_arr]);
    }

    /**
     * Store a newly created resource in storage.
     */
  
    public function store(Request $request)
    {

        $validated = $request->validate([
            'property_id' => 'required',
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'image_url' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'size_sqft' => 'required',
            'year_built' => 'required',
            'amenities' => 'required',
            'parking' => 'required',
            'floor_number' => 'required',
        ]); 

        $data = new property_detail;

        $data->property_id = $request->property_id;
        $data->title = $request->title;
        $data->location = $request->location;
        $data->price = $request->price;

        $file = $request->file('image_url');
        $file_name = time() .'_img.'. $file->getClientOriginalExtension();
        $file->move('admin/img/assets/properties/', $file_name);

        $data->image_url = $file_name;

        $data->description = $request->description;
        $data->bedrooms = $request->bedrooms;
        $data->bathrooms = $request->bathrooms;
        $data->size_sqft = $request->size_sqft;
        $data->year_built = $request->year_built;
        $data->amenities = $request->amenities;
        $data->parking = $request->parking;
        $data->floor_number = $request->floor_number;
      

        $data->save();
        Alert::success('Success Title', 'Property Details Added Success!');
        return redirect('/add_propertyDetails');

    }

    /**
     * Display the specified resource.
     */
    public function show(property_detail $property_detail)
    {
        $property_arr = property::all();
        
        return view('admin.add_propertiesDetails', ['property_arr' => $property_arr]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = property_detail::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Property details not found');
        }
    
        $prop_arr = property::all();
        return view('admin.edit_propertyDetails', ["data" => $data , "prop_arr" => $prop_arr ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|integer',
            'description' => 'required|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size_sqft' => 'required|integer',
            'year_built' => 'required|integer',
            'amenities' => 'nullable|string',
            'parking' => 'nullable|integer',
            'floor_number' => 'required|integer',
            // Add other fields as necessary
        ]);

        
        $data = property_detail::find($id);

        $data->property_id = $request->property_id; 
        $data->title = $request->title;
        $data->location = $request->location;
        $data->price = $request->price;

        if($request->hasfile('image_url'))
        {
            $old_img=$data->image_url;
            unlink('admin/img/assets/properties/'.$old_img);

            $file = $request->file('image_url');
            $filename = time() . '_img.' . $file->getClientOriginalExtension(); // 656676576_img.jpg
            $file->move('admin/img/assets/properties/', $filename);  // use move for move image in public/images
            $data->image_url = $filename; // name store in db
        }  
       

        $data->description = $request->description;
        $data->bedrooms = $request->bedrooms;
        $data->bathrooms = $request->bathrooms;
        $data->size_sqft = $request->size_sqft;
        $data->year_built = $request->year_built;
        $data->amenities = $request->amenities;
        $data->parking = $request->parking;
        $data->floor_number = $request->floor_number;
      

        $data->update();
        Alert::success('Success Title', 'Property Details Updated Success!');
        return redirect('/manage_propertyDetails');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = property_detail::find($id);
        $img = $data->image_url;
        unlink('admin/img/assets/properties/'. $img);

        $data->delete();

        Alert::warning('Warning Title', 'Property Details Deleted');
        return redirect('/manage_propertyDetails');
    }
}

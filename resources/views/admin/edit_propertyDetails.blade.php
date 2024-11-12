@extends('admin.layout.main_structure')

@section('main_code')

        
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h4 class="page-title">Dashboard</h4>
              <ul class="breadcrumbs">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Manage</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ url('manage_apartment')}}">Manage Apartment</a>
                </li>
              </ul>
            </div>
            <div class="page-category">
              
                
            
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="preview117">
                        <div class="row base_formbi">
                          <form action="{{ url('update_propertyDetails/' . $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                        

                            <div class="col-md-12 col-12">
                                <div class="base_formbil">
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Upload image</label>
                                        <input type="file" id="example-fileinput" name="img" class="form-control">
                                        <img src="{{ url('admin/img/assets/properties/'. $data->image_url)}}" width="50px" height="50px" alt="">
                                    </div>
                                <div class="mb-3">
                                        <label for="example-select" class="form-label">Title</label>
                                        <select class="form-select" id="example-select" name="title" >
                                            <option value="-">Select Type</option>
                                            <?php
                                            foreach($prop_arr as $val)
                                            {
                                            ?>
                                            <option value="<?php echo $val->id?>"><?php echo $val->property_type;?> </option>
                                            <?php
                                            }
                                            ?> 
                                        </select>
                                    </div>
                                 
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Price</label>
                                        <input type="text" id="simpleinput" name="price" value="{{ $data->price }}"  class="form-control border border-secondary">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label"> Address details</label>
                                        <input type="text" id="simpleinput" name="address" value="{{ $data->location }}" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Bedrooms</label>
                                        <input type="text" id="simpleinput" name="bedroom" value="{{ $data->bedrooms }}"  class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Bathroom</label>
                                        <input type="text" id="simpleinput" name="bathroom" value="{{ $data->bathrooms }}" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Area</label>
                                        <input type="text" id="simpleinput" name="area" value="{{ $data->size_sqft }}" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Floor</label>
                                        <input type="text" id="simpleinput" name="floor" value="{{ $data->floor_number }}" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Parking</label>
                                        <input type="text" id="simpleinput" name="parking" value="{{ $data->parking }}" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Description</label>
                                        <textarea class="form-control border border-secondary" name="description" id="example-textarea" rows="5">{{ $data->description }}</textarea>

                                    </div>
                                    
                                
                                    
                                    <button class="btn btn-primary" name="submit" type="submit">Update</button>
                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
          </div>
        </div>


@endsection




       
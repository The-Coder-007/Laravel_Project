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
                  <a href="#">Add</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ url('add_propertyDetails')}}">Add Properties Details</a>
                </li>
              </ul>
            </div>
            <div class="page-category">
              
                
            
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="preview117">
                        <div class="row base_formbi">
                            <form action="" method="post" enctype="multipart/form-data">
                                @CSRF   
                            <div class="col-md-12 col-12">
                                <div class="base_formbil">
                                 
                                <div class="mb-3">
                                        <label for="example-select" class="form-label">Property Type</label>
                                        <select class="form-select" id="example-select" name="property_id" >
                                            <option value="-">Select Type</option>
                                            <?php
                                            foreach($property_arr as $val)
                                            {
                                            ?>
                                            <option value="<?php echo $val->id?>"><?php echo $val->property_type;?> </option>
                                            <?php
                                            }
                                            ?> 
                                        </select>
                                        @error('property_id')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                    </div><div class="mb-3">
                                      <label for="simpleinput" class="form-label">Title</label>
                                      <input type="text" id="simpleinput" value="{{old('title')}}" name="title" class="form-control border border-secondary">
                                      @error('title')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="simpleinput" class="form-label">Location</label>
                                      <input type="text" id="simpleinput" value="{{old('location')}}" name="location" class="form-control border border-secondary">
                                      @error('location')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="simpleinput" class="form-label">Price</label>
                                      <input type="text" id="simpleinput" value="{{old('price')}}" name="price" class="form-control border border-secondary">
                                      @error('price')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                  </div>
                                 
                                  <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Upload image</label>
                                    <input type="file" id="example-fileinput" name="image_url" class="form-control">
                                    @error('image_url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                </div>
                                 
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Description</label>
                                        <textarea class="form-control border border-secondary" value="{{old('description')}}" name="description" id="example-textarea" rows="5"></textarea>
                                        @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    </div>
                                   
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Bedrooms</label>
                                        <input type="text" id="simpleinput" value="{{old('bedrooms')}}" name="bedrooms" class="form-control border border-secondary">
                                        @error('bedrooms')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Bathroom</label>
                                        <input type="text" id="simpleinput" value="{{old('bathrooms')}}" name="bathrooms" class="form-control border border-secondary">
                                        @error('bathrooms')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Size Squar Fit</label>
                                        <input type="text" id="simpleinput" value="{{old('size_sqft')}}" name="size_sqft" class="form-control border border-secondary">
                                        @error('size_sqft')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Year Built</label>
                                        <input type="text" id="simpleinput" value="{{old('year_built')}}" name="year_built" class="form-control border border-secondary">
                                        @error('year_built')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Amenties</label>
                                        <input type="text" id="simpleinput" value="{{old('amenities')}}" name="amenities" class="form-control border border-secondary">
                                        @error('amenities')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Parking</label>
                                        <input type="text" id="simpleinput" value="{{old('parking')}}" name="parking" class="form-control border border-secondary">
                                        @error('parking')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Floor Number</label>
                                        <input type="text" id="simpleinput" value="{{old('floor_number')}}" name="floor_number" class="form-control border border-secondary">
                                        @error('floor_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                    </div>
                                    
                                
                                    
                                    <button class="btn btn-primary" name="submit" type="submit">Add</button>
                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
          </div>
        </div>


@endsection




       
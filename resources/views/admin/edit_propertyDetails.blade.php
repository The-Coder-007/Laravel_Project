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
                            <form action="#" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 col-12">
                                <div class="base_formbil">
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Upload image</label>
                                        <input type="file" id="example-fileinput" name="img" class="form-control">
                                    </div>
                                <div class="mb-3">
                                        <label for="example-select" class="form-label">Title</label>
                                        <select class="form-select" id="example-select" name="title" >
                                            <option value="-">Select Type</option>
                                            {{-- <?php
                                            foreach($main_categories as $val)
                                            {
                                            ?>
                                            <option value="<?php echo $val->id?>"><?php echo $val->title;?></option>
                                            <?php
                                            }
                                            ?>  --}}
                                        </select>
                                    </div>
                                 
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Price</label>
                                        <input type="text" id="simpleinput" name="price" class="form-control border border-secondary">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label"> Address details</label>
                                        <input type="text" id="simpleinput" name="address" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Bedrooms</label>
                                        <input type="text" id="simpleinput" name="bedroom" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Bathroom</label>
                                        <input type="text" id="simpleinput" name="bathroom" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Area</label>
                                        <input type="text" id="simpleinput" name="area" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Floor</label>
                                        <input type="text" id="simpleinput" name="floor" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Parking</label>
                                        <input type="text" id="simpleinput" name="parking" class="form-control border border-secondary">
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Description</label>
                                        <textarea class="form-control border border-secondary" name="description" id="example-textarea" rows="5"></textarea>
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




       
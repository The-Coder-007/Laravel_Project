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
                  <a href="{{ url('add_apartment')}}">Add Properties</a>
                </li>
              </ul>
            </div>
            <div class="page-category">
              
                
            
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="preview117">
                        <div class="row base_formbi">
                            <form action="#" method="post" enctype="multipart/form-data">

                              @CSRF

                            <div class="col-md-12 col-12">
                                <div class="base_formbil">
                                    
                                {{-- <div class="mb-3">
                                        <label for="example-select" class="form-label">Title</label>
                                        <select class="form-select" id="example-select" name="title" >
                                            <option value="-">Select Type</option>
                                            <?php
                                            foreach($main_categories as $val)
                                            {
                                            ?>
                                            <option value="<?php echo $val->id?>"><?php echo $val->title;?></option>
                                            <?php
                                            }
                                            ?> 
                                        </select>
                                    </div> --}}
                                 
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Property Type</label>
                                        <input type="text" id="simpleinput" value="{{old('property_type')}}" name="property_type" class="form-control border border-secondary">
                                        @error('property_type')
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




       
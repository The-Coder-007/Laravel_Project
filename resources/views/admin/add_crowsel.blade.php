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
                  <a href="{{ url('add_crowsel')}}">Add Crowsel</a>
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
                                      <label for="simpleinput" class="form-label">Address</label>
                                      <input type="text" id="simpleinput" value="{{old('address')}}" name="address" class="form-control border border-secondary">
                                      @error('address')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                  </div>
                                  <div class="mb-3">
                                      <label for="simpleinput" class="form-label">Caption</label>
                                      <input type="text" id="simpleinput" value="{{old('caption')}}" name="caption" class="form-control border border-secondary">
                                      @error('caption')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                  </div>
                                 
                                 
                                  <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Upload image</label>
                                    <input type="file" id="example-fileinput" name="img" class="form-control">
                                    @error('img')
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




       
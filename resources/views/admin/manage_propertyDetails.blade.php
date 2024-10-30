
@extends('admin.layout.main_structure')

@section('main_code')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Manage</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Manage Apartment</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          
          
          <div class="card">
            <div class="card-header">
              <div class="card-title">Manage Apartment</div>
            </div>
            <div class="card-body">
          
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Actions</th>
                      <th>Details_ID</th>
                      <th>Property_ID</th>
                      <th>Title</th>
                      <th>Location</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Bedrooms</th>
                      <th>Bathrooms</th>
                      <th>Size_Squar_Fit</th>
                      <th>Year_Built</th>
                      <th>Amenities</th>
                      <th>Parking</th>
                      <th>Floor_Number</th>
                      <th>Created_AT</th>
                      <th>Updated_AT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(!empty($property_arr)){
                    foreach ($property_arr as $val) {
                    ?>
                    <tr>
                        <td>
                            <h6 data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="edit_vid?evideos=<?php echo $val->id; ?>"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit col_3"></i></a></h6>
                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="delete_propertyDetails/<?php echo $val->id; ?>"><i class="fa fa-trash col_3"></i></a></h6>
                                </td>
                        <td><?php echo $val->id;?></td>
                        {{-- <td><img src="upload/users/<?php echo $val->img;?>" width="30" height="30" alt="user image"></td> --}}
                        <td><?php echo $val->property_id; ?></td>
                        <td><?php echo $val->title; ?></td>
                        <td><?php echo $val->location; ?></td>
                        <td><?php echo $val->price; ?></td>
                        <td><img src="admin/img/assets/properties/<?php echo $val->image_url;?>" width="30" height="30" alt="user image"></td>
                        <td><?php echo $val->description; ?></td>
                        <td><?php echo $val->bedrooms; ?></td>
                        <td><?php echo $val->bathrooms; ?></td>
                        <td><?php echo $val->size_sqft; ?></td>
                        <td><?php echo $val->year_built; ?></td>
                        <td><?php echo $val->amenities; ?></td>
                        <td><?php echo $val->parking; ?></td>
                        <td><?php echo $val->floor_number; ?></td>
                        <td><?php echo $val->created_at; ?></td>
                        <td><?php echo $val->updated_at; ?></td>
                        
                       
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td align="center" colspan="6"> Data Not Found </td>
                        </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

										
										


@endsection
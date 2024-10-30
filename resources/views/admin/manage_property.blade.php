
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
            <a href="#">Manage Property</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          
          
          <div class="card">
            <div class="card-header">
              <div class="card-title">Manage Property</div>
            </div>
            <div class="card-body">
          
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Actions</th>
                      <th>ID</th>
                      <th>Property_Type</th>
                      <th>Status</th>
                      <th>Created_AT</th>
                      <th>Updated_AT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(!empty($props)){
                    foreach ($props as $val) {
                    ?>
                    <tr>
                        <td>
                            <h6 data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Edit" class="d-inline-block mb-0"><a href="edit_vid?evideos=<?php echo $val->id; ?>"><i style="vertical-align:middle; margin-right:5px;" class="fa fa-edit col_3"></i></a></h6>
                            <h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Delete" class="d-inline-block mb-0"><a href="delete_property/<?php echo $val->id; ?>"><i class="fa fa-trash col_3"></i></a></h6>
                                </td>
                        <td><?php echo $val->id;?></td>
                        <td><?php echo $val->property_type; ?></td>
                        <td><?php echo $val->status; ?></td>
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
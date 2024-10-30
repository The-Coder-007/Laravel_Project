
@extends('website.layout.main_structure')

@section('main_code')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="/home">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Apartment</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Villa House</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Penthouse</a>
        </li>
      </ul>
      <div class="row properties-box">
        @foreach ($propertyDetails as $value)
       
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="admin/img/assets/properties/<?php echo $value->image_url;?>" width="720" height="300" alt=""></a>
            <span class="category">Luxury Villa</span>
            {{-- Luxury Villa, Apartment, Penthouse , Modern Condo --}}
            <h6>{{$value->price}}</h6>
            <h4><a href="#">{{$value->location}}</a></h4>
            <ul>
              <li>Bedrooms: <span>{{$value->bedrooms}}</span></li>
              <li>Bathrooms: <span>{{$value->bathrooms}}</span></li>
              <li>Area: <span>{{$value->size_sqft}}</span></li>
              <li>Floor: <span>{{$value->floor_number}}</span></li>
              <li>Parking: <span>{{$value->parking}} Spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div> 
   
        @endforeach
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

 @endsection
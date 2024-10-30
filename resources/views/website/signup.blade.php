<?php
if (session()->has('ses_userid')) {
  echo "<script>window.location='/home';</script>";
}
?>
@extends('website.layout.main_structure')

@section('main_code')



  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            
            <h5>Already have an account click below</h5>
          </div>
          <p><a href="login"><button  class="orange-button">Login</button></a></p>
         
        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="{{ url('inser_singup')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Upload Image</label>
                  <input type="file" name="img" id="img" value="{{old('img')}}" placeholder="Your image..." autocomplete="on" required>
                @error('img')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="name" name="name" id="name" value="{{old('name')}}" placeholder="Your Name..." autocomplete="on" required>
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" value="{{old('email')}}" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="phone">Password</label>
                  <input type="password" name="password" id="password" placeholder="Password..." autocomplete="on" >
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </fieldset>
              </div>
              <div class="col-lg-12 ">
                <fieldset>
                  <label for="gender">Gender</label><br>
                  Male : <input class="form-input" type="radio" name="gender" value="Male" id="gender">
                  Female : <input class="form-input" type="radio" name="gender" value="Female" id="gender">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="language">Language</label><br>
                 Hindi : <input type="checkbox" name="language[]" value="Hindi" id="language">
                 English : <input type="checkbox" name="language[]" value="English" id="language">
                  Others : <input type="checkbox" name="language[]" value="Others" id="language">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" id="form-submit" class="orange-button">SignUp</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>

@endsection
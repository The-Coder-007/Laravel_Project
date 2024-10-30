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
            
            <h5>Don't have an account click below</h5>
          </div>
          <p><a href="signup"><button  class="orange-button">Sing Up</button></a></p>
         
        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="{{ url('forget_otp')}}" method="post">

            @csrf

            <div class="row">
              
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Enter Your Email Address</label>
                  <input type="text" name="email" value="{{old('email')}}" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" id="form-submit" class="orange-button">Sumbit</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>

@endsection
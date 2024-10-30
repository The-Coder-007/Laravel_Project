<?php
if (session()->has('ses_reset_pass')) {
  
}
else{
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
            
            <h5>For Login click below !</h5>
          </div>
          <p><a href="login"><button  class="orange-button">Login</button></a></p>
         
        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="{{ url('reset_pass/'.session()->get('ses_forget_id')) }}" method="post">
            @csrf

            <div class="row">
              
              <div class="col-lg-12">
                <fieldset>
                  <label for="password">Enter Your New Password</label>
                  <input type="password" name="new_password"  id="password"  placeholder="Enter Your New Password......." required="">
                  @error('otp')
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
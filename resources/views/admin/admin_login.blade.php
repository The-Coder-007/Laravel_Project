{{-- <?php
if (session()->has('ses_adminid')) {
    echo "<script>window.location='/dashboard';</script>";
}
?> --}}
    <!-- Bootstrap core CSS -->
<link href="{{ url('admin/css/login/bootstrap.min.css') }}" rel="stylesheet" >
<link href="{{ url('admin/css/login/font-awesome.min.css') }}" rel="stylesheet" >
<link href="{{ url('admin/css/login/style.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/login/nav.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/login/global.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/login/authentication.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

   
</head>
<body>
<section id="autlog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="autlog_1">
					<h2 class="text-center mb-4"><a class="colo_4" href="#">Admin Panel</a></h2>
					<div class="autlog_1i bg-white" style="width:40%; padding:40px; margin-left:auto; margin-right:auto; border-radius:5px;">
						<h5 class="mb-3">Log in
							{{-- <span class="float-end text_13 normal mt-1">or <a class="colo_4" href="#">Create an account</a></span> --}}
						</h5>
						<form action="{{ url('admin_login')}}" method="post">
							@csrf
						<input class="form-control" type="email" name="email" placeholder="Email address">
						<input class="form-control mt-3" type="password" name="password" placeholder="Password">
						<div class="d-flex justify-content-between mt-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" checked="checked" id="remember">
								<label class="form-check-label" for="remember">
									<span class="bold colo_8 font_14">Remember Me</span>
								</label>
							</div>
							<a href="#" class="colo_4 text_13">Forgot Password?</a>
						</div>
						<button class="btn btn-primary d-block w-100 mt-3 bold" type="submit" name="submit">Log in</button>
						</form>
						{{-- <h6 class="text-center mt-3 normal colo_1 text_13 behalf">or log in with</h6> --}}
						{{-- <div class="autlog_1i1 row mt-3">
							<div class="col-md-6">
								<div class="autlog_1i1l text-center">
									<h6 class="d-block mb-0"><a class="google_btn d-block" href="#"><i style="vertical-align:middle; font-size:20px;   margin-right:3px;" class="fa fa-google-plus"></i> google</a></h6>
								</div>
							</div>
							<div class="col-md-6">
								<div class="autlog_1i1l text-center">
									<h6 class="d-block mb-0"><a class="fb_btn d-block" href="#"><i style="vertical-align:middle; font-size:20px; margin-right:3px;" class="fa fa-facebook-square"></i> facebook</a></h6>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

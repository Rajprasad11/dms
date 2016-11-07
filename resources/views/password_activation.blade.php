<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>DMS</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="{{URL::asset('css/dataTables.bootstrap.min.css')}}">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-social.css')}}">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-select.css')}}">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{URL::asset('css/fileinput.min.css')}}">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{URL::asset('css/awesome-bootstrap-checkbox.css')}}">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="home-brand clearfix">
		<a href="index.html" class="logo"><img src="{{URL::asset('img/logo.png')}}" class="img-responsive" alt=""></a>
		<!--<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
			<li><a href="#"><i class="fa fa-user-plus"></i> Register</a></li>
			</ul>-->
	</div>
	<div class="login-page bk-img" style="background-color: #333;background-size:cover;">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
					@if (session('message'))
    					<div class="alert alert-danger" id="err_msg">
        					{{ session('message') }}
    					</div>
					@endif
						<h1 class="text-center text-bold text-light mt-4x">Set Your Password</h1>
						<div class="well row pt-2x pb-3x bk-light mb-4x">
						
							<div class="col-md-8 col-md-offset-2">
								<form action="{{url('passwordconfirm')}}" method="POST" class="mt">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="id" value="<?php echo $id;?>">
									<label for="" class="text-uppercase text-sm">New Password</label>
									<input type="password" name="newpassword" placeholder="New Password" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Confirm Password</label>
									<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control mb">

																		
									<button class="btn btn-primary btn-block" type="submit">Submit</button>
									

								</form>
								</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	<div class="container"><p class="text-center pt-2x text-light">Copy Right 2016. Designed by Falconnect</p></div>
	</div>
	<!-- Loading Scripts -->
	<script src="{{URL::asset('js/jquery.min.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap-select.min.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/Chart.min.js')}}"></script>
	<script src="{{URL::asset('js/fileinput.js')}}"></script>
	<script src="{{URL::asset('js/chartData.js')}}"></script>
	<script src="{{URL::asset('js/main.js')}}"></script>

<!-- <script type="text/javascript">
	$(document.ready(function(){
			alert("hi");
	});
</script> -->

</body>
</html>
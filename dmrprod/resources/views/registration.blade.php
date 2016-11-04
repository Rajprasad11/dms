<!Doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>DMS</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="home-brand clearfix">
		<a href="index.html" class="logo"><img src="img/logo.png" class="img-responsive" alt=""></a>
		<!--<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
			<li><a href="#"><i class="fa fa-user-plus"></i> Register</a></li>
			</ul>-->
	</div>
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);background-size:cover;">
		<div class="form-content">
			<div class="container">
				<div class="row">
				<form method="POST" action="store">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-2x">Registration</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form action="" class="mt">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<input type="text" name="d_fname" placeholder="First name" class="form-control mb">
									<input type="text" name="d_lname" placeholder="Last name" class="form-control mb">
									<input type="mail" name="d_email" placeholder="Email Id" class="form-control mb">
									<input type="tel" name="d_mobile" placeholder="Contact Number" class="form-control mb">
									<input type="text" name="d_code" placeholder="Dealer Register Number" class="form-control mb">
                                    <div class="form-group">
									<select class="form-control" name="d_city">
												<option>Select your City</option>
												<option>Chennai</option>
												<option>Trichy</option>
												<option>Ooty</option>
												<option>Madurai</option>
									</select></div>

									<button class="btn btn-primary btn-block" type="submit">REGISTER NOW</button>
</form>

											<p>Already Have An Account? <a href="<?=URL::to('/login')?>">Login Now.</a></p>
							</div>
						</div>
						
					</div>
				</form>	
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	<div class="container"><p class="text-center pt-2x text-light">Copy Right 2016. Designed by Falconnect</p></div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
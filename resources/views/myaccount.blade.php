<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
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
	<div class="brand clearfix">
		<a href="index.html" class="logo"><img src="img/logo.png" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="myaccount.html">My Account</a></li>
					<li><a href="myaccount-e.html">Edit Account</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<!--<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>-->
				<li class="ts-label">Main</li>
				<li class="open"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"><i class="fa fa-desktop"></i> All Listing</a>
					<ul>
						<li><a href="managelisting.html">Manage Listing</a></li>
						<li><a href="listing.html">Buy Listing</a></li>
						<!--<li><a href="notifications.html">Notifications</a></li>
						<li><a href="typography.html">Typography</a></li>
						<li><a href="icon.html">Icon</a></li>
						<li><a href="grid.html">Grid</a></li>-->
					</ul>
				</li>
				<!--<li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
				<li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
				<li><a href="charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
				<li><a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown</a>
					<ul>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">3rd level</a>
							<ul>
								<li><a href="#">3rd level</a></li>
								<li><a href="#">3rd level</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-files-o"></i> Sample Pages</a>
					<ul>
						<li><a href="blank.html">Blank page</a></li>
						<li><a href="login.html">Login page</a></li>
					</ul>
				</li>-->

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li class="ts-account">
						<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="myaccount.html">My Account</a></li>
							<li><a href="myaccount-e.html">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
				<div class="content-header col-xs-12">
         <div class="input-group mb searching col-xs-6"><span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Search here..." ></div>
          <ol class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">My Account</li>
          </ol>
        </div>
					<div class="col-md-12">
					
						<h2 class="page-title">My Account</h2>
					
						<div class="panel panel-default">
							<div class="panel-heading">Account Details</div>
							<div class="panel-body">
								<form method="get" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" value="xxxx" class="form-control mb" disabled="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Mail Id</label>
										<div class="col-sm-10">
											<input type="mail" value="example@mail.com" class="form-control mb" disabled="">
										</div>
									</div>
									<div class="form-group">
												<label class="col-sm-2 control-label">Password</label>
												<div class="col-sm-10">
													<input value="******" class="form-control" name="password" disabled="">
												</div>
											</div>
									<div class="hr-dashed"></div>
									<div class="form-group">
												<label class="col-sm-2 control-label">Gender
													<br>
												</label>
												<div class="col-sm-10">
													<div class="checkbox checkbox-inline checkbox-info">
														<input type="radio" id="inlineCheckbox1" value="Male" name="gender" checked disabled="">
														<label for="inlineCheckbox1"><i class="fa fa-male"></i> Male </label>
													</div>
													</div>
											</div>
									
									<div class="hr-dashed"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Contact Number</label>

										<div class="col-sm-10">
											<div class="input-group mb"><span class="input-group-addon">+91</span>
												<input type="tel" value="9876543210" class="form-control" disabled="">
											</div>
											
										</div>
									</div>
									
								<div class="hr-dashed"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
											<textarea class="form-control" rows="3" disabled="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</textarea>
										</div>
									</div>
									<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Photo</label>
                <img src="img/ts-avatar.jpg" alt=""/>
              </div>
              <div class="hr-dashed"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Select</label>
										<div class="col-sm-10">
											<select class="selectpicker" disabled="">
												<optgroup label="Picnic">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</optgroup>
												<optgroup label="Camping">
													<option>Tent</option>
													<option>Flashlight</option>
													<option>Toilet Paper</option>
												</optgroup>
											</select>
</div>
									</div>
									<div class="hr-dashed"></div>
									
								</form>

							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>
<div class="container-fluid">
<div class="row dash-footer">
					<div class="clearfix pt pb">
						<div class="col-md-12">
							<em>Designed by <a href="#">Falconnect</a></em>
						</div>
					</div>
				</div></div>
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
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
	@include('header')
	<div class="ts-main-content">
		@include('sidebar')
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
				<div class="content-header col-xs-12">
         <div class="input-group mb searching col-xs-6"><span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Search here..." ></div>
          <ol class="breadcrumb">
            <li><a href="{{url('index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Manage Listing</li>
          </ol>
        </div>
					<div class="col-md-12">

						<div class="col-sm-10"><h2>Manage Listing</h2></div>
					<div class="col-sm-2">
					<a href="{{url('add_listing')}}" class="btn btn-primary add-list"><i class="fa fa-plus-square"></i>&nbsp; Add Listing</a>
					</div>
					<div class="hr-dashed"></div>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">List</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>S_No</th>
											<th>Make</th>
											<th>Model</th>
											<th>Location</th>
											<th>Car Name</th>
											<th>Edit</th>
											<th>View</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>S_No</th>
											<th>Make</th>
											<th>Model</th>
											<th>Location</th>
											<th>Car Owner Name</th>
											<th>Edit</th>
											<th>View</th>
											<th>Delete</th>
										</tr>
									</tfoot>
									<tbody>
									<?php
										$i=1;
									?>
									@foreach($select as $fetch)
										<tr>
											<td>{{$i}}</td>
											<td>{{$fetch->make}}</td>
											<td>{{$fetch->model}}</td>
											<td>{{$fetch->car_locality}}</td>
											<td>{{$fetch->car_owner_name}}</td>
											<td><a href="{{url('update/')}}"><i class="fa fa-pencil"></i></a></td>
											<td><a href="{{url('view/'.$fetch->car_id)}}"><i class="fa fa-eye"></i></a></td>
											<td><a href="{{url('delete/'.$fetch->car_id)}}"><i class="fa fa-trash"></i></a></td>
										</tr>
										<?php
										$i++;
										?>
									@endforeach
										
									</tbody>
								</table>
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

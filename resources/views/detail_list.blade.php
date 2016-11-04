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
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mahindra Scorpio</li>
          </ol>
        </div>
					<div class="col-md-12 detail-page">
					
						<h2 class="page-title">Car Details</h2>
					<div class="row detail-top">
					<div class="col-sm-6"><div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{URL::asset('img/slider.jpg')}}" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="{{URL::asset('img/slider.jpg')}}" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="{{URL::asset('img/slider.jpg')}}" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    
  </div></div>
  					<input type="hidden" name="id" value="{{$update->car_id}}">
					<div class="col-sm-6">
					<div class="col-sm-12"><h2 class="page-title">{{$update->make}}</h2>
					<p class="text-primary pull-right"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
					<p class="detail-rate">{{$update->max_exp_price}} - {{$update->min_exp_price}}</p>
					<!-- Button trigger modal -->
										<div class="pull-left"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-phone"></i>
											Contact Dealer
										</button>

										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title" id="myModalLabel">Contact Dealer</h4>
													</div>
													<div class="modal-body">
														<form method="get" class="form-horizontal">
											<div class="form-group">
												<div class="col-sm-10 col-sm-offset-1">
													<input type="text" placeholder="Name" class="form-control">
												</div>
												</div>
												<div class="form-group">
												<div class="col-sm-10 col-sm-offset-1">
													<input type="mail" placeholder="Mail Id" class="form-control">
												</div></div>
												<div class="form-group">
												<div class="col-sm-10 col-sm-offset-1">
													<textarea placeholder="Enter Your Message" class="form-control"></textarea>
												</div></div>
											</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary">Submit</button>
													</div>
												</div>
											</div>
										</div></div><div class="pull-right">
										<ul class="detail-share"><li><a href="#"><i class="fa fa-share" title="share"></i></a></li>
										<li><a href="#"><i class="fa fa-film" title="video"></i></a></li></ul>
										</div>
										
										
					</div>
					</div>
					
					</div>		
					<div class="row">
					<div class="col-sm-3">
					<div class="panel panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">Engine<span class="pull-right detail-icon"><i class="fa fa-safari"></i></span></h3>
										
									</div>
									<div class="panel-body">
										<div class="row"><div class="col-xs-6">Model:</div><div class="col-xs-6">{{$update->model}}</div>
										<div class="col-xs-6">Fuel:</div><div class="col-xs-6">{{$update->fuel_capacity}}</div>
										<div class="col-xs-6">Owner:</div><div class="col-xs-6">{{$update->owner_type}}</div>
										</div>
									</div>
								</div>
								</div>
								<div class="col-sm-3">
					<div class="panel panel-danger">
									<div class="panel-heading">
										<h3 class="panel-title">Dimension<span class="pull-right detail-icon"><i class="fa fa-paper-plane"></i></span></h3>
									</div>
									<div class="panel-body">
										<div class="row"><div class="col-xs-6">Color:</div><div class="col-xs-6">{{$update->colors}}</div>
										<div class="col-xs-6">Transmission:</div><div class="col-xs-6">{{$update->transmission}}</div>
										<div class="col-xs-6">Kilometer:</div><div class="col-xs-6">{{$update->kilometer_run}}</div>
										</div>
									</div>
								</div>
								</div>
								<div class="col-sm-3">
					<div class="panel panel-info">
									<div class="panel-heading">
										<h3 class="panel-title">Comfort<span class="pull-right detail-icon"><i class="fa fa-automobile"></i></span></h3>
									</div>
									<div class="panel-body">
										<div class="row"><div class="col-xs-6">Body:</div><div class="col-xs-6">{{$update->body_type}}</div>
										<div class="col-xs-6">Seats:</div><div class="col-xs-6">{{$update->seatingcapacity}}</div>
										<div class="col-xs-6">AC:</div><div class="col-xs-6">Available</div>
										</div>
									</div>
								</div>
								</div>
								<div class="col-sm-3">
					<div class="panel panel-warning">
									<div class="panel-heading">
										<h3 class="panel-title">Safety<span class="pull-right detail-icon"><i class="fa fa-user-secret"></i></span></h3>
									</div>
									<div class="panel-body">
										<div class="row"><div class="col-xs-6">Air Bag:</div><div class="col-xs-6">
										@if($update->airbag==1)
											yes
											@else
												NO
										@endif
										</div>
										<div class="col-xs-6">Mileage:</div><div class="col-xs-6">{{$update->mileage}}</div>
										<div class="col-xs-6">Lock:</div><div class="col-xs-6">NO</div>
									</div>
								</div>
								</div>
								</div>

							</div>
							<div class="row"><div class="col-sm-12">
						<div class="panel panel-info">
									<div class="panel-heading"><span><i class="fa fa-mobile"></i></span> Dealer Contact</div>
									<div class="panel-body">
										<div class="col-sm-3"><h3>{{$update->car_owner_name}}</h3></div>
										<div class="col-sm-3"><ul class="detail-cont"><li><i class="fa fa-map-marker"></i></li><li>{{$update->car_address_1}}</li></ul></div>
										<div class="col-sm-3"><ul  class="detail-cont"><li><i class="fa fa-envelope-o"></i></li><li>{{$update->car_owner_email}}</li></ul></div>
										<div class="col-sm-3"><ul  class="detail-cont"><li><i class="fa fa-phone"></i></li><li>{{$update->car_owner_mobile}}</li></ul></div>
									</div>
								</div>
						</div></div>	
				<div class="row">
					<div class="clearfix pt pb">
						<div class="col-md-12">
							<em>Designed by <a href="#">Falconnect</a></em>
						</div>
					</div>
				</div>

			</div>
		</div>
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
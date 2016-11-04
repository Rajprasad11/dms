<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Main</li>
				<li class="open"><a href="{{url('index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"><i class="fa fa-desktop"></i> All Listing</a>
					<ul>
						<li><a href="{{url('managelisting')}}">Manage Listing</a></li>
						<li><a href="listing.html">Buy Listing</a></li>
					</ul>
				</li>
				<ul class="ts-profile-nav">
					<li class="ts-account">
						<a href="#"><img src="{{URL::asset('img/ts-avatar.jpg')}}" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="myaccount.html">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
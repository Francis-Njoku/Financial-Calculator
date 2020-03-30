<body onload="document.getElementById('dunner').style.display = 'none'; document.registration.radHear.hidden = true;
            document.frmReferrer.txtOther2.hidden = true;
            document.frmReferrer.txtOther.value = 'not applicable';">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="{{ url('/') }}"><img class="img-responsive" src="{{URL::asset('/img/logo2.png')}}" alt="Kiataker logo"></a>
				<ul class="nav navbar-top-links navbar-right">
                  <!-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-power-off"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a>
							</li>
						</ul>
					</li>-->

				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<!--<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>-->
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Nairametrics</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="/"><em class="fa fa-dashboard">&nbsp;</em>Home</a></li>
			@guest
			<li class=""><a href="{{ route('login') }}"><em class="fa fa-unlock">&nbsp;</em>Login</a></li>
			<li class=""><a href="{{ route('register') }}"><em class="fa fa-user">&nbsp;</em>Register</a></li>
			@else
			<li class="">
               <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <em class="fa fa-power-off">&nbsp;</em>{{ __('Logout') }}
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
               </form>
			</li>
			@endguest

			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
            				<em class="fa fa-money">&nbsp;</em> Fixed Income <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-2">
            					<li><a class="" href="/treasury_bill">
            						<span class="fa fa-arrow-right">&nbsp;</span>Treasury Bill
            					</a></li>

            				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
            				<em class="fa fa-book">&nbsp;</em>Tax <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-1">
            					<li><a class="" href="/tax">
            						<span class="fa fa-arrow-right">&nbsp;</span>Calculate Tax
            					</a></li>
                                <li><a class="" href="/tax_show">
             						<span class="fa fa-arrow-right">&nbsp;</span>Tax Result
             					</a></li>

            				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
            				<em class="fa fa-archive">&nbsp;</em>Financial Factory<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-3">
            					<li><a class="" href="/annualized_rate_of_return">
            						<span class="fa fa-arrow-right">&nbsp;</span>Annualized rate of return
            					</a></li>
                                <li><a class="" href="/inflation">
            						<span class="fa fa-arrow-right">&nbsp;</span>Inflation
            					</a></li>
                                <li><a class="" href="/share_reconstruction">
            						<span class="fa fa-arrow-right">&nbsp;</span>Share reconstruction
            					</a></li>
                                <li><a class="" href="/bonus_share">
            						<span class="fa fa-arrow-right">&nbsp;</span>Bonus share
            					</a></li>
                                <li><a class="" href="/percentage_change">
            						<span class="fa fa-arrow-right">&nbsp;</span>Percentage change
            					</a></li>
                                <li><a class="" href="/wacc">
            						<span class="fa fa-arrow-right">&nbsp;</span>WACC
            					</a></li>
                                <li><a class="" href="/interest_rate_checker">
            						<span class="fa fa-arrow-right">&nbsp;</span>Interest rate checker
            					</a></li>
                                <li><a class="" href="/annuity">
            						<span class="fa fa-arrow-right">&nbsp;</span>Annuity
            					</a></li>
                                <li><a class="" href="/dividend">
            						<span class="fa fa-arrow-right">&nbsp;</span>Dividend
            					</a></li>
            				</ul>
            </li>
		</ul>
	</div><!--/.sidebar-->

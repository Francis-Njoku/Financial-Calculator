<body onload="document.getElementById('dunner').style.display = 'none';
           ">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><img class="img-responsive" src="{{URL::asset('/img/logo2.png')}}" alt="Kiataker logo"></a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<!--<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
							-->
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<!--<li><a href="#">
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
							</li> -->
						</ul>
					</li>
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
				<div class="profile-usertitle-name">{{\App\User::where(['id' => auth()->user()->id])->first()->name}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="/admin"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent">
			<a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                                                                          <em class="fa fa-lock">&nbsp;</em>
                                                                                                        {{ __('Logout') }}
                                                                                                    </a>

                                                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                                        @csrf
                                                                                                    </form>
                                                    			</li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
            				<em class="fa fa-money">&nbsp;</em>Fixed Income <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-3">
            					<li><a class="" href="/admin/treasury_bill">
            						<span class="fa fa-arrow-right">&nbsp;</span>Treasury Bill
            					</a></li>
            				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
            				<em class="fa fa-book">&nbsp;</em>Tax <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-2">
            					<li><a class="" href="/admin/tax">
            						<span class="fa fa-arrow-right">&nbsp;</span>Treasury Bill
            					</a></li>
            				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-5">
            				<em class="fa fa-archive">&nbsp;</em>Financial Factory<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-5">
            					<li><a class="" href="/admin/annualized_rate_of_return">
            						<span class="fa fa-arrow-right">&nbsp;</span>Annualized rate of return
            					</a></li>
                                <li><a class="" href="/admin/inflation">
            						<span class="fa fa-arrow-right">&nbsp;</span>Inflation
            					</a></li>
                                <li><a class="" href="/admin/share_reconstruction">
            						<span class="fa fa-arrow-right">&nbsp;</span>Share reconstruction
            					</a></li>
                                <li><a class="" href="/admin/bonus_share">
            						<span class="fa fa-arrow-right">&nbsp;</span>Bonus share
            					</a></li>
                                <li><a class="" href="/admin/percentage_change">
            						<span class="fa fa-arrow-right">&nbsp;</span>Percentage change
            					</a></li>
                                <li><a class="" href="/admin/wacc">
            						<span class="fa fa-arrow-right">&nbsp;</span>WACC
            					</a></li>
                                <li><a class="" href="/admin/interest_rate_checker">
            						<span class="fa fa-arrow-right">&nbsp;</span>Interest rate checker
            					</a></li>
                                <li><a class="" href="/admin/annuity">
            						<span class="fa fa-arrow-right">&nbsp;</span>Annuity
            					</a></li>
                                <li><a class="" href="/admin/dividend">
            						<span class="fa fa-arrow-right">&nbsp;</span>Dividend
            					</a></li>
            				</ul>
            </li>

		</ul>
	</div><!--/.sidebar-->

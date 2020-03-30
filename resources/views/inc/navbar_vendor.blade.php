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
			<li class="active"><a href="/vendor/index"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
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
            <li class="parent "><a data-toggle="collapse" href="#sub-item-11">
            				<em class="fa fa-user">&nbsp;</em> Profile <span data-toggle="collapse" href="#sub-item-11" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-11">
            					<li><a class="" href="/vendor/profile">
            						<span class="fa fa-arrow-right">&nbsp;</span>Profile
            					</a></li>
            					<li><a class="" href="/vendor/kyc">
            						<span class="fa fa-arrow-right">&nbsp;</span>KYC
            					</a></li>
                                <li><a class="" href="/vendor/bank_info">
            						<span class="fa fa-arrow-right">&nbsp;</span>Bank Information
            					</a></li>
            				</ul>
            </li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
            				<em class="fa fa-user">&nbsp;</em> Users <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-2">
            					<li><a class="" href="/vendor/register_user">
            						<span class="fa fa-arrow-right">&nbsp;</span>Create Customer
            					</a></li>
            					<li><a class="" href="/vendor/users">
            						<span class="fa fa-arrow-right">&nbsp;</span>View Customers
            					</a></li>
            				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-21">
            				<em class="fa fa-archive">&nbsp;</em> Finance Firm <span data-toggle="collapse" href="#sub-item-21" class="icon pull-right"><em class="fa fa-plus"></em></span>
            				</a>
            				<ul class="children collapse" id="sub-item-21">
            					<li><a class="" href="/vendor/list_finance_firm">
            						<span class="fa fa-arrow-right">&nbsp;</span>Finance Firms
            					</a></li>
            					<li><a class="" href="/vendor/suggest_finance_firm">
            						<span class="fa fa-arrow-right">&nbsp;</span>Suggest Finance Firm
            					</a></li>
            				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
                        				<em class="fa fa-archive">&nbsp;</em>Bill Management <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
                        				</a>
                        				<ul class="children collapse" id="sub-item-4">
                        					<li>
                        					<a class="" href="/vendor/add_bill">
                        						Add Bill/Invoice
                        					</a>
                        					</li>
                        					<li>
                        					<a class="" href="/vendor/bills">
                        						List of Bill / Invoice
                        					</a>
                        					</li>
                        					<li>
                                             <a class="" href="/vendor/due_bills">
                                               Due Bills
                                             </a>
                                             </li>
                                            <li>
                                             <a class="" href="/vendor/recovery_legal_proceeding">
                           						Recovery Legal Proceeding
                           					</a>
                                             </li>
                                             <li>
                                             <a class="" href="/vendor/bills_payment">
                                               Bill Payment Record
                                             </a>
                                             </li>
                        				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-6">
                        				<em class="fa fa-book">&nbsp;</em> Loan Management <span data-toggle="collapse" href="#sub-item-6" class="icon pull-right"><em class="fa fa-plus"></em></span>
                        				</a>
             	<ul class="children collapse" id="sub-item-6">
                        					<li><a class="" href="/vendor/apply_loan">
                        						Apply for Loan
                        					</a></li>
                        					<li><a class="" href="/vendor/loan_offers">
                        						Loan Offers
                        					</a></li>
                        					<li><a class="" href="/vendor/active_loan">
                                            	Active Loans
                                            </a></li>
                                            <li><a class="" href="/vendor/discounted_invoice_report">
                                            	Discounted Invoice Report
                                            </a></li>
                                            <li><a class="" href="/vendor/loan_repayment">
                                                Loan Repayment
                                            </a></li>
                        				</ul>
           </li>
           <li class="parent "><a data-toggle="collapse" href="#sub-item-7">
                       				<em class="fa fa-money">&nbsp;</em>Wallet <span data-toggle="collapse" href="#sub-item-7" class="icon pull-right"><em class="fa fa-plus"></em></span>
                       				</a>
                       				<ul class="children collapse" id="sub-item-7">
                       					<li><a class="" href="/vendor/deposit">
                       						Deposit
                       					</a></li>
                       					<li><a class="" href="/vendor/withdraw">
                       						Withdraw
                       					</a></li>
                                        <li><a class="" href="/vendor/wallet_transaction">
                                        	Wallet Transaction
                                        </a></li>
                       				</ul>
           </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-81">
                       				<em class="fa fa-book">&nbsp;</em> Report Management <span data-toggle="collapse" href="#sub-item-81" class="icon pull-right"><em class="fa fa-plus"></em></span>
                       				</a>
                       				<ul class="children collapse" id="sub-item-81">
                       					<li><a class="" href="/vendor/bills_payment_report">
                       						Bill Payment Report
                       					</a></li>
                       					<li><a class="" href="/vendor/bad_bill_report">
                       						Bad Bill Recovery Report
                       					</a></li>
                       					<li><a class="" href="/vendor/loan_payment_report">
                                        	Loan Payment Report
                                        </a></li>
                                        <li><a class="" href="/vendor/wallet_cashflow">
                                        	Wallet Cashflow Report
                                        </a></li>
                       				</ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-9">
                        				<em class="fa fa-calendar">&nbsp;</em>Alert &amp; Notification <span data-toggle="collapse" href="#sub-item-9" class="icon pull-right"><em class="fa fa-plus"></em></span>
                        				</a>
                        				<ul class="children collapse" id="sub-item-9">
                        					<li><a class="" href="/vendor/account_status">
                        						Account Creation
                        					</a></li>
                        					<li><a class="" href="#">
                        						Invoice/Bill Note
                        					</a></li>
                        					<li><a class="" href="#">
                                                Due Bill/Invoice/Loan
                                            </a></li>
                                            <li><a class="" href="#">
                                            	Overdue Notice
                                            </a></li>
                                            <li><a class="" href="#">
                                            	Payment
                                            </a></li>
                                            <li><a class="" href="#">
                                                Legal Proceedings
                                            </a></li>
                                            <li><a class="" href="/admin/announcement">
                                                Announcement
                                            </a></li>
                        				</ul>
            </li>
			<li><a href="#"><em class="fa fa-ticket">&nbsp;</em> Support Ticket</a></li>
			<li><a href="#"><em class="fa fa-gear">&nbsp;</em> Settings</a></li>
		</ul>
	</div><!--/.sidebar-->

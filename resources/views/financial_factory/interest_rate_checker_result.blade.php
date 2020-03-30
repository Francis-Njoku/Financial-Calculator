@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">interest rate checker calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Interest rate checker calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-2"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-8">
		<div class="panel panel-default">
		<div class="panel-body">
		<h2 align="center">Result</h2>
		<hr>
		@if(count($result) >= 1)
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10 col-xs-12">
		<h3></h3>
 <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		            <th>#</th>
		            <th>Value</th>
		        </tr>
		    </thead>
		    <tbody>
		    <tr>
		        <td>Interest</td>
		        <td>&#8358;{{number_format($result['interest'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Interest rate</td>
		        <td>{{number_format($result['interest_rate'], 2)}}%</td>
		    </tr>
            <tr>
		        <td>Loan amount</td>
		        <td>&#8358;{{number_format($result['loan_amount'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Days</td>
		        <td>{{$result['days']}}</td>
		    </tr>
            <tr>
		        <td>Days in the year</td>
		        <td>{{$result['days_year']}}</td>
		    </tr>
            </tbody>
		</table>
		</div>
		</div>
		<div class="col-md-1 col-sm-1"></div>
		@else
		<h3>No entry</h3>
		@endif
		</div>
		<a href="/interest_rate_checker" class="btn btn-success">Calculate Interest Rate Checker</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

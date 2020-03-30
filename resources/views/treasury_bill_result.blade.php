@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">treasury bill calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Treasury bill calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-3"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-6">
		<div class="panel panel-default">
		<div class="panel-body">
		<h2 align="center">Calculator</h2>
		<h3 align="center">Treasury Bill</h3>
		<hr>
		@if(count($result) >= 1)
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10 col-xs-12">
		<div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Value Date</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["value_date"]}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Investment Term</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["investment_term"]}} days</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Face Value</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>&#8358;{{number_format($result["face_value"])}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Interest Rate</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["interest_rate"]}} P.A</p>
		</div>
		<hr>
		<br/>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Investor Total Return</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>&#8358;{{number_format($result["investor_return"])}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Due Date</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["due_date"]}}</p>
		</div>
		</div>
		<div class="col-md-1 col-sm-1"></div>
		@else
		<h3>No entry</h3>
		@endif
		</div>
		<a href="/treasury_bill" class="btn btn-success">Calculate Treasury bill</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-3"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

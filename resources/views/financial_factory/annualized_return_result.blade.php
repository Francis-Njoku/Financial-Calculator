@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">annualized rate of return calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Annualized rate of return calculator</h1>
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
		<h3>Annualized return on investment</h3>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Total investments</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>&#8358;{{number_format($result["total_investments"], 2)}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Gain / (loss) over the period</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>&#8358;{{number_format($result["gain_loss"], 2)}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Period in question (years)</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["period_years"]}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Total return on investment</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["return_investment"]}}%</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Result</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["result"]}}%</p>
		</div>
		<hr>
		<br/>
		<h3>Reverse Calculation</h3>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Total return on investment</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["return_investment"]}}%</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Duration of investment to date</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["duration_investment_date"]}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Annual</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["annual"]}}</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Annualized return</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["annualized_return"]}}%</p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p><b>Error margin</b></p>
		</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
		<p>{{$result["error_margin"]}}%</p>
		</div>
		</div>
		<div class="col-md-1 col-sm-1"></div>
		@else
		<h3>No entry</h3>
		@endif
		</div>
		<a href="/annualized_return" class="btn btn-success">Calculate Annualized return</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

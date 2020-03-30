@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">App</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Apps</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-3"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-6">

		<h2 align="center">Nairametrics Apps</h2>

		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-3"></div>

		</div>

		<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/treasury_bill">
		<img class="img-responsive" src="{{URL::asset('/img/trea.png')}}" alt="treasury bill calculator">
		</a>
		<p align="center"><a href="/treasury_bill">Treasury Bill Calculator</a></p>
		</div>
		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/tax">
		<img class="img-responsive" src="{{URL::asset('/img/tax.png')}}" alt="Tax calculator">
		</a>
		<p align="center"><a href="/tax">Tax Calculator</a></p>
		</div>
		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/annualized_rate_of_return">
		<img class="img-responsive" src="{{URL::asset('/img/arr.png')}}" alt="annualized rate of return calculator">
		</a>
		<p align="center"><a href="/annualized_rate_of_return">Annualized Rate of Return</a></p>
		</div>
		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/inflation">
		<img class="img-responsive" src="{{URL::asset('/img/inflation.png')}}" alt="annual inflation rate calculator">
		</a>
		<p align="center"><a href="/inflation">Inflation</a></p>
		</div>
		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/share_reconstruction">
		<img class="img-responsive" src="{{URL::asset('/img/share_recon.png')}}" alt="share reconstruction finance calculator">
		</a>
		<p align="center"><a href="/share_reconstruction">Share reconstruction calculator</a></p>
		</div>
		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/bonus_share">
		<img class="img-responsive" src="{{URL::asset('/img/bonus.png')}}" alt="bonus share finance calculator">
		</a>
		<p align="center"><a href="/bonus_share">Bonus share calculator</a></p>
		</div>
		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/percentage_change">
		<img class="img-responsive" src="{{URL::asset('/img/percen.png')}}" alt="percentage change finance calculator">
		</a>
		<p align="center"><a href="/percentage_change">Percentage change calculator</a></p>
		</div>
		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/wacc">
		<img class="img-responsive" src="{{URL::asset('/img/wacc.png')}}" alt="WACCe calculator">
		</a>
		<p align="center"><a href="/wacc">WACC calculator</a></p>
		</div>

		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/interest_rate_checker">
		<img class="img-responsive" src="{{URL::asset('/img/interest.png')}}" alt="Interest rate checker calculator">
		</a>
		<p align="center"><a href="/interest_rate_checker">Interest rate checker calculator</a></p>
		</div>

		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/annuity">
		<img class="img-responsive" src="{{URL::asset('/img/annuity.png')}}" alt="Annuity calculator">
		</a>
		<p align="center"><a href="/annuity">Annuity calculator</a></p>
		</div>

		</div>
		</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
		<div class="panel-body">
		<a href="/dividend">
		<img class="img-responsive" src="{{URL::asset('/img/divide.png')}}" alt="Dividend calculator">
		</a>
		<p align="center"><a href="/dividend">Dividend calculator</a></p>
		</div>

		</div>
		</div>
		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

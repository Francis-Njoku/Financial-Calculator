@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">inflation calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Inflation calculator</h1>
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
		<h3>Inflation result</h3>
 <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		            <th>#</th>
		            <th>Year</th>
                    <th>Value</th>
		        </tr>
		    </thead>
		    <tbody>
		    <tr>
		        <td>Amount now</td>
		        <td>{{$result['year_question']}}</td>
		        <td>&#8358;{{number_format($result['amount_now'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Annual inflation rate</td>
		        <td></td>
		        <td>{{$result['inflation_rate']}}%</td>
		    </tr>
            <tr>
		        <td>Initial year (1900 - 2009)</td>
		        <td></td>
		        <td>{{$result['initial_year']}}</td>
		    </tr>
            <tr>
		        <td>Year in question (1900 - ????)</td>
		        <td></td>
		        <td>{{$result['year_question']}}</td>
		    </tr>
            <tr>
		        <td>Number of years</td>
		        <td></td>
		        <td>{{$result['number_years']}}</td>
		    </tr>
            <tr>
		        <td>Amount then</td>
		        <td>{{$result['initial_year']}}</td>
		        <td>&#8358;{{number_format($result['amount_then'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Amount in future</td>
		        <td>{{$result['amount_future_year']}}</td>
		        <td>&#8358;{{number_format($result['amount_future'], 2)}}</td>
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
		<a href="/inflation" class="btn btn-success">Calculate Inflation</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">annuity calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Saving periodically for a project/wedding/retirement calculator</h1>
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
		        <td>Future value</td>
		        <td>&#8358;{{number_format($result['future_value'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Interest rate</td>
		        <td>{{number_format($result['interest_rate'], 2)}}%</td>
		    </tr>
            <tr>
		        <td>Period (months)</td>
		        <td>{{$result['period']}}</td>
		    </tr>
            <tr>
		        <td>Cumulative discount factor</td>
		        <td>{{number_format($result['cumulative'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Annuity</td>
		        <td>&#8358;{{number_format($result['annuity'], 2)}}</td>
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
		<a href="/annuity" class="btn btn-success">Calculate Annuity</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

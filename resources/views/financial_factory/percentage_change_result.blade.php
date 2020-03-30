@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">percentage change calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Percentage change calculator</h1>
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
		<h3>Percentage change result</h3>
 <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		            <th>#</th>
		            <th>Amount</th>
		        </tr>
		    </thead>
		    <tbody>
		    <tr>
		        <td>Old amount</td>
		        <td>&#8358;{{number_format($result['old_amount'], 2)}}</td>
		    </tr>
            <tr>
		        <td>New amount</td>
		        <td>&#8358;{{number_format($result['new_amount'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Change</td>
		        <td>{{number_format($result['change'], 2)}}%</td>
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
		<a href="/percentage_change" class="btn btn-success">Calculate Percentage Share</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

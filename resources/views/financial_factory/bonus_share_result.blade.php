@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">bonus share calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Bonus share calculator</h1>
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
		<h3>Bonus share result</h3>
 <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		            <th>#</th>
		            <th>Shares</th>
		            <th>For every</th>
		        </tr>
		    </thead>
		    <tbody>
		    <tr>
		        <td>Basis</td>
		        <td>{{number_format($result['basis_shares'], 2)}}</td>
		        <td>{{number_format($result['basis_every'], 2)}}</td>
		    </tr>
            <tr>
		        <td>You current own</td>
		        <td>{{number_format($result['current_own'], 2)}}</td>
		        <td></td>
		    </tr>
            <tr>
		        <td>Bonus receivable</td>
		        <td>{{number_format($result['bonus_receivable'], 2)}}</td>
		        <td></td>
		    </tr>
            <tr>
		        <td>Total shares now owned</td>
		        <td>{{number_format($result['total_shares'], 2)}}</td>
		        <td></td>
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
		<a href="/bonus_share" class="btn btn-success">Calculate Bonus Share</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

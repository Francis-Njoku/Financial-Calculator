@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">share reconstruction calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Share reconstruction calculator</h1>
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
		<h3>Share reconstruction result</h3>
 <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		            <th>Company</th>
		            <th>Quantity</th>
		            <th>Price</th>
                    <th>Value</th>
		        </tr>
		    </thead>
		    <tbody>
		    <tr>
		        <td>Outstanding shares of the company</td>
		        <td>{{number_format($result['oc_quantity'], 2)}}</td>
		        <td>&#8358;{{number_format($result['oc_price'], 2)}}</td>
		        <td>&#8358;{{number_format($result['oc_value'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Quantity of shares to be cancelled</td>
		        <td>{{number_format($result['qc_quantity'], 2)}}</td>
		        <td>&#8358;{{number_format($result['qc_price'], 2)}}</td>
		        <td>&#8358;{{number_format($result['qc_value'], 2)}}</td>
		    </tr>
            <tr>
		        <td>New shares to be retained</td>
		        <td>{{number_format($result['nr_quantity'], 2)}}</td>
		        <td>&#8358;{{number_format($result['nr_price'], 2)}}</td>
		        <td>&#8358;{{number_format($result['nr_value'], 2)}}</td>
		    </tr>
            <tr>
		        <td>My current shares</td>
		        <td>{{number_format($result['ms_quantity'], 2)}}</td>
		        <td>&#8358;{{number_format($result['ms_price'], 2)}}</td>
		        <td>&#8358;{{number_format($result['ms_value'], 2)}}</td>
		    </tr>
		    <tr>
		        <th align="center" colspan="4"><p align="center">Calculation</p></th>
		    </tr>
            <tr>
		        <td>My post reconstruction shares</td>
		        <td>{{number_format($result['mps_quantity'], 2)}}</td>
		        <td>&#8358;{{number_format($result['mps_price'], 2)}}</td>
		        <td>&#8358;{{number_format($result['mps_value'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Shares cancelled</td>
		        <td>{{number_format($result['sc_quantity'], 2)}}</td>
		        <td>&#8358;{{number_format($result['sc_price'], 2)}}</td>
		        <td>&#8358;{{number_format($result['sc_value'], 2)}}</td>
		    </tr>
            <tr>
		        <td>Total value retained and refunded</td>
		        <td></td>
		        <td></td>
		        <td>&#8358;{{number_format($result['tr_value'], 2)}}</td>
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
		<a href="/share_reconstruction" class="btn btn-success">Calculate Share Reconstruction</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

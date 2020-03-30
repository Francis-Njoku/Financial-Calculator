@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">wacc calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">WACC calculator</h1>
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
		<h3>WACC result</h3>
 <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		        <th align="center" colspan="6">Cost of debt</th>
		        </tr>
		        <tr>
		            <th>Type of debt</th>
		            <th>Amount</th>
		            <th>% Total dept</th>
		            <th>Interest rate</th>
		            <th>After tax cost</th>
		            <th>Weighted cost of debt</th>
		        </tr>
		    </thead>
		    <tbody>
		    <tr>
		        <td>Loan 1</td>
		        <td>&#8358;{{number_format($result['l1_amount'], 2)}}</td>
		        <td>{{number_format($result['l1_debt'], 2)}}%</td>
		        <td>{{number_format($result['l1_interest'], 2)}}%</td>
		        <td>{{number_format($result['l1_after_tax'], 2)}}%</td>
		        <td>{{number_format($result['l1_weighted'], 2)}}%</td>
		    </tr>
            <tr>
		        <td>Loan 2</td>
		        <td>&#8358;{{number_format($result['l2_amount'], 2)}}</td>
		        <td>{{number_format($result['l2_debt'], 2)}}%</td>
		        <td>{{number_format($result['l2_interest'], 2)}}%</td>
		        <td>{{number_format($result['l2_after_tax'], 2)}}%</td>
		        <td>{{number_format($result['l2_weighted'], 2)}}%</td>
		    </tr>
            <tr>
		        <td>Loan 3</td>
		        <td>&#8358;{{number_format($result['l3_amount'], 2)}}</td>
		        <td>{{number_format($result['l3_debt'], 2)}}%</td>
		        <td>{{number_format($result['l3_interest'], 2)}}%</td>
		        <td>{{number_format($result['l3_after_tax'], 2)}}%</td>
		        <td>{{number_format($result['l3_weighted'], 2)}}%</td>
		    </tr>
            <tr>
		        <td>Loan 4</td>
		        <td>&#8358;{{number_format($result['l4_amount'], 2)}}</td>
		        <td>{{number_format($result['l4_debt'], 2)}}%</td>
		        <td>{{number_format($result['l4_interest'], 2)}}%</td>
		        <td>{{number_format($result['l4_after_tax'], 2)}}%</td>
		        <td>{{number_format($result['l4_weighted'], 2)}}%</td>
		    </tr>
             <tr>
		        <td></td>
		        <td>&#8358;{{number_format($result['total_amount'], 2)}}</td>
		        <td>{{number_format($result['total_debt'], 2)}}%</td>
		        <td>{{number_format($result['total_interest'], 2)}}%</td>
		        <td></td>
		        <td>{{number_format($result['total_weighted'], 2)}}%</td>
		    </tr>
            </tbody>
		</table>

		</div>
    <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		        <th align="center" colspan="2">CAPM</th>
		        </tr>
		    </thead>
		    <tbody>
		    <tr>
		        <td>Risk free rate</td>
		        <td>{{number_format($result['risk_free'], 2)}}%</td>
		    </tr>
            <tr>
		        <td>Market risk premium</td>
		        <td>{{number_format($result['market_risk'], 2)}}%</td>
		    </tr>
            <tr>
		        <td>Beta</td>
		        <td>{{number_format($result['beta'], 2)}}</td>
            <tr>
		        <td>Cost of equity</td>
		        <td>{{number_format($result['cost_equity'], 2)}}</td>
		    </tr>
            </tbody>
		</table>
    </div>
       <div class="table-responsive">
 		<table class="table table-bordered table-stripped">
 		    <thead>
 		        <tr>
 		        <th align="center" colspan="5">Capital structure</th>
 		        </tr>
 		        <tr>
 		            <th>Type of capital</th>
 		            <th>Market value</th>
 		            <th>% Total</th>
 		            <th>Book value</th>
 		            <th>% Total</th>
 		        </tr>
 		    </thead>
 		    <tbody>
 		    <tr>
 		        <td>Debt</td>
 		        <td>&#8358;{{number_format($result['debt_market_value'], 2)}}</td>
 		        <td>{{number_format($result['total_in_percent_debt'], 2)}}%</td>
 		        <td>&#8358;{{number_format($result['debt_market_value'], 2)}}</td>
 		        <td>{{number_format($result['total_in_percent_debt'], 2)}}%</td>
 		    </tr>
             <tr>
 		        <td>Equity</td>
                <td>&#8358;{{number_format($result['equity_market_value'], 2)}}</td>
 		        <td>{{number_format($result['total_in_percent_equity'], 2)}}%</td>
 		        <td>&#8358;{{number_format($result['equity_market_value'], 2)}}</td>
 		        <td>{{number_format($result['total_in_percent_equity'], 2)}}%</td>
 		    </tr>
             <tr>
 		        <td></td>
                <td>&#8358;{{number_format($result['total_market_value'], 2)}}</td>
 		        <td>{{number_format($result['total_capital_percent'], 2)}}%</td>
 		        <td>&#8358;{{number_format($result['total_market_value'], 2)}}</td>
 		        <td>{{number_format($result['total_capital_percent'], 2)}}%</td>
 		    </tr>

             </tbody>
 		</table>

 		</div>
        <div class="table-responsive">
 		<table class="table table-bordered table-stripped">
 		    <thead>
 		        <tr>
 		        <th align="center" colspan="4">WACC</th>
 		        </tr>
 		        <tr>
 		            <th></th>
 		            <th>After tax cost</th>
 		            <th>Weighting</th>
 		            <th>Weighted cost</th>
 		        </tr>
 		    </thead>
 		    <tbody>
 		    <tr>
 		        <td>Debt</td>
 		        <td>{{number_format($result['debt_after_cost'], 2)}}%</td>
 		        <td>{{number_format($result['wacc_debt_weighting'], 2)}}%</td>
 		        <td>{{number_format($result['wacc_debt_weighted_cost'], 2)}}%</td>
 		    </tr>
             <tr>
 		        <td>Equity</td>
                <td>{{number_format($result['equity_after_cost'], 2)}}</td>
 		        <td>{{number_format($result['wacc_equity_weighting'], 2)}}%</td>
 		        <td>{{number_format($result['wacc_equity_weighted_cost'], 2)}}%</td>
 		    </tr>
            <tr>
 		        <td>WACC</td>
                <td></td>
 		        <td>{{number_format($result['wacc_weighting'], 2)}}%</td>
 		        <td>{{number_format($result['wacc_weighted_cost'], 2)}}%</td>
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
		<a href="/wacc" class="btn btn-success">Calculate WACC</a>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

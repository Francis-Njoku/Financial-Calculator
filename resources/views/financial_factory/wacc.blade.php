@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">WACC calculator</li>
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
		{!! Form::open(['action' => ['WaccController@wacc_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2 align="center">WACC calculator</h2>
		<h3>Cost of debt</h3>
		<div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Loan 1</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
        <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="l1_amount" name="l1_amount" type="text" class="form-control" placeholder="Loan 1 amount" autofocus>
			</div>

        </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
				<input id="l1_interest" name="l1_interest" type="text" class="form-control" placeholder="Loan 1 interest">
                </div>
                </div>
        </div>
        <div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Loan 2</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
        <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="l2_amount" name="l2_amount" type="text" class="form-control" placeholder="Loan 2 amount">
			</div>

        </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
				<input id="l2_interest" name="l2_interest" type="text" class="form-control" placeholder="loan 2 interest" >
                </div>
                </div>
        </div>
        <div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Loan 3</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
        <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="l3_amount" name="l3_amount" type="text" class="form-control" placeholder="Loan 3 amount">
			</div>

        </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
				<input id="l3_interest" name="l3_interest" type="text" class="form-control" placeholder="Loan 3 interest" >
                </div>
                </div>
        </div>
        <div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Loan 4</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
        <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="l4_amount" name="l4_amount" type="text" class="form-control" placeholder="Loan 4 amount">
			</div>

        </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
				<input id="l4_interest" name="l4_interest" type="text" class="form-control" placeholder="loan 4 interest">
                </div>
                </div>
        </div>
        <h3>CAPM</h3>
        <div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Risk free rate</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
				<input id="risk_free" name="risk_free" type="text" class="form-control" placeholder="Risk free rate in percent" required>
                </div>
                </div>
        </div>
        <div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Market risk premium</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
				<input id="market_risk" name="market_risk" type="text" class="form-control" placeholder="Market risk premium" required>
                </div>
                </div>
        </div>
        <div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Beta</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
				<input id="beta" name="beta" type="text" class="form-control" placeholder="Beta" required>
                </div>
                </div>
        </div>
        <h3>Capital structure</h3>
		<div style="padding: 20px" class="row wacc_padding">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
           <label>Equity</label>
        </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
        <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="market_value" name="market_value" type="text" class="form-control" placeholder="Market value" required>
			</div>

        </div>
        </div>

        </div>
        <div align="center" class="col-md-12 col-sm-12 col-xs-12">
                <div align="center" class="form-group">

                {{Form::submit('Calculate', ['class'=>'btn btn-primary'])}}
                </div>
                </div>
		 {!! Form::close() !!}
		</div>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-2"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

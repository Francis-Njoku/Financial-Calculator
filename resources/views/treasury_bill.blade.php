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
		{!! Form::open(['action' => ['HomeController@treasury_bill_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2>Treasury bill calculator</h2>
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Value Date (Investment Date)</label>
			<input placeholder="Date" type="date" class="form-control" id="datess" name="dayss" />
		</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Investment term / Tenure / Duration (days)</label>
		<input id="amount_invest" name="num_days" type="number" class="form-control" placeholder="Enter number of days ...">

        		</div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
           <label>Face Value (Amount to invest)</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="amount_invest" name="amount_invest" type="number" class="form-control" placeholder="Enter amount ...">
			</div>
                </div>
                </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        		<div class="form-group">
        		<label>Interest Rate / Average Yield / Discount Rate</label>
        					<input placeholder="Percent" type="text" class="form-control" name="percent" id="percentage" />
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
				<div class="col-md-3"></div>

		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

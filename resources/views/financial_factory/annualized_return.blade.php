@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">annualized return of investment calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Annualized return of investment calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-3"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-6">
		<div class="panel panel-default">
		<div class="panel-body">
		{!! Form::open(['action' => ['Annualized_returnController@annualized_return_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2 align="center">Annualized return of investment calculator</h2>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
           <label>Total Investments</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="total_investments" name="total_investments" type="number" class="form-control" placeholder="Enter amount ..." autofocus required>
			</div>
                </div>
                </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
           <label>Gain / (loss) over the period</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="amount_period" name="amount_period" type="number" class="form-control" placeholder="Enter amount ..." required>
			</div>
                </div>
                </div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Period in years</label>
		<input id="period_years" name="period_years" type="number" class="form-control" placeholder="Enter number of years ..." required>

        		</div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Duration of investment to date</label>
		<input id="duration_date" name="duration_date" type="number" class="form-control" placeholder="Duration in months ..." required>

        		</div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Annual</label>
		<input id="annual" name="annual" type="number" class="form-control" placeholder="Number of months in a year calendar ..." required>

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

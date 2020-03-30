@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">interest rate checker calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Interest rate checker calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-2"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-8">
		<div class="panel panel-default">
		<div class="panel-body">
		{!! Form::open(['action' => ['Interest_rate_checkerController@interest_rate_checker_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2 align="center">Interest rate checker calculator</h2>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Interest</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="interest" name="interest" type="text" class="form-control" placeholder="amount" required autofocus>
			</div>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Loan amount</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="loan_amount" name="loan_amount" type="text" class="form-control" placeholder="amount" required>
			</div>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Days</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
				<input id="days" name="days" type="number" class="form-control" placeholder="Days" required>
                </div>
                </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Days in the year</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
				<input id="days_year" name="days_year" type="number" class="form-control" placeholder="Days in the year" required>
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

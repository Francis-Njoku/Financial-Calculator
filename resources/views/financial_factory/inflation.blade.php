@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Inflation calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Inflation calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-3"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-6">
		<div class="panel panel-default">
		<div class="panel-body">
		{!! Form::open(['action' => ['InflationController@inflation_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2 align="center">Inflation calculator</h2>
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
           <label>Amount now</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="amount_now" name="amount_now" type="number" class="form-control" placeholder="Enter amount ..." autofocus required>
			</div>
                </div>
                </div>
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Annual inflation rate</label>
		<input id="inflation_rate" name="inflation_rate" type="text" class="form-control" placeholder="Enter inflation rate ..." required>

        		</div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Initial year (1900 - 2009)</label>
		<input id="initial_year" name="initial_year" type="number" class="form-control" placeholder="Initial year..." required>

        		</div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Year in question (1900 - ????)</label>
		<input id="year_question" name="year_question" type="number" class="form-control" placeholder="Year in question..." required>

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

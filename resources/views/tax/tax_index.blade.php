@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">tax calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tax calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-3"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-6">
		<div class="panel panel-default">
		<div class="panel-body">
		{!! Form::open(['action' => ['TaxController@tax_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2>Tax calculator</h2>
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Wage Month</label>
			<input placeholder="Date" type="month" class="form-control" id="wage_month" name="wage_month" />
		</div>
		</div>
        <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>First Name</label>
			<input placeholder="Enter First Name" type="text" class="form-control" id="first_name" name="first_name" />
		</div>
		</div>
        <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
		<label>Last Name</label>
			<input placeholder="Enter Last Name" type="text" class="form-control" id="last_name" name="last_name" />
		</div>
		</div>
        <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="form-group">
           <label>Gross Emoluments</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="gross_emolument" name="gross_emolument" type="number" class="form-control" placeholder="Enter amount ..." required>
			</div>
                </div>
                </div>
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="form-group">
           <label>Pension</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="pension" name="pension" type="number" class="form-control" placeholder="Enter amount ...">
			</div>
                </div>
                </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="form-group">
           <label>NHF</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="nhf" name="nhf" type="number" class="form-control" placeholder="Enter amount ...">
			</div>
                </div>
                </div>
        <div class="col-md-2 col-sm-2"></div>
        <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="form-group">
           <label>Life Assurance</label>
        </div>
        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="life_assurance" name="life_assurance" type="number" class="form-control" placeholder="Enter amount ...">
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


		</div>
	</div>	<!--/.main-->
	<script>

	</script>

@endsection

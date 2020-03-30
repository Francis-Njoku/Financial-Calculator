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
		{!! Form::open(['action' => ['Share_reconstructionController@share_reconstruction_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2 align="center">Share reconstruction calculator</h2>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Outstanding shares of the company</label>
        </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">

        <div class="form-group">
				<input id="oc_quantity" name="oc_quantity" type="text" class="form-control" placeholder="Quantity ..." autofocus required>
                </div>
                </div>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="oc_price" name="oc_price" type="text" class="form-control" placeholder="Market price" required>
			</div>
                </div>
                </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Quantity of shares to be cancelled</label>
        </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">

        <div class="form-group">
				<input id="qc_quantity" name="qc_quantity" type="text" class="form-control" placeholder="Quantity ..." required>
                </div>
                </div>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">
            <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="qc_price" name="qc_price" type="text" class="form-control" placeholder="Market price" required>
			</div>
                </div>
                </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>My current shares</label>
        </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">

        <div class="form-group">
				<input id="ms_quantity" name="ms_quantity" type="text" class="form-control" placeholder="Quantity ..."required>
                </div>
                </div>
        <div class="col-md-1 col-sm-1"></div>

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

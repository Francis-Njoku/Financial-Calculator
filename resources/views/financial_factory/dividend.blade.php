@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">dividend calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Dividend calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-2"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-8">
		<div class="panel panel-default">
		<div class="panel-body">
		{!! Form::open(['action' => ['DividendController@dividend_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2 align="center">Dividend calculator</h2>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Dividend per share</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="dividend" name="dividend" type="text" class="form-control" placeholder="Enter dividend" required autofocus>
			</div>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Quantity of shares</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
               <input id="quantity" name="quantity" type="number" class="form-control" placeholder="quantity" required>
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

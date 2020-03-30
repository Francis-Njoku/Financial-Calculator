@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">bonus share calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Bonus share calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-2"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-8">
		<div class="panel panel-default">
		<div class="panel-body">
		{!! Form::open(['action' => ['Bonus_shareController@bonus_share_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
		<h2 align="center">Bonus share calculator</h2>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Basis</label>
        </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">

        <div class="form-group">
				<input id="basis_shares" name="basis_shares" type="number" class="form-control" placeholder="Shares" autofocus required>
                </div>
                </div>
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">

        <div class="form-group">

				<input id="basis_every" name="basis_every" type="number" class="form-control" placeholder="For every" required>

                </div>
                </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>You current own</label>
        </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">

        <div class="form-group">
				<input id="current_own" name="current_own" type="number" class="form-control" placeholder="Shares" required>
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

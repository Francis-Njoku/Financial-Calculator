@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">annuity calculator</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 align="center" class="page-header">Annuity calculator</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
		<div class="col-md-1"></div>
		<!-- Suggest Finance Firm -->
		<div class="col-xs-12 col-md-10">
		<div align="center" class="col-md-6 col-sm-12 col-xs-12">
		<div class="panel panel-default">

		<div class="panel-body">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#periodically">Saving periodically for a project</button>
		</div>
		</div>
		</div>
        <div align="center" class="col-md-6 col-sm-12 col-xs-12">
		<div class="panel panel-default">

		<div class="panel-body">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#periodAny">Period 1 to any period</button>
		</div>
		</div>
		</div>
        <div align="center" class="col-md-6 col-sm-12 col-xs-12">
		<div class="panel panel-default">

		<div class="panel-body">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#periodInfinity">From period 1 to infinity</button>
		</div>
		</div>
		</div>
        <div align="center" class="col-md-6 col-sm-12 col-xs-12">
		<div class="panel panel-default">

		<div class="panel-body">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#yPeriodInfinity">From Y period 'N' to infinity</button>
		</div>
		</div>
		</div>
		</div>
		<!--/.End Finance Firm-->
				<div class="col-md-1"></div>

		</div>




<!-- Saving Periodically for a project/wedding/retirement -->
  <div class="modal fade" id="periodically" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">Saving periodically for a project/wedding/retirement</h4>
        </div>
        <div class="modal-body">
        {!! Form::open(['action' => ['AnnuityController@periodically_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Future value</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="future_value" name="future_value" type="text" class="form-control" placeholder="amount" required autofocus>
			</div>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Interest rate</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <input id="interest_rate" name="interest_rate" type="text" class="form-control" placeholder="Interest rate" required>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Period (Months)</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
				<input id="period" name="period" type="number" class="form-control" placeholder="How many months" required>
                </div>
                </div>
   <div align="center" class="col-md-12 col-sm-12 col-xs-12">
                <div align="center" class="form-group">

                {{Form::submit('Calculate', ['class'=>'btn btn-primary'])}}
                </div>
                </div>
		 {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


<!-- Period 1 to any period -->
  <div class="modal fade" id="periodAny" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">From period 1 to any period</h4>
        </div>
        <div class="modal-body">
        {!! Form::open(['action' => ['AnnuityController@period_any_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Annuity</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="annuity" name="annuity" type="text" class="form-control" placeholder="amount" required autofocus>
			</div>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Interest rate</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <input id="interest_rate" name="interest_rate" type="text" class="form-control" placeholder="Interest rate" required>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Period (Years)</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
				<input id="period" name="period" type="number" class="form-control" placeholder="How many years" required>
                </div>
                </div>
   <div align="center" class="col-md-12 col-sm-12 col-xs-12">
                <div align="center" class="form-group">

                {{Form::submit('Calculate', ['class'=>'btn btn-primary'])}}
                </div>
                </div>
		 {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


<!-- From period 1 to infinity -->
  <div class="modal fade" id="periodInfinity" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">From period 1 to infinity</h4>
        </div>
        <div class="modal-body">
        {!! Form::open(['action' => ['AnnuityController@period_infinity_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Annuity</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="annuity" name="annuity" type="text" class="form-control" placeholder="amount" required autofocus>
			</div>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Interest rate</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <input id="interest_rate" name="interest_rate" type="text" class="form-control" placeholder="Interest rate" required>
			  </div>
                </div>
   <div align="center" class="col-md-12 col-sm-12 col-xs-12">
                <div align="center" class="form-group">

                {{Form::submit('Calculate', ['class'=>'btn btn-primary'])}}
                </div>
                </div>
		 {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

<!-- From Y Period 'N' to infinity -->
  <div class="modal fade" id="yPeriodInfinity" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center" class="modal-title">From period 1 to any period</h4>
        </div>
        <div class="modal-body">
        {!! Form::open(['action' => ['AnnuityController@yperiod_infinity_result'], 'class' => 'form-horizontal', 'method' => 'POST']) !!}
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Annuity</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <div class="input-group">
				<span class="input-group-btn"><button disabled type="submit" class="btn btn-primary">&#8358;</button></span>
				<input id="annuity" name="annuity" type="text" class="form-control" placeholder="amount" required autofocus>
			</div>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Interest rate</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
                <input id="interest_rate" name="interest_rate" type="text" class="form-control" placeholder="Interest rate" required>
			  </div>
                </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
           <label>Period (Years)</label>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">

        <div class="form-group">
				<input id="period" name="period" type="number" class="form-control" placeholder="How many years" required>
                </div>
                </div>
   <div align="center" class="col-md-12 col-sm-12 col-xs-12">
                <div align="center" class="form-group">

                {{Form::submit('Calculate', ['class'=>'btn btn-primary'])}}
                </div>
                </div>
		 {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

	</div>	<!--/.main-->
	<script>

	</script>

@endsection

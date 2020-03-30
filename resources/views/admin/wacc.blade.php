@extends('layouts.admin')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">wacc</li>
			</ol>
		</div><!--/.row-->

          <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daily summary on WACC</h1>
			</div>
		</div>


		<!--/.row-->
		<div class="row">
		<!-- Personal Information-->
		<div class="col-xs-12 col-md-12">
		<div class="panel panel-default">
		<div class="panel-body">
		<h2>Count</h2>
        @if(count($share) >= 1)
        <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		            <th>Date</th>
                    <th>Count</th>
		        </tr>
		    </thead>
		    <tbody>

		    @foreach($share as $return)
		    <tr>
		    {{--*/ $bill = $bill->amount/*--}}
		        <td>{{date('d-m-y',strtotime($return->created_at))}}</td>
		        <td>{{$return->count_click}}</td>
        		<!--<td><a href="#" class="btn btn-primary">Pay</a> &nbsp;<a href="#" class="btn btn-info">Apply for Loan</a></td>-->

		    </tr>
		    @endforeach
            </tbody>
		</table>
		{{$share->links()}}
		</div>
		@else
		<p>No counts yet</p>
		@endif
		</div>
		</div>
		</div>
		<!--/.End personal information-->
		<!--Work information-->
		</div>

		<div class="row">


		</div>

	</div>	<!--/.main-->

@endsection

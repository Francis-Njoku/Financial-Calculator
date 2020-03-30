@extends('layouts.customer')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Tax result</li>
			</ol>
		</div><!--/.row-->

          <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List of tax</h1>
			</div>
		</div>


		<!--/.row-->
		<div class="row">
		<!-- Personal Information-->
		<div class="col-xs-12 col-md-12">
		<div class="panel panel-default">
		<div class="panel-body">
		<h2>Tax</h2>
        @if(count($tax) >= 1)
        <div class="table-responsive">
		<table class="table table-bordered table-stripped">
		    <thead>
		        <tr>
		            <th>Salary Month</th>
		            <th>First Name</th>
		            <th>Last Name</th>
                    <th>Gross Emoluments (&#8358;)</th>
		            <th>Reliefs (&#8358;)</th>
		            <th>Pension (&#8358;)</th>
		            <th>NHF (&#8358;)</th>
		            <th>Life Assurance (&#8358;)</th>
		            <th>Tax Free Pay (&#8358;)</th>
		            <th>Taxable Pay (&#8358;)</th>
		            <th>25000 (&#8358;)</th>
		            <th>25000 (&#8358;)</th>
		            <th>41666.66667 (&#8358;)</th>
		            <th>41666.66667 (&#8358;)</th>
		            <th>133333.3333 (&#8358;)</th>
		            <th>266666.6667 (&#8358;)</th>
		            <th>Tax Paid (&#8358;)</th>
		            <th>Net Pay (&#8358;)</th>
		            <th>Tax Percentage (%)</th>
		            <th>Net Check</th>
		            <th>Action</th>
		        </tr>
		    </thead>
		    <tbody>

		    @foreach($tax as $taxable)
		    <tr>
		    {{--*/ $bill = $bill->amount/*--}}
		        <td>{{date('Y-m', strtotime($taxable->salary_month))}}</td>
		        <td>{{ucfirst($taxable->first_name)}}</td>
		        <td>{{ucfirst($taxable->last_name)}}</td>
		        <td>{{number_format($taxable->gross_emoluments, 2)}}</td>
		        <td>{{number_format($taxable->reliefs, 2)}}</td>
		        <td>{{number_format($taxable->pension, 2)}}</td>
		        <td>{{number_format($taxable->nhf, 2)}}</td>
		        <td>{{number_format($taxable->life_assurance, 2)}}</td>
		        <td>{{number_format($taxable->tax_free_pay, 2)}}</td>
		        <td>{{number_format($taxable->tax_pay, 2)}}</td>
		        <td>{{number_format($taxable->first_one, 2)}}</td>
		        <td>{{number_format($taxable->first_two, 2)}}</td>
		        <td>{{number_format($taxable->second_one, 2)}}</td>
		        <td>{{number_format($taxable->second_two, 2)}}</td>
		        <td>{{number_format($taxable->third_one, 2)}}</td>
		        <td>{{number_format($taxable->fourth_one, 2)}}</td>
		        <td>{{number_format($taxable->tax_paid, 2)}}</td>
		        <td>{{number_format($taxable->net_pay, 2)}}</td>
		        <td>{{number_format($taxable->tax_percentage, 2)}}</td>
		        <td>{{$taxable->check_tax}}</td>

                <td>
                    <button class="delete-tax-modal btn btn-danger" data-tax_id="{{$taxable->id}}" >
                    Delete</button>
                </td>

        		<!--<td><a href="#" class="btn btn-primary">Pay</a> &nbsp;<a href="#" class="btn btn-info">Apply for Loan</a></td>-->

		    </tr>
		    @endforeach
            </tbody>
		</table>
		{{$tax->links()}}
		</div>
		@else
		<p>No result</p>
		@endif
		</div>
		</div>
		</div>
		<div class="col-xs-12 col-md-12">
		<a href="/tax" class="btn btn-primary">Calculate Tax</a>
		<a href="/export/excel_head" class="btn btn-success">Export Excel</a>
		</div>
		<!--/.End personal information-->
		<!--Work information-->
		</div>

		<div class="row">

<!--- Delete Tax ---->
<div id="DeleteTaxModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
            {!! Form::open(['action' => 'TaxController@delete_tax', 'method' => 'POST']) !!}

                    <!--<form class="form-horizontal" role="form">-->
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="id">Delete Tax</label>
                            <div class="col-sm-6">
                                <input type="hidden" name="tax_id" id="tax_id"  hidden="hidden" >
                            </div>
                        </div>
                    <div class="modal-footer">
                    {{Form::submit('Yes', ['class'=>'btn btn-danger'])}}

                       <!--<button type="submit" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span>Pay
                        </button> -->
                        <button type="button" class="btn btn-success" data-dismiss="modal">
                            <span></span>No
                        </button>
                    </div>
        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

		</div>

	</div>	<!--/.main-->

@endsection

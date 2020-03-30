<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Tax;
use Illuminate\Support\Facades\DB;
use App\Treasury_bill;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\CheckExport;

class Annualized_returnController extends Controller
{
    public function annualized_return()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '3';
        $post->save();
        return view('financial_factory/annualized_return');
    }

    public function annualized_return_result(Request $request)
    {
        $this->validate($request, [
            'total_investments' => 'required',
            'amount_period' => 'required',
            'duration_date' => 'required',
            'period_years' => 'required',
            'annual' => 'required',
        ]);

        $total_investments = $request->total_investments;
        $amount_period = $request->amount_period;
        $duration_date = $request->duration_date;
        $period_years = $request->period_years;
        $annual = $request->annual;

        if(is_numeric($total_investments) == false || is_numeric($amount_period) == false || is_numeric($duration_date) == false
        || is_numeric($period_years) == false || is_numeric($annual) == false)
        {
            Session::flash('error', 'Please enter the right numbers');

            return redirect('/annualized_rate_of_return');
        }

        $ip = \Request::ip();

        $total_return_on_investment = $amount_period / $total_investments;
        $total_return_on_investment_percent = round(($total_return_on_investment * 100), 2);
        $result = $amount_period / ($total_investments * $period_years);
        $result_percent = round(($result * 100), 2);
        $annualized_return = pow((1 + $total_return_on_investment), ($annual / $duration_date)) - 1;
        //$annualized_return = ($annual / $duration_date);
        $annualized_return_percent = round(($annualized_return * 100), 2);
        $error_margin = ($result - $annualized_return) / $result;
        $error_margin_percent = round(($error_margin * 100) , 2);


        $data = array(
            'total_investments' => $total_investments,
            'gain_loss' => $amount_period,
            'period_years' => $period_years,
            'return_investment' => $total_return_on_investment_percent,
            'result' => $result_percent,
            'duration_investment_date' => $duration_date,
            'annual' => $annual,
            'annualized_return' => $annualized_return_percent,
            'error_margin' => $error_margin_percent,

        );

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '3';
        $post->save();
        return view('financial_factory/annualized_return_result')->with('result', $data);


    }
}

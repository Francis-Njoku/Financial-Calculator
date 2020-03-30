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

class WaccController extends Controller
{
    public function wacc()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '8';
        $post->save();
        return view('financial_factory/wacc');
    }

    public function wacc_result(Request $request)
    {
        $this->validate($request, [
            'risk_free' => 'required',
            'market_risk' => 'required',
            'beta' => 'required',
            'market_value' => 'required'
        ]);
        $l1_amount = $request->l1_amount;
        $l1_interest = $request->l1_interest;
        $l2_amount = $request->l2_amount;
        $l2_interest = $request->l2_interest;

        $l3_amount = $request->l3_amount;
        $l3_interest = $request->l3_interest;
        $l4_amount = $request->l4_amount;
        $l4_interest = $request->l4_interest;

        $risk_free = $request->risk_free;
        $market_risk = $request->market_risk;
        $beta = $request->beta;
        $market_value = $request->market_value;


        if(
            (is_numeric($l1_interest) == false && $l1_interest != '') || (is_numeric($l1_amount) == false && $l1_amount != '')
        ||  (is_numeric($l2_interest) == false && $l2_interest != '') || (is_numeric($l2_amount) == false && $l2_amount != '')
        ||  (is_numeric($l3_interest) == false && $l3_interest != '') || (is_numeric($l3_amount) == false && $l3_amount != '')
        ||  (is_numeric($l4_interest) == false && $l4_interest != '') || (is_numeric($l4_amount) == false && $l4_amount != '')
        ||  is_numeric($risk_free) == false ||  is_numeric($market_risk) == false||  is_numeric($beta) == false||  is_numeric($market_value) == false
        )
        {
            Session::flash('error', 'Please enter the right amount');

            return redirect('/wacc');
        }
        if($l1_amount == '')
        {
            $l1_amount = 0;
        }
        if($l1_interest == '')
        {
            $l1_interest = 0;
        }
        if($l2_amount == '')
        {
            $l2_amount = 0;
        }
        if($l2_interest == '')
        {
            $l2_interest = 0;
        }
        if($l3_amount == '')
        {
            $l3_amount = 0;
        }
        if($l3_interest == '')
        {
            $l3_interest = 0;
        }
        if($l4_amount == '')
        {
            $l4_amount = 0;
        }
        if($l4_interest == '')
        {
            $l4_interest = 0;
        }

        $total_amount = $l1_amount + $l2_amount + $l3_amount + $l4_amount;

        $l1_dept = $l1_amount / $total_amount;
        $l2_dept = $l2_amount / $total_amount;
        $l3_dept = $l3_amount / $total_amount;
        $l4_dept = $l4_amount / $total_amount;

        $total_debt = $l1_dept + $l2_dept + $l3_dept + $l4_dept;

        $total_interest = $l1_interest + $l2_interest + $l3_interest + $l4_interest;

        $l1_after_tax_cost = $l1_interest * (1 - 0.3);
        $l2_after_tax_cost = $l2_interest * (1 - 0.3);
        $l3_after_tax_cost = $l3_interest * (1 - 0.3);
        $l4_after_tax_cost = $l4_interest * (1 - 0.3);

        $l1_weighted = $l1_dept * $l1_after_tax_cost;
        $l2_weighted = $l2_dept * $l2_after_tax_cost;
        $l3_weighted = $l3_dept * $l3_after_tax_cost;
        $l4_weighted = $l4_dept * $l4_after_tax_cost;

        $total_weighted = $l1_weighted + $l2_weighted + $l3_weighted + $l4_weighted;

        $risk_free_rate = $risk_free / 100;
        $market_risk_premium = $market_risk / 100;
        $cost_equity = $risk_free_rate + ($market_risk_premium * $beta);

        $debt_market_value = $total_amount;
        $equity_market_value = $market_value;
        $total_market_value = $debt_market_value + $equity_market_value;

        $total_percent_debt = $debt_market_value / $total_market_value;
        $total_in_percent_debt = $total_percent_debt * 100;
        $total_percent_equity = $equity_market_value / $total_market_value;
        $total_in_percent_equity = $total_percent_equity * 100;

        $debt_after_cost = $total_weighted;
        $equity_after_cost = $cost_equity * 100;
        $wacc_debt_weighting = $total_percent_debt;
        $wacc_equity_weighting = $total_percent_equity;
        $wacc_weighting = ($wacc_debt_weighting + $wacc_equity_weighting);
        $wacc_debt_weighted_cost = ($debt_after_cost * $wacc_debt_weighting);
        $wacc_equity_weighted_cost = ($equity_after_cost * $wacc_equity_weighting);
        $wacc_weighted_cost = $wacc_equity_weighted_cost + $wacc_debt_weighted_cost;

        $data = array(
            'l1_amount' => $l1_amount,
            'l1_debt' => $l1_dept * 100,
            'l1_interest' => $l1_interest,
            'l1_after_tax' => $l1_after_tax_cost,
            'l1_weighted' => $l1_weighted,

            'l2_amount' => $l2_amount,
            'l2_debt' => $l2_dept * 100,
            'l2_interest' => $l2_interest,
            'l2_after_tax' => $l2_after_tax_cost,
            'l2_weighted' => $l2_weighted,

            'l3_amount' => $l3_amount,
            'l3_debt' => $l3_dept * 100,
            'l3_interest' => $l3_interest,
            'l3_after_tax' => $l3_after_tax_cost,
            'l3_weighted' => $l3_weighted,

            'l4_amount' => $l4_amount,
            'l4_debt' => $l4_dept * 100,
            'l4_interest' => $l4_interest,
            'l4_after_tax' => $l4_after_tax_cost,
            'l4_weighted' => $l4_weighted,

            'total_amount' => $total_amount,
            'total_debt' => $total_debt * 100,
            'total_interest' => $total_interest,
            'total_weighted' => $total_weighted,

            'risk_free' => $risk_free,
            'market_risk' => $market_risk,
            'beta' => $beta,
            'cost_equity' => $cost_equity * 100,

            'debt_market_value' => $debt_market_value,
            'equity_market_value' => $equity_market_value,
            'total_market_value' => $total_market_value,
            'total_in_percent_debt' => $total_in_percent_debt,
            'total_in_percent_equity' =>$total_in_percent_equity,
            'total_capital_percent' => $total_in_percent_debt + $total_in_percent_equity,

            'debt_after_cost' => $debt_after_cost,
            'equity_after_cost' => $equity_after_cost,
            'wacc_debt_weighting' => $wacc_debt_weighting * 100,
            'wacc_equity_weighting' => $wacc_equity_weighting * 100,
            'wacc_weighting' => $wacc_weighting * 100,
            'wacc_debt_weighted_cost' => $wacc_debt_weighted_cost,
            'wacc_equity_weighted_cost' => $wacc_equity_weighted_cost,
            'wacc_weighted_cost' => $wacc_weighted_cost

        );

        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '8';
        $post->save();
        return view('financial_factory/wacc_result')->with('result', $data);


    }
}

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

class DividendController extends Controller
{
    public function dividend()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '11';
        $post->save();
        return view('financial_factory/dividend');
    }

    public function dividend_result(Request $request)
    {
        $this->validate($request, [
            'dividend' => 'required',
            'quantity' => 'required',
        ]);

        $dividend = $request->dividend;
        $quantity = $request->quantity;

        if(is_numeric($dividend) == false || is_numeric($dividend) == false)
        {
            Session::flash('error', 'Please enter the right number format');

            return redirect('/annuity');
        }
        $gross_dividend = $dividend * $quantity;
        $tax = $gross_dividend * 0.1;
        $income = $gross_dividend - $tax;

        $data = array(
            'dividend' => $dividend,
            'quantity' => $quantity,
            'gross_dividend' => $gross_dividend,
            'tax' => $tax,
            'income' => $income,
        );

        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '11';
        $post->save();
        return view('financial_factory/dividend_result')->with('result', $data);


    }
}
